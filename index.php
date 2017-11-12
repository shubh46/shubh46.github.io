<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
<body>

 <form  action="upload.php" method="POST" enctype="multipart/form-data">
  
  <center>
      <h1> Admin Uploads</h1>
      
  <div class="form-group">

 Movie Name: <input type="text" name="movieName"/><br><br>
 Imdb Rating: <input type="text" name="rating"/><br><br>
 Genre: <input type="text" name="genre"/><br><br>
 Director: <input type="text" name="director"/><br><br>
 Release Date: <input type="text" name="releasedate"/><br><br>
 Runtime: <input type="text" name="runtime"/><br><br>
  
<input type="file" name="audioFile"/>
  <br>
   <input type="submit" value="Upload Audio" name="save_audio"/>
     </div> 
    </form>
     </center>
</body>    
</html>