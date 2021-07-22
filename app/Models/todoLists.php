<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todoLists extends Model
{
    protected $fillable = ['name','max_record_in_list'];
}
