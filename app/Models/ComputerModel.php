<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComputerModel extends Model
{
    protected $table = 'computers';
    protected $fillable = [
        'name',
    ];
    public $timestamps = false;

    public function client()
    {
        return $this->belongsToMany(
            ClientModel::class,
            'assigns',
            'id_client',
            'id_computer'
        )->withPivot('schedule');
    }
}
