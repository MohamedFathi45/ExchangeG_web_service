<?php
include_once('initialize.php');
function get_advertisements($link) {
    $query = "SELECT * FROM advertisement";
    $root_element_name = 'advertisements';
    $wrapper_element_name = 'advertisement';
    print_result($query, $root_element_name, $wrapper_element_name,$link);
}
function print_result($query, $root_element_name, $wrapper_element_name,$link){
    $result = mysqli_query($link ,$query) or die('query failed '.mysqli_error());
    echo "<$root_element_name>";
    while($line = mysqli_fetch_array($result , 1)){
        echo "<$wrapper_element_name>";
        foreach($line as $key => $col_value){
            echo "<$key>$col_value</$key>";
        }
        echo "</$wrapper_element_name>";
    }
    echo "</$root_element_name>";
    mysqli_free_result($result);
}
header("Content-Type: text/xml");
$path = $_SERVER['PATH_INFO'];
if($path != null){
    $path_params = explode('/',$path);
}
if($_SERVER['REQUEST_METHOD'] =='GET'){
    get_advertisements($link);
}




?>