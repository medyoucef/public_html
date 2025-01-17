<?php

// Function to sanitize input
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Set cookies with sanitized inputs
setcookie("is",  sanitize_input($_POST['is']), time()+60*60*24*100, "/");
setcookie("te",  sanitize_input($_POST['te']), time()+60*60*24*100, "/");
setcookie("ne",  sanitize_input($_POST['ne']), time()+60*60*24*100, "/");
setcookie("home",  sanitize_input($_POST['home']), time()+60*60*24*100, "/");





if (isset($_FILES['ico']) && $_FILES['ico']['error'] == 0) {
    $ico = $_FILES['ico']['name'];
    $target_dir = "../assets/img/";
    $target_file = $target_dir . "logo.png";
    
    // Allow only certain file types
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
    $file_type = mime_content_type($_FILES['ico']['tmp_name']);
    
    if (in_array($file_type, $allowed_types)) {
        if (move_uploaded_file($_FILES['ico']['tmp_name'], $target_file)) {
            move_uploaded_file($_FILES['ico']['tmp_name'], $target_dir . "logo-b.png");
            echo "File uploaded successfully.";
        } else {
            echo "Failed to move uploaded file.";
        }
    } else {
        echo "Invalid file type.";
    }
} else {
    echo "No ico uploaded or upload error.";
}
// Handle image upload
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $image = $_FILES['image']['name'];
    $target_dir = "./cont/";
    $target_file = $target_dir . "log.jpeg";
    
    // Allow only certain file types
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
    $file_type = mime_content_type($_FILES['image']['tmp_name']);
    
    if (in_array($file_type, $allowed_types)) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            echo "File uploaded successfully.";
        } else {
            echo "Failed to move uploaded file.";
        }
    } else {
        echo "Invalid file type.";
    }
} else {
    echo "No image uploaded or upload error.";
}

// Function to write data to a file
function write_to_file($filename, $data) {
    $file = fopen($filename, "w") or die("Unable to open file!");
    fwrite($file, $data);
    fclose($file);
}

// Write sanitized inputs to files
write_to_file("cont/name", sanitize_input($_POST['ne']));
write_to_file("cont/is", sanitize_input($_POST['is']));
write_to_file("cont/te", sanitize_input($_POST['te']));
write_to_file("cont/home", sanitize_input($_POST['home']));

// Redirect to index.php
header("Location: index.php");
exit();

?>
