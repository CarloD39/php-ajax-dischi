<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>


<body>
    
<?php

    require_once(dirname(__FILE__) . "/database/database.php");?>  
 
    <div class="container-album">  
        <?php  foreach($dischs as $disch) {?>
            <div class="disch-picture">
                <?php echo "<img class='pic' src=\"{$disch['poster']}\">" ?>
            </div>
            <div class="disch-details">
                <h3><?php echo $disch['title'] ?></h3>
                <p><?php echo $disch['author'] ?></p>
                <p><?php echo $disch['year'] ?></p>
            </div>                     
    </div>

<?php }



?>

</body>

</html>