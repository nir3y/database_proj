<?php
 $con=mysqli_connect("localhost","202101516user","202101516pw","flight_reservationdb") or die(mysqli_error($con));
 
 $airline_id = $_POST["airline_id"];
 
 $sql = "DELETE FROM airline WHERE airline_id='".$airline_id."'";
 $result = mysqli_query($con,$sql);

 echo "<H3>[항공사 삭제 결과]</H3>";
 if($result){
    echo "데이터가 성공적으로 삭제되었습니다.";
 }else{
    echo "데이터 삭제에 실패하였습니다.";
    echo "실패 원인 : ".mysqli_error($con);
 }
 mysqli_close($con);
 echo "<br><br> <A HREF='airline_select.php'> 항공사 테이블로 </A>";
 echo "<br> <A HREF='../admin.html'> 관리자 모드로 </A>";
 echo "<br> <A HREF='../../main.html'> 메인화면으로 </A>";
?>