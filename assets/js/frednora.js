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


/* Testing fetch */
async function __frednoraTestAPI(){
    const response = await fetch('https://dummyjson.com/products');
    if (response.status !== 200){
        return -1;
    } else {
        const obj = await response.json();
        //console.log(obj.total);
        window.alert(obj.total);
    }
}

/* Testing fetch */
// Phase generator.
// See: https://www.freepublicapis.com/corporate-bullshit-generator
async function frednoraTestAPI(){
    const response = await fetch('https://corporatebs-generator.sameerkumar.website/');
    if (response.status !== 200){
        return -1;
    } else {
        const obj = await response.json();
        console.log(obj);
        window.alert(obj.phrase);
    }
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
