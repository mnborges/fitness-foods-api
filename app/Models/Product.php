<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'code';
    public $incrementing = false;
    public $timestamps = false;
    protected $casts = [
        'imported_t' => 'datetime:Y-m-d',
    ];
    protected $guarded = [];
}