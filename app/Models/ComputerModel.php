<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComputerModel extends Model
{
    protected $table = 'computers';
    protected $fillable = [
        'name',
    ];
    public $timestamps = false;
}
