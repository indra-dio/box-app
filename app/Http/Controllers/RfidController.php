<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Rfid;
use App\Models\Box;

use Rap2hpoutre\FastExcel\FastExcel;

class RfidController extends Controller
{
    public function index()
    {
        $data = rfid::all();
    }

    public function addRfid()
    {
        return view('rfid.add');
    }

    public function getbyTag(string $tag)
    {
        
        $rfid = Rfid::where('tag_rfid', $tag)->first();
        $box = Box::where('id', $rfid->box_id)->first();
        
        return view('rfid/tag',['rfid' => $rfid, 'box' => $box]);
    }

    public function getData(Request $request)
    {

        $data = rfid::all();
        // Format data ke dalam array yang lebih sederhana jika diperlukan
        $formattedData = $data->map(function($row) {
            
            // Format html untuk status
            if ($row->tag_status==1){
                $tagstatus = '<span class="badge badge-dot mr-4">
                <i class="bg-success"></i>
                <span class="status">OK</span>
              </span>';
            }else{
                $tagstatus = '<span class="badge badge-dot mr-4">
                <i class="bg-danger"></i>
                <span class="status">NG</span>
              </span>';
            };

            $url = url('rfid/tag/'.$row->tag_rfid) ;

            return [
                'id' => $row->id,
                'tag_rfid' => $row->tag_rfid,
                'box_id' => $row->box_id,
                'tag_status' => $tagstatus,
                'action' => '<a href="'.$url.'" class="btn btn-sm btn-icon btn-outline-primary" type="button">
                <span class="btn-inner--icon"><i class="ni ni-send"></i></span>
                </a>
                <button class="btn btn-sm btn-icon btn-outline-danger" type="button" data-toggle="modal" data-target="#deleteRfidModal" data-tag="'.$row->tag_rfid.'">
                    <span class="btn-inner--icon"><i class="ni ni-scissors"></i></span>
                </button>',
            ];
        });

        return response()->json(['data' => $formattedData]);

    }

    public function addData(Request $request)
    {

        // Cek apakah tag_rfid sudah ada di database
        $existingRfid = Rfid::where('tag_rfid', $request->input('tag_rfid'))->first();
        if ($existingRfid) {
            return redirect()->back()->withErrors(['tag_rfid' => 'RFID tag already exists.'])->withInput();
        }

        $data = new Rfid();
        $data->tag_rfid = $request->input('tag_rfid');
        $data->box_id = $request->input('box_id');
        // Tambahkan logika lain sesuai kebutuhan

        $data->save();

        return redirect()->back()->with('success', 'RFID data added successfully.');
    }

    public function updateData(Request $request)
    {

        // $data = Rfid::findOrFail($request->input('tag_rfid'));
        // $data->box_id = $request->input('box_id');
        // $data->tag_status = $request->input('tag_status');
        // Tambahkan logika lain sesuai kebutuhan
        // $data->update();

         // Update data langsung menggunakan where dan update
         $data = Rfid::where('tag_rfid', $request->input('tag_rfid'))->update([
            'box_id' => $request->input('box_id'),
            'tag_status' => $request->input('tag_status'),
            // Tambahkan field lain yang perlu diupdate
        ]);

        return redirect()->back()->with('success', 'RFID data updated successfully.');
    }

    public function deleteData(Request $request)
    {
        $tag_rfid = $request->input('tag');
        $data = Rfid::where('tag_rfid', $tag_rfid)
                    ->delete();

                    return response()->json(['message' => 'success']);
        // if ($rfid) {
        //     $rfid->delete();
        // }
    }

    public function importData(Request $request)
    {
        $request->validate([
            'importRfid' => 'required|mimes:xlsx,csv,xls'
        ]);

        $filePath = $request->file('importRfid')->getRealPath();

        (new FastExcel)->import($filePath, function ($row) {

            // Cek apakah tag_rfid sudah ada di database
            $existingRfid = Rfid::where('tag_rfid', $row['tag_rfid'])->first();
            if (!$existingRfid) {
                return Rfid::create([
                    'box_id'        => $row['box_id'],
                    'tag_rfid'      => $row['tag_rfid'],
                    'tag_status'    => $row['tag_status'],
                ]);
            }

        });

        // Log::info('Import successful');
        return redirect()->back()->with('success', 'RFID Data Imported Successfully');
    }
}
