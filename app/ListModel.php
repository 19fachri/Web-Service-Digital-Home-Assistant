<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListModel extends Model
{
    protected $table = "List";
    protected $fillable = ['kata'];
}
