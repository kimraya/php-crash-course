<?php

echo '<pre>';
var_dump($_SERVER);
echo '<pre>';

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