<?php

// Receive data via POST request
$data = json_decode(file_get_contents('php://input'), true);

// Write data to a file
file_put_contents('data.json', json_encode($data));

// Send response
echo 'Data received and written to file';
