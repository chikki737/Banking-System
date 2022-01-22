
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
            background-image: url("https://media.istockphoto.com/photos/flowers-on-the-shore-of-lake-geneva-picture-id1280003274?b=1&k=20&m=1280003274&s=170667a&w=0&h=bFSswo40EQIa6Ohj7iyXSXbo4Fh2Ud3fxGnFfzUsLqU=");
        }
    </style>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "chikki";
    $database = "Banking_app";
    $name = $_POST['name'];
    $holder = $_POST['holder'];
    $amount = $_POST['amount'];
    $con = mysqli_connect($servername, $username, $password, $database);
    $quer1 = "select * from users where name='$holder'";
    $quer2 = "select * from users where name='$name'";

    $rq1 = mysqli_query($con, $quer1);
    $rq2 = mysqli_query($con, $quer2);

    $a = mysqli_fetch_array($rq2);

    echo "  <form action='index.php' method='post'>";
    if ($arr = mysqli_fetch_array($rq1)) {
        if ($arr['balance'] < $amount) {
            echo '<script type="text/javascript">';
            echo ' alert("SORRY, YOU DO NOT HAVE ENOUGH BALANCE...")';  //not showing an alert box.
            echo '</script>';
        } else {
            $holderbal = $arr['balance'] - $amount;
            $creditbal = $a['balance'] + $amount;

            $q1 = "update users set balance='$holderbal' where name='$holder'";
            $query1 = mysqli_query($con, $q1);
            $q2 = "update users set balance='$creditbal' where name='$name'";
            $query2 = mysqli_query($con, $q2);
            echo '<html><center><div class="card">
    <div class="container">
    <b style="font-size:35px;">YOUR PAYMENT WAS SUCCESSFUL!</b><br><br><br>
    HOPE WE MET YOUR NEEDS :)<br>
    HAVE A BEAUTIFUL DAY!!<br>
    <b>YOU KNOW IT ALL, YOUR PATH YOUR SUCCESS</b>
    <pre>
    



</pre>
FIND YOUR WAY<br>
MEGHANA S CHIKKERI<br>
WORLD WIDE :)<br>
    
    </div>
</div>
</center>
  <body> 
    
     <a href="http://localhost/Banking_Application/index.php">
 <center>         <button>HOME</button>        </center>
     </a>
    
    </body>
</html>';
            echo '<script type="text/javascript">';
            echo ' alert("YOUR TRANSFER WAS SUCCESSFUL!")';  //not showing an alert box.
            echo '</script>';
        }
    }
    ?>
    
