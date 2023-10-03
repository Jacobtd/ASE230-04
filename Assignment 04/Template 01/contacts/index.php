
<!DOCTYPE html>
<html>
<head>
    <title>Contact List</title>
</head>
<body>

<?php
$contacts = array_map('str_getcsv', file('Assignment 04/Template 01/data/contacts.csv'));

echo '<table border="1">';
echo '<tr><th>Name</th><th>Subject</th></tr>';

foreach ($contacts as $contact) {
    list($name, $email, $subject, $message) = $contact;
    echo "<tr><td><a href='details.php?name=$name&email=$email&subject=$subject&message=$message'>$name</a></td><td>$subject</td></tr>";
}

echo '</table>';
?>

</body>
</html>