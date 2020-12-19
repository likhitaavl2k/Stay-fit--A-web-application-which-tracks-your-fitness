<?php
date_default_timezone_set('Asia/Kolkata');
include('database.inc.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="css/chatbot.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<style>
		#myBtn {
			position: fixed;
			/*bottom: 20px;*/
			bottom: 30px;
			/*right: 30px;*/
			right: 20px;
			/*z-index: 99;
			font-size: 18px;*/
			border: none;
			/*outline: none;*/
			background-color: transparent;
			/*color: white;
			cursor: pointer;
			padding: 15px;*/
			border-radius: 90%;
		}

		/*#myBtn{
		  background-color: #555;
		  color: white;
		  padding: 16px 20px;
		  border: none;
		  cursor: pointer;
		  opacity: 0.8;
		  position: fixed;
		  bottom: 23px;
		  right: 28px;
		  width: 280px;
		}*/

		/*#myBtn:hover {
			background-color: #555;
		}*/
		/*.open-button {
		  background-color: #555;
		  color: white;
		  padding: 16px 20px;
		  border: none;
		  cursor: pointer;
		  opacity: 0.8;
		  position: fixed;
		  bottom: 23px;
		  right: 28px;
		  width: 280px;
		}
		.open-button:hover {
		  opacity: 1;
		}*/
	</style>
</head>
<body>
	<div >
		<!-- <h2>Modal Example</h2>
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

		<div class="modal fade bottom" id="myModal" role="dialog" aria-labelledby="myModalLabel"
		aria-hidden="true" data-backdrop="true" style=" position:fixed;bottom:20px;right:20px;margin:0px;">
		<div class="modal-dialog modal-side modal-bottom-right modal-notify modal-danger" style=" position:fixed;bottom:20px;right:20px;margin:0px;" >
			<div class="modal-content">
				<div  style="width: 480px;">
					<!-- class="modal-header" -->
					<!-- 480 -->
					<div >
						<button type="button" class="btn btn-default" data-dismiss="modal" style="position: relative;right:-92%;"><b>X</b></button>
						<div class="col-md-6 ">
							<div class="card" style="width: 220%;">
								<div class="card-body messages-box center" >
									<ul class="list-unstyled messages-list">
										<?php
										$res=mysqli_query($con,"select * from message");
										if(mysqli_num_rows($res)>0){
											$html='';
											while($row=mysqli_fetch_assoc($res)){
												$message=$row['message'];
												$added_on=$row['added_on'];
												$strtotime=strtotime($added_on);
												$time=date('h:i A',$strtotime);
												$type=$row['type'];
												if($type=='user'){
													$class="messages-me";
													$imgAvatar="user_avatar.png";
													$name="Me";
												}else{
													$class="messages-you";
													$imgAvatar="bot_avatar.png";
													$name="Chatbot";
												}
												$html.='<li class="'.$class.' clearfix"><span class="message-img"><img src="images/'.$imgAvatar.'" class="avatar-sm rounded-circle"></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">'.$name.'</strong> <small class="time-messages text-muted"><span class="fas fa-time"></span> <span class="minutes">'.$time.'</span></small> </div><p class="messages-p">'.$message.'</p></div></li>';
											}
											echo $html;
										}else{
											?>
											<li class="messages-me clearfix start_chat">
												<b style="font-size: 20px;font-family: cursive">Need some help??</b>
											</li>
											<?php
										}
										?>

									</ul>
								</div>
								<div class="card-header" >
									<div class="input-group">
										<input id="input-me" type="text" name="messages" class="form-control input-sm" placeholder="Type your message here..." onchange="send_msg()"/>
										<span class="input-group-append">
											<input type="button" class="btn btn-primary" value="Send" onclick="send_msg()">
										</span>
									</div> 
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<button id="myBtn" title="Chat bot" data-toggle="modal" data-target="#myModal"><img src="https://img.icons8.com/fluent/48/000000/speech-bubble-with-dots.png"/></button>
	<!-- <button class="open-button">Chat</button> -->

	<script type="text/javascript">
		function getCurrentTime(){
			var now = new Date();
			var hh = now.getHours();
			var min = now.getMinutes();
			var ampm = (hh>=12)?'PM':'AM';
			hh = hh%12;
			hh = hh?hh:12;
			hh = hh<10?'0'+hh:hh;
			min = min<10?'0'+min:min;
			var time = hh+":"+min+" "+ampm;
			return time;
		}
		function send_msg(){
			jQuery('.start_chat').hide();
			if(!jQuery('#input-me').val()) return;
			var txt=jQuery('#input-me').val();
			var html='<li class="messages-me clearfix"><span class="message-img"><img src="images/user_avatar.png" class="avatar-sm rounded-circle"></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">Me</strong> <small class="time-messages text-muted"><span class="fas fa-time"></span> <span class="minutes">'+getCurrentTime()+'</span></small> </div><p class="messages-p">'+txt+'</p></div></li>';
			jQuery('.messages-list').append(html);
			jQuery('#input-me').val('');
			if(txt){
				jQuery.ajax({
					url:'get_bot_message.php',
					type:'post',
					data:'txt='+txt,
					success:function(result){
						var html='<li class="messages-you clearfix"><span class="message-img"><img src="images/bot_avatar.png" class="avatar-sm rounded-circle"></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">Chatbot</strong> <small class="time-messages text-muted"><span class="fas fa-time"></span> <span class="minutes">'+getCurrentTime()+'</span></small> </div><p class="messages-p">'+result+'</p></div></li>';
						jQuery('.messages-list').append(html);
						jQuery('.messages-box').scrollTop(jQuery('.messages-box')[0].scrollHeight);
					}
				});
			}
		}
	</script>
</body>
</html>