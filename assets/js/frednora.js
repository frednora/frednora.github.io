
let __frednora_status = 0;

function frednoraInitialize(){
    let ReturnValue=1234;
    console.log("frednoraInitialize: Initializing ...");
    __frednora_status = 1;
    return ReturnValue;
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

function frednoraGetStatus(){
    return __frednora_status;
}


function frednoraReloadPage(){
    window.location.reload();
}


