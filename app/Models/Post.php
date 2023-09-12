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
        
    public function is_liked_by_auth_user(){
        $id = Auth::id();
        
        $likers = array();
        foreach($this->likes as $like){
            array_push($likers, $like->user_id);
        }
        
        if(in_array($id,$likers)) {
            return true;
        } else {
            return false;
        }
    }
}
