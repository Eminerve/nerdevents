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

<!-- Navigation Bar for laptop -->
    <div class="nav-screen">
      <section class="barnav">
        <div class="logo">
          <a href="index.php"><img src="https://i.ibb.co/pPYY0s7/logo.png" alt="logo Nerdevents" width="100px" height="100px"></a>
        </div>

        <div class="barre_nav">
          <ul>
            <li class="event_menu"><a href="events.php">Events</a></li>
            <li class="event_menu"><a href="#">Om Oss</a></li>
            <li class="event_menu"><a href="#">Bli Medlem</a></li>
          </ul>
        </div>
      </section>
    </div>

<!-- Navigation Bar for mobile phone -->
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

<!-- javascript for Navigation bar smartphone -->
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

    <!-- Simulation ID card -->

    <section class="identity_card">

      <!-- Card Title -->
      <div class="part1_card">
        <h2>NERDEVENTS</h2>
      </div>

      <!-- 2nd part of the ID card -->
      <div class="part2_card">
        <!-- image of the event -->
        <img class="events_img" src="https://i.ibb.co/Wvt1xZN/geek-cmas-tree.png" alt="geek tree">
        <!-- informations of the event -->
        <div class="id_text">
          <p><strong>Event Namn:</strong> Nom de l'event</p>
          <!-- link to google maps -->
          <p><strong>Var:</strong> <a href="#" target="_blank"> Adresse de  l'event</a></p>
          <p><strong>Ingångspris:</strong> free </p>
          <p><strong>Beskrivning:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </section>
  </body>

  <style media="screen">

/* font of the page */

  @font-face {
    font-family: "titre_page";
    src: url("font/ethnocentric.ttf") format('truetype');
  }

  @font-face {
    font-family: "titre_page2";
    src: url("font/CantedFXBlod.otf") format('truetype');
  }

/* basic "default" style of the page */

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
  align-content: center;
  text-align: center;
}

header{
  background: rgb(14,33,40);
  background: linear-gradient(125deg, rgba(53, 102, 133,0.9668242296918768) 10%, rgba(46,238,253,1) 60%, rgba(53, 102, 133,0.9668242296918768) 100%);

}

/* Responsive for navigation bar */

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

/*--------------------- Identity Card  ----------------------*/

  /* Animation of the ID card */
@keyframes appear {
  0% {left: 0;opacity: 0;transform: translate(-10%);}
  100% {left: 30%;opacity: 1; transform: translate(0);}
}

  /* ID card as a flexbox */
.identity_card{
  animation: appear 2s;
  animation-timing-function: ease-in-out;
  width: 60%;
  align-items: center;
  align-content: center;
  text-align: center;
  margin: auto;
  margin-top: 3%;
  height: 70%;
  /*  border: solid black 2px;*/
  border-radius: 30px;
  box-shadow: rgba(46,238,253,1) 5px 6px 12px;
  background: rgb(245, 246, 250);
}

  /* Title of the ID card */
.part1_card{
  border-radius: 30px 30px 0 0;
  border-bottom: solid black 2px;
  background: rgb(245, 246, 250);
  text-align: center;
  align-content: center;
  justify-content: center;
  align-self: center;
}

.part1_card h2{
  font-family: "titre_page2", "titre_page", monospace;
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

  /* 2nd part of the ID card */
.part2_card{
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  padding: 30px;
  align-items: center;
  align-self: center;
  align-content: center;
}

.events_img{
  flex:1;
  margin: auto;
  justify-content: center;
  text-align: center;
  width: 350px;
  border-radius: 10px;
  filter: grayscale();
}

.events_img img{
  margin: auto;
  width: 100%;
  filter: grayscale();
}

.id_text{
  flex:2;
  text-align:left;
  margin-left: 30px;
}

.id_text strong{
  font-size: 1.3rem;
  font-family: monospace;
}

.id_text p{
  font-size: 1.2rem;
  font-family: cursive;
}

.id_text a{
  font-size: 1.2rem;
  font-family: cursive;
  color: black;
  text-decoration: none;
}

  /* Hover on the image and adress */
.events_img:hover{
  transition-duration: 1s;
  filter: none;
}

.id_text a:hover{
  font-size: 1.2rem;
  font-family: cursive;
  color: rgba(53, 102, 133);
  text-decoration: underline;
}
</style>
</head>
