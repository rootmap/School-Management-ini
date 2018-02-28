$(document).ready(function (e) {
	$("#uploadimage").on('submit',(function(e) {
		e.preventDefault();
		$("#message").empty(); 
		$('#loading').show();
		$.ajax({
        	url: "json/ajax_php_file.php",   	// Url to which the request is send
			type: "POST",      				// Type of request to be send, called as method
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
				$('#loading').hide();
				//$("#message").html(data);
				if(data!='')
				{
					var imagess="<img src='json/upload/"+data+"' width='100' height='100'><a style='display:block; clear:both;' href=''><strong>Save Photo</strong></a>";
						$("#message").html(imagess);
					/*$('#loading').show();
					var club_id = $('#club_id').val();
					var page = $('#page').val();
                    var imagename =data;
                    post_data = {'photo_id':club_id, 'imagename':imagename, 'status':2,'fetch':5002};
					 $.post('shout.php', post_data,  function(datas) {
						$('#loading').hide();
						$('#message').show();*/
				/*
						//window.location.replace(page);
					 });*/
				}
				else
				{
					$('#message').html("Something Went Wrong.");
				}
		    }	        
	   });
	}));

// Function to preview image
	$(function() {
        $("#file").change(function() {
			$("#message").empty();         // To remove the previous error message
			var file = this.files[0];
			var imagefile = file.type;
			var match= ["image/jpeg","image/png","image/jpg"];	
			if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
			{
			$('#previewing').attr('src','noimage.png');
			$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
			return false;
			}
            else
			{
                var reader = new FileReader();	
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
            }		
        });
    });
	function imageIsLoaded(e) { 
		$("#file").css("color","green");
        $('#image_preview').css("display", "block");
        $('#previewing').attr('src', e.target.result);
		$('#previewing').attr('width', '80px');
		$('#previewing').attr('height', '80px');
	};
});
