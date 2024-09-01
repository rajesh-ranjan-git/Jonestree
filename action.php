<?php 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(isset($_POST['submit'])){
    $to = "email@example.com"; // this is your Email address

    if (empty($_POST["name"])) {
        echo "Name is required"."<br />";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            echo "Only letters and white space allowed"."<br />"; 
        }
    }
  
    if (empty($_POST["email"])) {
        echo "Email is required"."<br />";
    } else {
        $from = test_input($_POST["email"]);  // this is the sender's Email address
        /*if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format"."<br />"; 
        }*/
    }
    
    if (empty($_POST["phone"])) {
        echo "Phone No. is required"."<br />";
    } else {
        $phone = test_input($_POST["phone"]);
        if (!preg_match("/^[0-9]*$/",$phone)) {
            echo "Only numbers allowed"."<br />"; 
        }
    }

    if (empty($_POST["service"])) {
        echo "Service is required"."<br />";
    } else {
        $service = test_input($_POST["service"]);
    }

    if (empty($_POST["message"])) {
        $message = "";
    } else {
        $message = test_input($_POST["message"]);
    }
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " " . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>