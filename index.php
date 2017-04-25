<?php
/**
 * Created by PhpStorm.
 * User: nifx87
 * Date: 25.04.2017
 * Time: 12:49
 */
$output = json_decode(file_get_contents('php://input'),true);
file_put_contents('logs.txt',$output);
