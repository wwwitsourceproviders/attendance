<?php

namespace ITSourceProviders\Attendance;

class Course {

    public static function addAttendance($course_id,$email,$date,$state){
	\ITSourceProviders\Attendance\Config\Setting::post('/course/'.$course_id.'/attendance',["email"=>$email,"date"=>$date,"present"=>$state]);
    }

    public static function addGoogleAttendance($google_id,$email,$date,$state){
	\ITSourceProviders\Attendance\Config\Setting::post('/course/google/'.$google_id.'/attendance',["email"=>$email,"date"=>$date,"present"=>$state]);
    }

}

