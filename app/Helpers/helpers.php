<?php
use Pusher\Pusher;

if (!function_exists("notify")){
    function notify($chanel,$event,$data){
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher(
            '778a3330b825a9715331',
            'd1c2da189b9696af3d73',
            '1005418',
            $options
        );

        $data['message'];
        $pusher->trigger($chanel, $event, $data);
    }
}