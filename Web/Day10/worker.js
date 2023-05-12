var n=0;
while(true){
    n++;
    // document.getElementById('hh').innerHTML=n;
    //worker에서는 UI 작업이 불가능, 별도스레드에서 메인스레드 작업못하는것과 유사
    //메인스레드에 요청
    postMessage(n);
}