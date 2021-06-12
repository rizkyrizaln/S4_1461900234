<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $fillable = ['nama', 'jabatan'];
    protected $table = "dokter";
    public $timestamps =false;
}
