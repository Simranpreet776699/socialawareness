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
                    $_SESSION["usrid"] = $email;
                    header("location: index.html");
                }
                else
                {
                    header("location: invalid.html");
                }

                ?>

              