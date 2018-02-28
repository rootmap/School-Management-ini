

<div class=" auto-position height-40 margin-top-10">
    <div id='cssmenu' class="right">
        <ul>
           <li><a href='eiin_number_setting2.php'><span>HOME</span></a></li>
           <li class="has-sub"><a href='#'><span>More Feature</span></a>
           		<ul style="margin-left:3px; width:126px;">
                    <li><a href='notice.php'><span>Notice</span></a></li>
                    <li><a href='division.php'><span>Add Division</span></a></li>
                    <li><a href='district.php'><span>Add District</span></a></li>
                    <li><a href='thana.php'><span>Add Thana</span></a></li>
                </ul>
           </li>
           <li><a href='eiin_number_setting2.php'><span>EIMS Software User</span></a></li>
           <li><a href='eiin_number_setting.php'><span>EIIN Number & SMS Settings</span></a></li>
           <li class='has-sub last'><a href='#'><span>Admin Settings</span></a>
           		<ul style="margin-left:-3px; width:140px;">
                	<?php if(isset($_SESSION['SESS_AMSIT_EIIN_KEY'])){ ?>
                    <li><a href='changepassword2.php'><span>Super Password</span></a></li>
                    <?php } ?>
                    <li><a href='changepassword.php'><span>Change Password</span></a></li>
                    <li><a href='logout.php'><span>Logout</span></a></li>
                </ul>
           </li>
        </ul>
    </div>
</div>