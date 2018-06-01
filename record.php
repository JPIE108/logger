<html>

 <head>
<?php
$txt = $_POST['name'];
$info = array(
"0" => array(
"Sample Data" => "$txt",

)
);
$filename = 'record.php';
$output = fopen("Data.csv", "a");
$header = array_keys($info[0]);
fputcsv($output, $header);
foreach($info as $row)
{
 fputcsv($output, $row);
}
fclose($output);
?>
<script>
 function home() {
     window.location.replace("/");

} 
</script>
     <title>
CPPS Tech Support
      </title> 
       </head>




   <body>
   <p><h2>Data Recorded</h2></p>


     </body>




     </html>
