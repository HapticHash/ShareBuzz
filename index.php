<!DOCTYPE html>
<html lang="en">
<head>  
	<title>Share A Buzz In Whole World</title>
	
	<!--Scripts-->
	<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/jquery-2.2.0.js"></script>
	<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	
	<!--Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
	<!--Styles-->
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <link rel="stylesheet" type="text/css" href="css/button.css" >
	
	<!--Favicon-->
	<link rel="icon" type="image/png" href="images/favicon.png">
	
	<script>
		
		var n=1;
		$(window).scroll(function(){
			/*if($(window).scrollTop()<200 && $(window).scrollTop()>150)
			{
				window.scrollBy(0,200);
			}
			else if($(window).scrollTop()>250 && $(window).scrollTop()<300)
			{
				window.scrollBy(0,-350);
			}*/
			if($(window).scrollTop()>70)
			{
				$(".card").css("margin-left","0");
				$(".card").css("margin-top","0%");
				$(".card").css("width","100%");
				$(".card").css("top","0");
				$(".card img").css("width","22%");
				$(".card img").css("margin-top","-32px");
				$(".card").css("position","fixed");
				$("body").css("margin-top","250px");
				$("#check").css("margin-left","75%");
				$(".marquee").css("margin-top","-60px");

				
			}
			if($(window).scrollTop()<20)
			{
				$(".card").css("margin-left","25%");
				$(".card").css("margin-top","5%");
				$(".card").css("width","80%");
				$(".card").css("border-radius","8px");
				$(".card").css("position","relative");
				$("body").css("margin-top","0px");
				$(".card img").css("margin-top","-18px");
				$(".card img").css("width","30%");
				$("#check").css("margin-left","65%");
				$(".marquee").css("margin-top","-10px");
			}
		});
		function insert()
		{
			var msg=document.getElementById('inp').value;
			var detail=document.getElementById('name').value;
			document.getElementById('inp').value="";
			document.getElementById('name').value="";
			$.post('submit.php',{detail:detail,msg:msg,state:'1'},function (data)
			{
				getit();
			});
		}
		function getit()
		{
			$.post('submit.php',{msg:'',state:''},function (data)
			{
				document.getElementById("card1").innerHTML=data;
			});
			
		}
		function change(){
			if(n==1)
			{
				//show
				$("#name").css("display","inline");
				n=0;
			}
			else
			{
				//hide
				$("#name").css("display","none");
				n=1;
			}
		}
	</script>

</head>

<body onload="javascript:getit()">
	<div class="card" z-default='20'>
    <br>
       <div id="form">
			<img src="images/newlogo.png">
		    <div class="group">  
				<input type="text" required placeholder="Enter link here" onkeypress="if(event.keyCode == 13)insert();" name="inp" id="inp" style=" height: 30px; margin-top: 5px;" autofocus>	<input type="checkbox" onclick="change()" onkeypress="if(event.keyCode == 13)insert(); id="check" " id="check" style=" ">Add text?
				
				<button onclick="insert()" class="btn"><span>Post It </span></button>
				
				<input type="text" style="display:none" id="name" placeholder="text">
		    </div>
			
			<div class="marquee">
			  <p> <marquee> <strong>Note:</strong> Some of websites (like Google) had blocked link preview generation so our website will not show you anything in link preview box. Sorry for that trouble.  </marquee> </p>
			</div>
				
	    </div>
    </div>
	
    <div id="card1" z-default='20'>
	Loading Chat...
    </div>
	
</body>
</html>






 