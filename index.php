<?php 
$data=[]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>x-Gamers</title>
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="static/bootstrap/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
  <section>
    <div class="hero w-100 h-90 bg-light">
    </div>
  </section>
  <section class="computers">
    <div class="div1 w-100 h-80 bg-white"></div>
    <div class="div2"></div>
  </section>

  <section class="games">
    <div class="img">
    </div>
    <div class="text">
      <h1>Games</h1>
      <p>Get the best games at the best prices</p>
      <div class="flex flex-row align-items-center overflow-x-scroll gap-3 p-3">

      </div>
    </div>
  </section>

  <section class="shop">
    <div class="products">
      <?php foreach ($data as $item) { ?>
    <div class="col-md-4 product-card">
      <div class="card">
        <img src="<?php echo item.image?>" alt="Elden Ring" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title fst-italic fw-bold"><?php echo item.title?></h5>
          <p class="card-text"><strong>Category:</strong><?php echo item.category?></p>
          <p class="card-text"><strong></strong><i class="bi bi-truck"></i><?php echo item.availability?></p>
          <p class="card-text"><strong>Price</strong><?php echo item.price?></p>
          <button class="btn add-to-cart"><i class="bi bi-cart"></i> Add to Cart</button>
        </div>
      </div>
    </div>
    <?php } ?>
    </div>
  </section>

  <?php include("templates/footer.html");?>

    
    <script src="static/js/index.js"></script>
</body>
</html>


#Product card

# Work on the Like hover effect