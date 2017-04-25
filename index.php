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
        $message = 'Что бы заказать товар - отправьте сообщение цифрами 55 или нажмите кнопку "ВЫБРАТЬ ТОВАР"
Что бы заказать товар с прайса - отправьте сообщение цифрами "33" или нажмите кнопку "ПРАЙС"';
        sendMessage($token, $id, $message);
        break;
    case 'off';
        $message = "Вы отказалиь от рассылки";
        sendMessage($token, $id, $message);
        break;
    case '55';
        $message = "1.БЕЛГОРОД:
SK-0.5-NEW (1400руб) - ответ - 501 
KRISS-0.5NEW (1400руб) - ответ - 521 
KRISS-1-NEW (2200руб) - ответ - 531 
ROKK-ROLL 1.4NEW (2300руб) - ответ - 551 
ROKK-ROLL0.7NEW (1200руб) - ответ - 561 
 Crystal Shtorm 05 (1500руб) - ответ - 611 
Belgorod ROYAL SPEED 05g (1700руб) - ответ - 911 

2.г.ОБОЯНЬ:
г.Обоянь -SK-0.5NEW  (1400руб) - ответ - 592 
г. ОБОЯНЬ  KR-05-NEW (1400руб) - ответ - 772 

3.г. ШЕБЕКИНО:
г.ШЕБЕКЕНО KRISS- 0.5  (1500руб) - ответ - 623 
г.ШЕБЕКЕНО SK-0.5-NEW  (1300руб) - ответ - 643 

5.г.СТРОИТЕЛЬ:
г.Строитель KR-05-NEW (1500руб) - ответ - 845 
г.Строитель SK-05-NEW (1500руб) - ответ - 855 
г.Строитель SK-1gr-NEW (2400руб) - ответ - 935 
г.Строитель KR-1gr-NEW (2400руб) - ответ - 945 

Сделайте выбор и введите соответствующий номер 

Что бы отказаться от рассылки -  введите ответ - off";
        sendMessage($token, $id, $message);
        break;
    case '33';
        $message = "1.БЕЛГОРОД:
SK-0.5-NEW (1400руб) - ответ - 501 
KRISS-0.5NEW (1400руб) - ответ - 521 
KRISS-1-NEW (2200руб) - ответ - 531 
ROKK-ROLL 1.4NEW (2300руб) - ответ - 551 
ROKK-ROLL0.7NEW (1200руб) - ответ - 561 
 Crystal Shtorm 05 (1500руб) - ответ - 611 
Belgorod ROYAL SPEED 05g (1700руб) - ответ - 911 

2.г.ОБОЯНЬ:
г.Обоянь -SK-0.5NEW  (1400руб) - ответ - 592 
г. ОБОЯНЬ  KR-05-NEW (1400руб) - ответ - 772 

3.г. ШЕБЕКИНО:
г.ШЕБЕКЕНО KRISS- 0.5  (1500руб) - ответ - 623 
г.ШЕБЕКЕНО SK-0.5-NEW  (1300руб) - ответ - 643 

5.г.СТРОИТЕЛЬ:
г.Строитель KR-05-NEW (1500руб) - ответ - 845 
г.Строитель SK-05-NEW (1500руб) - ответ - 855 
г.Строитель SK-1gr-NEW (2400руб) - ответ - 935 
г.Строитель KR-1gr-NEW (2400руб) - ответ - 945 

Сделайте выбор и введите соответствующий номер 

Что бы отказаться от рассылки -  введите ответ - off";
        sendMessage($token, $id, $message);
        break;
    default:
        $message = 'Что бы заказать товар - отправьте сообщение цифрами 55 или нажмите кнопку "ВЫБРАТЬ ТОВАР"
Что бы заказать товар с прайса - отправьте сообщение цифрами "33" или нажмите кнопку "ПРАЙС"';
        sendMessage($token, $id, $message);
        break;
        
}


sendMessage($token,$id,$message);
function sendMessage($token,$id,$message)
{
    file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$id."&text=".$message);
}

file_put_contents('logs.txt',$output);
