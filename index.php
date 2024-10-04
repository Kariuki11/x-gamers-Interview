<?php 
$games= [
  [
    "title" => "Game 1",
    "price" => "100",
    "genre" => "Action",
    "availability" => "Available",
    "platform" => "PC",
    "size" => "10GB",
    "release_date" => "2022",
    "min_requirements" => "Intel Core i5, 8GB RAM, 2GB VRAM, 20GB Storage"
  ],
  [
    "title" => "Game 2",
    "price" => "200",
    "genre" => "Adventure",
    "availability" => "Available",
    "platform" => "PC",
    "size" => "20GB",
    "release_date" => "2022",
    "min_requirements" => "Intel Core i7, 16GB RAM, 4GB VRAM, 40GB Storage"
  ],
  [
    "title" => "Game 3",
    "price" => "300",
    "genre" => "RPG",
    "availability" => "Available",
    "platform" => "PC",
    "size" => "30GB",
    "release_date" => "2022",
    "min_requirements" => "Intel Core i9, 32GB RAM, 8GB VRAM, 60GB Storage"
  ],
  [
    "title" => "Game 4",
    "price" => "400",
    "genre" => "Shooter",
    "availability" => "Available",
    "platform" => "PC",
    "size" => "40GB",
    "release_date" => "2022",
    "min_requirements" => "Intel Core i3, 4GB RAM, 1GB VRAM, 10GB Storage"
  ],
  [
    "title" => "Game 5",
    "price" => "500",
    "genre" => "Strategy",
    "availability" => "Available",
    "platform" => "PC",
    "size" => "50GB",
    "release_date" => "2022",
    "min_requirements" => "Intel Core i5, 8GB RAM, 2GB VRAM, 20GB Storage"
  ],
  [
    "title" => "Game 6",
    "price" => "600",
    "genre" => "Simulation",
    "availability"
]
];
$products= [
  [
    "name" => "Product 1",
    "category" => "Gaming Pad",
    "stock" => "In Stock",
    "delivery" => "Local Delivery Available",
    "price" => "69.99",
    "image" => "https://i.pinimg.com/564x/be/76/7e/be767e78f76491d297104777627b2f17.jpg"
  ],
  [
    "name" => "Product 2",
    "category" => "Gaming Pad",
    "stock" => "In Stock",
    "delivery" => "Local Delivery Available",
    "price" => "69.99",
    "image" => "https://i.pinimg.com/564x/be/76/7e/be767e78f76491d297104777627b2f17.jpg"
  ],
  [
    "name" => "Product 3",
    "category" => "Gaming Pad",
    "stock" => "In Stock",
    "delivery" => "Local Delivery Available",
    "price" => "69.99",
    "image" => "https://i.pinimg.com/564x/be/76/7e/be767e78f76491d297104777627b2f17.jpg"
  ],
  [
    "name" => "Product 4",
    "category" => "Gaming Pad",
    "stock" => "In Stock",
    "delivery" => "Local Delivery Available",
    "price" => "69.99",
    "image" => "https://i.pinimg.com/564x/be/76/7e/be767e78f76491d297104777627b2f17.jpg"
  ],
  [
    "name" => "Product 5",
    "category" => "Gaming Pad",
    "stock" => "In Stock",
    "delivery" => "Local Delivery Available",
    "price" => "69.99",
    "image" => "https://i.pinimg.com/564x/be/76/7e/be767e78f76491d297104777627b2f17.jpg"
  ],
  [
    "name" => "Product 6",
    "category" => "Gaming Pad",
    "stock" => "In Stock",
    "delivery" => "Local Delivery Available",
    "price" => "69.99",
    "image" => "https://i.pinimg.com/564x/be/76/7e/be767e78f76491d297104777627b2f17.jpg"
  ]
]

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

      
        <?php foreach ($games as $game) { ?>
          <!-- <section class="m-2 d-flex flex-wrap gap-3 align-items-start justify-content-start"> -->
  <div class="card mb-3 game-card col-md-3 shadow border rounded-md">
      <div class="card-header bg-white border-0 p-0">
          <div class="w-100 h-64 overflow-hidden min-w-72 position-relative">
              <img src="https://i.pinimg.com/564x/ec/eb/84/eceb8403c8d34c9fc9dfc818f004c386.jpg" class="card-img-top img-fluid" alt="...">
              <p class="sr-only"></p>
              <button type="button" class="btn btn-outline-primary position-absolute top-2 right-2 z-3 border-0 shadow-none"><i class="bi-heart"></i>
                  <p class="sr-only hidden">Like</p>
              </button>
          </div>
      </div>
      <div class="card-body p-2">
        <h5 class="card-title "><?php echo $item["name"]?></h5>
        <div>
          <span class="badge rounded-pill text-bg-primary">Price</span>
          <span class="badge rounded-pill text-bg-secondary">Genre</span>
          <span class="badge rounded-pill text-bg-success">Available</span>
          <span class="badge rounded-pill text-bg-warning">PC</span>
          <span class="badge rounded-pill text-bg-info">Size</span>

          <span class="badge rounded-pill text-bg-success">Available</span>
        </div>
        <p class="card-text bold">Release Date</p>
        <p class="card-text">Minimum requirements<small class="text-body-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam numquam asperiores impedit iure, debitis officiis! Omnis quae ea odio fugiat.
        </small></p>
      </div>
      <div class="card-footer d-flex align-items-center gap-2 justify-content-between bg-white border-0 p-2">
        <a href="#" class="btn btn-primary">View</a>
        <a href="#" class="btn btn-secondary">Add to Cart</a>
      </div>
  </div>
<!-- </section> -->
          <?php } ?>
      </div>
    </div>
  </section>

  <section class="shop">
    <div class="products flex flex-row align-items-center overflow-x-scroll gap-3 p-3">
      <?php foreach ($products as $item) { ?>
        <div class="col-md-4 product-card">
    <div class="card">
      <img src="<?php echo $item["image"]?>" alt="Elden Ring" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title fst-italic fw-bold"><?php echo $item["name"]?></h5>
        <p class="card-text"><strong>Category:</strong><?php echo $item["category"]?></p>
        <p class="card-text"><strong><?php echo $item["stock"]?></strong></p>
        <p class="card-text"><strong></strong><i class="bi bi-truck"></i><?php echo $item["delivery"]?></p>
        <p class="card-text"><strong>Price</strong> $<?php echo $item["price"]?></p>
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