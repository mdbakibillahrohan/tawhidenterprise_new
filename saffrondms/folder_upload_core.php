<?php
require_once("db.php");

  if(isset($_POST['upload_folder']))
  {
  	if($_POST['foldername'] != "")
  	{
  		$foldername=$_POST['foldername'];
  		if(!is_dir($foldername)) mkdir($foldername);
  		foreach($_FILES['files']['name'] as $i => $name)
		{
  		    if(strlen($_FILES['files']['name'][$i]) > 1)
  		    {  move_uploaded_file($_FILES['files']['tmp_name'][$i],$foldername."".$name);
  		    }
  		}
  		echo "Folder is successfully uploaded";
  	}
  	else
  	    echo "Upload folder name is empty";

        }
  



$foldername = $_REQUEST['foldername'];
// $folderformat = $_REQUEST['folderformat'];
$foldercategorie = $_REQUEST['foldercategorie'];
$folderrule = $_REQUEST['folderrule'];

$sql = "INSERT INTO documents_folder_details (folder_name, folder_categories, folder_rule)
VALUES ('$foldername','$foldercategorie', '$folderrule')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
