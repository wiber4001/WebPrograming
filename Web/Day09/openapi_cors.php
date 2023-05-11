<?php
    header('Content-Type:application/xml; charset=utf-8');
    
    //curl 내장 라이브러리[php 에서 다른 서버에 요청하는 라이브러리]
    //1. curl 초기화 [객체 생성]
    $ch =curl_init();
    //2. curl로 작업할 요청에 대한 설정 옵션들
    //2-1. 요청할 서버 주소 URL
    curl_setopt($ch,CURLOPT_URL,"http://kobis.or.kr/kobisopenapi/webservice/rest/boxoffice/searchDailyBoxOfficeList.xml?key=f5eef3421c602c6cb7ea224104795888&targetDt=20230509");
    //2-2. 요청의 응답을 받겠다는 설정
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    //3. 설정했으니 curl작업 실행
    $result=curl_exec($ch); //실패하면 false리턴

    if($result){
        echo $result;
    }else{
        echo "실패".curl_error($ch)."<br>";
    }

    //4.연결 종료
    curl_close($ch);

?>
