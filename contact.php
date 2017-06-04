<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: YourWebsite.com'; 
    $to = 'carinhansen95@gmail.com'; 
    $subject = 'Email Inquiry';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>

<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Bedankt voor je bericht!</p><a class="btn btn-default" href="index.php" role="button">Terug</a>';
    } else { 
        echo '<p>Oops! Er ging iets mis. Probeer je bericht nog een keer te verzenden.</p> <a class="btn btn-default" href="index.php" role="button">Terug</a>'; 
    }
}
?>