<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="resources/css/stylesheet.css"/>
    <link rel="stylesheet" type="text/css" href="resources/css/card_layout.css"/>
    <link rel="stylesheet" type="text/css" href="resources/css/text_effect.css"/>
    <link rel="stylesheet" type="text/css" href="resources/css/mobile_version.css"/>
    <meta charset="utf-8">
    <title>Review detail</title>
    <meta name="viewport" content="width=680px">
<?php
            $server = "h40lg7qyub2umdvb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
            $username = "t8mvn41zc3dvlxhu";
            $password = "fhzr9pbe4y18yxlz";
            $db = "k6zc9jmzecfdzsgk";

            $conn = mysqli_connect($server, $username, $password, $db);


            if ($conn->connect_error) {
                //If failed to connect
                die("Connection failed: " . $conn->connect_error);
            }

              $id = $_GET['id'];
            	$result = mysqli_query($conn, "SELECT * FROM tb_page_gaminglaptop WHERE id=$id");
?>
</head>
<body>
<?php
      include "header.php";
      include "nav.php";
?>
<center>
<div name="title" style="border-bottom: solid 1px #6998ba;height:100px;float:left;"><h1 style="color:#6998ba;padding:35px" ><strong>Review Detail</strong></h1></div>
<section>
            <div id="content">
              <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <img class="img-detail" src="<?php echo $row['image'];?>" >
                    <h3 id="h3-title-item"><?php echo $row['title'];?></h3>
                    <p id="p-desc-item"><?php echo $row['description'];?><p>
                    </div>
              <?php }  ?>
</section>
<?php
      include "footer.php";
?>
</body>
</html>
