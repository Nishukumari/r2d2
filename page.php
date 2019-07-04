<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  ul{
    background-color:#eee;
    cursor:pointer;

  }
  li{
    padding:5px;

  }
  body{
    background-image:url("https://freeauctiondesigns.com/ebay/templates/dvd_movie_popcorn_films/welcome.gif");
  }

</style>
</head>
<body >
  <br /><br />
<div class="container" style="width:600px;" >
  <h1 align="center"><bold>Movies</bold></h1><br / >
  <form class="form-inline">
	<label>Enter movie name</label>
	<input type="text" name="movie" id="movie" class="form-control" placeholder="Search" style="width:50%;" />
  <button name="button" id="button" class="btn btn-primary">Search</button>
</form>
   <div class="row">
    <div class="col-sm-2"></div>

     <div id="movielist" class="col-sm-7"></div>
   </div>

  <br><br>
   

  </div>

     <div id="movieinformation"></div>
   

<script>
$(document).ready(function(){
  $('#movie').keyup(function(){

    var query=$(this).val();
    if(query!='')
    {
      $.ajax({
         url:"match.php",
         method:"POST",
         data:{query:query},
         success:function(data)
         {
          $('#movielist').fadeIn();
          $('#movielist').html(data);
         }


      });
    }
  });
$(document).on('click','li',function(){
   $('#movie').val($(this).text());
   $('#movielist').fadeOut();
});


$('#button').on('click',function(){

 var query=$('#movie').val();
    if($.trim(query)!='')
    {
      $.ajax({
       url:"movieinfo.php",
        method:"POST",
         data:{query:query},
         success:function(data)
        {
          
         $('#movieinformation').html(data);
         }


      });
    }
   //alert(query);
});



    });

  </script>
  
</body>
</html>
