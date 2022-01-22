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

    <section class="identity_card">
      <div class="part1_card">
        <h2>NERDEVENTS</h2>
      </div>
      <div class="part2_card">

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
  background: linear-gradient(10deg, rgb(52, 172, 224,0.3) 40%, white 100%);
align-content: center;
text-align: center;
  }

  header{
    background: rgb(14,33,40);
    background: linear-gradient(125deg, rgb(186, 220, 88,0.9668242296918768) 10%, rgb(106, 176, 76) 60%, rgb(186, 220, 88,0.9668242296918768) 100%);

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
  height: 17%;
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

/* Identity Card  */

.identity_card{
  width: 60%;
  align-items: center;
  align-content: center;
  text-align: center;
  margin: auto;
  margin-top: 3%;
  height: 70%;
/*  border: solid black 2px;*/
  border-radius: 30px;
  box-shadow: grey 2px 2px 2px 2px;
background: linear-gradient(125deg, rgb(255, 218, 121,0.4) 10%, rgb(255, 204, 204,0.7) 60%, rgb(255, 218, 121,0.4) 100%);
}

.part1_card{
  border-radius: 30px 30px 0 0;
  border-bottom: solid black 2px;
  background-color: rgb(247, 241, 227,0.7);
  text-align: center;
  align-content: center;
  justify-content: center;
  align-self: center;
}
.part1_card h2{
  font-family: Arial;
  text-shadow: 1px 1px grey;
  align-self: center;
  text-align: center;
  margin: auto;
  width: 90%;
  padding-top: 15px;
  padding-bottom: 15px;
  letter-spacing: 2em;
  font-size: 150%;
  line-height: 25px;
}

.part2_card{


}
  </style>
</head>
