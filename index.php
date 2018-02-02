<?php
session_start();
 ?>
<!DOCTYPE html>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Lekton' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<style>
.container {
    position: relative;
    text-align: center;
    color: white;
}

.bottom-left {
    position: absolute;
    bottom: 8px;
    left: 16px;
}

.top-left {
    position: absolute;
    top: 8px;
    left: 16px;
}

.top-right {
    position: absolute;
    top: 8px;
    right: 16px;
}

.bottom-right {
    position: absolute;
    bottom: 8px;
    right: 16px;
}

.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
    body {
        font-family: 'Lekton';font-size: 22px;
    }
</style>
  </head>

  <body style="background-color:black">

    <h1 style="color:red; text-align:center; margin-top:50px">George Warner Photography</h1>
    <div class="row">
      <div class="col s6">
        <div class="card-panel white">
          <span class="black-text">I am an Amateur Photographer based in the North West of England,
            This website is nothing more than to display my work. Feel Free to scroll through my look books.
          </span>
        </div>
      </div>
      <div class="col s6">
        <div class="card-panel white">
          <span class="red-text">I like to travel with my girlfriend Beth. I enjoy writing code and developing websites
            along with playing computer games, im a football enthusiast. I am into fashion and take interest in numerous
            genres of music.
          </span>
        </div>
      </div>
      <div class="col s6">
        <div class="card-panel white">
          <span class="black-text">My inspiration is more abstract art infused with fashion and my style.
            I wouldnt say i like a certain type of art, i am open to all kinds, whatever takes my interest.
          </span>
        </div>
      </div>
      <div class="col s6">
        <div class="card-panel white">
          <span class="black-text">Click the Insta Icon and Follow My Instagram<a href="instagram.com/georgewarnerphotography"><img style="height:27px; width:27px" src="/Content/instaicon.png"/></a>
          </span>
        </div>
      </div>
  </div>
    <h1 style="color:red; text-align:center; margin-top:80px">Look Book</h1>
    <div class="container">
      <img src="/Content/budaeye.jpg" alt="Norway" style="width:100%;">
      <div class="top-left">'Budapest Eye'<br>Budapest, Hungary</div>
      <div class="bottom-right">'Budapest Eye'<br>Budapest, Hungary</div>
    </div>
    <div class="container">
      <img src="/Content/Swirl.jpg" alt="Norway" style="width:100%; margin-bottom:80px">
      <div class="top-left">'Budapest National Musuem'<br>Budapest, Hungary</div>
      <div class="bottom-right">'Budapest National Musuem'<br>Budapest, Hungary</div>
    </div>
    <div class="container">
      <img src="/Content/Bally.jpg" alt="Norway" style="width:100%;">
      <div class="top-left" style="color:red">'Balenciaga Triple S'</div>
    </div>
    <div class="container">
      <img src="/Content/budastall.jpg" alt="Norway" style="width:100%;">
      <div class="top-left">'Budapest Christmas Markets'<br>Budapest, Hungary</div>
    </div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script>
  $(document).ready(function(){
  $('.materialboxed').materialbox();
});

  </script>
  </body>
</html>
