<div>
<?php

$ERROR = array();

$name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

if (empty($name)) {
    $ERROR['name'] = 'Name is required';
}
if (empty($email)) {
    $ERROR['email'] = 'Email is required';
}
if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    $ERROR['email'] = "Email is not valid";
}

if (count($ERROR) > 0) {
    include __DIR__ . '/get.php';
} else {
    echo "<h1>Confirmation mail sent to " . $email . "</h1>";
}
?>
</div>
