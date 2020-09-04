<?php
// variable setting
$firstname = $_REQUEST['First Name'];
$lastname = $_REQUEST['Last Name'];
$email = $_REQUEST['Email'];
$subject = $_REQUEST['Subject'];
$message = $_REQUEST['Message'];
//check input fields
if (empty($firstname) || empty($lastname) || empty($email) || empty($subject) || empty($message))
{
    echo "Please fill all the fields";
}
else
{
    mail("hasyakattaforyou@gmail.com", "Hasya Katta Message", $message, "From: $firstname <$email>");
    echo "<script type='text/javascript'>alert('Your Message has been sent successfully');
    window.history.log(-1);
    </script>";
}

?>
