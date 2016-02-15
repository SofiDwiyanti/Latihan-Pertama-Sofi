<?php
	header("Content-type: application/json");
    //open connection to mysql db
    $connection = mysqli_connect("localhost","root","","transiti") or die("Error " . mysqli_error($connection));
    //fetch table rows from mysql db
    $sql = "select angkot.*,rute.* from angkot,rute where angkot.angkot_id = rute.angkot_id";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
    //create an array
    $transarray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $transarray[] = $row;
    }
    echo json_encode($transarray);
	
    //print_r ($transarray);
?>