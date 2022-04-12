<?php
    include 'includes/header.php';
    include 'classes/tourStatus.php';
    include 'function/search.php';
    
    $host = "localhost";
    $user = "root";
    $pw = "";
    $db = "final_travelop";
    $conn = new mysqli($host, $user, $pw, $db);
    $tourId = $_GET['id'];
    $output = '';
    $query = "SELECT * FROM user u, ticket t JOIN tourpack p ON t.tuorId = p.id WHERE t.tuorId = $tourId and t.userId = u.id";
    $sql = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($sql);


?>
<style>
    section.home {
        background: url(https://preview.colorlib.com/theme/travelix/images/about_background.jpg.webp);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
</style>
<link rel="stylesheet" href="./css/manager.css">

    <section class="home">
        <div class="background">
            <div class="inner">
                <h1>status</h1>
            </div>
        </div>
    </section>

    <section class="tourStat">
    <table>
            <tr>
                <th>tuorId</th>
                <th>tuorName</th>
                <th>userId</th>
                <th>user email</th>
                <th>amount</th>
                <th>booking_date</th>
                <th>PaymentStatus</th>
            </tr>
            <?php   // LOOP TILL END OF DATA 
                
                while($row = mysqli_fetch_assoc($sql))
                { 
             ?>
            <tr>
                
                    <td><?php echo $row['tuorId'];?> </td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['userId'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['amount'];?></td>
                    <td><?php echo $row['booking_date'];?></td>
                    <td><?php echo("pending");?></td>
               
            </tr>
            <?php
                }
             ?>
        </table>


        

    </section>




<?php
include 'includes/footer.php'
?>