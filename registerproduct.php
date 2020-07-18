<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');

// If form submitted, insert values into the database.
if (isset($_REQUEST['name'])){
        // removes backslashes
 $name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
 $name = mysqli_real_escape_string($con,$name); 
 $price = stripslashes($_REQUEST['price']);
 $price = mysqli_real_escape_string($con,$price);
 $description = stripslashes($_REQUEST['description']);
 $description = mysqli_real_escape_string($con,$description);
 
        $query = "INSERT into `projects` (name, price, description)
VALUES ('$name', '$price', '$description')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>Congrats! Software successfully registered.</h3>
</div>";
        }
    }else{ 
?>
    <div class="form">
<h1>Register Product</h1>
<form name="registerproduct" action="" method="post">
<input type="text" name="name" placeholder="Product Name" required />
<input type="text" name="price" placeholder="Price" required />
<input type="text" name="description" placeholder="Description" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
    </body>
</html>