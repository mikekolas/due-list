<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
    use HasFactory;

    protected $table = 'to_do_lists';

    protected $primaryKey = 'id';

    //or true (optional)
    //protected $timestamps = false;
}
