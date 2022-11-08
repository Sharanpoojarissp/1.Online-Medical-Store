<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
<div class="container">
            <a href="aushadh.html"><img src="images/logo.png" alt="aushadh" width="25%"></a>
            <hr><h1>**Contact Us**</h1>
            <hr><h4>Email us at customerservice@eshoppe.com</h4><hr>
        </div>
        <div class="contact">
            <img src="images/customer.png" alt="customer support">

            <form action="" method="post">

            <label for="text"><h3>Feedback:</h3></label>
            

        <textarea name="textdata" id="text" placeholder="write here !!! Please start with writing your email" cols="80" rows="20" required></textarea> 

            <button>submit</button>
            <button><a href="aushadh.html" style="text-decoration: none; color:black">Home</a></button>
            
            
            </form>
            
            

                
            
        </div>

    
</body>
</html>



<?php
              
if(isset($_POST['textdata']))
{
$data=$_POST['textdata'];

$fp = fopen('data.txt', 'a');

fwrite($fp, $data);
fclose($fp);
}
?>