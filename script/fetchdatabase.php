<?php

include('config.php');

$sql = "SELECT updates FROM scrapped_data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        $update =$row['updates']; 
        
        
        echo "-- " . $row['updates'] . "<br>" .  "<br>" . "<br>";
    }
} 
$conn->close();
?>