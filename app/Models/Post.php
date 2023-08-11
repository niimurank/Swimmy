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
        'body',
        'image',
        'record_id',
        'swimmenu_id',
        'user_id',
        ];
}
