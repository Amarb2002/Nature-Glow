<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Validating...</title>
</head>

<body>
    <?php
    include 'config.php';
   
    ?>
    <?php
    session_start();

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_GET['valid'])) {
        $un = $_GET['uname'];
        $ps = $_GET['pass'];

        $stmt = $conn->prepare("SELECT * FROM login WHERE username=?");
        $stmt->bind_param("s", $un);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $stmt = $conn->prepare("SELECT * FROM login WHERE username=? AND password=?");
            $stmt->bind_param("ss", $un, $ps);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $stmt = $conn->prepare("SELECT * FROM login WHERE username=? AND password=? AND status='active'");
                $stmt->bind_param("ss", $un, $ps);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $utp = $row['utype'];
                    $_SESSION['uname'] = $un;

                    if ($utp == 'admin') {
                        header("Location: admin/home.php");
                    } else if ($utp == 'student') {
                        header("Location: Student/std_home_view.php");
                    }
                } else {
                    echo "<script>alert('Inactive Account. Try Later...');document.location='login.php';</script>";
                }
            } else {
                echo "<script>alert('Invalid OR Wrong Password');document.location='login.php';</script>";
            }
        } else {
            echo "<script>alert('Invalid username OR Username not Found..!'); history.back();</script>";
        }
    } else {
        echo "<script>history.back();</script>";
    }

    $conn->close();
    ?>
</body>

</html>