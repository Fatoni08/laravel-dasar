<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $guarded = ['id'];

    public function classes() {
        return $this->belongsTo(Classes::class, 'classes_id');
    }

    public function users() {
        return $this->belongsToMany(User::class, 'student_user', 'user_id', 'student_id');
    }
}
