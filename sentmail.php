<?php 
    if(isset($_POST['SUBMIT'])){
    $maliTo = "teckla.lyaruu@gmail.com";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pnumber = $_POST['pnumber'];
    $subject = $_POST['subject'];
    $subject2 = "Confirmation: message was submitted successfully ----MREL";

    $message = "staff name: " . $name . "/n" . "phone number: " . $pnumber . "/n/n" . "client message: " . "/n" . $_POST['message'];
    $message2 = "Dear" . $name . "/n" . "thank you for contacting us. we will get to you back shortly!" . "/n/n" . "you submitted the following message: " . "/n" . $POST_['message'] . "/n/n" . "Regards," . "/n" . "Malaika Real Estate Limited.";

    $headers = "From: " . $email;
    $headers2 = "From: " . $mailTo;

    $result1 = mail($maliTo, $subject, $message, $headers);
    $result2 = mail($email, $subject2, $message2, $headers2);

    if($result1 && $result2){
        $success = "your message was sent successfully!";
    }else{
        $failed = "sorry, your message was not sent.try again!";
    }
}
?>