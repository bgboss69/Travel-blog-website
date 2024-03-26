<?php




function insert_comment($blog, $comment)
{
    $dbname = 'if0_35206183_biodata';
    $tablename = 'comment';
    $servername = "localhost";
    $username = "root";
    $password = "";
    $user_id = $_SESSION['user_id'];
    // Establish a connection and select the database
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO $tablename ( `blog`, `comment`, `datecreated`, `user_id`) VALUES ('$blog', '$comment', CURRENT_TIMESTAMP, '$user_id')";

    if (!mysqli_query($conn, $sql)) {
        echo "Error inserting comment: " . mysqli_error($conn);
    } else {
        echo "<script>alert('Comment submitted successfully');</script>";
    }

}

$dbname = 'if0_35206183_biodata';
$servername = "localhost";
$username = "root";
$password = "";
// Check connection
if (!mysqli_connect($servername, $username, $password)) {
    die("Connection failed : " . mysqli_connect_error());
}

// query
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
$con = mysqli_connect($servername, $username, $password);
// execute query
if (mysqli_query($con, $sql)) {
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // sql to create new table

    $sql = "CREATE TABLE IF NOT EXISTS user_form (
        user_id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL
    );";

    if (!mysqli_query($con, $sql)) {
        echo "Error creating table : " . mysqli_error($con);
    }
}


$dbname = 'if0_35206183_biodata';
$tablename = 'comment';
$servername = "localhost";
$username = "root";
$password = "";
// Check connection
if (!mysqli_connect($servername, $username, $password)) {
    die("Connection failed : " . mysqli_connect_error());
}
// query
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
$con = mysqli_connect($servername, $username, $password);
// execute query
if (mysqli_query($con, $sql)) {
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // sql to create new table

    $sql = "CREATE TABLE IF NOT EXISTS $tablename
              (
                Comment_id INT PRIMARY KEY AUTO_INCREMENT,
                blog VARCHAR(100) NOT NULL,
                comment TEXT NOT NULL,
                datecreated TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                user_id INT,
                FOREIGN KEY (user_id) REFERENCES user_form(user_id)
                      );";

    if (!mysqli_query($con, $sql)) {
        echo "Error creating table : " . mysqli_error($con);
    }
}




$conn = mysqli_connect($servername, $username, $password, $dbname);

function getdata($id)
{
    $dbname = 'if0_35206183_biodata';
    $servername = "localhost";
    $username = "root";
    $password = "";

    $sql = "SELECT comment.*, user_form.name
    FROM comment
    JOIN user_form ON comment.user_id = user_form.user_id
    WHERE comment.blog = '$id';
        ";
    $con = mysqli_connect($servername, $username, $password, $dbname);

    if (!mysqli_query($con, $sql)) {
        echo "Error creating table : " . mysqli_error($con);
    } else {
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            return $result;
        }
    }
}

function component($row)
{
    $name = $row['name'];
    $comment = $row['comment'];
    $date = $row['datecreated'];
    $element =
        '            
            <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">' . $name . '</h5>
                    <p class="card-text">
                        ' . $comment . '
                    </p>
                    <p class="card-text text-right"><small class="text-muted">' . $date . '</small></p>
                </div>
            </div>
        </div>';
    return $element;
}
