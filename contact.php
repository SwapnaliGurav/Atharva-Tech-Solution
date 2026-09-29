 <?php
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //  $website_url = trim($_POST['website_url']);
    //$name = trim($_POST['name']);
    // $email = trim($_POST['email']);
    // $phone = trim($_POST['phone']);
//     $message = trim($_POST['message']);

//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         echo '<div class="error_message">Invalid email address.</div>';
//         exit;
//     }

//     $to = "shjaikhmohmmed00@gmail.com"; // Replace with your actual email
//     $subject = "New Contact Form Submission from $name";
//     $body = "Website: $website_url\nName: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message\n";
//     $headers = "From: $email\r\nReply-To: $email\r\n";

//     if (mail($to, $subject, $body, $headers)) {
//         echo '<div class="success_message">Your message has been sent successfully!</div>';
//     } else {
//         echo '<div class="error_message">Error sending email. Please check your server settings.</div>';
//     }
// }



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $website_url = trim($_POST['website_url']);
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $message = trim($_POST['message']);

    // Email details
    $mailTo = "shaikhmohmmed00@gmail.com"; // Corrected email address
    $subject = "New Contact Form Submission from " . $name;
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $txt = "You have received an email from " . $name . ".\n\n";
    $txt .= "Website URL: " . $website_url . "\n";
    $txt .= "Phone: " . $phone . "\n\n";
    $txt .= "Message:\n" . $message . "\n";

    // Send Email
    if (mail($mailTo, $subject, $txt, $headers)) {
        echo "<div class='success_message'>Thank you! Your message has been sent successfully.</div>";
    } else {
        echo '<div class="error_message">Error sending email. Please try again.</div>';
    }
}
?>






