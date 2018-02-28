<?php
include('../db_Class.php');
$obj = new db_class();

$pid=$_GET['cid'];
if($pid!=1)
{
	?>
	 <label class="mws-form-label">Expense Account </label>
                                    <div class="mws-form-item">
                                        <select class="required mws-select2 large" name="in_ac_id">
                                        	<option value="" selected>Chose Accounts</option>
                                            <?php
											$sql1=$obj->SelectAllByID("account_module_ladger_list_properties",array("main_head_id"=>4));
											foreach($sql1 as $row)
											{
											?>
												<option value="<?php echo $row->id; ?>"><?php echo $row->head_sub_list_name; ?></option>
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
											$sql2=$obj->SelectAllByID("account_module_ladger_list_properties",array("main_head_id"=>1));
											foreach($sql2 as $row)
											{
											?>
												<option value="<?php echo $row->id; ?>"><?php echo $row->head_sub_list_name; ?></option>
                                            <?php
											}
											?>
                                        </select>
                                    </div>
    <?php
}
?> 