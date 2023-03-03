<?php

 function attempted_login($user, $username, $password){
    if(get_transient('login_attempt')){
        $datas = get_transient('login_attempt');

        if ($datas['tried'] >= 5){
            $until = get_option('_transient_timeout_' . 'login_attempt');
            $time = time_to_go($until);

            return new WP_Error('too_many_attempts', sprintf(__('<strong>ERROR</strong>: Too many trials, please try again after %1$s'), $time));
        }
    }

    return $user;
}

add_filter('authenticate', 'attempted_login', 30, 3);

function failed_login($username){
    if (get_transient('login_attempt')){
        $datas = get_transient('login_attempt');
        $datas['tried']++;

        if ($datas['tried'] <= 5)
            set_transient('login_attempt', $datas, 180);
        }else{
            $datas = array(
                'tried' => 1
            );
            set_transient ('login_attempt', $datas, 180);
        }
          
    
}

add_action('wp_login_failed', 'failed_login', 10, 1);

function time_to_go($timestamp){
    //converting mysql timestamp to php time
    $periods = array(
        "second",
        "minute",
        "hour",
        "day",
        "week",
        "month",
        "year"
    );

    $lengths = array(
        "60",
        "60",
        "24",
        "7",
        "4.35",
        "12"
    );

    $current_timestamp = time();
    $difference = abs($current_timestamp - $timestamp);

    for ($i = 0; $difference >= $lengths[$i] && $i < count($lengths)-1; $i ++ ){
        $difference /= $lengths[$i];
    }

    //adding the countdown if the remaining is less than a minute
    $difference = round($difference);

    if(isset($difference)){
        if($difference != 1){
            $periods[$i] .= "s";
            $output = "$difference $periods[$i]";
            return $output;
        }
    }
}