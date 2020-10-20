<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="icon" href="logoekoji.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Lemonada:wght@700&display=swap" rel="stylesheet"> 
    <title>Input</title>
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-light fixed-top">
      <a style="margin-left: 50px;"href="" ><img src="logoekoji.png"></a>
      <form class="form-inline" action="utama.php">
        <button title="Back" style="margin-left:1100px; width:90px;"class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-right: 40px; width: 90px;">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
          </svg>
        </button>
    </form>

        <form action="proses2.php" method="post">
        <button title="Next"class="btn btn-outline-success my-2 my-sm-0" type="submit"style="margin-right: 40px;width:90px;">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
          </svg>
        </button>
       </form>
    </nav>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="bg1.jpeg" class="d-block w-100" height="600px">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="bg2.jpeg" class="d-block w-100" height="600px">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="s1.jpeg" class="d-block w-100" height="600px">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="s2.jpeg" class="d-block w-100" height="600px">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="s3.jpeg" class="d-block w-100" height="600px">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="s4.jpeg" class="d-block w-100" height="600px">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div style="border: 1px solid; height: 380px; width: 480px; background-color: white;position: absolute; margin-left: 410px ;margin-top:-480px ;filter: blur(10px); opacity: 0.6;"></div>
    <div style="position: absolute; margin-top: -840px;">
    <h1 align="center" style="margin-top:380px; margin-left: 420px; color: green;font-weight: bolder;text-shadow: 4px 3px 1px white;font-family: 'Lemonada', cursive; font-size: 30px;">Input Data Pemain</h1>
    <form action="proses2.php" method="post">
        <div class="pemain1" style="border: 2px solid green; height: 260px; width: 400px; margin-left: 450px; margin-top: 30px;">
            <h3 style="margin-bottom: 30px; margin-top:0px; border: 2px solid green; border-top: none;border-left: none; border-right:none; height: 60px; padding-top: 10px;font-style: italic; font-weight: bold; color: green;text-shadow: 4px 3px 2px white;font-family: 'Lemonada', cursive;" align="center">Pemain1</h3>
            <label for="nama" style="padding-left: 10px;font-weight: bold; color: green;font-family: 'Lemonada', cursive;">Nama</label>
            <input type="text" id="nama" name="nama" style="margin-left: 50px; height: 40px;    font-family: 'Courgette', cursive;font-family: 'Lemonada', cursive; width: 250px; color: green;">
            <br>
            <label for="langkah" style="margin-top: 30px; padding-left: 10px; font-weight: bold; color: green;font-family: 'Lemonada', cursive;">Langkah</label>
            <input type="number" id="langkah" name="langkah" style="margin-left:25px;height: 40px;color: green;    font-family: 'Courgette', cursive;font-family: 'Lemonada', cursive;width: 250px;">
            <br>
            <label for="kategori" style="padding-left: 10px;font-weight: bold; color: green;font-family: 'Lemonada', cursive; margin-top:30px;">Kategori</label>
            <input type="text" id="kategori" name="kategori" style="margin-left: 26px; height: 40px;    font-family: 'Courgette', cursive;font-family: 'Lemonada', cursive; width: 250px; color: green; font-style:italic;" placeholder="Pilih A-D">
        </div>
        <button type="submit" class="btn btn-primary" style="position: absolute; width: 400px;height: 50px; margin-top: 40px; margin-left: 450px;">GO</button>
    </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>