<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $fillable = ['nama', 'spesialis', 'jadwal_praktek'];
}