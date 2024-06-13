<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rfid extends Model
{
    use HasFactory;

    protected $connection = 'mysql_rfid';
    protected $table = 'tbl_master_rfid';

    protected $fillable = [
        'id',
        'box_id',
        'tag_rfid',
        
        'tag_status',
        // Tambahkan bidang lain sesuai kebutuhan
    ];
}
