function validationFooter()
{
    const send_message = document.getElementById('send_message').value;

    var message_reg = /^[A-Za-z0-9]{5,1000}$/;
    var message_regex = message_reg.test(send_message);
    if(!message_regex)
    {
        console.log("Invalid or empty message please correct it!");
    }

}
