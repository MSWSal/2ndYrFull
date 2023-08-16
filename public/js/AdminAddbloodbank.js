const form=document.getElementById('Add_BB');
const name1=document.getElementById('name');
const telephone=document.getElementById('telephone');
const house_no=document.getElementById('house_no');
const city=document.getElementById('city');
const street=document.getElementById('street');
const district=document.getElementById('district');
const province=document.getElementById('province');
// const map=document.getElementById('map');


var valid=true;


form.addEventListener("submit",  (e) => {
    valid=true;
    e.preventDefault();
    inputChecker();
    if(valid===true) {
        form.submit();
    }
})




async function inputChecker() {
    //values from the inputs
    const nameVal = name1.value.trim();
    const telephoneval = telephone.value.trim();
    const house_noval = house_no.value.trim();
    const cityval = city.value.trim();
    const streetval = street.value.trim();
    // const districtval = district.value.trim();

    if (nameVal === "") {
        //error message
        displayError(name1, "Bank name can't be empty");        
    } else {
        //display success tick
        displaySuccess(name1);
    }


    if (telephoneval.length !== 10 ) {
        displayError(telephone, "Enter a valid number");
    } else if (telephoneval == "") {
        displayError(telephone, "Telephone number can't be empty");
    } else {
        if (telephoneval.charAt(0) !== '0') {
            displayError(telephone, "The first digit must be 0");
        } else {
            displaySuccess(telephone);
        }
    }
    


    if (house_noval === "") {
        displayError(house_no, "House number can't be empty");
    }else {
        displaySuccess(house_no);
    }


    if (cityval === "") {
        displayError(city, "City can't be empty");
    } else {
        displaySuccess(city);
    }


    if (streetval === "") {
        displayError(street, "Street can't be empty");
    } else {
        displaySuccess(street);
    }


    // if (districtval === "") {
    //     displayError(district, "District can't be empty");
    // } else if (!checkdistrict(districtval)) {
    //     displayError(email, "Enter a valid name");
    // } else {
    //     displaySuccess(district);
    // }
    
}

// function checkdistrict(districtval) {
//     // name acn only contain letters and spaces
//     const re = /^[a-zA-Z\s]+$/;
//     if (re.test(districtval)) {
//         return true;
//     } else {
//         return false;
//     }
// }



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