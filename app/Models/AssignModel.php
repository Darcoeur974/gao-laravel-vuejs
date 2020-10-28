<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssignModel extends Model
{
    protected $table = 'assigns';
    protected $fillable = [
        'id_client',
        'id_computer',
        'schedule',
        'date',
    ];
    public $timestamps = false;

    public function client()
    {
        return $this->belongsTo(
            ClientModel::class,
            'id_client'
        );
    }
}
