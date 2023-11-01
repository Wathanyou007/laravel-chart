<?php

namespace App\Http\Controllers;
use App\Models\chart;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function userChart(){
        $data= chart::select('form_code as charts')->pluck('charts');
        $labels= chart::select('form_date as charts')->pluck('charts');
        

        return view('charts', ['data'=> $data],['labels'=> $labels]);
    }    
} 
