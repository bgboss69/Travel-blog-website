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
    <title>Busan: Something For Everyone</title>
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
    <header class="jumbotron jumbotron-fluid" style="background:url(https://static.nationalgeographic.co.uk/files/styles/image_3200/public/art-busan-im.jpg?w=1600) center; background-size: cover;">
        <div class="container text-center" style="background-color: rgba(255, 255, 255, 0.7);">
            <h1 class="display-4">Busan: Something For Everyone</h1>
            <p class="lead">Explore the beauty of Busan with our travel guide.</p>
        </div>
    </header>

    <!-- Introduction Section -->
    <section class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <h2>Welcome to Busan</h2>
                <p>
                    Busan, South Korea's bustling coastal city, is a destination that truly has something for everyone. Whether you're a beach lover, a history enthusiast, a foodie, or an adventurer, Busan offers a diverse range of experiences to satisfy every traveler. Explore the dynamic cityscape, beautiful beaches, historic sites, and vibrant markets.
                </p>
            </div>
            <div class="col-lg-6">
                <!-- Add an image of Seoul here -->
                <img src="https://media.timeout.com/images/105996093/1920/1080/image.jpg" class="img-fluid" alt="Seoul Skyline">
            </div>
        </div>
    </section>

    <!-- Featured Destinations Section -->
    <section class="container my-5">
        <h2>Busan Highlights</h2>
        <div class="row">
            <!-- Add featured destinations with images and descriptions -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img 
                    src="https://upload.wikimedia.org/wikipedia/commons/2/27/Haeundae_Beach_NightView.jpg" 
                    class="card-img-top" alt="Destination 1">
                    <div class="card-body">
                        <h5 class="card-title">Haeundae Beach</h5>
                        <p class="card-text">Haeundae Beach is Busan's most famous and popular stretch of shoreline. With its soft golden sands and clear blue waters, it's the perfect spot for sunbathing and water sports. Don't miss the bustling boardwalk with numerous restaurants, cafes, and bars.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img 
                    src="https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_1200,h_630/w_80,x_15,y_15,g_south_west,l_Klook_water_br_trans_yhcmh3/activities/y7tweucggousgtl5c4uq/Busan%20Night%20View%20Tour%20with%20Gamcheon%20culture%20village%2C%20The%20Bay%20101%2C%20and%20Mt.Hwangnyeongsan.jpg" 
                    class="card-img-top" alt="Destination 1">
                    <div class="card-body">
                        <h5 class="card-title">Gamcheon Culture Village</h5>
                        <p class="card-text">
                            Known as the "Machu Picchu of Busan," Gamcheon Culture Village is a maze of colorful houses stacked on a hillside. Explore narrow alleyways, street art, and local culture. It's a haven for photographers and art lovers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://dailytravelpill.com/wp-content/uploads/2019/02/haedong-Yonggungsa-Temple-busan-guide-3.jpg" 
                    class="card-img-top" alt="Destination 3">
                    <div class="card-body">
                        <h5 class="card-title">Haedong Yonggungsa Temple</h5>
                        <p class="card-text">
                            Perched on the cliffs overlooking the sea, Haedong Yonggungsa Temple is one of the few temples in Korea with such a stunning ocean view. It's a serene and spiritual place to visit and offers breathtaking sunrise and sunset views.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <h1>Comment</h1>   
        <div class="row">
            <?php
                $result= getdata("busan");
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
