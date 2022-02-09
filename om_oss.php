<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

<!-- profils -->
  <section class="staff_organisation">
    <h1>Vår Förening</h1>
    <div class="staff">

      <div class="profil">
        <img src="https://i.ibb.co/dkV1knV/02-Queen-1.jpg" width="300px" height="300px" alt="">
        <div class="profil_text">
          <h2>Nom Du Profil</h2>
          <p>Statut dans l'organisation</p>
        </div>
      </div>

      <div class="profil">
        <img src="https://i.ibb.co/y0MQVHY/lighter.jpg" width="300px" height="300px" alt="">
        <div class="profil_text">
          <h2>Nom Du Profil</h2>
          <p>Statut dans l'organisation</p>
        </div>
      </div>

      <div class="profil">
        <img src="https://i.ibb.co/85whL37/images-q-tbn-ANd9-Gc-TW5-FNdnd-CSxo-Sw3-Mh-JKLr-JFEQPH1-FV9s7p-Qg-usqp-CAU.jpg" width="300px" height="300px" alt="">
        <div class="profil_text">
          <h2>Nom Du Profil</h2>
          <p>Statut dans l'organisation</p>
        </div>
      </div>

      <div class="profil">
        <img src="https://i.ibb.co/dkV1knV/02-Queen-1.jpg" width="300px" height="300px" alt="">
        <div class="profil_text">
          <h2>Nom Du Profil</h2>
          <p>Statut dans l'organisation</p>
        </div>
      </div>

      <div class="profil">
        <img src="https://i.ibb.co/y0MQVHY/lighter.jpg" width="300px" height="300px" alt="">
        <div class="profil_text">
          <h2>Nom Du Profil</h2>
          <p>Statut dans l'organisation</p>
        </div>
      </div>

      <div class="profil">
        <img src="https://i.ibb.co/85whL37/images-q-tbn-ANd9-Gc-TW5-FNdnd-CSxo-Sw3-Mh-JKLr-JFEQPH1-FV9s7p-Qg-usqp-CAU.jpg" width="300px" height="300px" alt="">
        <div class="profil_text">
          <h2>Nom Du Profil</h2>
          <p>Statut dans l'organisation</p>
        </div>
      </div>

    </div>
  </section>

<!-- Section description -->

  <section class="description">
    <h1>Vad är Nerdevents</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </section>

  <section class="document">
    <h1>Nerdevents Dokument</h1>
    <div class="doc_button">
      <a href="https://drive.google.com/file/d/12DOc0OCgvTRPJue3LPErV9n1SZpqyGE1/view">Stadgar</a>
      <a onclick="myFunction()">Årsmötesprotokoll</a>
    </div>

    <div id="Årsmötesprotokoll" style="display:none;">
      <a href="https://drive.google.com/file/d/12QLTsgGbyLiZ-VTa2g77jNt4yM9EG_BU/view">Årsmötesprotokoll 2020</a><br>
      <a href="https://drive.google.com/file/d/12SUultjWvjTCs_P32wCoOKWW0NGdeO6G/view">Årsmötesprotokoll 2019</a><br>
      <a href="https://drive.google.com/file/d/12Y7Zp9n-2poL8qRwYTt6smkdT-trSLfP/view">Extra årsmöte 2018</a><br>
      <a href="https://drive.google.com/file/d/12FKsx0f3lwhJXv2XnDfh4YBFFFLCQBVJ/view">Årsmötesprotokoll 2018</a><br>
      <a href="https://drive.google.com/file/d/12MOuRDudE-mCCqs-l1qV2covYcGkvbme/view">Extra årsmöte 2017</a><br>
      <a href="https://drive.google.com/file/d/12GoIpvNYM1DaiFD4teLiOaiAUfe2p3W7/view">Årsmötesprotokoll 2017</a><br>
      <a href="https://drive.google.com/file/d/12NdGT7awAeq2nDRKPw8GJnXSgWyG_9iu/view">Årsmötesprotokoll 2016 Nördevents</a><br>
      <a href="https://drive.google.com/file/d/12CsbiiyaHmt630tSlCVv_1Bs1LuKccXY/view">Årsmötesprotokoll 2016 Fantastic Nerds</a><br>
    </div>
  </section>

  <script>
  function myFunction() {
    var x = document.getElementById("Årsmötesprotokoll");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  }
  </script>

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

