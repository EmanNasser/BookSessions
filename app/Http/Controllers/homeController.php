<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
/*
    public function show (Request $request){ 

        $data = $request->input();
        print_r("Hello Requset");
        print_r($data);
        
        print_r($r_chapter_sessions);
        print_r($r_num_days);
        print_r($r_starting_date);
        //start=1-1-2020&numdays=2,4,6&numsession=7
    }
    */
    public function about(Request $request )
    {
        $starting_date=null;
        $num_days=null;
        $chapter_sessions=null;

        $starting_date = $request->input('start');
        $num_days = $request->input('days');
        $chapter_sessions =$request->input('sessions');



        	/*
		1 - Saturday
		2 - Sunday
		3 - Monday
		4 - Tuesday
		5 - Wednesday
		6 - Thursday
		7 - Friday
		
	    */

        $week_days = ['Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday'];
        $days =[];
        $days= explode(" ", $num_days); // numbers of days per week assuming the start of the week is saturday
        $chapters = 30;
        $schedule = [];
        
        
        $total_sessions = (int)$chapter_sessions * (int)$chapters;
        $days_per_week = sizeof($days);
        $start = $starting_date;
        
        for($i=0;$i<((int)$total_sessions/(int)$days_per_week);$i++){
		
		for($j=0;$j<$days_per_week;$j++){
            $upcommingDay = date('Y-m-d', strtotime('next '.$week_days[(int)$days[$j]-1],strtotime($start)));
			array_push($schedule,$upcommingDay);
			$start = $upcommingDay;
     
		}
		//die($upcommingDay);
        }
        if($schedule==null){
            echo json_encode("Incorrect Parameters , please try by true Values :) ");
        }else{

            echo json_encode(array("Sessions Schedule" => $schedule));
            echo json_encode(array("Numbers days" => $days));
        }


        return view('about' , compact('starting_date','num_days','chapter_sessions'));
    }
    
    public function index(){
        return view('Welcome');
    }

}
