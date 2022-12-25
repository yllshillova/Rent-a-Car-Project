const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form.login");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link a");
signupBtn.onclick = (() => {
    loginForm.style.marginLeft = "-50%";
    loginText.style.marginLeft = "-50%";
});
loginBtn.onclick = (() => {
    loginForm.style.marginLeft = "0%";
    loginText.style.marginLeft = "0%";
});
signupLink.onclick = (() => {
    signupBtn.click();
    return false;
});

function validationSignIn() {
    const emaili_SignIn = document.getElementById('emaili_SignIn').value;
    const passwordi_SignIn = document.getElementById('passwordi_SignIn').value;
    //Standard email address
    var regEm = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    // USERNAME VALIDATION
    // To check a usernmae between 7 to 16 characters which contain only characters, numeric digits, underscore and first character must be a letter
    var regex_Email = regEm.test(emaili_SignIn);
    if (!regex_Email) {

        console.log("You have entered an invalid email address!");
    }
    //Password supports special characters and here min length 6 max 20 charters.
    // SECOND REGEX FOR PASSWORD ====  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/   ====
    var reg_Pass = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
    var regex_Password = reg_Pass.test(passwordi_SignIn)
    if (!regex_Password) {
        console.log("You have entered an invalid password!");
    }

}




function validationSignUp() {
    const emaili_SignUp = document.getElementById('emaili_SignUp').value;
    const passwordi_SignUp = document.getElementById('passwordi_SignUp').value;
    const confirmPasswordi_SignUp = document.getElementById('confirmPasswordi_SignUp').value;
    //Standard email address
    var regEm = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    // USERNAME VALIDATION
    // To check a usernmae between 7 to 16 characters which contain only characters, numeric digits, underscore and first character must be a letter
    var regex_Email = regEm.test(emaili_SignUp);
    if (!regex_Email) {

        console.log("You have entered an invalid email address!");
    }
    //Password supports special characters and here min length 6 max 20 charters.
    // SECOND REGEX FOR PASSWORD ====  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/   ====
    var reg_Pass = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
    var regex_Password = reg_Pass.test(passwordi_SignUp)
    if (!regex_Password) {
        console.log("You have entered an invalid password!");
    }
    //Password supports special characters and here min length 6 max 20 charters.
    // SECOND REGEX FOR PASSWORD ====  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/   ====
    var reg_ConPass = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
    var regex_ConfirmPassword = reg_ConPass.test(confirmPasswordi_SignUp)
    if (!regex_ConfirmPassword) {
        console.log("You have entered an invalid confirmation password!");
    }

}



function validationContactUs() {
    const name_Contact_Us = document.getElementById('name').value;
    const email_Contact_Us = document.getElementById('emaili').value;
    const textarea_message_Contact_Us = document.getElementById('textarea_message').value;

    var name_Reg = /^[a-zA-Z]+ [a-zA-Z]+$/;

    var name_Regex = name_Reg.test(name_Contact_Us);

    if (!name_Regex) {
        console.log("You have entered an invalid full name!");
    }

    var email_Reg = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

    var email_Regex = email_Reg.test(email_Contact_Us);

    if (!email_Regex) {
        console.log("You have entered an invalid email!");
    }

    var textarea_message_Reg = /^([A-Za-z0-9]+\.[A-Za-z0-9]+(\r)?(\n)?)+$/;

    var textarea_message_Regex = textarea_message_Reg.test(textarea_message_Contact_Us);

    if (!textarea_message_Regex) {
        console.log("You have entered an invalid text please correct!");
    }

}




