<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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
    
    public function likes()
    {
        return $this->hasMany(Like::class, 'post_id');
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }
    
    protected $fillable = [
        'body',
        'image',
        'record_id',
        'swimmenu_id',
        'user_id',
        ];
        
    public function isLikedBy(): bool {
        $user = Auth::user();
        return Like::where('user_id', $user->id)->where('post_id', $this->id)->first() !==null;
    }
}
