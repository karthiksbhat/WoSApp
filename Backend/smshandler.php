<?php

	$phno=$_GET['phno'];
	$latitude=$_GET['lat'];
	$longitude=$_GET['lon'];

	$username="blank"
	$password="blank"

	# CHANGE DB NAME, USERNAME and password

    #storing in database
    try {
          #echo "before mysql\n";
          $conn = new PDO('mysql:host=localhost;dbname=wosapp', $username, $password);
          #echo "after mysql\n";
         # $conn = new PDO('mysql:host=localhost:3036;dbname=jtest', $username, $password);
          #echo "something\n";
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          #echo "something after set attribute\n";
          # Prepare Query
          #Add picture stuff also here!
          #echo "inserting into table\n";
          $stmt = $conn->prepare('INSERT INTO TABLE_NAME VALUES(:phno, :latitude, :longitude)');
          $stmt->execute(array(
              ':phno' => $name,
              ':latitude' => $latitude,
              ':longitude' => $longitude,
              #':file'
            ));
          #echo "before exit\n";
          #link to successful submission page	
  exit();
					#echo "1";
  } 
  catch(PDOException $e) 
  {
    echo 'Error: ' . $e->getMessage();
    exit();
    		#echo "Form submission failed. Please try again.";        
  }


?>