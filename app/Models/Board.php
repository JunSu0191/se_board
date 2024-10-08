<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Board extends Model
{
    use SoftDeletes;

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
