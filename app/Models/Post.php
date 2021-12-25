<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function getCreatedAtAttribute($value) {
        return date('m/d/Y', strtotime($this->attributes['created_at']));
    }
    public function getUpdatedAtAttribute($value) {
        return date('m/d/Y', strtotime($this->attributes['updated_at']));
    }

}
