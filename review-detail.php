<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style/stylesheet.css"/>
    <link rel="stylesheet" type="text/css" href="style/text_effect.css"/>
    <link rel="stylesheet" type="text/css" href="style/mobile_version.css"/>
    <meta charset="utf-8">
    <title>Review detail</title>
    <meta name="viewport" content="width=680px">
    <?php

    //$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $server = "h40lg7qyub2umdvb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $username = "t8mvn41zc3dvlxhu";
    $password = "fhzr9pbe4y18yxlz";
    $db = "k6zc9jmzecfdzsgk";

    $conn = mysqli_connect($server, $username, $password, $db);


    if ($conn->connect_error) {
        //If failed to connect
        die("Connection failed: " . $conn->connect_error);
    }

    	$result = mysqli_query($conn, "SELECT * FROM tb_page_ultrabook WHERE id=$id ");
    ?>
</head>
<body>
<?php
include "header.php";
include "nav.php";
?>
<!-- ---------------------------START SECTION------------------------------------------------- -->
<center>
<?php
  $id = $_GET["id"];
  switch ($id) {
      case 0:
          include('contact.php');
          break;
      case 1:
          include('home.php');
          break;
      case 2:
          include('whoweare.php');
          break;
  }
?>
<div name="title" style="border-bottom: solid 1px #6998ba;height:100px;"><h1 style="color:#6998ba;padding:35px" ><strong>ULTRABOOKS</strong></h1></div>
<section>
      <div id="content">
            <?php
                echo "<div id='img_div'><a href='".$row['url']."' </a>";
                echo "<img src='".$row['image']."' >";
                echo "<h3 id='h3-title-item'>".$row['title']."</h3>";
                echo "<div >";
                echo "<p id='p-desc-item'>".$row['description']."<p>";
              echo "</div>";
          echo "</div>";
?>

<!-- ---------------------------END OF SECTION------------------------------------------------- -->
<?php
include "footer.php";
?>
</body>
</html>