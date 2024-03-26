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
    <title>Dadohaehaesang National Park: A Marine Paradise</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.php">About</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="comment.php">Comment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout (<?php echo $_SESSION['user_name'] ?>)</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Header with Background Image -->
    <header class="jumbotron jumbotron-fluid" style="background:url(https://www.shutterstock.com/image-photo/panoramic-view-dadohaehaesang-national-park-260nw-1631331814.jpg) center; background-size: cover;">
        <div class="container text-center" style="background-color: rgba(255, 255, 255, 0.7);">
            <h1 class="display-4">Dadohaehaesang National Park: A Marine Paradise</h1>
            <p class="lead">Explore the beauty of Dadohaehaesang National Park with our travel guide.</p>
        </div>
    </header>

    <!-- Introduction Section -->
    <section class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <h2>Welcome to Dadohaehaesang National Park</h2>
                <p>
                    Dadohaehaesang National Park, often called the "Sea of Many Islands," is a marine wonderland located in South Korea. With its pristine coastal landscapes, diverse marine life, and lush islands, it's a perfect destination for nature lovers and adventure seekers.
                </p>
            </div>
            <div class="col-lg-6">
                <!-- Add an image of Seoul here -->
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/bc/Korea-Hongdo_Island-01.jpg" class="img-fluid" alt="Seoul Skyline">
            </div>
        </div>
    </section>

    <!-- Featured Destinations Section -->
    <section class="container my-5">
        <h2>Park Highlights</h2>
        <div class="row">
            <!-- Add featured destinations with images and descriptions -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://travellingto.asia/wp-content/uploads/2019/10/Hallyeohaesang-National-Park-South-Korea.jpg" class="card-img-top" alt="Destination 1">
                    <div class="card-body">
                        <h5 class="card-title">Endless Islands</h5>
                        <p class="card-text">
                            Dadohaehaesang is a haven for marine life. Snorkel or dive to witness vibrant coral reefs, schools of fish, and perhaps even rare species like the Dugong.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://images.squarespace-cdn.com/content/v1/5c95bcb19b7d1578b2ca2f14/1599956460432-E0CSY9X8IBIXZJ66PQ47/IMG_0280.jpg" class="card-img-top" alt="Destination 2">
                    <div class="card-body">
                        <h5 class="card-title">Coastal Hiking</h5>
                        <p class="card-text">
                            Hike along the coastal trails, offering breathtaking views of the sea and islands. Don't miss the sunset vistas, a photographer's dream.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://ak-d.tripcdn.com/images/10031f000001gry64B38D.jpg?proc=source%2Ftrip" class="card-img-top" alt="Destination 3">
                    <div class="card-body">
                        <h5 class="card-title">Remote Retreats</h5>
                        <p class="card-text">
                            Escape to remote islands where you can camp, enjoy a beach picnic, and immerse yourself in the tranquility of the sea.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <h1>Comment</h1>   
        <div class="row">
            <?php
                $result= getdata("Dadohaehaesang");
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
