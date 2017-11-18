<?php

function getSetting($req) {
    $db = $GLOBALS["db"];
    $query = mysqli_query($db,"SELECT * FROM `Setting`");
    $result = mysqli_fetch_assoc($query);
    return $result[$req];
}

function getState($n,$req) {
    global $db;
    $gUser = mysqli_query($db,"SELECT * FROM `States` WHERE `name`='$n' OR `english`='$n' OR `n`='$n'");
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

function getHeader() {
    return include 'header.php';
}

function getMenu() {
    return include 'menu.php';
}

function getFooter() {
    return include 'footer.php';
}

function getButtons() {
    return include 'buttons.php';
} 

function setTitle($ext,$menu_title = 0) {
    $title = getSetting('title');
    $titler = "$title | $ext";
    if ($menu_title) {
        $Wreturn = "
<script>
    $(document).prop('title','$titler');
    $('#menu-title').text('$ext');
</script>";
    }
    else {
        $Wreturn = "
<script>
    $(document).prop('title','$titler');
</script>";
    }
    return $Wreturn;
}

function formatted_number($n) {
    $n = (0+str_replace(",","",$n));
    if(!is_numeric($n)) return false;
    if ($n>1000000000000) {
        $return = round(($n/1000000000000),1).' تریلیون';
        $return = str_replace(".",",",$return);
        return $return;
    }
    else if ($n>1000000000) {
        $return = round(($n/1000000000),1).' بیلیون';
        $return = str_replace(".",",",$return);
        return $return;
    }
    else if ($n>1000000) {
        $return = round(($n/1000000),1).' میلیون';
        $return = str_replace(".",",",$return);
        return $return;
    }
    else if ($n>1000) {
        $return = round(($n/1000),1).' هزار';
        $return = str_replace(".",",",$return);
        return $return;
    }
    return number_format($n);
}

$crr_hex = "#2196f3|#263238";