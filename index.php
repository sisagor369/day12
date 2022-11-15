<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="one">
    <div class="con">
        <h2>Dhaka Poly</h2>
        <h2>SAiful</h2>
        <h2>CmT</h2>
        <h1><?php echo val() ?></h1>
    </div>
</div>
<div class="two">
    <h2>Menu</h2>
</div>
    <?php
    function val(){
    $n = 45;
    $n2 = 45;
    $res= $n + $n2;
    return $res;
    }
    ?>
</body>
</html>