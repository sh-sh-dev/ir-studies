<?php

function getSetting($req) {
    $db = $GLOBALS["db"];
    $query = mysqli_query($db,"SELECT * FROM `Setting`");
    $result = mysqli_fetch_assoc($query);
    return $result[$req];
}

function getState($n,$req) {
    $db = $GLOBALS["db"];
    $query = mysqli_query($db,"SELECT * FROM `States` WHERE `n`=$n OR `name`='$n'");
    $result = mysqli_fetch_assoc($query);
    return $result[$req];
}