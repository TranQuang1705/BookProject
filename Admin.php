<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="admin.css?v=<?php echo time()?>"></link>
  </head>
</head>
<body>

    <?php
        require_once "HeaderAdmin.php";

        require_once "connection.php";
        
    ?>
    <div id="main-content" class="container allContent-section">
        <div class="row">
                <div class="card">
                    <i class="fa fa-users  " style="font-size: 70px;"></i>
                    <h4 style="color:black;">Tổng số người dùng</h4>
                    <h5 style="color:black;">10
                    <?php
                        // $sql="SELECT * from user where Role=2";
                        // $result=$conn-> query($sql);
                        // $count=0;
                        // if ($result-> num_rows > 0){
                        //     while ($row=$result-> fetch_assoc()) {
                    
                        //         $count=$count+1;
                        //     }
                        // }
                        // echo $count;
                    ?></h5>
                </div>
                <div class="card">
                    <i class="fa fa-users  " style="font-size: 70px;"></i>
                    <h4 style="color:black;">Tổng số người dùng</h4>
                    <h5 style="color:black;">10
                    <?php
                        // $sql="SELECT * from user where Role=2";
                        // $result=$conn-> query($sql);
                        // $count=0;
                        // if ($result-> num_rows > 0){
                        //     while ($row=$result-> fetch_assoc()) {
                    
                        //         $count=$count+1;
                        //     }
                        // }
                        // echo $count;
                    ?></h5>
                </div>
                <div class="card">
                    <i class="fa fa-users  " style="font-size: 70px;"></i>
                    <h4 style="color:black;">Tổng số người dùng</h4>
                    <h5 style="color:black;">10
                    <?php
                        // $sql="SELECT * from user where Role=2";
                        // $result=$conn-> query($sql);
                        // $count=0;
                        // if ($result-> num_rows > 0){
                        //     while ($row=$result-> fetch_assoc()) {
                    
                        //         $count=$count+1;
                        //     }
                        // }
                        // echo $count;
                    ?></h5>
                </div>
        </div>
    </div>    
<script src="./script.js"></script>
<script src="./testing.js"></script> 
</body>
</html>