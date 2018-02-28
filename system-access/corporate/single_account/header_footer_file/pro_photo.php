<!-- User Information and functions section -->
<div id="mws-user-info" class="mws-inset">

    <!-- User Photo -->
    <div id="mws-user-photo">
        <img src="../css/icons/icol32/accept.png" alt="User Photo">
    </div>
    
    <!-- Username and Functions -->
    <div id="mws-user-functions">
        <div id="mws-username">
            Hello, <?php echo $_SESSION['SESS_AMSIT_EMP_NAME']; ?>
        </div>
        <ul>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Change Password</a></li>
            <li><a href="class_file/logout.php">Logout</a></li>
        </ul>
    </div>
</div>