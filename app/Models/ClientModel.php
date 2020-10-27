<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientModel extends Model
{
    protected $table = 'clients';
    protected $fillable = [
        'lastname',
        'firstname',
    ];
    public $timestamps = false;
}
