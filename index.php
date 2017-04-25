<?php
/**
 * Created by PhpStorm.
 * User: nifx87
 * Date: 25.04.2017
 * Time: 12:49
 */
$token ="324117481:AAEtL6PPZmnQ8gYCsyJeC2Rf1AUJ9GuG8GA" ;
$start = "/start";
$output = json_decode(file_get_contents('php://input'),true);
$id = $output['message']['chat']['id'];
$message= $output['message']['text'];

switch ($message)
{
    case '/start';
        $message = "Бот является демонстрацией";
        sendMessage($token, $id, $message.prymKeyMeny());
        break;
    case 'off';
        $message = "Вы отказалиь от рассылки";
        sendMessage($token, $id, $message);
        break;
    case '55';
        $message = "555";
        sendMessage($token, $id, $message);
        break;
    case '33';
        $message = "333";
        sendMessage($token, $id, $message);
        break;
    case 'Выход';
        $message = "До скорой встречи!";
        sendMessage($token, $id, $message);
        break;
    default:
        $message = "Я отдыхаю";
        sendMessage($token, $id, $message);
        break;

}

//sendMessage($token,$id,$message);
function sendMessage($token,$id,$message)
{
    file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$id."&text=".$message);
}

file_put_contents('logs.txt',$output);

/**
 *
 */
function prymKeyMeny()
{
    $prbtn =[['Выбрать товар'],['ПРАЙС'],['Выход']];
    $keyboard = json_encode($keyboard=['keyboard'=>$prbtn,'resize_keyboard'=> true,'one_time_keyboard'=> false,'selective'=> true]);
    $reply_markup = '&reply_markup='.$keyboard.'';

    return $reply_markup;
}
