<?php
	$mysql = new mysqli("localhost","root","","strath_transport");

	$firstson=$_POST['name1'];
	
	$secondson=$_POST['name2'];
	
	$thirdson=$_POST['name3'];
	
	$fourthson=$_POST['name4'];
	
	$fifthson=$_POST['name5'];
	
	$grade=$_POST['grade'];
	/*foreach($_POST['grade'] as $grade)
	{
        echo $grade;
    }*/
    $transmorn=$_POST['trans22m'];
    
    $transeven=$_POST['trans22e'];
    
    $trans23=$_POST['trans23'];
    
    $bustrans23=$_POST['schooltrans23'];
    
    $address=$_POST['address'];
    
    $latitude=$_POST['lat'];
    
    $longitude=$_POST['long'];
    
    $city='Nairobi';
    
     $sql = "INSERT INTO tbl_info (1stson,2ndson,3rdson,4thson,5thson,grade,transport22morning,transport22evening,transport23,schooltransport2023,address,latitude,longitude,city)
     VALUES ('$firstson','$secondson','$thirdson','$fourthson','$fifthson','$grade','$transmorn','$transeven','$trans23','$bustrans23','$address','$latitude','$longitude','$city')";
     if(mysqli_query($mysql, $sql))
     {
     	echo '<script>
        alert("Successfully captured details");
         window.location="http://localhost/maps/csv.php";
        </script>';
     }
      mysqli_close($mysql);
?>