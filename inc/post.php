<div>
<?php

$ERROR = array();
$ERROR['name'] = 'Name is required';
$ERROR['email'] = 'Email is required';

$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

if (empty($name) || empty($email) || empty($email)) {
    include __DIR__ . '/get.php';
} else {
    echo "<h1>Confirmation mail sent to " . $email . "</h1>";
}
?>
</div>
