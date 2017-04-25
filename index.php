<?php
/**
 * Created by PhpStorm.
 * User: nifx87
 * Date: 25.04.2017
 * Time: 12:49
 */
$token ="324117481:AAEtL6PPZmnQ8gYCsyJeC2Rf1AUJ9GuG8GA" ;
$start = "/start";
$output = /*json_decode(*/file_get_contents('php://input')/*,true)*/;
$id = $output['message']['chat']['id'];

function sendMessage($token,$id)
{
    file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$id."&trext=Магазин временно не работает.");
}

file_put_contents('logs.txt',$output);
