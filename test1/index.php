<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Output</title>
</head>
<body>

<!-- input -->
<form method="post" action="">


<Input type="name" placeholder="Halkaan Gali Magac" name="magac">
<input type="submit" name="btn" value="Output">


<!-- out -->
<?php
if(isset($_POST['btn'])){
    if(empty($_POST['magac']))
    {
        echo "Buuxi Meelaha Banaan";
    }
    else{
      $magac = $_POST['magac'];
      echo $magac;
    }
}
?>



</form>

    
</body>
</html>