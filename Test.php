<?php
use code\php_redis\My_Redis;
$predis = new My_Redis('127.0.0.1','6379','');
$predis->getConnect();



?>