<?php
/**
 * Created by PhpStorm.
 * User: mrfvr
 * Date: 23/03/2018
 * Time: 13:48
 */
try{
    $conn = new PDO('mysql:host=localhost;dbname=kandt', 'root', 'root');
} catch (PDOException $exception) {
    die($exception->getMessage());
}