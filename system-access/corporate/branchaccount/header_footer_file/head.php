<!-- Header -->
<div id="mws-header" class="clearfix">
    <!-- Logo Container -->
    <div id="mws-logo-container">
    
        <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        <div id="mws-logo-wrap">
            <img src="../images/mws-logo.png" alt="mws admin">
        </div>
    </div>
    
    <!-- User Tools (notifications, logout, profile, change password) -->
    <div id="mws-user-tools" class="clearfix">
        <?php include('header.php'); ?>
        <?php include('pro_photo.php'); ?>
    </div>
</div>

<a href="#" class="collaps" id="collapp" style="background:#FFF; color:#333; left:0;   border-top-right-radius:5px; border-bottom-right-radius:5px;  "><i class="icon-minus"></i></a>
<a href="#" class="collaps" id="collapps" style="display:none; color:#fff;  border-top-right-radius:5px; border-bottom-right-radius:5px; background:#333; left:10px;"><i class='icon-plus'></i></a>
<style type="text/css">
	.collaps
	{
		 text-align:center; font-size:24px; width:40px; position:absolute; margin-top:10px; left:5px; z-index:9999;
	}
	
	#collaps
	{
		 text-align:center; font-size:24px;
	}
	</style>
    <script>
	$(document).ready(function()
    {
		$(".collaps").click(function() {
			$(".collaps").toggle();
			var Ld=$(this).attr('id');
			if(Ld=="collapp")
			{
				//alert("collapp");	
				$("#mws-sidebar-stitch").css("width","5px");
				$("#mws-sidebar-stitch").css("left","5px");
				$("#mws-sidebar-bg").css("width","5px");
				$("#mws-container").css("margin-left","5px");
				
				$("#mws-sidebar").css("width","5px");
				$("#mws-nav-collapse").css("width","5px");
				$("#mws-searchbox").css("width","5px");
				$("#mws-navigation").css("width","5px");
				$("#mws-navigation").css("display","none");
			}
			else if(Ld=="collapps")
			{
								//alert("collapp");	
				$("#mws-sidebar-stitch").css("width","200px");
				$("#mws-sidebar-stitch").css("left","192px");
				$("#mws-sidebar-bg").css("width","200px");
				$("#mws-container").css("margin-left","200px");
				
				$("#mws-sidebar").css("width","200px");
				$("#mws-nav-collapse").css("width","200px");
				$("#mws-searchbox").css("width","200px");
				$("#mws-navigation").css("width","200px");
				$("#mws-navigation").css("display","block");
			}

		});
	});
	</script>