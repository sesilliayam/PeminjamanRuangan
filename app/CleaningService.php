<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CleaningService extends Model
{
    protected $table = "cleaning_services";
    protected $fillable = [
        'nip',
        'nama',
        'user_id'
    ];
}
