<?php

namespace ITSourceProviders\Attendance;

class User {

    public static function addAttendance($email,$date,$state){
	\ITSourceProviders\Attendance\Config\Setting::post('/user/attendance',["email"=>$email,"date"=>$date,"present"=>$state]);
    }

}
