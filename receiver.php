<?php

// Read data from the file
$data = file_get_contents('data.json');

// Send data as response
echo $data;
