<?php
 $con=mysqli_connect("localhost","202101516user","202101516pw","flight_reservationdb") or die(mysqli_error($con));
 
 $flight_id = $_POST["flight_id"];
 $airline_id = $_POST["airline_id"];
 $dep_airport = $_POST["dep_airport"];
 $arr_airport = $_POST["arr_airport"];
 $dep_date = $_POST["dep_date"];
 $arr_date = $_POST["arr_date"];
 $price = $_POST["price"];


 $sql = "INSERT INTO flight VALUES('".$flight_id."','".$airline_id."',
 '".$dep_airport."','".$arr_airport."','".$dep_date."','".$arr_date."','".$price."'')";
 $result = mysqli_query($con,$sql);

 echo "<H3>[신규 항공편 등록 결과]</H3>";
 if($result){
    echo "데이터가 성공적으로 입력되었습니다.";
 }else{
    echo "데이터 입력에 실패하였습니다.";
    echo "실패 원인 : ".mysqli_error($con);
 }
 mysqli_close($con);
 echo "<br><br> <A HREF='flight_select.php'> 항공편 테이블로 </A>";
 echo "<br> <A HREF='../admin.html'> 관리자 모드로 </A>";
 echo "<br> <A HREF='../../main.html'> 메인화면으로 </A>";
?>