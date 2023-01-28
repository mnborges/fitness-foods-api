<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportDets extends Model
{
    use HasFactory;
    protected $fillable = ['filename', 'offset'];
    protected $attributes = [
        'offset' => 0,
    ];
}
