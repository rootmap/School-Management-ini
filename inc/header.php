<nav class="navbar navbar-default" role="navigation">
                    <div class="container clearfix">
                        <!-- Logo and toggle-button starts here -->
                        <div class="navbar-header">
                            <h1 id="logo" class="clearfix">
                            	<span class="icon-badge pull-left">
                                		<img src="system-access/photo/<?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school_id,"photo"); ?>" alt="Natopara Logo" />
                                    	<!--<i class="fa fa-university fa-lg"></i>-->
                                </span>
                                <a class="navbar-brand logo pull-right" href="#">
                                	<span class="name"><?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school_id,"acount_name"); ?></span>
                                    <span class="name_estd"><?php echo $obj->SelectAllByVal("ams_singup","eiin_number",$school_id,"account_name_estd"); ?></span>
                                </a>
                            </h1>
                        </div>
                        <!-- Logo and toggle-button ends here -->
                        <!-- Search box starts here -->
                        <!--<div class="collapse navbar-collapse navbar-right visible-lg visible-md visible-sm visible-xs" id="secondary-navigation">
                            <form class="navbar-form navbar-left" method="get" role="search" name="site_search_box" action="">
                                <div class="form-group">
                                    <input class="form-control" type="text" tabindex="1" title="Search in our site" placeholder="Search...">
                                    <button class="btn btn-default" type="submit" title="Search in our site"><i class="fa fa-search fa-lg"></i></button>
                                </div>
                            </form>
                        </div>-->
                        <!-- Search box ends here -->
                    </div>
                </nav>