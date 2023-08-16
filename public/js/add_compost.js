const form = document.getElementById('addpic');

const title = document.getElementById('cName');
const description = document.getElementById('description');
const file1 = document.getElementById('file');
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

    const titleVal = title.value.trim();    
    const descriptionVal = description.value.trim();
    const file1Val = file1.value.trim();


    if (titleVal === "") {
        //error message
        displayError(title, "Title can't be empty");

    } else {
        //display success tick
        displaySuccess(title);
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

    f.className = "form-item error";
    // f.className = "file_form error";
    console.log("message e");

    //add error message
    small.innerText = message;
    //add error class
    valid = false;
}
function displaySuccess(input) {
    const f = input.parentElement;
    
    f.className = "form-item success";
    // f.className = "file_form success";
    console.log("message s");



}
