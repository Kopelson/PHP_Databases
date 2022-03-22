<?php

//prepared statements protects against mysql injection attacks.

$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
    VALUES (?, ?, ?)");

$stmt->bind_param("sss", $firstname, $lastname, $email);

$firstname = "John";

$lastname = "Smith";

$email = "john@example.com";

$stmt->execute();