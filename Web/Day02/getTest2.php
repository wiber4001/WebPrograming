<?php
    header("Content-Type:text/html; charset=utf-8");
    $name=$_GET['name'];
    $email=$_GET['email'];
    $site=$_GET['site'];
    $int=$_GET['int'];
    $range=$_GET['range'];
    $msg=$_GET['msg'];

    $msg=nl2br($msg);

    echo "이름: ".$name."<br>";
    echo "이메일: ".$email."<br>";
    echo "사이트: "."$site"."<br>";
    echo "정수: "."$int"."<br>";
    echo "범위: "."$range"."<br>";
    echo "메시지:".$msg."<br>";

?>