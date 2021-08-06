<?php
include 'koneksi.php';
//Define the query
$query = "DELETE FROM wajibpajak_data WHERE name={$_POST['NPWP']} LIMIT 1";

//sends the query to delete the entry
mysqli_query ($query);

if (mysqli_affected_rows() == 1) { 
//if it updated
?>

            <strong>Contact Has Been Deleted</strong><br /><br />

<?php
 } else { 
//if it failed
?>

            <strong>Deletion Failed</strong><br /><br />


<?php
} 
?>