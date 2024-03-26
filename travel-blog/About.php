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
    * {
        box-sizing: border-box;
    }
</style>

<body>
    <!-- Navigation Menu -->
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
                <li class="nav-item active">
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
    <!-- Main Content -->

    <div class="container">
        <div class="row mt-2">
            <div class="col-3 d-none d-md-block"></div>
            <div class="col-12 col-mb-9">
                <h1 class="m-0" style="font-size: 4em">ABOUT US.</h1>
            </div>
        </div>
<hr>
        <div class="row mb-2">
            <div class="col-3" style=" display:flex; justify-content: center; align-items: start; border-right: 2px black dotted;">
                <p class="m-0 font-weight-bold" style="text-align: start; ">
                    Project BIC21203 Web Development Group 16
                </p>
            </div>
            <div class="col-9" style="display:flex; justify-content: center; align-items: center;">
                <p style="text-align: justify;">
                    Welcome to the Project BIC21203 Web Development Group 16 team! We are a dynamic group of students
                    collaborating to build a substantial and interactive website. Our team is composed of dedicated
                    individuals who each bring their unique skills and perspectives to the project.
                    <br><br>
                    <b>Our Project: "K-Tales" - Explore the Wonders of Korea</b> 
                    <br><br>
                    Within our team, we've created a blog website named "K-Tales." This platform is designed to take you
                    on a virtual journey to explore the wonders of Korea. We're passionate about sharing our travel
                    experiences, insights, and tales from this captivating country. Whether you're planning a future
                    trip or simply interested in learning more about Korea, K-Tales is your gateway to the rich culture,
                    stunning landscapes, and exciting adventures that Korea has to offer.
                    <br><br>
                    We believe in the power of collaboration and are dedicated to delivering a website that provides
                    valuable information and inspiration for your travel adventures in Korea. Thank you for visiting our
                    "About Us" page, and we look forward to sharing the magic of Korea with you through K-Tales!
                    <br><br>
                    This addition helps to introduce the focus and purpose of your website, "K-Tales," to your visitors
                    and potential readers. Feel free to adjust the text to better suit your website's mission and
                    objectives.

                </p>
            </div>
        </div>
    </div>
<hr>
    <div class="container-fluid" > 
        <div class="row row-col-2">
            <div class="col-6 d-none d-md-block" style="display: flex; justify-content: center; border-right: 2px black dotted ;">
                <img class="p-0" style="border-radius: 50%;" src="https://img.freepik.com/free-vector/teamwork-elements-collection_1168-356.jpg?size=626&ext=jpg&ga=GA1.1.1128711290.1681298040&semt=ais" alt="">
            </div>
            <div class="col-md-6 d-md-block col-12" style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                <h1>Team Members</h1>
                <br>
                <table class="table table-striped ">
                    <thead>
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Matric No.</th>
                        <th scope="col">Sec</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>CHING KAI YUAN</td>
                        <td>AI210390</td>
                        <td>6</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>LENG HOOI QI</td>
                        <td>AI210308</td>
                        <td>6</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>TANG SHIUAN LIANG</td>
                        <td>AI210314</td>
                        <td>6</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>TEE LEE SHI</td>
                        <td>AI210367</td>
                        <td>6</td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>TANG ZI HONG</td>
                        <td>AI210352</td>
                        <td>6</td>
                      </tr>
 
                    </tbody>
                  </table>
            </div>

        </div>

    </div>

    <hr>

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