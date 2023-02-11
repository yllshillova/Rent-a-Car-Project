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
    const username_SignIn = document.getElementById('username_SignIn').value;
    const passwordi_SignIn = document.getElementById('passwordi_SignIn').value;
    var regUser = /^[a-zA-Z0-9]{6,}$/;

    // USERNAME VALIDATION
    // To check a usernmae between 7 to 16 characters which contain only characters, numeric digits, underscore and first character must be a letter
    var regex_Username = regUser.test(username_SignIn);
    if (!regex_Username) {

        console.log("You have entered an invalid username!");
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
    const username_SignUp = document.getElementById('username_SignUp').value;
    const lastname_SignUp = document.getElementById('lastname_SignUp').value;
    const passwordi_SignUp = document.getElementById('passwordi_SignUp').value;
    var regUser = /^[a-zA-Z0-9]{6,}$/;

    // USERNAME VALIDATION
    // To check a usernmae between 7 to 16 characters which contain only characters, numeric digits, underscore and first character must be a letter
    var regex_Username = regUser.test(username_SignUp);
    if (!regex_Username) {

        console.log("You have entered an invalid username!");
    }
    //Password supports special characters and here min length 6 max 20 charters.
    // SECOND REGEX FOR PASSWORD ====  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/   ====
    var reg_Lastname = /^[a-zA-Z0-9]{6,}$/;
    var regex_Lastname = reg_Lastname.test(lastname_SignUp)
    if (!regex_Lastname) {
        console.log("You have entered an invalid lastname!");
    }
    //Password supports special characters and here min length 6 max 20 charters.
    // SECOND REGEX FOR PASSWORD ====  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/   ====
    var reg_Pass= /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
    var regex_Password = reg_Pass.test(passwordi_SignUp)
    if (!regex_Password) {
        console.log("You have entered an invalid password!");
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




