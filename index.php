<?php
$name="";
$email="";
if ($_SERVER["REQUEST_METHOD"] == "GET") 
{
    if(empty($_GET['name']))
    {
        //$name="";
        echo "Empty";
    }
    
    else {
        $myfile = fopen("hello.txt","w") or die("Unable to open");
        $name=$_GET['name'];
        fwrite($myfile,$name);
   
        fclose($myfile);
    }

    if(empty($_GET['email']))
        {
            //$email="";
            echo"Empty";
        }
        else{
            $myfile = fopen("hello.txt","w") or die("Unable to open");
            $email=$_GET['email'];
            fwrite($myfile,$email);
       
            fclose($myfile);
        }
       
        
        
        

        
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="get">
 
        <fieldset>
            <legend>Registration</legend>
        <label for="name">Name:</label>
    <input type="text" name="name" id="" placeholder="Enter your name"><?php echo"$name";?><br><hr>
    <label for="email">Email:</label>
    <input type="email" name="email"placeholder="Enter your email"><?php echo"$email";?><br><hr>
    <label for="pass">Password:</label>
    <input type="password"name="pass"id="pass"placeholder="Enter your password"><br><hr>
    <label for="file">Your Image:</label>
    <input type="file"name="file"id="file" placeholder="choose"><input type="submit" value="Upload Image" name="submit"><br><hr>
    <button>submit</button>
    


    
        </fieldset>
</form>
    
</body>
</html>