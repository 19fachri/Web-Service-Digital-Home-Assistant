<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
   protected $table = 'Status';
   protected $fillable = ['perintah', 'status']; 
}
