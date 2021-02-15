<!DOCTYPE html>
<html lang="nl">

<head>
    <title></title>
    <link type="text/css" href="" rel="stylesheet">
</head>

<body class="body2">
    <div class="header">
        <p class="titel">update</p>
    </div>
    <?php $autokenteken = $_POST["autokentekenvak"];
    $automerk = $_POST["automerkvak"];
    $autotype = $_POST["autotypevak"];
    $autokmstand = $_POST["autokmstandvak"];
    $klantid = $_POST["klantidvak"];


    require_once "connect.php";

    $sql = $conn->prepare("
        update auto set automerk= :automerk,
        autotype= :autotype,
        autokmstand= :autokmstand,
        klantid= :klantid where autokenteken= :autokenteken ");

    $sql->execute([
        "autokenteken" => $autokenteken,
        "automerk" => $automerk,
        "autotype" => $autotype,
        "autokmstand" => $autokmstand,
        "klantid" => $klantid
    ]);
    echo "<div class='center' align='center'>";
    echo "<p>De auto is gewijzigd</p>";
    echo "<p><a href='Gar-menu.php'> terug naar het menu</a></p>";
    echo "</div>";
    ?>
</body>

</html> 