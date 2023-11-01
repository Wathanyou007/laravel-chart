<?php

use App\Http\Controllers\Controller;
use App\Models\chart;

class ChartController extends Controller
{
    // public function userChart(){
    //     $charts = chart::selectRaw('form_date as charts, count(*) as count')
    //                 ->whereCode('form_date' ,date('y'))
    //                 ->groupBy('form_code')
    //                 ->orderBy('form_code')
    //                 ->get();

    //     $labels = [];
    //     $data = [];
    //     $colors = [];

    //     for ($i=1; $i < 10; $i++){
    //         $code = date('F',mktime(0,0,0,$i,1));
    //         $count=0;

    //         foreach ($charts as $chart){
    //             if($chart->code == $i){
    //                 $count=$code->count;
    //                 break;
    //             }
            
    //         }
    //     array_push($labels ,$code);
    //     array_push($data,$colors);
    //     }
    //     $datasets =[
    //             [
    //                 'label'=>'chart',
    //                 'data'=>$data,
    //                 'background'=> $colors
    //             ]
    //         ];
        
    //     return view('charts',compact('datasets','label'));
        
    // }          
}
