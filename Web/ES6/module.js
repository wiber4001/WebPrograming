function show(){
    // document.write("Show!!!module!!")
    //Failed to execute 'write' on 'Document': It isn't possible to write into a document from an asynchronously-loaded external script unless it is explicitly opened.
    //에러남
    // 모듈 타입일때는 document.write()사용 못함
    // 새로운 요소노드를 직접 만들어서 추가해야함
    const e =document.createElement('h4')
    e.textContent="show!! module!!"
    document.body.appendChild(e)

}

//다른 JS에서 show()를 import하게 하고 싶다면 반드시 내보내야 함
//단, 하나의 .js 안에서 여러개를 export 할 수 있음.
//그중에 반드시 1개는 default키워드 필요
//여러개가 아니어도 무조건 default1개는 있어야함
export default show 
//또 다른 함수도 export해보기
export function addTextToBody(message){
    const e=document.createElement('h4')
    e.textContent=message
    document.body.appendChild(e)
}

// export default addTextToBody //error -export default는 문서에서 단1개만 가능
// export addTextToBody //error - default가 없으면 함수 선언하면서 export를 명시해야함
//default는 나중에 export해도되고 만들면서 export해도 됨

//변수나 상수도 export 가능함
export const num=100
export let age=20

