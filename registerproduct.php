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
    
    if(isset($_POST['upload'])){
        $vname= $_FILES['file']['vname'];
        $tmp= $_FILES['file']['tmp_name'];
        
        move_uploaded_file($tmp, "videos/", $vname);
        
        $sql = "INSERT into projects (vname) VALUES ('$vname)";
        
        $res = mysqli_query($con,$sql);
        
        if($res == 1){ 
    
    
    
    
            echo "video uploaded successfully!";
        }
    }

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
        if($result){ ?>
            
            <meta http-equiv='refresh' content='0; URL=main.php'>
   <?php         
            echo "<div class='form'>
<h3>Congrats! Software successfully registered.</h3>
</div>";
        }
    }else{ 
?>
    <div class="form">
<h1>Register Product</h1>
        <div class="regiters" style="border: solid 1px black; height: auto; width: 280px; margin-left:550px; margin-top:100px;">
<form name="registerproduct" action="" method="post" style="padding:10px; margin-left:50px;">
<input type="text" name="name" placeholder="Product Name" required/><br><br>
<input type="text" name="price" placeholder="Price" required /><br><br>
<input type="text" name="description" placeholder="Description" required /><br><br>
<input type="text" name="deliverytime" placeholder="Delivery time" required /><br><br>
<form method="post" action="main.php" enctype="multipart/form-data">
    
<input type="file" name="file"><br><br>
    <a href="main.php"><input type="submit" name="upload" value="UPLOAD" required></a>
</form>
<!-- <a href="main.php"><input type="submit" name="submit" value="Register" style="margin-left:104px; margin-bottom:20px; margin-top:40px; width:80px; height:40px;" /></a> -->
</form>
</div>
    </div>
<?php } ?>
    </body>
</html>