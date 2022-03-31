<?php
namespace code\php_redis;

class My_Redis{
    private $ip,$port,$password;

    public function __construct($ip,$port,$password){
        $this->ip = $ip;
        $this->port = $port;
        $this->password = $password;
    }

    public function getConnect(){
        $redis = new Redis();
        $redis->connect($this->ip,$this->port);
        echo "Connection to server successfully";
    }
}