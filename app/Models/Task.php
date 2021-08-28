<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $primaryKey = 'id';

    protected $fillable = ['title', 'dueDate', 'listID', 'status'];

    // A task model belongs to a list
    public function toDoList()
    {
        return $this->belongsTo(ToDoList::class);
    }
}
