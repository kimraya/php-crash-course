<?php
    if(isset($_GET['id'])) {
        $contactsFile = 'contacts.json';
        $contacts = file_exists($contactsFile) ? json_decode(file_get_contents($contactsFile), true) : [];
    
        // Remove the contact by name
        $contacts = array_filter($contacts, fn($c) => $c["id"] != (int)$_GET['id']);

        file_put_contents($contactsFile, json_encode($contacts, JSON_PRETTY_PRINT));
        echo "Contact Deleted";
    }
?>