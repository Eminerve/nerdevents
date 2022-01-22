<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" href="style_events.css"> -->
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
    <section class="titre_page">
      <h1>Events</h1>
    </section>
    <section class="events">
      <div class="thumbnails"><a href="page_event.php">
        <img class="events_img" src="https://i.ibb.co/Wvt1xZN/geek-cmas-tree.png" alt="geek tree"></a>
        <div class="events_text">
          <h3>Name of the event</h3>
          <p>description of the show</p>
          <p><em>admission price</em> </p>
        </div>
      </div>
      <div class="thumbnails"><a href="#">
        <img class="events_img" src="https://i.ibb.co/QvT4Tyn/batman.png" alt="batman" border="0"></a>
        <div class="events_text">
          <h3>Name of the event</h3>
          <p>description of the show</p>
          <p><em>admission price</em> </p>
        </div>
      </div>
      <div class="thumbnails"><a href="#">
        <img class="events_img" src="https://i.ibb.co/qkdmQhV/avengers.png" alt="avengers" border="0"></a>
        <div class="events_text">
          <h3>Name of the event</h3>
          <p>description of the show</p>
          <p><em>admission price</em> </p>
        </div>
      </div>
      <div class="thumbnails"><a href="#">
        <img class="events_img" src="https://i.ibb.co/rZh1t2D/Capture-d-cran-2022-01-19-120629.png" alt="Capture-d-cran-2022-01-19-120629" border="0"></a>
        <div class="events_text">
          <h3>Name of the event</h3>
          <p>description of the show</p>
          <p><em>admission price</em> </p>
        </div>
      </div>
      <div class="thumbnails"><a href="#">
        <img class="events_img" src="https://i.ibb.co/gT090rz/onepiece.png" alt="onepiece" border="0"></a>
        <div class="events_text">
          <h3>Name of the event</h3>
          <p>description of the show</p>
          <p><em>admission price</em> </p>
        </div>
      </div>
      <div class="thumbnails"><a href="#">
        <img class="events_img" src="https://i.ibb.co/Z80KwV8/convention.png" alt="convention" border="0"></a>
        <div class="events_text">
          <h3>Name of the event</h3>
          <p>description of the show</p>
          <p><em>admission price</em> </p>
        </div>
      </div>

    </section>
  </body>
  <style media="screen">

  @font-face {
    font-family: "titre_page";

    src: url("font/ethnocentric.ttf") format('truetype');
  }

  @font-face {
    font-family: "titre_page2";

    src: url("font/CantedFXBlod.otf") format('truetype');
  }
  html{
    width:100%;
    height: 100%;
    overflow-x: hidden;
    font-size: 100%;
    font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
  }

  body{
  margin: 0;
  width: 100%;
  background-color: rgba(53, 102, 133);
  }

  header{
    background: rgb(14,33,40);
    background: linear-gradient(125deg, rgba(53, 102, 133,0.9668242296918768) 10%, rgba(46,238,253,1) 60%, rgba(53, 102, 133,0.9668242296918768) 100%);

  }

  /* Responsive */

  .nav-screen{
  display: contents;
  }

  .nav-screen-mobile{
  display: none;
  }

  /* Navigation style laptop */

  .barnav{
  width: 90%;
  margin: auto;
  padding: 5px 5px 5px 5px;
  height: 7%;
  display: flex;
  flex-direction: row;
  align-content: center;
  align-items: center;
  justify-content: space-between;
  }

  header ul{
  display: flex;
  flex-direction: row;
  list-style: none;
  text-align: center;
  align-items:center;
  margin: 0em;
  margin-left: 40%;
  color: #000;
  padding-right: 0%;
  height: 6em;
  }

  header li{
  list-style: none;
  text-align: center;
  padding: 0 25px 0 25px;
  font-size: 130%;
  text-transform: uppercase;
  }

  header li:hover{
  color: #000;
  }

  .logo {
  width: 7%;
  align-items: center;
  }

  .barre_nav{
  width: 80%;
  }

  header a{
  text-decoration: none;
  color: #fff;
  font-weight: 600;
  letter-spacing: 0.05em;
  font-size: 100%;
  }

  header a:hover{
  color: rgb(14,33,40);
  }

  /* Baniere */

  .banner{
  margin: 0;
  position: absolute;
  z-index: 1;
  float: left;
  width: 100%;
  }

  img{
  margin: 0px;
  width: 100%;
  }


/* Page title */
  .titre_page{
    z-index: 2;
    width: 50%;
    position: absolute;
    text-align: center;
    justify-content: center;
    align-items: center;
    margin-left: 25%;
    font-size: 400%;
    text-transform: uppercase;
    color: rgb(245, 246, 250);
    font-family: "titre_page2", "titre_page", monospace;
    font-weight: lighter;
    text-shadow: rgb(103, 128, 159) 2px 2px 2px;
  }



  /* event thumbnails */
  .events{
  width: 80%;
  z-index: 2;
  text-align: center;
  position: absolute;
  margin: 20% 10%;
  color: white;
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  flex-wrap: wrap;
  }

  .thumbnails{
    min-width: 300px;
    height: 350px;
    background: rgb(245, 246, 250);
    color: white;
    margin-bottom: 20px;
    padding: 12px;
    border-radius: 10px;
  }
.thumbnails img{
  filter: grayscale();
  width: 300px;
  height: 260px;
  overflow-y: hidden;
}

 .events_text{
  display: none;
}

.thumbnails:hover .events_text{
  transition-duration: 1s;
  display: contents;
  text-align: left;
  padding-left: 10px;
  line-height: 5px;
  text-decoration: none;
  color:rgb(48, 57, 82);
}
.thumbnails:hover{
  transition-duration: 1s;
  min-width: 320px;
  height: 370px;
  padding: 20px;
}

.thumbnails:hover img{
  transition-duration: 1s;
  filter: none;
  width: 320px;
  height: 280px;
  overflow-y: hidden;
}

  </style>
</html>
