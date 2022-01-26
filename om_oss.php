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
            <li class="event_menu"><a href="events.php">Events</a></li>
            <li class="event_menu"><a href="om_oss.php">Om Oss</a></li>
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
            <li><a href="events.php">Events</a></li>
            <li><a href="om_oss.php">Om Oss</a></li>
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

    <!-- Page Title -->
        <section class="titre_page">
          <h1>Om Oss</h1>
        </section>

<!-- banner image -->
    <div class="banner">
      <img src="https://i.ibb.co/HNHtM7J/cosplay.png" alt="cosplay">
    </div>
</body>
<style media="screen">

@font-face {
  font-family: "titre_page";

  src: url("font/ethno.ttf") format('truetype');
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
  background: rgb(151,205,131);
  background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%); rgba(166,20,74,0.29735644257703087) 71%, rgba(208,164,52,0.4318102240896359) 87%);
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
width: 100px;
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
    margin-top: 15%;
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
    text-shadow: rgba(252,176,69) 2px 6px 2px;
  }

</script>
</html>
