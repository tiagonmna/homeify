<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Initialize the session
session_start();

// FIRST WRITE THE PHP PART 
   $name = $_SESSION['nome']; 
   // THEN START USE HTML 
   // (call it when it's needed later)
?>
<span class="label-testing"><?php echo $name; ?></span>
</body>
</html>