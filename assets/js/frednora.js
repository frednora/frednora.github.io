// frednora.js
// Created by Fred Nora.

let __frednora_status = 0;


function frednoraGetStatus(){
    return __frednora_status;
}

function frednoraSetStatus(value){
    __frednora_status = value;
}

function frednoraHelloWorld(){
    console.log("Hello World!")
    if (__frednora_status == 1){
        window.alert("Initialized");
    }else{
        window.alert("Not initialized");
    }
    return __frednora_status;
}

function frednoraReloadPage(){
    window.location.reload();
}

/*
  INITIALIZATION
 */
function frednoraInitialize()
{
    let ReturnValue=1234;
    console.log("frednoraInitialize: Initializing ...");
    __frednora_status = 1;
    //frednoraSetStatus(1);
    return ReturnValue;
}
