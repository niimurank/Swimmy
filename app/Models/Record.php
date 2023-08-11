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
    
    protected $dates = ['time_at'];

    protected $fillable = [
        'time',
        'longcorse',
        'time_at',
        'user_id',
        'style_id',
        'distance_id',
        ];
}
