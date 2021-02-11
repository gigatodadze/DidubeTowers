<?php

namespace App\Http\Controllers;

use App\Models\ClientInsert;
use Illuminate\Http\Request;

class ClientInsertController extends Controller
{

    public function index(){
        $client = ClientInsert::orderBy('id','DESC')->get();
        return view('client',compact('client'));
    }
}
