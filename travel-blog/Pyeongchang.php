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
    <title>Pyeongchang County: Nature's Playground</title>
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
    <header class="jumbotron jumbotron-fluid" style="background:url(https://dwpinsider.com/blog/wp-content/uploads/2018/01/image-2018-01-22-5.jpg) center; background-size: cover;">
        <div class="container text-center" style="background-color: rgba(255, 255, 255, 0.7);">
            <h1 class="display-4">Pyeongchang County: Nature's Playground</h1>
            <p class="lead">Explore the beauty of Pyeongchang County with our travel guide.</p>
        </div>
    </header>

    <!-- Introduction Section -->
    <section class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <h2>Welcome to Pyeongchang County</h2>
                <p>
                    Pyeongchang County, a picturesque destination nestled in the heart of South Korea, offers a perfect blend of natural beauty and sporting excitement. As the host city of the 2018 Winter Olympics, Pyeongchang welcomes travelers with its pristine landscapes, outdoor adventures, and a taste of winter sports.
                </p>
            </div>
            <div class="col-lg-6">
                <!-- Add an image of Seoul here -->
                <img src="https://media.npr.org/assets/img/2017/05/26/olympics41_wide-31fee2564616259840b0d7c9639e50ef60997f76.jpg" class="img-fluid" alt="Seoul Skyline">
            </div>
        </div>
    </section>

    <!-- Featured Destinations Section -->
    <section class="container my-5">
        <h2>Pyeongchang Highlights</h2>
        <div class="row">
            <!-- Add featured destinations with images and descriptions -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://i.dailymail.co.uk/i/pix/2018/01/06/10/47CD682D00000578-5241481-image-a-54_1515236250181.jpg" class="card-img-top" alt="Destination 1">
                    <div class="card-body">
                        <h5 class="card-title">Winter Wonderland</h5>
                        <p class="card-text">
                            Explore the Olympic facilities and relive the magic of the 2018 Winter Olympics. You can visit venues like the Alpensia Resort and Olympic Sliding Center.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://thisiskoreatours.com/wp-content/uploads/2017/03/Mt.-Seoraksan-National-Park.jpg" class="card-img-top" alt="Destination 2">
                    <div class="card-body">
                        <h5 class="card-title">Seoraksan National Park</h5>
                        <p class="card-text">
                            Hike through the stunning Seoraksan National Park, where you'll find rugged mountain peaks, crystal-clear streams, and diverse flora and fauna.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://media.timeout.com/images/105146049/750/562/image.jpg" class="card-img-top" alt="Destination 3">
                    <div class="card-body">
                        <h5 class="card-title">Ski Resorts</h5>
                        <p class="card-text">
                            Pyeongchang offers some of South Korea's finest ski resorts. Whether you're a novice or a pro, you can hit the slopes and enjoy a winter wonderland.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <h1>Comment</h1>   
        <div class="row">
            <?php
                $result= getdata("Pyeongchang");
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
