<?php
$db = mysqli_connect("localhost","root","pass","record_info"); //keep your db name
$sql = "SELECT * FROM testblob";
$sth = $db->query($sql);
while($result=mysqli_fetch_array($sth))
{
echo '<img height="100" width="100" src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';
}
?>

<a href="http://oop-usercrud.com/image/">Upload image</a>