<?php
$connect = mysqli_connect("localhost","root","","movie");
if(isset($_POST["query"]))
{ //echo {{ $_POST["query"] }} ;
  // $output ='';
	$query="SELECT * FROM movie WHERE movie_name= '".$_POST["query"]."'";
	 $result = mysqli_query($connect,$query);
	 //$output='<ul class="list-unstyled">';
	 if(mysqli_num_rows($result)>0)
	 {
	 	$row=mysqli_fetch_array($result);
	 	
	 		echo $row["movie_name"] ;
	 		echo $row["description"];


	 }
	 else
	 {
	 	echo "movie name not found";
	 }
	 //$output .='</ul>';
	// echo $output;



}




?>