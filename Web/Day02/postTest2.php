<?php
    header("Content-Type:text/html; charset=utf-8");

    //POST방식으로 전달된 값들 받기
    $cardtype=$_POST['rg'];
    $cardnum=$_POST['cardnum'];
    $crcnum=$_POST['CRCnum'];
    $id=$_POST['id'];

    //잘 받았는지 확인하는 목적으로 데이터들 출력(응답:Response)
    echo "<h2> $id 님의 카드정보 확인</h2>";
    echo "<p>$cardtype 카드입니다.</p>";
    echo "<p>카드번호: $cardnum</p>";
    echo "<p>CRC번호: $crcnum</p>";
?>