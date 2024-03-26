<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
 }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gyeongju: Korea's Historical Treasure Trove</title>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">K-Tales</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="comment.php">Comment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout (<?php echo $_SESSION['user_name'] ?>)</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Header with Background Image -->
    <header class="jumbotron jumbotron-fluid" style="background:url(https://upload.wikimedia.org/wikipedia/commons/e/ee/Anapji_Pond-Gyeongju-Korea-2006-09.jpg) center; background-size: cover;">
        <div class="container text-center" style="background-color: rgba(255, 255, 255, 0.7);">
            <h1 class="display-4">Gyeongju: Korea's Historical Treasure Trove</h1>
            <p class="lead">Explore the beauty of Gyeongju with our travel guide.</p>
        </div>
    </header>

    <!-- Introduction Section -->
    <section class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <h2>Welcome to Gyeongju</h2>
                <p>
                    Gyeongju, often referred to as the "Museum Without Walls," is a city that takes you on a captivating journey through Korea's rich history and cultural heritage. With its ancient temples, royal tombs, and historic sites, Gyeongju is a paradise for history enthusiasts and anyone seeking a glimpse into Korea's past.
                </p>
            </div>
            <div class="col-lg-6">
                <!-- Add an image of Seoul here -->
                <img src="https://a.cdn-hotels.com/gdcs/production116/d556/c3543285-e473-4196-b8f7-c7ca9d3c9457.jpg" class="img-fluid" alt="Seoul Skyline">
            </div>
        </div>
    </section>

    <!-- Featured Destinations Section -->
    <section class="container my-5">
        <h2>Gyeongju Highlights</h2>
        <div class="row">
            <!-- Add featured destinations with images and descriptions -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://koreantempleguide.com/wp-content/uploads/2023/06/DSC_0183-scaled.jpg" class="card-img-top" alt="Destination 1">
                    <div class="card-body">
                        <h5 class="card-title">Bulguksa Temple</h5>
                        <p class="card-text">
                            Bulguksa Temple, a UNESCO World Heritage Site, is a masterpiece of Buddhist architecture. Explore its intricate design, serene courtyards, and the Dabotap and Seokgatap pagodas. This temple complex is a testament to Korea's spiritual and artistic traditions.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/06/fb/30/8e/caption.jpg?w=1200&h=-1&s=1" class="card-img-top" alt="Destination 2">
                    <div class="card-body">
                        <h5 class="card-title">Seokguram Grotto</h5>
                        <p class="card-text">
                            The Seokguram Grotto, also a UNESCO World Heritage Site, houses a stunning stone-carved Buddha statue. The combination of natural beauty and spiritual significance makes this site truly awe-inspiring.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://i0.wp.com/thesoulofseoul.net/wp-content/uploads/2018/06/IMG_7693.jpg" class="card-img-top" alt="Destination 3">
                    <div class="card-body">
                        <h5 class="card-title">Royal Tombs</h5>
                        <p class="card-text">
                            Gyeongju is home to numerous royal tombs, including the Daereungwon Royal Tomb Complex, which contains the Cheonmachong Tomb, where you can see exquisite artifacts from the Silla Dynasty.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <h1>Comment</h1>   
        <div class="row">
            <?php
                $result= getdata("Gyeongju");
                if ($result!= NULL){
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo component($row);
                        }
                }
            ?>
        </div>
    </section>

    
    <!-- Footer Section -->
   <!-- Footer -->
   <footer class="bg-dark text-light text-center py-3">
    <p>&copy; 2023 Korea Travel Blog</p>
    <p>Follow Us: <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">Instagram</a></p>
</footer>


    <!-- Add Bootstrap JS and jQuery here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
