<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polling_unit extends Model
{
    protected $table = 'polling_unit';

    // public const CREATED_AT = 'created_timestamp';
    // public const UPDATED_AT = 'updated_timestamp';
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'updated_date';

    protected $primaryKey = 'polling_unit_id';
    public $timestamps = false;
}
