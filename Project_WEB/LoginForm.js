// Sign in Sign up mode change
const sign_in_btn = document.querySelector('#sign-in-button');
const sign_up_btn = document.querySelector('#sign-up-button');

const container = document.querySelector('.container-login');

sign_up_btn.addEventListener('click', () => {
    container.classList.add('sign-up-mode');
});

sign_in_btn.addEventListener('click', () => {
    container.classList.remove('sign-up-mode');
});


function validationSignUp() {
    const useriSignUp = document.getElementById('useri_SignUp').value;

    const passwordiSignUp = document.getElementById('passwordi_SignUp').value;

    const emailSignUp = document.getElementById('emaili_SignUp').value;
    // USERNAME VALIDATION
    // To check a usernmae between 7 to 16 characters which contain only characters, numeric digits, underscore and first character must be a letter
    if (/^[A-Za-z]\w{7,14}$/.test(useriSignUp)) {
        return true;
    }
    else if(useriSignUp == ""){
        console.log("You have entered an invalid username!");
    }
    else{
        console.log("You have entered an invalid username!");
    }
    
    // To check a password between 6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter

    if (/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/.test(passwordiSignUp)) {
        return true;
    }
    else if(passwordiSignUp == ""){
        console.log("You have entered an invalid password!");
    }
    else {
        console.log("You have entered an invalid password!");
    }

    // EMAIL VALIDATION
    // ----------------------INVALID EMAIL EXAMPLES-------------------------------
    // mysite.ourearth.com [@ is not present]
    // mysite@.com.my [ tld (Top Level domain) can not start with dot "." ]
    // @you.me.net [ No character before @ ]
    // mysite123@gmail.b [ ".b" is not a valid tld ]
    // mysite@.org.org [ tld can not start with dot "." ]
    // .mysite@mysite.org [ an email should not be start with "." ]
    // mysite()*@gmail.com [ here the regular expression only allows character, digit, underscore, and dash ]
    // mysite..1234@yahoo.com [double dots are not allowed]

    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById('emaili_SignUp').value)) {
        return (true);
    }
    else if(emailSignUp == ""){
        console.log("You have entered an invalid email address!");
    }
    else {
        console.log("You have entered an invalid email address!")
        return (false);
    }
}





function validationSignIn() {
    const useriSignIn = document.getElementById('useri_SignIn').value;

    const passwordiSignIn = document.getElementById('passwordi_SignIn').value;

    // USERNAME VALIDATION
    // To check a usernmae between 7 to 16 characters which contain only characters, numeric digits, underscore and first character must be a letter
    if (/^[A-Za-z]\w{7,14}$/.test(useriSignIn)) {
        return true;
    }
    else {
        console.log("You have entered an invalid username!");
    }

    // To check a password between 6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter

    if (/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/.test(passwordiSignIn)) {
        return true;
    }
    else {
        console.log("You have entered an invalid password!");
    }


}





