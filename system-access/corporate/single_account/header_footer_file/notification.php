<!-- Notifications -->
<div id="mws-user-notif" class="mws-dropdown-menu">
    <a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>
    
    <!-- Unread notification count -->
    <span class="mws-dropdown-notif"><?php echo $query_a5; ?></span>
    
    <!-- Notifications dropdown -->
    <div class="mws-dropdown-box">
        <div class="mws-dropdown-content">
            <ul class="mws-notifications">
                <?php 
            $obj->sql("SELECT * FROM bill WHERE date='$fulldate'");
            while($row_a1=mysql_fetch_array($obj->result))
            {
            ?>
                <li class="read">
                    <a href="#">
                        <span class="sender"><?php $cid=$row_a1['vendor_id'];
                        $sall=mysql_query("SELECT * FROM vendor WHERE id='$cid'");
                        $fetname=mysql_fetch_array($sall);
                        echo $fetname['company_name'];
                        ?></span>
                        <span class="message">
                           Bill Id : <?php echo $row_a1['id']; ?>
                        </span>
                        <span class="time">
                            <?php echo $row_a1['date']; ?>
                        </span>
                    </a>
                </li>
            <?php } ?>	
            </ul>
            <div class="mws-dropdown-viewall">
                <a href="#">View All Notifications</a>
            </div>
        </div>
    </div>
</div>

<!-- Messages -->
<div id="mws-user-message" class="mws-dropdown-menu">
    <a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
    
    <!-- Unred messages count -->
    <span class="mws-dropdown-notif"><?php echo $query_a5; ?></span>
    
    <!-- Messages dropdown -->
    <div class="mws-dropdown-box">
        <div class="mws-dropdown-content">
            <ul class="mws-messages">
            
            <?php 
            $obj->sql("SELECT * FROM invoice WHERE date='$fulldate'");
            while($row_a1=mysql_fetch_array($obj->result))
            {
            ?>
                <li class="read">
                    <a href="#">
                        <span class="sender"><?php $cid=$row_a1['customer_id'];
                        $sall=mysql_query("SELECT * FROM customer WHERE id='$cid'");
                        $fetname=mysql_fetch_array($sall);
                        echo $fetname['company_name'];
                        ?></span>
                        <span class="message">
                          Invoice Id : <?php echo $row_a1['id']; ?>
                        </span>
                        <span class="time">
                           <?php echo $row_a1['date']; ?>
                        </span>
                    </a>
                </li>
            <?php } ?>	
                
            </ul>
            <div class="mws-dropdown-viewall">
                <a href="#">View All Messages</a>
            </div>
        </div>
    </div>
</div>