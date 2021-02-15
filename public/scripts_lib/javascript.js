$(function (){
			$(document).ready(function (){
			});
			$("#registerme").click(function(){
				var surname=$(".surname").val();
						
				if ((surname=="")){
					$("#im").slideUp();
					$("#msg").css("color","red");
					$("#msg").html("Please Fill oin your surname");
				}
				
			});
							
});
