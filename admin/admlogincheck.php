  <!-- By Simranpreet Singh  -->
  <?php
                include("db.php");
              
                $email = $_POST["email"];
                $password = $_POST["password"];
              
                $qry = "select * from tbadmin where adminid='$email' and admpassword='$password' ";

                $result = mysqli_query($con, $qry) or die(mysqli_error($con));

                $rows = mysqli_num_rows($result);
                if($rows > 0)
                {
                    session_start();
                    $_SESSION["usrid"] = $email;
                    header("location: admin-dashboard.php");
                }
                else
                {
                    header("location: invalid.html");
                }

                ?>

              