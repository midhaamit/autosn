<?php

include 'connection.php';
$email = $_GET["q"];
$query = "SELECT * FROM `customer`";
$results = $mysqli->query($query);

foreach($results as $row) {
    if(strpos($row["email id"], $email) !== false) {
        $emailid = $row["email id"];
        ?><div onclick="writeToTextArea('<?php echo $emailid; ?>');" onmouseover="" style="cursor: pointer;"><?php echo $emailid; ?></div>
        <?php
    }
}
?>
