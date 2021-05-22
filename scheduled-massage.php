<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheduled Massage programming in php</title>
    <style>
    *{
        background-color: aqua;
    }
   p {
    text-align: center;
    font-family: cursive;
    font-style: oblique;
    color: white;
    padding: 10%;
    font-size: xx-large;
    font-weight: ;
    /*  */
}
    </style>
</head>

<body>
    <?php
    $dayofweek = date("w");
    
    switch ($dayofweek) {
        case '0':
            echo "<p>its SUNDAY</p>";
            break;
        case '1':
            echo "<p>its MONDAY</p>";
             break;
         case '2':
             echo "<p>its TUESDAY</p>";
             break;
         case '3': 
            echo "<p>its WEDNESDAY</p>";
            break;
        case '4':
            echo "<p>its TRUSDAY</p>";
            break;
        case '5':
            echo "<p>ALLHAMDULLILAH  ITS FRIDAY<p>";
            break;
        case '6':
            echo "<p>its SATURDAY</p>";
            break;
        default:
        echo "<p>ERROR</p>";
    }  
    ?>
</body>

</html>