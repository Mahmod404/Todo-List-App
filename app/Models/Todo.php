<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'status',
        'user_id',
        'due_date',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}