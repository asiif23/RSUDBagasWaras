<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    protected $table = 'pasiens';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile'];
}