<?php
include('../db_Class.php');
$obj = new db_class();
$obj->MySQL();
$pid=$_GET['cid'];
if($pid!=1)
{
	?>
	 <label class="mws-form-label">Expense Account </label>
                                    <div class="mws-form-item">
                                        <select class="required mws-select2 large" name="in_ac_id">
                                        	<option value="" selected>Chose Accounts</option>
                                            <?php
											$obj->sql("SELECT * FROM ladger_list_properties WHERE main_head_id='4'");
											while($row=mysql_fetch_array($obj->result))
											{
											?>
												<option value="<?php echo $row['id']; ?>"><?php echo $row['head_sub_list_name']; ?></option>
                                            <?php
											}
											?>
                                        </select>
                                    </div>
    <?php
}
else
{
	?>
     <label class="mws-form-label">Asset Account </label>
                                    <div class="mws-form-item">
                                        <select class="required mws-select2 large" name="in_ac_id">
                                        	<option value="" selected>Chose Accounts</option>
                                            <?php
											$obj->sql("SELECT * FROM ladger_list_properties WHERE main_head_id='1'");
											while($row=mysql_fetch_array($obj->result))
											{
											?>
												<option value="<?php echo $row['id']; ?>"><?php echo $row['head_sub_list_name']; ?></option>
                                            <?php
											}
											?>
                                        </select>
                                    </div>
    <?php
}
?> 