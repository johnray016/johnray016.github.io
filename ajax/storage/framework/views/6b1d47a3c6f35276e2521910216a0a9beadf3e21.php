<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
	
</head>
<body>
<div id="msg"> This message will be replaced using Ajax. Click the button to replace the message</div>
<button onclick="getMessage()">click</button>
<script>
	function getMessage(){
		$.ajax({
			type:'POST',
			url:'/getmsg',
			data:{
				_token: '<?php echo e(csrf_token()); ?>'
			},
			success:function(data){
				console.log(data);
				$('#msg').html(data.msg);
			}
		});
	}
</script>
</body>
</html>