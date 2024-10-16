<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // add
use Illuminate\Database\Eloquent\Model;

class Useraccount extends Model
{
    use HasFactory; // add
    protected $fillable = [
        'transaction_title', 'description', 'status', 'total_amount', 'transaction_number',
    ];
}
