<html>
    <style>
        .card {
            /* Add shadows to create the "card" effect */
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 30%;
            height:500px;
            padding-top: 50px;
            background-color:transparent;
        }

        /* On mouse-over, add a deeper shadow */
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        /* Add some padding inside the card container */
        .container {
            padding: 2px 16px;
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            border-radius: 5px; /* 5px rounded corners */
        }

        /* Add rounded corners to the top left and the top right corner of the image */
        img {
            border-radius: 5px 5px 0 0;
        }
        input[type=submit]{
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 50%;
        }
        body{
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-image: url("https://media.istockphoto.com/photos/hot-air-balloons-flying-over-the-botan-canyon-in-turkey-picture-id1297349747?b=1&k=20&m=1297349747&s=170667a&w=0&h=oH31fJty_4xWl_JQ4OIQWZKP8C6ji9Mz7L4XmEnbqRU=");
        }
    </style>

</html>
<?php
$servername = "localhost";
$username = "root";
$password = "chikki";
$database = "Banking_app";
$name = $_POST['name'];
$holder = $_POST['holder'];
$con = mysqli_connect($servername, $username, $password, $database);
$quer = "select * from users where name='$name'";
$rq = mysqli_query($con, $quer);

echo "  <form action='check.php' method='post'>";
if ($arr = mysqli_fetch_array($rq)) {
    echo "<center>
    
    <div class='card'>
  <img src='https://tse1.mm.bing.net/th?id=OIP.QGwaRzdk1QZp_RVkZdqg6AHaHa&pid=Api&rs=1&c=1&qlt=95&w=118&h=118' alt='Avatar'>
  <div class='container'>
  <p>id: $arr[id]</p>
    <h4><b name='holder' value=$holder>$holder to $arr[name]</b></h4>
        <p>Email: $arr[email]</p>
    <p>Account balance: $arr[balance]</p>
        Enter the amount: <input type='number' name='amount'>
        <input type='hidden' name='holder' value='$holder'>
     <input type='hidden' name='name' value='$arr[name]'><input type='submit' name='ViewUser' value='TRANSFER MONEY'>
       
  </div>
    </div>
    </center>
  ";
}
echo "</form>";
?>

