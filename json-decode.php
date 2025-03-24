<?php  
$json_string = 'jsondummy.json';
$jsondata = file_get_contents($json_string);
$arr = json_decode($jsondata, true);
 echo '<table id="load-table" border = "1" cellpadding="10px" width="100%">';
 echo "<tr>
 <th>ID</th>
 <th>NAME</th>
 <th>CLASS</th>
 <th>ADDRESS</th>
 <th>PHONE</th>
</tr>";
 foreach ($arr as list("id"=>$id, "name"=>$name, "sclass"=>$sclass, "address"=>$address,"phone"=>$phone)){ 
 echo "<tr><td>{$id}</td><td>{$name}</td><td>{$sclass}</td><td>{$address}</td><td>{$phone}</td></tr>";
 }
  echo "</table>";


?>