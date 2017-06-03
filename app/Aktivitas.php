<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aktivitas extends Model
{
    protected $table = "Aktivitas";
    protected $fillable = ['id_alat'];
}
