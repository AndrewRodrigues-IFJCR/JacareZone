<?php

# Connection Data
const DATABASE_NAME='';
const DATABASE_HOST='';
const DATABASE_USER='';
const DATABASE_PASSWORD='';

# Create Connection
$conn = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASSWORD, $DATABASE_NAME);

# Check connection
if ($conn->connect_error){ 
    die("Connection failed: " . $conn->connect_error); 
}else{ 
    echo "Connected successfully"; 
}
  