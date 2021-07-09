<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
    use HasFactory;

    protected $table = 'to_do_lists';

    protected $primaryKey = 'id';

    protected $fillable = ['title'];

    //or true (optional)
    //protected $timestamps = false;

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
