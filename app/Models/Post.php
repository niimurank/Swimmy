<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function record()
    {
        return $this->belongsTo(Record::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    protected $fillable = [
        'time',
        'user_id',
        'style_id',
        'distance_id',
        ];
}
