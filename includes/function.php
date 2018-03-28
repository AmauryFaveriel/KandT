<?php
/**
 * Created by PhpStorm.
 * User: mrfvr
 * Date: 07/03/2018
 * Time: 14:15
 */

function addActive($name, $navTitle, $currentPage)
{

    $result = '<li';
    if($name===$currentPage) {
        $result.=' class="active"';
    }

    $result.='><a href="index.php?p='.$name.'">'.$navTitle.'</a>';
    return $result;
}