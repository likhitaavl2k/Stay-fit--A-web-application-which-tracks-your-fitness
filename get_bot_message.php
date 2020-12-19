<?php
date_default_timezone_set('Asia/Kolkata');
include('database.inc.php');
$txt=mysqli_real_escape_string($con,$_POST['txt']);
$sql="select * from chatbot_hints where question like '%$txt%'";
$res=mysqli_query($con,$sql);
$num=mysqli_num_rows($res);

function append_string ($str1, $str2){ 
	$str = $str1 . $str2;  
	return $str; 
}

if($num  == 0){
	$html="Sorry not able to understand you";

	// $added_on=date('Y-m-d h:i:s');
	// mysqli_query($con,"insert into message(message,added_on,type) values('$txt','$added_on','user')");
	// $added_on=date('Y-m-d h:i:s');
	// mysqli_query($con,"insert into message(message,added_on,type) values('$html','$added_on','bot')");
	echo $html;
}
else if($num  == 1){
	$row=mysqli_fetch_assoc($res);
	$html = $row['reply'];
	echo $html;
}
else{
	// $html = 0;
	$sql="select * from chatbot_hints where question like '%$txt%'";
	$res=mysqli_query($con,$sql);
	echo "<b>Answers matching your requirement:</b><br>";
	// echo "<form action='get_bot_message.php' method='POST' >";
	while ($row=mysqli_fetch_assoc($res)) {
		// $que = "do you mean".$row['question']."?";

		$que1 = "<br><b>";
		$que2 = $row['question'];
		$que3 = "</b><br>".$row['reply']."<br>";

		$que = append_string ($que1, $que2); 
		$que = append_string ($que, $que3); 
		// echo "<input name='id' id='id' type='text'><input name='txt' id='txt' type='text' >";
		// $que = "<button type='submit' class='clickybutton' data-id='".$row['id']."' data-txt='".$row['question']."' >".$row['question']."</button>";
		// onclick='send_button();'
		echo $que;
		// $html = $row['reply'];

		// $added_on=date('Y-m-d h:i:s');
		// mysqli_query($con,"insert into message(message,added_on,type) values('$txt','$added_on','user')");
		// $added_on=date('Y-m-d h:i:s');
		// mysqli_query($con,"insert into message(message,added_on,type) values('$html','$added_on','bot')");
		// echo $html;  

		// echo "<div id='dummy'></div>
		// <script>
		// function send_button(){
		// 	var input = document.getElementById('quebutton').val();
		// 	Location.href = 'http://google.co.in';
		// }</script>";

	// 	echo "<script>
 //  $(document).ready(function(){

 //   $('.clickybutton').click(function(){
 //    var id = $(this).data('id'); 
 //    var txt = $(this).data('txt'); 

 //    $('#id').val(id);
 //    $('#txt').val(txt);
 //    });

 //    });
 //    </script>";
	}
	// echo "</form>";
}

// if(mysqli_num_rows($res)>0){
// 	$row=mysqli_fetch_assoc($res);
// 	$html=$row['reply'];
// }else{
// 	$html="Sorry not able to understand you";
// }
// $added_on=date('Y-m-d h:i:s');
// mysqli_query($con,"insert into message(message,added_on,type) values('$txt','$added_on','user')");
// $added_on=date('Y-m-d h:i:s');
// mysqli_query($con,"insert into message(message,added_on,type) values('$html','$added_on','bot')");
// echo $html;
?>