<?php
/**
 * Created by PhpStorm.
 * User: nifx87
 * Date: 25.04.2017
 * Time: 12:49
 */
$url ="https://api.telegram.org/bot" ;
$token ="" ;
$start = "/start";
$output = json_decode(file_get_contents('php://input'),true);
$text = $output['maessage']['text'];
//$id = $output['message']['chst']['id'];//
file_put_contents('logs.txt',$text);
