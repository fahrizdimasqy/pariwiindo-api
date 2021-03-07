<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketOrder extends Model
{
    //
    protected $table = 'book_order';
    protected $fillable = ['book_id', 'order_id', 'quantity'];
}
