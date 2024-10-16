<?php
$receiving_email_address = 'om.sagvekar@vit.edu.in';

// Check if the PHP Email Form library file exists and include it
if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
    include($php_email_form);
} else {
    die('Unable to load the "PHP Email Form" Library!');
}

// Check if the PHP_Email_Form class exists before instantiating
if (class_exists('PHP_Email_Form')) {
    $contact = new PHP_Email_Form;
    $contact->ajax = true;

    $contact->to = $receiving_email_address;
    $contact->from_name = $_POST['name'];
    $contact->from_email = $_POST['email'];
    $contact->subject = $_POST['subject'];

    // Add messages to the contact form
    $contact->add_message($_POST['name'], 'From');
    $contact->add_message($_POST['email'], 'Email');
    $contact->add_message($_POST['message'], 'Message', 10);

    // Send the email and echo the response
    echo $contact->send();
} else {
    die('PHP_Email_Form class not found. Check the library file.');
}
?>
