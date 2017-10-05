<?php

function getSetting($req) {
    $db = $GLOBALS["db"];
    $query = mysqli_query($db,"SELECT * FROM `Setting`");
    $result = mysqli_fetch_assoc($query);
    return $result[$req];
}

function getState($n,$req) {
    global $db;
    $gUser = mysqli_query($db,"SELECT * FROM `States` WHERE `name`='$n' OR `english`='$n'");
    $User = mysqli_fetch_assoc($gUser);
    return $User[$req];
}

function ValidState($n) {
    $db = $GLOBALS["db"];
    $query = mysqli_query($db,"SELECT * FROM `States` WHERE `name`='$n' OR `english`='$n'");
    if (mysqli_num_rows($query) == 1) {
        return true;
    }
    else {
        return false;
    }
}