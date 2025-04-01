<?php
// Initialize variables
$name = $email = $phone = "";
$errors = [];

// Function to sanitized and validate input
function get_filter_input($field, $filter, $error_message)
{
    $value = filter_input(INPUT_POST, $field, $filter);
    return $value ?: $error_message;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name (Required, Special chars sanitized)
    list($name, $name_error) = get_filter_input("name", FILTER_SANITIZE_SPECIAL_CHARS, "Name is required");
    if ($name_error) $errors['name'] = $name_error;

    list($email, $email_error) = get_filter_input("email", FILTER_SANITIZE_EMAIL, "Email is required");
    if ($email_error && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid email format.";
    }
    if ($email_error) $errors['email'] = $email_error;

    list($phone, $phone_error) = get_filter_input("phone", FILTER_SANITIZE_NUMBER_INT, "Phone number is required");
    if ($phone_error) $errors['phone'] = $phone_error;

    // If no errors, process the form
    if (empty($errors)) {
        echo "<p style='color:green;'>Form submitted successfully!</p>";
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
        <input type="text" name="name" value="<?= htmlspecialchars($name) ?>" required>
        <span style="color:red;"><?= $errors['name'] ?? "" ?></span>
        <br><br>

        <label>Email: </label>
        <input type="email" name="email" value="<?= htmlspecialchars($email) ?>" required>
        <span style="color:red;"><?= $errors['email'] ?? "" ?></span>
        <br><br>

        <label>Phone: </label>
        <input type="text" name="phone" value="<?= htmlspecialchars($email) ?>" required>
        <span style="color:red;"><?= $errors['phone'] ?? "" ?></span>
        <br><br>


        <label>Contact Image: </label>
        <input type="file" name="image" accept="image/" required>

        <button type="submit">Add Contact</button>
    </form>

</body>

</html>