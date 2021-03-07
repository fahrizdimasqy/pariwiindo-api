<?php

namespace App\Http\Controllers;
use App\Http\Resources\Ticket as TicketResource;
use App\Http\Resources\TicketCollection as TicketCollectionResource;
use App\Http\Resources\Tickets as TicketResourceCollection;
use Illuminate\Http\Request;
use \App\Ticket;
use DB;

class TicketController extends Controller
{
    //
    public function index()
    {
    	$ticket = Ticket::paginate(6);
 		return new TicketResourceCollection($ticket);
    }
    public function view($id)
    {
    	$ticket = new TicketResource(\App\Ticket::find($id));
 		return $ticket;
    }
    public function top($count)
    {
    	# code...
    	$criteria = Ticket::select('*')->orderBy('views', 'DESC')->limit($count)->get();
		return new TicketResourceCollection($criteria);
    }
}
