function emailSend() {
    
    var userName = document.getElementById('name').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;

    var messageBody = "Name" + userName +
    "<br/> Phone" + phone +
    "<br/> Email" + email;
    email.send({
        Host : "smtp.elasticemail.com",
        Username : "victor.via7@gmail.com",
        Password : "0D7BFC46ADDC84EA41874723C38FA037024D",
        To : "steefset@gmail.com",
        From : "victor.via7@gmail.com",
        Subject : "This is the subject",
        Body : messageBody
    }).then(
      message => {
        if (message == 'OK') {
          swal("successful!")
            // swal("succussful!", "You clicked the button!", "success");
        }
        else {
          swal("error")
            // swal("error", "You clicked the button!", "error");
        }
      }
    );
}