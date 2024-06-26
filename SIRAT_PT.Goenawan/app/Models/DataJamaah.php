<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;
use Illuminate\Notifications\Notifiable;

class DataJamaah extends Model
{
    use HasFactory;
    protected $fillable = [
        'Tanggal_Keberangkatan',
        'Tanggal_Kepulangan',
        'Paket',
        'Hotel_Madinah',
        'Hotel_Mekkah',
        'program',
        'harga',
        'pesawat',
        'total_seat',
        'Terisi',
        'Sisa'
    ];
}
