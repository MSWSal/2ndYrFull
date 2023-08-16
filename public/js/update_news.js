const form = document.getElementById('update_news');

// const admin_id = document.getElementById('admin_id');
const link = document.getElementById('link');
const file1 = document.getElementById('file');
const description = document.getElementById('description');

// const file = document.getElementById('file');


var valid = true;

console.log("message");


form.addEventListener("submit", (e) => {
    valid = true;

    console.log("message2");
    
    e.preventDefault();
    inputChecker();
    if (valid === true) {
        form.submit();
    }
})


async function inputChecker() {
    //values from the inputs
    // console.log("inputChecker");

    // const admin_idval = admin_id.value.trim(); 
    const linkval = link.value.trim(); 
    const descriptionVal = description.value.trim();
    const file1Val = file1.value.trim();



    // if (admin_idval === "") {
    //     //error message
    //     displayError(admin_id, "Admin ID can't be empty");

    // } else {
    //     //display success tick
    //     displaySuccess(admin_id);
    // }

    if (linkval === "") {
        //error message
        displayError(link, "Link can't be empty");

    } else {
        //display success tick
        displaySuccess(link);
    }
    
    
    if (descriptionVal === "") {
        //error message
        displayError(description, "Description can't be empty");

    } else {
        //display success tick
        displaySuccess(description);
    }   
    
    if (file1Val === "") {
        //error message
        displayError(file1, "Image can't be empty");

    } else {
        //display success tick
        displaySuccess(file1);
    } 

}

function displayError(input, message) {
    const f = input.parentElement;
    // console.log("message");
    const small = f.querySelector('small');

    f.className = "f error";
    console.log("message e");

    //add error message
    small.innerText = message;
    //add error class
    valid = false;
}
function displaySuccess(input) {
    const f = input.parentElement;
    
    f.className = "f success";
    console.log("message s");



}