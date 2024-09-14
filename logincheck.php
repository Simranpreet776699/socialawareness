  <!-- By Simranpreet Singh  -->
  <?php
                include("db.php");
              
                $email = $_POST["email"];
                $password = $_POST["password"];
              
                $qry = "select * from tbuser where emailid='$email' and password='$password' ";

                $result = mysqli_query($con, $qry) or die(mysqli_error($con));

                $rows = mysqli_num_rows($result);
                if($rows > 0)
                {
                    session_start();
                    $row = mysqli_fetch_row($result);
                    $_SESSION["usrid"] = $email;
                    $_SESSION["name"] = $row[2];
                    header("location: index.html");
                }
                else
                {
                    header("location: invalid.html");
                }

                ?>

              