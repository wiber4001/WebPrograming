<?php
    header('Content-Type:text/html; charset=utf-8');
    $name= $_GET['name'];
    $email=$_GET['email'];

    // echo "$name $email 이 등록되었습니다.";
    //form 요소를 통한 서버와의 통신은 현재페이지를 변경->기존페이지 없어짐
    //기존페이지를 유지하는것처럼 보이게 하고싶다면
    echo("
        <!DOCTYPE html>
        <html>
        <head>
            <meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
            <title>No AJAX</title>

        </head>
        <body>
            <h3>회원가입 페이지</h3>
            <form action='./04_noAjax.php' method='get'>
                <input type='text' name='name' value='$name'>
                <input type='text' name='email' value='$email'>
                <input type='submit'>
            </form>
            <hr>
            <!-- 서버로부터 응답된 결과를 보여주기 위해 요소작성 -->
            <textarea cols='50' rows='3'> $name $email 이 등록되었습니다.</textarea>
        </body>
        </html>
    ");
?>