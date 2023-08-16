const form1=document.getElementById('Add_PHI');

const name1=document.getElementById('name');
const email1=document.getElementById('email');
const nic1=document.getElementById('nic');
const telephone1=document.getElementById('telephone');
const house_no1=document.getElementById('house_no');
const city1=document.getElementById('city');
const street1=document.getElementById('street');
const medical_id1=document.getElementById('medical_id');
const blood_bank_id1=document.getElementById('blood_bank_id');
const admin_id1=document.getElementById('admin_id');
const password=document.getElementById('password');
const cpassword=document.getElementById('cpassword');



var valid=true;


form1.addEventListener("submit",  (e) => {

    valid=false;

    e.preventDefault();

    inputChecker();
    if(valid===true) {
        form1.submit();
    }
})




async function inputChecker() {
    //values from the inputs
    const nameVal = name1.value.trim();
    const telephone1val = telephone1.value.trim();
    const house_no1val = house_no1.value.trim();
    const city1val = city1.value.trim();
    const street1val = street1.value.trim();    
    const email1val=email1.value.trim();
    const nic1val=nic1.value.trim();
    const medical_id1val=medical_id1.value.trim();
    const blood_bank_id1val=blood_bank_id1.value.trim();
    const admin_id1val=admin_id1.value.trim();
    const passwordval=password.value.trim();
    const cpasswordval=cpassword.value.trim();

    if (nameVal === "") {
        //error message
        displayError(name1, "Name can't be empty");        
    } else {
        //display success tick
        displaySuccess(name1);
    }


    if (telephone1val.length !== 10 ) {
        displayError(telephone1, "Enter a valid number");
    } else if (telephone1val == "") {
        displayError(telephone1, "Telephone1 number can't be empty");
    } else {
        if (telephone1val.charAt(0) !== '0') {
            displayError(telephone1, "The first digit must be 0");
        } else {
            displaySuccess(telephone1);
        }
    }
    
    if (nic1val.length !== 10 && nic1val.length !== 12) {
        displayError(nic1, "Enter a valid nic");
    } else {
        displaySuccess(nic1);
    }


    if (house_no1val === "") {
        displayError(house_no1, "House number can't be empty");
    }else {
        displaySuccess(house_no1);
    }

    if (blood_bank_id1val === "") {
        displayError(blood_bank_id1, "Blood Bank ID can't be empty");
    }else {
        displaySuccess(blood_bank_id1);
    }

    if (medical_id1val === "") {
        displayError(medical_id1, "Medical ID can't be empty");
    }else {
        displaySuccess(medical_id1);
    }

    if (admin_id1val === "") {
        displayError(admin_id1, "Medical ID can't be empty");
    }else {
        displaySuccess(admin_id1);
    }


    if (city1val === "") {
        displayError(city1, "City can't be empty");
    } else {
        displaySuccess(city1);
    }


    if (street1val === "") {
        displayError(street1, "Street can't be empty");
    } else {
        displaySuccess(street1);
    }

    if (email1val === "") {
        displayError(email1, "Email can't be empty");
    } else if (!checkEmail(email1val)) {
        displayError(email1, "Enter a valid email");
    }
    else {
        displaySuccess(email1);
    }


    if (passwordval.length < 8) {
        displayError(password, "Password must have at least 8 characters");
    } else if (!(/[a-zA-Z]/.test(passwordval))) {
        displayError(password, "Password must contain at least one letter")
    } else if (!(/[0-9]/.test(passwordval))) {
        displayError(password, "Password must contain at least one number");
    } else {
        displaySuccess(password);
    }
    if (passwordval !== cpasswordval) {
        displayError(cpassword, "Passwords do not match");
    }else if(cpasswordval ===""){
        displayError(cpassword, "Password can't be empty");
    }
    else {
        displaySuccess(cpassword);
    }
    
}


function displayError(input, message) {
    const f = input.parentElement;
    const small = f.querySelector('small');
    
        f.className = "f error";    
    
    //add error message
    small.innerText = message;
    //add error class
    valid=false;
}

function displaySuccess(input) {
    const f = input.parentElement;
    
        f.className = "f success";    
}   

function checkEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}