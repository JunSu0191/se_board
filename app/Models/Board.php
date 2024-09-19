<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Board extends Model
{
    protected $fillable = [
        'title',
        'content',
        'views',
        'email'
    ];
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'email','email');
    }

}
