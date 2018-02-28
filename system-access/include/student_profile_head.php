    <div class="eims_soft_head">
                <div class="logo_soft_div left">
                    <!--<img src="images/dreams_logo_text" />-->
                    <h1><img src="../images/logo.png" style="margin-left:-33px; margin-top:4px;" /></h1>
                    <!--<img src="images/eims_logo.png" />-->
                </div>
                <div class="left" style="color:rgba(204,204,204,1); font-weight:bold; line-height:100px; font:Nyala; font-size:24px; padding:10px;">
                   
                           <?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school,"acount_name");?>
                        
                </div>
                
            </div>