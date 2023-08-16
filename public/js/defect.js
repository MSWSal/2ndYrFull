let button = document.getElementById("button");
let defect=document.getElementById("defect");

button.addEventListener('click', ()=>{
    // console.log("btn clicked");
    if(defect.style.visibility=="visible"){
        defect.style.visibility="hidden";
    }
    else{
        defect.style.visibility="visible";
    }
    
})