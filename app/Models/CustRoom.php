<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustRoom extends Model
{
    use HasFactory;

    protected $table = '_cust_room';

    protected $fillable = [
        'type_id',
        'number',
        'capacity',
        'price',
        'view',
    ];
    
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
  
}
