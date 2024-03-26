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
        <a class="navbar-brand" href="index.html">K-Tales</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.html">About</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="comment.php">Comment</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container p-0">
        <button class="btn-sm btn-primary m-1" onclick="change_url('index')">HOME</button>
        <button class="btn-sm btn-primary m-1" onclick="change_url('jeju')">ABOUT</button>
        <button class="btn-sm btn-primary m-1" onclick="change_url('jeju')">QR CODE</button>
    </div>
    <!-- <div class="container p-0">
            <button class="btn-sm btn-primary m-1" onclick="change_url('index')">HOME</button>
            <button class="btn-sm btn-primary m-1" onclick="change_url('jeju')">ABOUT</button>
            <button class="btn-sm btn-primary m-1" onclick="change_url('jeju')">QR CODE</button>
        </div> -->

    <div class="container p-0">
        <input id="text" type="text" readonly value="http://jindo.dev.naver.com/collie"
            style="width:60%; text-align: center;" /><br />
    </div>
    <div class="container p-0 mb-5">
        <div id="qrcode" style="width:100px; height:100px; margin-top:15px;"></div>
    </div>

    <hr>



    <?php

	function random_num($length)
	{

		$text = "";
		if($length < 5)
		{
			$length = 5;
		}

		//random num 4-20 
		$len = rand(4,$length);

		for ($i=0; $i < $len; $i++) { 
			# code...
			//random num 0-9	
			$text .= rand(0,9);
		}

		return $text;
	}

    function insert_feedback($name,$email,$feedback){
      $dbname = 'if0_35206183_biodata';
      $tablename = 'feedback';
      $servername = "sql208.infinityfree.com"; 
      $username = "if0_35206183"; 
      $password = "MdQYh3xFmt";
      // Check connection
      if (!mysqli_connect($servername, $username, $password)){
          die("Connection failed : " . mysqli_connect_error());
      }

      // query
      $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
      $con = mysqli_connect($servername, $username, $password);
      // execute query
      if(mysqli_query($con , $sql)){
      $con = mysqli_connect($servername, $username, $password, $dbname);

      // sql to create new table

      $sql = " CREATE TABLE IF NOT EXISTS $tablename
              (feedback_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
              Uname VARCHAR (100) NOT NULL,
              email VARCHAR (100) NOT NULL,
              feedback VARCHAR (100) NOT NULL
              );";

          if (!mysqli_query($con, $sql)) {
              echo "Error creating table : " . mysqli_error($con);
          }
      }

          $feedback_id = random_num(20);
          $con = mysqli_connect($servername, $username, $password, $dbname);  
          $query = "INSERT INTO $tablename (feedback_id,Uname,email,feedback) VALUES ('$feedback_id', '$name', '$email','$feedback')";
          mysqli_query($con, $query);
          echo "
              <script> alert('feedback is submitted') </script>
          ";
  }


  if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
      if (isset($_POST['submit'])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $feedback = $_POST["feedback"];
        insert_feedback($name,$email,$feedback);
      }
  }
?>

    <div class="container-fluid">
        <h1 class="mb-4">Feedback Form</h1>
        <form method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="form-group">
                <label for="feedback">Feedback:</label>
                <textarea class="form-control" name="feedback" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
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
            elText.value = url + `.html`
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
            on("blur", function () {
                makeCode();
            }).
            on("keydown", function (e) {
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