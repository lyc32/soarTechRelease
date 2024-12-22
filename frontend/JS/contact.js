function sendMessage()
{
    let firstName = document.getElementById("firstName").value;
    document.getElementById("email").style = "";
    document.getElementById("message").style = "";
    let lastName  = document.getElementById("lastName" ).value;
    let email     = document.getElementById("email"    ).value;
    let message   = document.getElementById("message"  ).value;
    
    if(email == undefined || email == '' || email == null)
    {
        document.getElementById("email").style = "border: 2px solid red;";
        document.getElementById("errorMessage").innerHTML = "<div class='text-danger border border-danger rounded-3 p-2'>Email Is Empty</div>";
    }
    else if(message == undefined || message == '' || message == null)
    {
        document.getElementById("message").style = "border: 2px solid red;";
        document.getElementById("errorMessage").innerHTML = "<div class='text-danger border border-danger rounded-3 p-2'>Message Is Empty</div>";
    }
    else 
    {
        resetPop();
        openPop();
        prePop('Processing<br>Your Message Is Being Sent...');
        $.ajax(
        {
            url: "./controller/sendMail.php",
            method: "POST",
            data: { firstName: firstName, lastName: lastName, email:email, message: message},
            dataType:"text",
            success: function(data) 
            {
                if( 'success' == data.trim() )
                {
                    setPop('Your Message Has Been Sent Successfully', true);
                }
                else
                {
                    setPop("Your message failed to send.<br>Please Try Again.<br>Error:" + data, false);
                }
            },
            error: function(error) 
            {
                setPop("Login Failed<br>" + error.message, false);
            }
        })
    }
}