<?php
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'survey';

  $conn = mysqli_connect($servername,$username,$password,$dbname);
  if ($conn->connect_error)
  {
  die("Connection failed: " . $conn->connect_error);
}

function insertData()
{
  if (isset($_POST['submit'])) {
    // code...
    global $conn;
    $name = $_POST['fullName'];
    $email = $_POST['email'];
    $usageTime = $_POST['serviceUsage'];
    $response = $_POST['feedback'];
    if (empty($name) or empty($email) or empty($usageTime) or empty($response)) {
        echo '<script>alert("Fill Your Form Properly")</script>';
    }

    else {
      $stmt = $conn->prepare("Insert Into response (userName,userEmail,usageTime,userResponse) values (?,?,?,?)");
      $stmt->bind_param("ssss",$name,$email,$usageTime,$response);
      $stmt->execute();
      $stmt->close();
      echo '<script>alert("Thanks For Your FeedBack Your Form Submitted Successfully.")</script>';
    }
  }
}

  if (isset($_POST['submit']))
  {
    insertData();
  }

function userLogin()
{
  if (isset($_POST['login'])) {
    global $conn;
    $userName =$_POST['userName'];
    $password = $_POST['userPassword'];
    if (empty($userName) or empty($password)) {
        echo '<script>alert("Please Enter Your Email and Password Correctly")</script>';
    }

    else {
      $stmt = "Select userName,userPassword from users where userName = '$userName';";
      $result = mysqli_query($conn,$stmt);
      if (mysqli_num_rows($result)>0) {

        while ($row = mysqli_fetch_array($result)) {
          $username = $row['userName'];
          $userPassword = $row['userPassword'];
        }
        mysqli_free_result($result);
        mysqli_close($conn);

        if ($userName == $username and $password == $userPassword) {
          $_SESSION['userName'] == $username;
          header("Location:admin.php");
        }


        else {
          echo '<script>alert("UserName or Password Incorrect!")</script>';

        }

      }
    }
  }
}

function getuserResponse()
{
    global $conn;
    $query = "SELECT * FROM response;";
    $result = mysqli_query($conn,$query);
    if ($result->num_rows > 0) {
        echo "<table border= 1;width = 100%;><tr><th>ID</th><th>Name</th><th>Email</th><th>Product Usage</th><th>User Response</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["responseId"]."</td><td>".$row["userName"]."</td><td>".$row["userEmail"]."</td><td>".$row["usageTime"]."</td><td>".$row["userResponse"]."</td></tr>";


        }
        echo "</table>";

    }
    else {
            echo "0 results";
        }
    mysqli_close($conn);
}


if (isset($_POST['login'])) {
  userLogin();
}

function changePassword()
{
    global $conn;

    if(isset($_POST['updatePassword']))
    {
        $password = $_POST['oldPassword'];
        $newPassword = $_POST['newPassword'];
        $repeatPassword = $_POST['repeatPassword'];
        $query = "SELECT userPassword From users WHERE userName = 'admin';";
        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_array($result))
            {

                $password1 = $row['userPassword'];
            }

            if (empty($password) or empty($newPassword) or empty($repeatPassword)) {
              echo '<script>alert("Password Change Unsuccessfull")</script>';
            }
            elseif($password = $password1 and $newPassword == $repeatPassword){
                $query1 = "UPDATE users SET userPassword = '$newPassword' WHERE userName = 'admin';";
                mysqli_query($conn,$query1);
                mysqli_close($conn);
                echo '<script>alert("Password Change successfully")</script>';
                header('Location:login.php');

           }
           else
           {
            echo '<script>alert("Password Change Unsuccessfull")</script>';
        }
        }



    }


}

if(isset($_POST['updatePassword']))
{
    changePassword();
}

function logout()
{
  header('Location:login.php');
}
?>
