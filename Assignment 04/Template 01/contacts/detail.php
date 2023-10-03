 <!DOCTYPE html>
<html>
<head>
    <title>Contact Details</title>
</head>
<body>

<?php
if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['subject']) && isset($_GET['message'])) {
    ?>
    <head>
    <title><?php $name?>'s Contact Details</title>
</head>
<body>
    <?php
    $name = $_GET['name'];
    $email = $_GET['email'];
    $subject = $_GET['subject'];
    $message = $_GET['message'];

    echo "<h1>Contact Details</h1>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Subject:</strong> $subject</p>";
    echo "<p><strong>Message:</strong> $message</p>";
} else {
    echo "This contact form cannot be found.";
}
?>

</body>
</html>