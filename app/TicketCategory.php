<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketCategory extends Model
{
    //
    protected $table = 'book_category';
 	protected $fillable = ['book_id', 'category_id', 'invoice_number', 'status'];
}
