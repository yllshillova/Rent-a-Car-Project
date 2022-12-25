
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

    var textarea_message_Reg = /^[A-Za-z0-9]{5,1000}$/;

    var textarea_message_Regex = textarea_message_Reg.test(textarea_message_Contact_Us);

    if (!textarea_message_Regex) {
        console.log("You have entered an invalid text please correct!");
    }

}