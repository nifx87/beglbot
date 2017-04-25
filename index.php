<?php
/**
 * Created by PhpStorm.
 * User: nifx87
 * Date: 25.04.2017
 * Time: 12:49
 */
$output = file_get_contents('php://input');
file_put_contents('logs/txt',$output);
