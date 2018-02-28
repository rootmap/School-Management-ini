$(document).ready(function (e) {
	$("#uploadimage").on('submit',(function(e) {
		e.preventDefault();
		 e.stopImmediatePropagation();
		$('#image_preview').html("<img src='images/loader-big.gif' /> Uploading...");
		$.ajax({
        	url: "json/ajax_php_file.php",   	// Url to which the request is send
			type: "POST",      				// Type of request to be send, called as method
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
				 
				$('#image_preview').html("<img src='images/loader-big.gif' /> Processing...");
				if(data!='')
				{
					
					
					var admission_id = $('#admission_id').val();
					var sttt=2;
                    post_datas = {'photo':data, 'admission_id':admission_id, 'status':sttt};
					 $.post('json/student.php', post_datas,  function(datas) 
					 {
						 //alert("Success : "+datas);

						var imagess="<img src='photo/"+data+"' width='80' height='80'>"; 
						$("#image_preview").html(imagess);
						
						$("#upc").html("<br>Student Photo<br>Upload Completed.");
						
					 });
				}
				else
				{
					alert("Re-Upload Image.");
				}
		    }	        
	   });
	}));

// Function to preview image
	$(function() {
        $("#file").change(function() {        // To remove the previous error message
			var file = this.files[0];
			var imagefile = file.type;
			var match= ["image/jpeg","image/png","image/jpg"];	
			if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
			{
			$('#previewing').attr('src','noimage.png');
			alert("Re-Upload Image.");
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
		//alert("Are You Sure To Upload : "+e.target.result+" File");
	};
});
