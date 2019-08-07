<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="static/css/SIC.css">
    <style>
    body {
     font: 20px Montserrat, sans-serif;
     line-height: 1.8;
     color: black;
    }
    p {font-size: 16px;}
    .margin {margin-bottom: 45px;}
    .bg-1 {
     background-color: #1abc9c; /* Green */
     color: #ffffff;
    }
    .bg-2 {
     background-color: #474e5d; /* Dark Blue */
     color: #ffffff;
    }
    .bg-3 {
     background-color: #ffffff; /* White */
     color: #555555;
    }
    .bg-4 {
     background-color: #2f2f2f; /* Black Gray */
     color: #fff;
    }
    .container-fluid {
     //padding-top: 70px;
     //padding-bottom: 70px;
    }
    .navbar {
     //padding-top: 15px;
     //padding-bottom: 15px;
     border: 0;
     border-radius: 0;
     margin-bottom: 0;
     font-size: 12px;
     letter-spacing: 5px;
    }
    .navbar-nav  li a:hover {
     color: #1abc9c !important;
    }

      /* Remove the navbar's default margin-bottom and rounded borders */
      .navbar {
        margin-bottom: 0;
        border-radius: 0;
      }

      /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
      .row.content {height: 1400px}

      /* Set gray background color and 100% height */
      .sidenav {
        padding-top: 20px;
        background-color: #f1f1f1;
        height: 100%;
      }

      /* Set black background color, white text and some padding */
      footer {
        background-color: #555;
        color: white;
        padding: 15px;
      }

      /* On small screens, set height to 'auto' for sidenav and grid */
      @media screen and (max-width: 767px) {
        .sidenav {
          height: auto;
          padding: 15px;
        }
        .row.content {height:auto;}
      }
      h1{
        font-style: italic;
        color: #b3d9ff;
        text-decoration: underline;
      }
      h3{
        font-style: normal;
        color: #ffa64d;
      }
      p{
        font-style: normal;
        text-align: center;
        font-size: 15px;
      }

    </style>
    </head>
    <body>

    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">it's S.I.C</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li ><a href="index_login.html">Home</a></li>
          <li><a href="about_login.html">About</a></li>
          <li class="active"><a href="stories_login.html">Stories</a></li>
          <li><a href="Sources.html">Sources</a></li>
          <li><a href="profile.html">Profile</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
        </ul>
      </div>
    </div>
    </nav>

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
