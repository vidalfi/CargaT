<?php
session_start();
function getIP()    {
    $ip = 0;
    if (!empty($_SERVER["HTTP_CLIENT_IP"]))
        $ip = $_SERVER["HTTP_CLIENT_IP"];
    if (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))    {
        $iplist = explode(", ", $_SERVER["HTTP_X_FORWARDED_FOR"]);
        if ($ip)    {
            array_unshift($iplist, $ip);
            $ip = 0;
        }
        foreach($iplist as $v)
            if (!eregi("^(192\.168|172\.16|10|224|240|127|0)\.", $v))
                return $v;
    }
    return ($ip) ? $ip : $_SERVER["REMOTE_ADDR"];
}
$vengoip = getIP();

?>
