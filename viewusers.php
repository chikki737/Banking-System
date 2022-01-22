<head>
    <link href='https://fonts.googleapis.com/css?family=Charm' rel='stylesheet'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Papyrus;
            padding: 10px;
            background-color: aqua;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }


        .header h1 {
            font-size: 50px;
        }
        .header p{
            font-size: 30px;
        }

        .leftcolumn {   
            align-content: center;
            width: 100%;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }


        table {
            padding-left: 350px;
            border-collapse: collapse;
            width: 100%;
            padding-bottom: 1000px;
        }

        th, td {
            text-align: center;
        }
        #button{
            color:light blue;
        }
        input[type=submit]{
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: 1px solid;
            padding: 10px;
            box-shadow: 5px 10px #888888;
            cursor: pointer;
            width: 50%;
        }
        input[type=submit]:hover {
            opacity: 0.8;
        }
        tr:nth-child(even) {
            width:100%; 
            background-color: #f2f2f2;}
        tr:first-child{
            text-decoration: underline;
            background-color: pink;
            font-style: normal;
            font-weight: bold;
        }
        #heading{
            font-size:20px;
            color: #f2f2f2;
            position: absolute;
            width: 100%;
            text-align: center;
            border:  #f1f1f1;
            color: #ff99ff;
            font-weight: bold;
        }
    </style>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "chikki";
    $database = "Banking_app";

    $con = mysqli_connect($servername, $username, $password, $database);
    $quer = "select * from users";
    $rq = mysqli_query($con, $quer);
    $total = 0;

    echo "<div class='row'>
  <div class='leftcolumn'>
    <div class='card'>
      <div id='heading' style=' background-colour:aqua;'><h1 style=''>CUSTOMER INFO </h1><hr width='500px' style='margin-left:550px;'><br><br>
<table>
  <tr>
  <th>Name</th>
  <th>Email</th>
  <th>Balance</th>
  <th>Visual</th>
  </tr>";
    $run_q = mysqli_query($con, $quer);

    while ($arr = mysqli_fetch_array($run_q)) {
        echo "  <form action='view.php' method='post'>";
        echo "
    <tr>
  <th style='background-color: #f2f2f2;'><div><input type='hidden' name='name' value='$arr[name]'>$arr[name]</div><br> </th>
  <th style='background-color: #f2f2e2;><div><input type='hidden' name='email' value='$arr[email]'>$arr[email]</div><br></th>
  <th style='background-color: #f2f2f2;'><div><input type='hidden' name='balance' value='$arr[balance]'>$arr[balance]</th>
  <th><input type='hidden' value='$arr[name]'><input type='submit' name='ViewUser' value='View User'></th>
  </tr>";
        echo "</form>";
    }

    echo "</table>";
    ?>

