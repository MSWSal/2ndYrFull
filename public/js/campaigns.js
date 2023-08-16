
pbtn=document.querySelector('#progress-btn');
ubtn=document.querySelector('#upcoming-btn');
mbtn=document.querySelector('#mycamps-btn');
root="http://localhost:8888/Bloood%20Link%202/public";
function pclick(){
    pbtn.style.background='#FFB4B4';
    ubtn.style.background='#eeeaea';
    mbtn.style.background='#eeeaea';
    window.location.href = root.concat("/campaigns?prog=true");
    
}
function uclick(){
    ubtn.style.background='#FFB4B4';
    pbtn.style.background='#eeeaea';
    mbtn.style.background='#eeeaea';
    window.location.href = root.concat("/campaigns?upcoming=true"); 
}
function mclick(){
    mbtn.style.background='#FFB4B4';
    ubtn.style.background='#eeeaea';
    pbtn.style.background='#eeeaea';
    window.location.href = root.concat("/campaigns?mycamps=true"); 
}
pbtn.addEventListener("click", pclick);
ubtn.addEventListener("click", uclick);
mbtn.addEventListener("click", mclick);