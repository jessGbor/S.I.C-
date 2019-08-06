<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
}

</style>
  </head>
  <body style="background-image: url('download-3.jpg')">
<div>
<h3>Search for more stories made by users</h3>
<form>
<input type="text" name="search" placeholder="Search..">
</form action="stories_login.html">
<h1>Your Story has been published!</p>
  <h3>Share with your friends about your story!</h3>

</div>


    Title: <?php echo $_POST['Title']; ?><br>
    Comment: <?php echo $_POST['comment']; ?>

  </body>
</html>
