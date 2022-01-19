<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <link rel="stylesheet" href="style_events.css">
    <title>Nerdevents.se</title>
  </head>
  <header>
    <div class="nav-screen">
      <section class="barnav">
        <div class="logo">
          <a href="index.php"><img src="https://i.ibb.co/pPYY0s7/logo.png" alt="logo Nerdevents" width="100px" height="100px"></a>
        </div>

        <div class="barre_nav">
          <ul>
            <li class="event_menu"><a href="#">Events</a></li>
            <li class="event_menu"><a href="#">Om Oss</a></li>
            <li class="event_menu"><a href="#">Bli Medlem</a></li>
          </ul>
        </div>
      </section>
    </div>

    <div class="nav-screen-mobile">
      <!-- Simulate a smartphone / tablet look -->
      <div class="mobile-container">
        <!-- Top Navigation Menu -->
        <div class="topnav">
          <a href="index.php" class="active logo"><img src="https://i.ibb.co/pPYY0s7/logo.png" alt="logo Nerdevents" width="100px" height="100px"></a>
          <div id="myLinks">
            <li><a href="#">Events</a></li>
            <li><a href="#">Om Oss</a></li>
            <li><a href="#">Bli Medlem</a></li>
          </div>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
        </div>
      </div>
    </div>

  </header>
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
  <body>

<!-- banner image -->
    <div class="banner">
      <img src="https://i.ibb.co/2qjY03W/stargate-banner.jpg" alt="baniere">
    </div>

<!-- Flex section event thumbnails -->

    <section class="events_parent">
      <div class="events_child">
        <img class="events_img" src="" alt="">
        <div class="events_text">
          <h3>Name of the event</h3>
          <p>description of the show</p>
          <p><em>admission price</em> </p>
        </div>
      </div>
    </section>
  </body>
</html>
