<!DOCTYPE html>
<html>
  <head>
    <title>Card Slider</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>
    <style type="text/css">
      .slider {
        width: 80%;
        margin: 0 auto;
      }
      .slider .card {
        width: 300px;
        height: 400px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
        text-align: center;
        padding: 20px;
      }
      .slider .card img {
        max-width: 100%;
        height: auto;
      }
    </style>
  </head>
  <body>
    <div class="slider">
      <div class="card">
        <img src="https://via.placeholder.com/300x200.png?text=Card+1" alt="Card 1">
        <h2>Card 1</h2>
        <p>Some text for card 1.</p>
      </div>
      <div class="card">
        <img src="https://via.placeholder.com/300x200.png?text=Card+2" alt="Card 2">
        <h2>Card 2</h2>
        <p>Some text for card 2.</p>
      </div>
      <div class="card">
        <img src="https://via.placeholder.com/300x200.png?text=Card+3" alt="Card 3">
        <h2>Card 3</h2>
        <p>Some text for card 3.</p>
      </div>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.slider').slick({
          dots: true,
          infinite: true,
          speed: 500,
          slidesToShow: 1,
          centerMode: true,
          variableWidth: true,
          adaptiveHeight: true,
        });
      });
    </script>
  </body>
</html>

"/gambar_folder/{{$item->gambar}}"
