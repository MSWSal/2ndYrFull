    
ubtn=document.querySelector('#upcoming-btn');
pbtn=document.querySelector('#progress-btn');
root="http://localhost:8888/Bloood%20Link%202/public";



function pclick(){
    
    window.location.href = root.concat("/viewcampsinmap?prog=true");
    
}
function uclick(){
    
    window.location.href = root.concat("/viewcampsinmap?upcoming=true"); 
}

pbtn.addEventListener("click", pclick);
ubtn.addEventListener("click", uclick);
