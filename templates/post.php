<!DOCTYPE HTML>
<html>
  <head>
    <style>
    .error {color: #FF0000;}
    </style>

    <style>
    .center {
      margin: auto;
      width: 80%;
      border: 5px solid black;
      padding: 15px;
      text-align:center;
    }
    </style>
  </head>
<body style="background-image: url('download-3.jpg');">

  <?php
  // define variables and set to empty values
  $TitleErr = $commentErr= "";
  $Title = $comment= "";

  // if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //   if (empty($_POST["Title"])) {
  //     $TitleErr = "Title is required";
  //   } else {
  //     $Title = test_input($_POST["Title"]);
  //     // check if name only contains letters and whitespace
  //     if (!preg_match("/^[a-zA-Z ]*$/",$Title)) {
  //       $TitleErr = "Only letters and white space allowed";
  //     }
  //   }
  //
  //   if (empty($_POST["comment"])) {
  //     $comment = "";
  //   } else {
  //     $comment = test_input($_POST["comment"]);
  //   }
  // }
  //
  //
  // function test_input($data) {
  //   $data = trim($data);
  //   $data = stripslashes($data);
  //   $data = htmlspecialchars($data);
  //   return $data;
  // }
  ?>

  <div class="center">
    <h2>Express yourself! Share your personal experiences.</h2>
  </div>
  <p><span class="error">* required field</span></p>

  <form method="post" action="post_dets.php">
    Title: <input type="text" name="Title" value="">
    <span class="error">* <?php echo $TitleErr;?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    <input type="submit" name="submit" value="Submit">
  </form>

  </body>
</html>
