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
    <title>Seoul: The Dazzling Capital City</title>
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
    <header class="jumbotron jumbotron-fluid" style="background:url(https://wallpaperaccess.com/full/5015534.jpg) center">
        <div class="container text-center" style="background-color: rgba(255, 255, 255, 0.7);">
            <h1 class="display-4">Seoul: The Dazzling Capital City</h1>
            <p class="lead">Explore the beauty of Seoul with our travel and beauty tips.</p>
        </div>
    </header>

    <!-- Introduction Section -->
    <section class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <h2>Welcome to Seoul</h2>
                <p>Seoul, the capital of South Korea, is a vibrant and dazzling city known for its rich culture, delicious cuisine, and cutting-edge beauty trends. Whether you're a beauty enthusiast, a food lover, or a history buff, Seoul has something to offer for everyone.</p>
            </div>
            <div class="col-lg-6">
                <!-- Add an image of Seoul here -->
                <img src="https://www.northstarmeetingsgroup.com/uploadedImages/Articles/How_To/Site_Selection/IFNL_Seoul_skyline_night_MC0919.jpg" class="img-fluid" alt="Seoul Skyline">
            </div>
        </div>
    </section>

    <!-- Featured Destinations Section -->
    <section class="container my-5">
        <h2>Seoul Highlights</h2>
        <div class="row">
            <!-- Add featured destinations with images and descriptions -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://lh3.googleusercontent.com/p/AF1QipPGl6MqUOpA-oR3QcdGBgaWh67smtnDY1s05ps4=s1360-w1360-h1020" class="card-img-top" alt="Destination 1">
                    <div class="card-body">
                        <h5 class="card-title">Gyeongbokgung Palace</h5>
                        <p class="card-text">Explore the grandeur of this historic palace, which is a symbol of Korean heritage.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://www.cktravels.com/wp-content/uploads/2022/12/mueongdong-5.jpg" class="card-img-top" alt="Destination 2">
                    <div class="card-body">
                        <h5 class="card-title">Myeongdong Shopping Street</h5>
                        <p class="card-text">Shop for the latest beauty products and trendy fashion in the heart of Seoul.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mb-4">
                    <img src="https://i1.wp.com/lenjourneys.com/wp-content/uploads/2018/11/seoul-38.jpg?ssl=1" class="card-img-top" alt="Destination 3">
                    <div class="card-body">
                        <h5 class="card-title">Namsan Seoul Tower</h5>
                        <p class="card-text">Get panoramic views of the city from this iconic tower and enjoy a romantic atmosphere.</p>
                    </div>
                </div>
            </div>
        </div>
        <h1>Comment</h1>   
        <div class="row">
            <?php
                $result= getdata("Seoul");
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
