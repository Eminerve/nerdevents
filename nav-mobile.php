<!DOCTYPE html>
<html>
<head>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
  <link rel="manifest" href="images/site.webmanifest">
  <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<style>
body {
  font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
}
@media only screen and (max-width: 600px) {
  .mobile-container {
    max-width: 600px;
    margin: auto;
  }

  .topnav {
    overflow: hidden;
    background: rgb(221,58,22);
    background: linear-gradient(125deg, rgba(221,58,22,0.9668242296918768) 10%, rgba(251,194,1,1) 100%);
    position: relative;
  }

  .topnav #myLinks {
    display: none;
    width: 100%;
    margin-top: 3vh;
  }

  .topnav a {
    float: left;
    color: white;
    padding: 1vh 1vh;
    text-decoration: none;
    font-size: 15px;
    text-transform: uppercase;
    list-style-type: none;
  list-style: none;
  }

li {
 list-style: none;
 }

  .topnav a.icon {
    float: right;
    width: 8%;
  }

  .topnav a:hover {
    color: white;
  }

  .active {
    color: white;
  }

  .topnav .logo img{
    width: 60px;
    height: 60px;
  }
}
</style>
</head>
<body>

<!-- Simulate a smartphone / tablet look -->
<div class="mobile-container">

<!-- Top Navigation Menu -->
<div class="topnav">
  <a href="index.php" class="active logo"><img src="https://i.ibb.co/pPYY0s7/logo.png" alt="logo Nerdevents" width="100px" height="100px"></a>
  <div id="myLinks">
    <li><a href="events.php">Events</a></li>
    <li><a href="#">Om Oss</a></li>
    <li><a href="#">Bli Medlem</a></li>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<!-- End smartphone / tablet look -->
</div>

<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>

</body>
</html>
