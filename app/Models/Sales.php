<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;

class Sales extends Model
{
    use HasFactory, UUID;
    protected $fillable = [
        'customer_id',
        'event_id',
        'total_tickets',
        'paid_support',
       

        

        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function Customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
    public function Event()
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
}
