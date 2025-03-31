<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // INPUT_POST: retrieves the value from a form submission
    // "name": the form field name.
    // FILTER_SANITIZE_SPECIAL_CHARS to prevent XSS attacks.
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_NUMBER_INT);

    if ($name && $email && $phone) {
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="get">
        <label>Name: </label>
        <input type="text" name="name" required>

        <label>Email: </label>
        <input type="email" name="email" required>

        <label>Phone: </label>
        <input type="text" name="phone" required>

        <button type="submit">Add Contact</button>
    </form>

</body>

</html>