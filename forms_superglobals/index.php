<?php

echo '<pre>';
var_dump($_FILES);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // INPUT_POST: retrieves the value from a form submission
    // "name": the form field name.
    // FILTER_SANITIZE_SPECIAL_CHARS to prevent XSS attacks.
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_NUMBER_INT);

    if ($name && $email && $phone) {
        echo "Contact added: $name ($email, $phone)";
    } else {
        echo "Invalid input";
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

    <form action="" method="POST" enctype="multipart/form-data">
        <label>Name: </label>
        <input type="text" name="name">

        <label>Email: </label>
        <input type="email" name="email">

        <label>Phone: </label>
        <input type="text" name="phone">

        <label>Contact Image: </label>
        <input type="file" name="image" accept="image/" required>

        <button type="submit">Add Contact</button>
    </form>

</body>

</html>