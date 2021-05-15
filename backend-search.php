<?php
$link = mysqli_connect("localhost", "root", "", "examen3");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if(isset($_REQUEST["term"])){
    $sql = "SELECT * FROM houses WHERE place LIKE ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        $param_term = $_REQUEST["term"] . '%';
        
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            if(mysqli_num_rows($result) > 0){
                echo'<div class="gift row gift--double no-border">';
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo '<div class="shadow col-12 col-sm-6">';
                    echo '<div class="gift__img col-12"><img src="assets/img/gift_01.jpg"></div>';
                    echo '<div class="gift__info col-12">';
                    echo '<h4 class="gift__name">' . $row["name"].'</h4>';
                    echo '<div class="gift__bottom row">';
                    echo '<div class="gift__price-wrap col-12">';
                    echo '<div class="gift__normal-price"><span>Plaats: ' . $row["place"].'</span></div>';
                    echo '<div class="gift__normal-price"><span>user: ' . $row["username"].'</span></div>';
                    echo '<div class="gift__normal-price"><span>geplaatst: ' . $row["created_at"].'</span></div>';
                    echo '<div class="gift__today-price"><span class="gift__data">$' . $row["price"].'</span></div>';
                    echo '</div>';
                    echo '<div class="gift__cta-wrap col-12"><button class="btn btn-primary" type="button">Contact</button></div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                echo'</div>';
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    mysqli_stmt_close($stmt);
}
 
mysqli_close($link);
?>