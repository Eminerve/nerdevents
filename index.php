<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <title>Nerdevents.se</title>
  </head>
<header>
  <div class="nav-screen">
    <?php include 'nav.php'; ?>
  </div>
  <div class="nav-screen-mobile">
    <?php include 'nav-mobile.php'; ?>
  </div>
</header>
  <body>

    <section class="banner">
      <img src="https://i.ibb.co/HCyLv0m/banner2.jpg" alt="baniere">
      <div class="bulle">
        <img src="image/bulle1.gif" alt="">
        <div class="text_bulle">
          <p class="text_bd">vi väntar på dig den 25 december till julmarknaden i Gamla Stan</p>
        </div>
      </div>
      <a href="events.php" class="bouton"><h1>Next Events</h1></a>
    </section>
  </body>

  <style media="screen">

@font-face {
  font-family: "DelightCandles";
 src: url("font/DelightCandles.ttf");
}

  html {
  width:100%;
  overflow-x: hidden;
  font-size: 100%;
}

body {
margin:0;
padding:0;
}

.nav-screen-mobile{
  display: none;
}
    .banner{
      width: 100%;
    }

    .banner img{
      display: block;
      width: 100%;
      transform: translateX(-5px);
      margin: 0;
      background-position: center;
    }

    .banner .bouton{
      display: table;
      text-decoration: none;

      width: 25%;
      height: 10%;

      background: rgb(221,58,22);
      background: linear-gradient(125deg, rgba(221,58,22,0.9668242296918768) 10%, rgba(251,194,1,1) 100%);

      text-transform: uppercase;
      position: absolute;
      border: #fff solid 1px;

	border: 1px solid darkgoldenrod;
	border-radius: 2em;
	transform: translate(150%, 170%);
	text-shadow: 6px 3px 2px rgba(0, 0, 0, 0.2);
	box-shadow: 2px 0 0 5px rgba(0, 0, 0, 0.2);
    }

h1{
  vertical-align:middle;
color: white;
text-align: center;
  font-size: 120%;
font-family: sans-serif;
letter-spacing: 0.2em;
padding: 1vh 1vw;
}
.banner .bouton:hover{
  transition-duration: 0.4s;
  font-size: 1.3em;
}

.bulle{
  justify-content: center;
  display: block;
  height: 35%;
  width: 40%;
  position: absolute;
  z-index: 9;
  left: 25%;
  top: 15%;
}

.bulle img{
  display: block;
  width: 100%;
}

.text_bulle{
  width: 100%;
  align-content: center;
  position:absolute;
  z-index: 10;
  left: 50%;
  top: 40%;
  transform: translate(-50%,-50%);
  }

.text_bd{
  margin: auto;
  padding: 2vh 2vw;
  width: 80%;
  font-size: 120%;
  font-family: DelightCandles;
  text-transform: uppercase;
  text-align: center;
}


@media only screen and (max-width: 600px) {
  .nav-screen{
    display: none;
  }
  .nav-screen-mobile{
    display: contents;
  }
  }
  </style>
</html>
