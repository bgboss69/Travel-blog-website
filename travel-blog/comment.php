<?php
@include 'config.php';
session_start();
if (!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
}

if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
    if (isset($_POST['submit'])) {
        $name = $_POST["name"];
        $blog = $_POST["blog"];
        $comment = $_POST["comment"];
        insert_comment($blog, $comment);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QRCode</title>
    <script type="text/javascript" src="./asset/js/jquery.min.js"></script>
    <script type="text/javascript" src="./asset/js/qrcode.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 1rem;
            width: 100vw;
            box-sizing: border-box;
        }

        .btn-container {
            margin: 1%;
        }
    </style>
</head>

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
                <li class="nav-item">
                    <a class="nav-link" href="About.php">About</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="comment.php">Comment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout (<?php echo $_SESSION['user_name'] ?>)</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container-fluid ">

        <div class="container  border-bottom pb-2">
            <div class="d-flex flex-column justify-content-center align-items-left"style="width: 80vw;">
                <h1>Comment</h1>
                <form action="comment.php" method="post" class="w-100">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" readonly value="<?php echo $_SESSION['user_name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="blog">Blog:</label>
                        <select class="form-control" id="blog" name="blog" required>
                            <option value="busan">busan</option>
                            <option value="Dadohaehaesang">Dadohaehaesang</option>
                            <option value="Gyeongju">Gyeongju</option>
                            <option value="Gyeongju">Gyeongju</option>
                            <option value="Seoul">Seoul</option>
                            <option value="Pyeongchang">Pyeongchang</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea class="form-control" id="comment" name="comment" rows="4" required></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit Comment</button>
                </form>
            </div>
        </div>
        <div class="container" style="width: 50vw;">
            <div class="d-flex flex-column justify-content-center align-items-left ">
                <h1>QR CODE</h1>
                <P>Scan here to get mobile version !!</P>
                <div class="d-flex justify-content-start align-items-center flex-wrap">
                    <button class="btn-sm btn-primary m-1" onclick="change_url('http://ai210390-lab1.42web.io/sem5/index.php')">HOME</button>
                    <button class="btn-sm btn-primary m-1" onclick="change_url('http://ai210390-lab1.42web.io/sem5/About.php')">ABOUT</button>
                    <button class="btn-sm btn-primary m-1" onclick="change_url('http://ai210390-lab1.42web.io/sem5/comment.php')">COMMENT</button>
                    <div>
                        <input id="text" type="text" readonly value="http://ai210390-lab1.42web.io/sem5/index.php" style="text-align: center;min-width:300px" /><br />
                    </div>
                </div>

                <div class="d-flex justify-content-center align-items-center m-3">
                    <div id="qrcode" style="width:100px; height:100px;"></div>
                </div>
            </div>
        </div>

    </div>
    <!-- Footer Section -->
    <!-- Footer -->
    <footer class="bg-dark text-light text-center py-3">
        <p>&copy; 2023 Korea Travel Blog</p>
        <p>Follow Us: <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">Instagram</a></p>
    </footer>


    <script type="text/javascript">
        var qrcode = new QRCode(document.getElementById("qrcode"), {
            width: 100,
            height: 100
        });


        function change_url(url) {
            var elText = document.getElementById("text");
            elText.value = url;
            qrcode.makeCode(elText.value);
        }

        function makeCode() {
            var elText = document.getElementById("text");

            if (!elText.value) {
                alert("Input a text");
                elText.focus();
                return;
            }

            qrcode.makeCode(elText.value);
        }

        makeCode();

        $("#text").
        on("blur", function() {
            makeCode();
        }).
        on("keydown", function(e) {
            if (e.keyCode == 13) {
                makeCode();
            }
        });
    </script>

    <!-- Add Bootstrap JS and jQuery here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>