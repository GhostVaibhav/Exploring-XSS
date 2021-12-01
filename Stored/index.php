<?php
include_once './includes/dbh.php'
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stored XSS</title>
    <link rel="stylesheet" href="./public/css/style.css" />
    
  </head>
  <body>
    <div class="header">
      <h2>XSS Blog</h2>
    </div>
    <div class="card">
      <div class="content">
        <h1>Web Security</h1>
        <h3>What you must know about Web-Security, 24 Nov, 2021</h3>
        <img
          src="./img/fly-d-C5pXRFEjq3w-unsplash.jpg"
          style="width: 40vw; height: 50vh;"
          alt=""
        />
        <p style="width: 500px">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio
          assumenda facilis exercitationem nam. Harum nulla, voluptatibus aut
          saepe sequi vel, aliquid animi ea, dignissimos sed expedita
          accusantium est cumque nisi.
        </p>
      </div>
      <div class="commentdiv">
          <?php 
          $sql = "SELECT * FROM posts;";
          $result = mysqli_query($conn, $sql);
          $resultCheck= mysqli_num_rows($result);
          if ($resultCheck > 0){
            while ($row = mysqli_fetch_assoc($result)){
              echo $row['username']."<br>";
              echo $row['comment_content']."<br>";
            }
          }
          
          ?>
          
      <form action="./includes/addcomment.php" method="POST" class="comment">
          <h3>Leave a comment</h3>
        <label for="name">Name: </label
            ><input
            style="margin-left: 30px"
            type="text"
            name="name"
            id="name"
            /><br />
            <label for="comment">Comment: </label>
            <textarea
            name="comment"
            style="margin-top: 20px; margin-left: 7px"
            id="comment"
            cols="16"
            rows="8"
            placeholder="Enter your comment here...."
            ></textarea>
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>

    </div>

    <div class="footer">
      <h2>Made By Krish, Vaibhav and Vijay</h2>
    </div>
  </body>
</html>
