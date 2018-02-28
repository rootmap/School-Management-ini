<div class="footer_div_full">
            <div class="footer_div">
<ul>
    <li class="left">&copy;<a href="http://www.dreamstech.net/"> DREAMS TECH</a> 2013 | Privacy & Policy</li>
    <li class="right">Developed & Designed By&nbsp;<a href="http://www.amsitsoft.com/">DREAMS TECH IT</a></li>
</ul>

</div>
          </div>
          
          		<script type="text/javascript">
			jQuery(function($){
	

        
        $("#topgallery").keyup(function(){
        var filter = $(this).val(), count = 0;
        $(".topgallery").each(function(){
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();
            } else {
                $(this).show();
                count++;
            }
        });
        var numberItems = count;
        $("#topgallery-count").text("Result= "+count);
        });
        
});
</script>