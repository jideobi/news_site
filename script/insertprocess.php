<?php
require_once ('config.php');

include('simple_html_dom.php');

$html = file_get_html('https://www.sunnewsonline.com/');

echo $html->find('a', 0)->plaintext;

$list = $html->find('div [class="jeg_postsmall jeg_load_more_flag"]',0); 


//$list_array = $list->find('li');
//for($i = 0; $i < sizeof($list_array); $i++) {
  //  echo $list_array[$i];}

foreach( $list->find('a') as $element){
    $sql = "INSERT INTO scrapped_data (updates)
    VALUES ('$element')";
    if ($conn->query($sql) === TRUE){
        echo ('update successful');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
 $conn->close();
?>