<?php

$uploadsDir = 'uploads/';
$contactsFile = 'contacts.json';

// Function to sanitized and validate input
function get_filter_input($field, $filter, $error_message)
{
    $value = filter_input(INPUT_POST, $field, $filter);
    return $value ?: $error_message;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name (Required, Special chars sanitized)
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_NUMBER_INT);

    if ($name && $email && $phone && isset($_FILES['image'])) {
        // Ensure the uploads directory exists
        if (!is_dir($uploadsDir)) { // fi the directory does not exits
            mkdir($uploadsDir, 0777, true); // Creates the directory with full permission
        }
        $imageName = time() . "_" . basename($_FILES["image"]["name"]);
        $imagePath = $uploadsDir . $imageName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
            $contacts = file_exists($contactsFile) ?
                        json_decode(file_get_contents($contactsFile))
                        : [];
            
            $contacts[] = [
                'id' => rand(100000000, 200000000),
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'image' => $imagePath
            ];

            // Save the contents into JSON file
            file_put_contents($contactsFile, json_encode($contacts, JSON_PRETTY_PRINT));
            echo "Contact added: $name ($email, $phone)";
        } else {
            echo "Image upload failed";
        }

    } else {
        echo "Invalid input";
    }
}
?>

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