<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    use HasFactory;

    protected $table = 'pcd_master_box';

    protected $fillable = [
        'id',
        'type_box',
        'capacity',
        'sku',
        'status',
        'updated_by',
        'created_by',
        'updated_at',
        'created_at',
        // Tambahkan bidang lain sesuai kebutuhan
    ];
}