@font-face {
  font-family: "futurist";
  src: url("font/futurist.ttf") format('truetype');
}

@font-face {
  font-family: "neuropolitical";
  src: url("font/neuropolitical.ttf") format('truetype');
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

}

header{
  background: rgb(151,205,131);
  background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%); rgba(166,20,74,0.29735644257703087) 71%, rgba(208,164,52,0.4318102240896359) 87%);
}

h1{
  padding-top: 1rem;
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
    font-size: 4em;
    text-transform: uppercase;
    color: rgb(245, 246, 250);
    font-family: "titre_page2", "titre_page", monospace;
    font-weight: lighter;
    text-shadow: rgba(252,176,69) 2px 6px 2px;
  }

section.staff_organisation{
  margin-top: 38%;
  width: 100%;
  background-color: rgba(252,176,69);
  padding-bottom: 2rem;
}

.staff_organisation h1{
  padding-top: 4rem;
  color: white;
  text-shadow: #c72a5f 4px 4px;
  font-family: "futurist";
  text-transform: uppercase;
  font-size:80px;
  letter-spacing: 5px;
  text-align: center;
  line-height: 5rem;
}

.staff{
  width: 80%;
  margin: auto;
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  flex-wrap: wrap;
}
.profil{
  width: 300px;
  text-align: center;
}

.profil img{
  box-shadow:  25px 25px 49px #bf832f,
             -25px -25px 49px #ffb13f;
  border-radius: 50%;
}

.profil img:hover{
  border-radius: 50%;
}

.profil_text{
  padding-top: 2%;
  padding-bottom: 14%;
  line-height: 5px;
  letter-spacing: 2px;
}


section.description{
  padding-top: 2rem;
  width: 100%;
  background-color: #c72a5f;
  text-align: center;
  padding-bottom: 2rem;
}

.description h1{
  color: white;
  text-shadow: rgba(252,176,69) 4px 4px;
  font-family: "futurist";
  text-transform: uppercase;
  font-size: 80px;
  letter-spacing: 5px;
  text-align: center;
  line-height: 2rem;
}

.description p{
  color: rgba(252,176,69);
  text-shadow: white 2px 2px 2px 2px;
  width: 80%;
  font-family: monospace;
  font-weight: 400;
  font-size: 1.5rem;
  letter-spacing: 1px;
  text-align: center;
  margin:auto;
  padding-bottom: 3rem;
}

section.document{
  padding-top: 2rem;
  width: 100%;
  background-color: #b57cdb;
text-align: center;
  padding-bottom: 5rem;
}

.document h1{
  color: white;
  text-shadow: #f25a2e 4px 4px;
  font-family: "futurist";
  text-transform: uppercase;
  font-size: 80px;
  letter-spacing: 5px;
  text-align: center;
  line-height: 1px;
}

.doc_button{
  padding-top: 1rem;
  padding-bottom: 2rem;
  width: 80%;
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  margin: auto;
  flex-wrap: wrap;
}
.doc_button a {
  cursor: pointer;
  margin: 2rem 1rem;
  text-align: center;
  text-transform: uppercase;
  font-size: 1.5rem;
  line-height: normal;
  font-family: "futurist";
  padding: 2rem;
  width: 300px;
  min-height: 30px;
  text-decoration: none;
  color: white;
  border-radius: 77px;
  background: linear-gradient(145deg, #a370c5, #c285ea);
  box-shadow:  18px 18px 21px #ac76d0,
             -18px -18px 21px #be82e6;
}


.document p{
  color: rgba(252,176,69);
  text-shadow: white 2px 2px 2px 2px;
  width: 80%;
  font-family: monospace;
  font-weight: 600;
  font-size: 1.5rem;
  letter-spacing: 1px;
  text-align: center;
  margin:auto;
  padding-bottom: 2rem;
}

#Årsmötesprotokoll{
  width: 65%;
  padding: 2rem 0;
  margin: auto;
  border-radius: 50px;
  background: linear-gradient(145deg, #a370c5, #c285ea);
  box-shadow:  18px 18px 21px #ac76d0,
             -18px -18px 21px #be82e6;
}
#Årsmötesprotokoll a{
  text-decoration: none;
  color: white;
  font-family: monospace;
  font-size: 1.2rem;
  letter-spacing: .5px;
  line-height: 30px;
}
</style>
</html>
