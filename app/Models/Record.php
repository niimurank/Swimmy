<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function style()
    {
        return $this->belongsTo(Style::class);
    }
    public function distance()
    {
        return $this->belongsTo(Distance::class);
    }
}
