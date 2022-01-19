<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>navigation</title>
  </head>
  <header>
    <section>
      <div class="logo">
        <a href="index.php"><img src="https://i.ibb.co/pPYY0s7/logo.png" alt="logo Nerdevents" width="100px" height="100px"></a>
      </div>

      <div class="barre_nav">
        <ul>
          <li><a href="events.php">Events</a></li>
          <li><a href="#">Om Oss</a></li>
          <li><a href="#">Bli Medlem</a></li>
        </ul>
      </div>
    </section>
  </header>


<body>

<style media="screen">
html{
font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
}

body{
margin: 0;
width: 100%;
}

/* header */
header{
  background: rgb(221,58,22);
  background: linear-gradient(125deg, rgba(221,58,22,0.9668242296918768) 10%, rgba(251,194,1,1) 100%);

}

section{
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
  color: rgb(221,58,22);
  /*text-shadow: #000000 1px 1px, #000000 -1px 1px, #000000 -1px -1px, #000000 1px -1px;
*/}


@media only screen and (max-width: 750px) {
  header ul{
  padding-right: 20px;
  }

  }
</style>
  </body>

  </body>
</html>
