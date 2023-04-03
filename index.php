<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php echo"Hello world"; 
?><br>
<?php $Sum = 19;
echo $Sum;
?>
<br>
<?php $content="This is <b>News</b>";
echo $content;
?>
<?php
$UserRole = "admin";
if ($UserRole=="admin") {
    echo"you are admin";
}
else{
    echo"Not admin";
}
for($i=100; $i<100; $i++) {
echo"<div class= 'x'> Hello </div>";
}
?>
<?php
$name ="admin";
if ($name=="admin"){
    ?>
    <div class="auth">You are admin</div>
    <?php
}
?>
</body>
</html>