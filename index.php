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
  // Add more games as needed
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
  // Add more products as needed
];
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
      body {
        background-color: #f2f2f2;
      }
      #sidebar {
        width: 250px;
        display: none;
      }
    </style>
</head>
<body>
  <!-- Navbar Section -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Details</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Customer Portal</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Sidebar -->
  <div class="d-flex">
    <button class="btn btn-dark" id="menuToggle"><i class="bi bi-list"></i></button>
  </div>
  <div id="sidebar" class="bg-dark position-fixed top-0 start-0 vh-100">
    <ul class="list-group list-group-flush mt-3">
      <li class="list-group-item bg-dark text-light"><a href="dashboard.html" class="text-decoration-none text-light">Dashboard</a></li>
      <li class="list-group-item bg-dark text-light"><a href="about.html" class="text-decoration-none text-light">About Us</a></li>
      <li class="list-group-item bg-dark text-light"><a href="products.html" class="text-decoration-none text-light">Products</a></li>
    </ul>
  </div>
  
  <script>
    document.getElementById("menuToggle").onclick = function() {
      var sidebar = document.getElementById("sidebar");
      sidebar.style.display = sidebar.style.display === "none" ? "block" : "none";
    };
  </script>

  <!-- Hero Section -->
  <section>
    <div class="hero w-100 h-90 video-background">
      <iframe id="youtube-video" 
        src="https://www.youtube.com/embed/g3T9K06p358?autoplay=1&mute=1&loop=1&playlist=g3T9K06p358&controls=0&showinfo=0&modestbranding=1"
        title="YouTube video player" 
        frameborder="0" 
        allow="autoplay; fullscreen" 
        allowfullscreen>
      </iframe>
      <div class="content">
        <h1>Welcome to My Website</h1>
        <p>Enjoy the background video!</p>
      </div>
    </div>
  </section>

  <!-- Games Section -->
  <section class="games">
    <div class="text">
      <h1>Games</h1>
      <p>Get the best games at the best prices</p>
      <div class="d-flex flex-row align-items-start overflow-x-scroll gap-3 p-3 w-100">
        <?php foreach ($games as $game) { ?>
        <div class="card mb-3 game-card col-md-3 shadow border rounded-md">
          <div class="card-header bg-white border-0 p-0">
            <div class="w-100 h-64 overflow-hidden min-w-72 position-relative">
              <img src="https://i.pinimg.com/564x/ec/eb/84/eceb8403c8d34c9fc9dfc818f004c386.jpg" class="card-img-top img-fluid" alt="...">
              <button type="button" class="btn btn-outline-primary position-absolute top-2 right-2 z-3 border-0 shadow-none">
                <i class="bi-heart"></i>
              </button>
            </div>
          </div>
          <div class="card-body p-2">
            <h5 class="card-title"><?php echo $game["title"]; ?></h5>
            <div>
              <span class="badge rounded-pill text-bg-primary"><?php echo $game["price"]; ?></span>
              <span class="badge rounded-pill text-bg-secondary"><?php echo $game["genre"]; ?></span>
              <span class="badge rounded-pill text-bg-warning"><?php echo $game["platform"]; ?></span>
              <span class="badge rounded-pill text-bg-info"><?php echo $game["size"]; ?></span>
              <span class="badge rounded-pill text-bg-success"><?php echo $game["availability"]; ?></span>
            </div>
            <p class="card-text bold">Release Date: <strong><?php echo $game["release_date"]; ?></strong></p>
            <p class="card-text">Minimum requirements: <small class="text-body-secondary"><?php echo $game["min_requirements"]; ?></small></p>
          </div>
          <div class="card-footer d-flex align-items-center gap-2 justify-content-between bg-white border-0 p-2">
            <a href="#" class="btn btn-primary">View</a>
            <a href="#" class="btn btn-secondary">Add to Cart</a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <!-- Shop Section -->
  <section class="shop">
    <div class="products d-flex flex-row align-items-start overflow-x-scroll gap-3 p-3">
      <?php foreach ($products as $item) { ?>
      <div class="col-md-4 product-card">
        <div class="card">
          <img src="<?php echo $item["image"]; ?>" alt="Elden Ring" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title fst-italic fw-bold"><?php echo $item["name"]; ?></h5>
            <p class="card-text"><strong>Category:</strong> <?php echo $item["category"]; ?></p>
            <p class="card-text"><strong><?php echo $item["stock"]; ?></strong></p>
            <p class="card-text"><i class="bi bi-truck"></i> <?php echo $item["delivery"]; ?></p>
            <p class="card-text"><strong>Price:</strong> $<?php echo $item["price"]; ?></p>
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
