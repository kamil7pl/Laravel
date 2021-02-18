<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pupil;
use App\Models\Book;

class MainController extends Controller
{
    public function index()
	{
		$array = array();
		$pupil = Pupil::findOrFail(2);
		foreach($pupil->orderspupil as $order)
		array_push($array, Book::findOrFail($order->book_id));
		return $array;
		
	}
}
