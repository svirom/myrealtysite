<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = "From: <callback@{$_SERVER['HTTP_HOST']}>\r\nMIME-Version: 1.0\r\nContent-Type: text/plain; charset=\"utf-8\"";
    $to = 'svjatoslav.romanjuk@gmail.com'; 
    $subject = 'From MyRealtySite';
    $body = "From: $name\n Company: $email\n Subject: $subject\n E-Mail: $email\n Message:\n $message";


?>

<?php
if ($_POST['submit']) {
    if (mail($to, $subject, $body, $headers)) 
        echo '<p>Your message has been sent!</p>';
     else  
        echo '<p>Something went wrong, go back and try again!</p>'; 
    
}
?>
