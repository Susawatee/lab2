<?php
$name = $_GET["name"];
$gender = $_GET["gender"];
$num = $_GET["num"];
$status = $_GET["status"];

if ($gender == "male") {
    if ($num <= 15)
        $title = "เด็กหญิง";
    else
    if ($status == "single")
        $title = "นางสาว";
    else
        $title = "นาง";
} else {
    if ($num <= 15)
        $title = "เด็กชาย";
    else
        $title = "นาย";
}

if ($gender == "male") {
    $gen = "หญิง";
} else
    $gen = "ชาย";

if ($status == "single") {
    $sta = "โสด";
} else
    $sta = "แต่งงานแล้ว";

echo " ชื่อของคุณ  $name อายุ $num ปี เพศ$gen สถานะ $sta <br>";
echo " คำนำหน้าคุณคือ ''$title''<br>";
echo "$title$name";
