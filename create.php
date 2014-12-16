<?php
/*
ein formular auf dem wir neue einträge in 
die Teilnehmer Tabelle machen 

tln_namen
tln_birthday
tln_height
tln_gen_id

+ post formular
+ radio button group 
*/

$db = oci_connect('hr', 'hr', 'kurs2.wifi');
if (empty($_POST)) { 
  
  $sql = "select gen_id, gen_name from gender";
  $q = oci_parse($db, $sql);
  $r = oci_execute($q, OCI_DEFAULT);
  $table = array();  
  while ($row = oci_fetch_array($q, OCI_ASSOC)) { 
    $table[] = $row;	
  }   
  
?>
<h2>Insert Teilnehmer</h2>
<form class="form-horizontal" role="form" 
    action='<?php $PHP_SELF; ?>' method='post'>
  <label for="name" >Name</label>
  <input type='text' name='name'/><br>
  <label for="height" >Height</label>
  <input type='text' name='height'/><br>
  <label for="birthday" >Birthday</label>
  <input type='text' name='birthday'/><br>
  <div class="form-group">  
    <?php foreach ($table as $gen) {
printf("<input type='radio' name='gender' value='%s'>%s</input>\n", 
	     $gen['GEN_ID'], $gen['GEN_NAME']);	   
	} 
	?>  
  
  </div>  
  <div class="col-sm-offset-2 col-sm-10">
    <input type="submit" value="Suchen" class="btn"/> 
  </div>
</form>
<?php
} else {
$sql = 
"insert into teilnehmer (
  tln_id,
  tln_name,
  tln_height,
  tln_birthday,
  tln_gen_id
  ) values (
  seq.nextval,
  :b_tln_name,
  :b_tln_height,
  to_date(:b_tln_birthday, 'yyyy.mm.dd'),
  :b_tln_gender
  )";
           
  $q = oci_parse($db, $sql);
  
  /*
  foreach ($_POST as $name => $value) {
    oci_bind_by_name($q, ":b_tln_".$name,  $value );
	echo "$name $value<br>\n";
  }	
  */
  oci_bind_by_name($q, ":b_tln_name",  $_POST['name'] );
  oci_bind_by_name($q, ":b_tln_height",  $_POST['height'] );
  oci_bind_by_name($q, ":b_tln_birthday",  $_POST['birthday'] );
  oci_bind_by_name($q, ":b_tln_gender",  $_POST['gender'] );

  try {
    $r = oci_execute($q);
  } catch (Exception $e) {
    echo "Warning?";
	# print_r($e);
  }
}  