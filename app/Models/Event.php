<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;

class Event extends Model
{
    use HasFactory, UUID;
    protected $fillable = [
        'name',
        'description',
        'date_execution',
        'total_tickets',
       

        

        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
