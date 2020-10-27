<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignModel extends Model
{
    protected $table = 'assigns';
    protected $fillable = [
        'id_client',
        'id_computer',
        'schedule',
    ];
    public $timestamps = false;

    public function client()
    {
        return $this->belongsToMany(
            ClientModel::class,
            'assigns',
            'id_client',
            'id_computer'
        );
    }
    public function computer()
    {
        return $this->belongsToMany(
            ComputerModel::class,
            'assigns',
            'id_computer',
            'id_client'
        );
    }
}
