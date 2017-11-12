<?php


if(isset($_POST['save_audio']) && $_POST['save_audio']=="Upload Audio")
{
    $movieName=$_POST['movieName'];
    $rating=$_POST['rating'];
    $genre=$_POST['genre'];
    $director=$_POST['director'];
    $releasedate=$_POST['releasedate'];
    $runtime=$_POST['runtime'];
    
    $dir='uploads/';
$audio_path=$dir.basename($_FILES['audioFile']['name']);
  
if(move_uploaded_file($_FILES['audioFile']['tmp_name'],$audio_path))
{
    echo "uploaded successfully";
    saveAudio($audio_path);
    
    displayAudios();
}

}

function displayAudios(){
    $conn =mysqli_connect('localhost','root','','video');
 if(!$conn){
     die('server not connected');
 } 
    
    $query="select * from movie_table";
    $r=mysqli_query($conn,$query);
    
    while($row=mysqli_fetch_array($r)){
		echo $row['id'];
		echo $row['movieName'];
        echo '<a href="play.php?name='.$row['FileName'].'">'.$row['FileName'].'</a>';
        echo "<br/>";
    }
    mysqli_close($conn);
}




function saveAudio($fileName){
	
 $conn =mysqli_connect('localhost','root','','video');
  $movieName=$_POST['movieName'];
    $rating=$_POST['rating'];
    $genre=$_POST['genre'];
    $director=$_POST['director'];
    $releasedate=$_POST['releasedate'];
    $runtime=$_POST['runtime'];
 if(!$conn){
     die('server not connected');
 }  
    $query="insert into movie_table(FileName,movieName,rating,genre,director,releasedate,runtime)values('{$fileName}','{$movieName}','{$rating}','{$genre}','{$director}','{$releasedate}','{$runtime}')";
    mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn)>0)
    {
        echo "audio file path saved in dtabase";
    }
    mysqli_close($conn);
}


?>