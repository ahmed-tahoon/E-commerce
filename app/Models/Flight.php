<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $table = "my_flights";
    protected $primary_key = "slug";
    protected $incrementing = false;
    public $timestamps = false;
    
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';
}
