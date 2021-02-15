<!DOCTYPE html>
<html lang="nl">

<head>
    <title></title>
    <link type="text/css" href="" rel="stylesheet">
</head>

<body>
    <div class="header">
        <p class="titel">Create backend</h1>
    </div>
    <?php
    $item1 = $_POST["#"];
    $item2 = $_POST["#"];
    $item3 = $_POST["#"];
    $item4 = $_POST["#"];
    $item5 = $_POST["#"];


    require_once "connect.php";

    $sql = $conn->prepare("
                            insert into TABLENAME values(
                                :voorbeeld1, :voorbeeld2, :voorbeeld3, :voorbeeld4, :voorbeeld5
                            )
                            ");
    $sql->bindParam(":voorbeeld1", $item1);
    $sql->bindParam(":voorbeeld2", $item2);
    $sql->bindParam(":voorbeeld3", $item3);
    $sql->bindParam(":voorbeeld4", $item4);
    $sql->bindParam(":voorbeeld5", $item5);

    $sql->execute();
       
    echo "<p align=center># is toegevoegd</p>";
        echo "<p align=center><a href='index.php'> terug naar het menu</a></p>"; 

    
    
    ?>
</body>

</html> 