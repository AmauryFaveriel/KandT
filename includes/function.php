<?php
/**
 * Created by PhpStorm.
 * User: mrfvr
 * Date: 07/03/2018
 * Time: 14:15
 */
function addActive($link, $name) {
    $result='<li';
    if($link===basename($_SERVER['PHP_SELF'])){
        $result.=' class="active"';
    }
    $result.='><a href="'.$link.'">'.$name.'</a>';
    return $result;
}