<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function mdl_get_post(){
        return DB::select('select * from t002_post');
    }
    public function scopeTest(){
        echo "This is a test function";
    }
}
