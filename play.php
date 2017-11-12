<!DOCTYPE html>
<html>
   <head>
       <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>
    <body>
        <div style="height:45px;background-color:crimson;color:white;font-size:36px;text-align:center" ><h1> PLAY AND DOWNLOAD MOVIES </h1></div><br><br><br>
        <center>
            
            <video width="900" height="500" controls>
	<source src="<?php echo $_GET['name'];?>" type="video/mp4">
	</video> 
        
            </source>
            
        </video><br>
        <?php echo $_GET['name'];?></center>
    </body>
</html>