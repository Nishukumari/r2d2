<?php 
$connect = mysqli_connect("localhost","root","","movie");
if(isset($_POST["query"]))
{
	$output ='';
	$query="SELECT * FROM movie WHERE movie_name LIKE '%".$_POST["query"]."%'";
	 $result = mysqli_query($connect,$query);
	 $output='<ul class="list-unstyled">';
	 if(mysqli_num_rows($result)>0)
	 {
	 	while($row=mysqli_fetch_array($result))
	 	{
	 		$output.='<li>'.$row["movie_name"].'</li>';
	 	}

	 }
	 else
	 {
	 	$output .='<li>movie name not found</li>';
	 }
	 $output .='</ul>';
	 echo $output;
}
?>