<?php
include("../class/auth.php");
$table="ams_payment";
extract($_GET);
if($r!='')
{
	
	
	?>
   


        <table class="Fees_table shadow_inner" align="center" >
             <tr style="background:rgba(153,0,0,1); color:#FFF; font-weight:900; font-size:12px;">
                <td class="center" >SL</td>
                <td class="center">Receipt ID</td>
                <td class="center" >View</td>
                
        </tr>

     <?php 
        $array=array("admission"=>$r,"school_id"=>$school);
        $data=$obj->SelectAllByID_Multiple($table,$array);
        $s=1;
        
        if(!empty($data))
         foreach($data as $rww):
        
     ?>
     
             <tr style="background:#ececec;">
             

                <td  class="center "><?php echo $s;?></td>
                
                <td  class="center ">
                 <?php echo $rww->receipt;?>
                 <input type="hidden" id="roll" name="roll" value="" />
                </td>
                <td class="center ">
            <a href="#" onclick="showreceipt(<?php echo $rww->receipt;?>)" type="submit" name="receipt">
              <img src="images/Calculator-icon.gif" />
            </a></td>
                
               
            </tr>
            
            <?php $s++; endforeach ; ?>
           


</table>
<ul style="margin-left:30px;">
<li style="clear: both; display: block; width: 100%; padding: 10px; text-align: center;">
    <a href="#" style="text-decoration:none">
    
    </a>
</li>
</ul>

    <?php
}

else
{
    ?>
Not Selected
    <?php
}
?>
