<?php
    function search(){
        $host = "localhost";
        $user = "root";
        $pw = "";
        $db = "final_travelop";
        $conn = new mysqli($host, $user, $pw, $db);
         // Phần code PHP xử lý tìm kiếm
         // Nếu người dùng submit form thì thực hiện
         if (isset($_REQUEST['ok'])) 
         {
             // Gán hàm addslashes để chống sql injection
             $search = addslashes($_GET['search']);
            
             // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
             if (empty($search)) {
                 echo "";
             } 
             else
             {
                 // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                 $query = "select * from destination where DesName like '%$search%' OR DesLocation like '%$search%'";
                
                 // Thực thi câu truy vấn
                 $sql = mysqli_query($conn, $query);
                 
                 // Đếm số đong trả về trong sql.
                 $num = mysqli_num_rows($sql);
                 // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                 if ($num > 0 && $search != "") 
                 {
                     $output = '';
                     while ($row = mysqli_fetch_assoc($sql)) {
 
                         $output .= '
                         <div class="item">
                            <div class="left">
                            <a href="destination.php?id='. $row['DesId'] .'">
                                <img src="' . $row['Img'] . '" class="w-100 h-100"/>
                            </a>
                            </div>
                            <div class="right">
                                <div class="review-pricing">
                                    <div class="inner-left">
                                    <h3 style="font-weight: bold">' . $row['DesName'] . '</h3>
                                    <h4> Location: ' . $row['DesLocation'] . '</h4>
                                    <p><span>$50</span> per night</p>
                                        <div class="rating-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="inner-right">
                                        <div>
                                            <h5>Very Good</h5>
                                            <p>110 reviews</p>
                                        </div>
                                        <div>
                                            <span>8.1</span>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                '. $row['Description'] .'
                                </p>
                                <div class="icon">
                                    <i class="fa fa-clock"></i>
                                    <i class="fa fa-bicycle"></i>
                                    <i class="fa fa-map-signs"></i>
                                    <i class="fab fa-app-store"></i>
                                </div>
                                <button class="btn-primary">Book <span></span></button>
                            </div>
                        </div>
                         ';
                     }
                    echo $output;
                 } 
                 else {
                     echo "<h1> No Destination name '$search' </h1>";
                 }
             }
         }
        }
          
?>