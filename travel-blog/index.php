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
    <title>Korea Travel Blog</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    *::-webkit-scrollbar {
    display: none;
    }
</style>
<body>
    <!-- Navigation Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">K-Tales</a>
        <h1></h1>
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
                <li class="nav-item ">
                    <a class="nav-link" href="comment.php">Comment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout (<?php echo $_SESSION['user_name'] ?>)</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container my-5">
        <img src="https://english.visitkorea.or.kr/static/front/images/main/new/vk_bnr_vky_eng.png" class="card-img-top" alt="Blog">
    </div>
    <!-- Main Content -->
    <div class="container my-5">
        <!-- Featured Content (Homepage) -->
        <!-- <div class="jumbotron" style="background:right url(https://english.visitkorea.or.kr/static/front/images/main/new/vk_bnr_vky_eng.png) no-repeat;">
            <h1 class="display-4">Explore Korea's Hidden Gems</h1>
            <p class="lead">Discover the beauty and culture of South Korea with our travel blog.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Get Started</a>
        </div> -->




        <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://skyticket.com/guide/wp-content/uploads/2017/09/iStock-538776082-e1509614959128.jpg" class="card-img-top" style="height: 200px;" alt="Blog Post 1">
                    <div class="card-body">
                        <h5 class="card-title">Seoul: The Dazzling Capital City</h5>
                        <p class="card-text" style="overflow-y:scroll; height: 200px;">
                            Seoul, South Korea's dynamic capital, harmonizes contemporary living with rich history. From palaces to vibrant nightlife, it's a must-visit destination for culture and excitement.</p>
                    </div>
                    <a href="Seoul.php" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://media.cnn.com/api/v1/images/stellar/prod/231025155250-01-busan-south-korea-skyline.jpg" class="card-img-top" style="height: 200px;" alt="Blog Post 1">
                    <div class="card-body">
                        <h5 class="card-title">Busan: Something For Everyone</h5>
                        <p class="card-text" style="overflow-y: scroll; height: 200px;">
                            Busan, South Korea's bustling coastal city, is a destination that truly has something for everyone. Whether you're a beach lover, a history enthusiast, a foodie, or an adventurer, Busan offers a diverse range of experiences to satisfy every traveler. Explore the dynamic cityscape, beautiful beaches, historic sites, and vibrant markets.
                        </p>
                    </div>
                    <a href="busan.php" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://lp-cms-production.imgix.net/2021-12/GettyImages-932392848.jpg" class="card-img-top" style="height: 200px;" alt="Blog Post 1">
                    <div class="card-body">
                        <h5 class="card-title">"Gyeongju: Timeless Korea"</h5>
                        <p class="card-text" style="overflow-y: scroll; height: 200px;">
                            Gyeongju, often referred to as the "Museum Without Walls," is a city that takes you on a captivating journey through Korea's rich history and cultural heritage. With its ancient temples, royal tombs, and historic sites, Gyeongju is a paradise for history enthusiasts and anyone seeking a glimpse into Korea's past.
                        </p>
                    </div>
                    <a href="Gyeongju.php" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://static1.squarespace.com/static/5c95bcb19b7d1578b2ca2f14/t/5f727057ec407a43c6754ac4/1601335392635/IMG_0477.jpg?format=1500w" class="card-img-top" style="height: 200px;" alt="Blog Post 1">
                    <div class="card-body">
                        <h5 class="card-title">Dadohaehaesang National Park</h5>
                        <p class="card-text" style="overflow-y: scroll; height: 200px;">
                            Dadohaehaesang National Park, often called the "Sea of Many Islands," is a marine wonderland located in South Korea. With its pristine coastal landscapes, diverse marine life, and lush islands, it's a perfect destination for nature lovers and adventure seekers.
                            </p>
                    </div>
                    <a href="Dadohaehaesang.php" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://olympic.ca/wp-content/uploads/2023/01/PyeongChang-scenic-e1672956293953.jpg?quality=100" class="card-img-top" style="height: 200px;" alt="Blog Post 1">
                    <div class="card-body">
                        <h5 class="card-title">Pyeongchang County</h5>
                        <p class="card-text" style="overflow-y: scroll; height: 200px;">
                            Pyeongchang County, a picturesque destination nestled in the heart of South Korea, offers a perfect blend of natural beauty and sporting excitement. As the host city of the 2018 Winter Olympics, Pyeongchang welcomes travelers with its pristine landscapes, outdoor adventures, and a taste of winter sports.
                        </p>
                    </div>
                    <a href="Pyeongchang.php" class="btn btn-primary">Read More</a>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-light text-center py-3">
        <p>&copy; 2023 Korea Travel Blog</p>
        <p>Follow Us: <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">Instagram</a></p>
    </footer>

    <!-- Add Bootstrap and custom JavaScript if needed -->

    <!-- Add Bootstrap JavaScript and Popper.js (for dropdowns) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
