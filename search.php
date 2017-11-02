<?php

require ( "vendor/autoload.php" );

use lampol\SphinxClient;

$sc = new SphinxClient ();

$words = $_POST['keywords'];
$host = "localhost";
$port = 9312;
$index = "user";


//设置 sphinx服务以及端口 默认是localhost 端口9312

$sc->SetServer ( $host, $port );

//设置连接的超时时间

$sc->SetConnectTimeout ( 1 );

//返回数组的数据格式
$sc->SetArrayResult ( true );
//设置返回的条数 分页
//$offset=30; 
//$limit=10;
$sc->SetLimits ( $offset, $limit);
//开始查询
$res = $sc->Query ( $words, $index );

echo '<pre>';
var_dump($res);
echo '</pre>';
