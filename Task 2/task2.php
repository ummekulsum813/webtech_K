<?php
   	

	   //Get form data
	   $formdata = array(
	      'firstName'=> $_POST["firstName"],
	      'lastName'=> $_POST["lastName"],
		  'age'=> $_POST["age"],
		  
		  'designation'=> $_POST["designation"],
		  'language'=> $_POST["language"],
	      'email'=>$_POST["email"],
		  'password'=>$_POST["password"],
		  
	      
	   );
	    $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       //Convert updated array to JSON
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   //write json data into mydata.json file
	   if(file_put_contents("mydata.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);

    
	 echo "my value: ".$mydata[1]->lastName;
/*	 foreach($mydata as $myobject)
	 {
	 foreach($myobject as $key=>$value)
	{
		echo "your ".$key." is ".$value."<br>";
	} 
	}
	*/
?>
<!DOCTYPE html>
<html>
<body>
<form action="process.php" method="POST">
	First name:<br>
	<input type="text" name="firstName">
	<br><br/>
	Last name:<br>
	<input type="text" name="lastName">
	<br><br>
	Age:<br>
	<input type="text" name="age">
	<br><br>
	you options are
<br>

<input type="checkbox" id="language1" name="language" value="Java">
 I prefer Java<br>
<input type="checkbox" id="language2" name="language2" value="PHP">
I prefer PHP<br>
<input type="checkbox" id="language3" name="language3" value="C++">
 I prefer C++<br>
<br>
<?php echo $validatecheckbox; ?>

<?php echo $v1;?>

<?php echo $v2;?>

<?php echo $v3;?>
<br>
<p>Please select your designation:</p>
  <input type="radio" id="junior programmer" name="designation" value="junior programmer">
  <label for="junior programmer">Junior Programmer</label><br>
  <input type="radio" id="senior programmer" name="designation" value="senior programmer">
  <label for="senior programmer">Senior Programmer</label><br>
  <input type="radio" id="project lead" name="designation" value="project lead">
  <label for="project lead">Project Lead</label>
  <br>
  <?php echo $validateradio; ?>
<br>
	
	  
	Email:<br>
	<input type="text" name="email">
	<br><br>
	Password:<br>
	<input type="text" name="password">
	<br><br>
	  
	<br>
<input type="file" name="filetoupload">
<br><br>
	<input type="submit" value="Submit">
	<input type="reset" value="RESET">
</form>
</body>
</html>