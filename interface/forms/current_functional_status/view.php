<?php
include_once("../../globals.php");
include_once("$srcdir/api.inc");
formHeader("Form: current_functional_status");
 $obj = formFetch("form_current_functional_status", $_GET["id"]);  //#Use the formFetch function from api.inc to get values for existing form. 
  
 function chkdata_Txt(&$obj, $var) { 
         return htmlspecialchars($obj{"$var"},ENT_QUOTES); 
 } 
 function chkdata_Date(&$obj, $var) { 
         return htmlspecialchars($obj{"$var"},ENT_QUOTES); 
 } 
 function chkdata_CB(&$obj, $nam, $var) { 
 	if (preg_match("/Positive.*$var/",$obj{$nam})) {return "checked";} else {return ;} 
 } 
 function chkdata_Radio(&$obj, $nam, $var) { 
 	if (strpos($obj{$nam},$var) !== false) {return "checked";} 
 } 
  function chkdata_PopOrScroll(&$obj, $nam, $var) { 
 	if (preg_match("/Positive.*$var/",$obj{$nam})) {return "checked";} else {return "selected";} 
 }
?>
<html><head>
<link rel=stylesheet href="<?echo $css_header;?>" type="text/css">
<style type="text/css">
.FontColor {
	font-family: Arial, Helvetica, sans-serif;
}
.body_top {
	font-size: 12px;
}
.body_top form .FontColor strong {
	font-size: 14px;
}
</style>
</head>
<body class="body_top"> 
<form method=post action="<?echo $rootdir;?>/forms/current_functional_status/save.php?mode=new" name="current_functional_status" onsubmit="return top.restoreSession()">
<span class="FontColor"><strong>
  <?php xl("Current Functional Status",'e') ?> 
 </strong> </span><br><br>
<table border="1">
<tr><td rowspan="2"> <span class="body_top"><span class="FontColor">
  <?php xl("Eating or feeding",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="eating_or_feeding" value="no Help" <?php $result = chkdata_Radio($obj,"eating_or_feeding","no Help"); echo $result;?>/> 
      <?php xl("no Help",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="eating_or_feeding" value="25%" <?php $result = chkdata_Radio($obj,"eating_or_feeding","25%"); echo $result;?>/> 
      <?php xl("25%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="eating_or_feeding" value="50%" <?php $result = chkdata_Radio($obj,"eating_or_feeding","50%"); echo $result;?>/> 
      <?php xl("50%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="eating_or_feeding" value="75%" <?php $result = chkdata_Radio($obj,"eating_or_feeding","75%"); echo $result;?>/> 
      <?php xl("75%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="eating_or_feeding" value="100% Help" <?php $result = chkdata_Radio($obj,"eating_or_feeding","100% Help"); echo $result;?>/> 
      <?php xl("100% Help",'e') ?> 
    </label>
  </span></span></td>
</tr>
<tr> 
  <td colspan="3"><span class="body_top"><span class="FontColor">
    <?php xl("Diet",'e') ?>
    </span><span class="FontColor">
      <input type="text" name="diet" value="<?php $result = chkdata_Txt($obj,"diet"); echo $result;?>" />
      </span></span> <span class="body_top"><span class="FontColor">
        <?php xl("Feeding tube",'e') ?> 
        </span></span><span class="body_top"><span class="FontColor">
        <label>
          <input type="radio" name="feeding_tube" value="Yes" <?php $result = chkdata_Radio($obj,"feeding_tube","Yes"); echo $result;?>/> 
          <?php xl("Yes",'e') ?> 
        </label> 
        <label>
          <input type="radio" name="feeding_tube" value="No" <?php $result = chkdata_Radio($obj,"feeding_tube","No"); echo $result;?>/> 
          <?php xl("No",'e') ?> 
        </label>
      </span></span></td> 
  </tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Upper bathing",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="upper_bathing" value="no Help" <?php $result = chkdata_Radio($obj,"upper_bathing","no Help"); echo $result;?> /> 
      <?php xl("no Help",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="upper_bathing" value="25%" <?php $result = chkdata_Radio($obj,"upper_bathing","25%"); echo $result;?>/> 
      <?php xl("25%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="upper_bathing" value="50%" <?php $result = chkdata_Radio($obj,"upper_bathing","50%"); echo $result;?>/> 
      <?php xl("50%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="upper_bathing" value="75%" <?php $result = chkdata_Radio($obj,"upper_bathing","75%"); echo $result;?> /> 
      <?php xl("75%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="upper_bathing" value="100% Help" <?php $result = chkdata_Radio($obj,"upper_bathing","100% Help"); echo $result;?>/> 
      <?php xl("100% Help",'e') ?> 
    </label>
  </span></span></td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Lower bathing",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="lower_bathing" value="no Help" <?php $result = chkdata_Radio($obj,"lower_bathing","no Help"); echo $result;?>/> 
      <?php xl("no Help",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="lower_bathing" value="25%" <?php $result = chkdata_Radio($obj,"lower_bathing","25%"); echo $result;?>/> 
      <?php xl("25%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="lower_bathing" value="50%" <?php $result = chkdata_Radio($obj,"lower_bathing","50%"); echo $result;?>/> 
      <?php xl("50%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="lower_bathing" value="75%" <?php $result = chkdata_Radio($obj,"lower_bathing","75%"); echo $result;?>/> 
      <?php xl("75%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="lower_bathing" value="100% Help" <?php $result = chkdata_Radio($obj,"lower_bathing","100% Help"); echo $result;?>/> 
      <?php xl("100% Help",'e') ?> 
    </label>
  </span></span></td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Upper dressing",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="upper_dressing" value="no Help" <?php $result = chkdata_Radio($obj,"upper_dressing","no Help"); echo $result;?>/> 
      <?php xl("no Help",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="upper_dressing" value="25%" <?php $result = chkdata_Radio($obj,"upper_dressing","25%"); echo $result;?>/> 
      <?php xl("25%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="upper_dressing" value="50%" <?php $result = chkdata_Radio($obj,"upper_dressing","50%"); echo $result;?>/> 
      <?php xl("50%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="upper_dressing" value="75%" <?php $result = chkdata_Radio($obj,"upper_dressing","75%"); echo $result;?>/> 
      <?php xl("75%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="upper_dressing" value="100% Help" <?php $result = chkdata_Radio($obj,"upper_dressing","100% Help"); echo $result;?>/> 
      <?php xl("100% Help",'e') ?> 
    </label>
  </span></span></td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Lower dressing",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="lower_dressing" value="no Help" <?php $result = chkdata_Radio($obj,"lower_dressing","no Help"); echo $result;?>/> 
      <?php xl("no Help",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="lower_dressing" value="25%" <?php $result = chkdata_Radio($obj,"lower_dressing","25%"); echo $result;?>/> 
      <?php xl("25%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="lower_dressing" value="50%" <?php $result = chkdata_Radio($obj,"lower_dressing","50%"); echo $result;?>/> 
      <?php xl("50%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="lower_dressing" value="75%" <?php $result = chkdata_Radio($obj,"lower_dressing","75%"); echo $result;?>/> 
      <?php xl("75%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="lower_dressing" value="100% Help" <?php $result = chkdata_Radio($obj,"lower_dressing","100%"); echo $result;?>/> 
      <?php xl("100% Help",'e') ?> 
    </label>
  </span></span></td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Transfers",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="transfers" value="no Help" <?php $result = chkdata_Radio($obj,"transfers","no Help"); echo $result;?>/> 
      <?php xl("no Help",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="transfers" value="25%" <?php $result = chkdata_Radio($obj,"transfers","25%"); echo $result;?>/> 
      <?php xl("25%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="transfers" value="50%" <?php $result = chkdata_Radio($obj,"transfers","50%"); echo $result;?>/> 
      <?php xl("50%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="transfers" value="75%" <?php $result = chkdata_Radio($obj,"transfers","75%"); echo $result;?>/> 
      <?php xl("75%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="transfers" value="100% Help" <?php $result = chkdata_Radio($obj,"transfers","100% Help"); echo $result;?>/> 
      <?php xl("100% Help",'e') ?> 
    </label>
  </span></span></td>
</tr>
<tr><td rowspan="2"> <span class="body_top"><span class="FontColor">
  <?php xl("Ambulate",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="ambulate" value="no Help" <?php $result = chkdata_Radio($obj,"ambulate","no Help"); echo $result;?>/> 
      <?php xl("no Help",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="ambulate" value="25%" <?php $result = chkdata_Radio($obj,"ambulate","25%"); echo $result;?>/> 
      <?php xl("25%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="ambulate" value="50%" <?php $result = chkdata_Radio($obj,"ambulate","50%"); echo $result;?>/> 
      <?php xl("50%",'e') ?>
      <input type="radio" name="ambulate" value="75%" <?php $result = chkdata_Radio($obj,"ambulate","75%"); echo $result;?>/> 
    </label> 
    <label>
      <?php xl("75%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="ambulate" value="100% Help" <?php $result = chkdata_Radio($obj,"ambulate","100% Help"); echo $result;?>/> 
      <?php xl("100% Help",'e') ?> 
    </label>
  </span></span></td>
</tr>
<tr>
  <td><span class="body_top"><span class="FontColor">
    <?php xl("Any device used",'e') ?>
    <input type="text" name="any_device_used" value="<?php $result = chkdata_Txt($obj,"any_device_used"); echo $result;?>" />
  </span></span></td>
</tr>
<tr><td rowspan="2"> <span class="body_top"><span class="FontColor">
  <?php xl("Bladder",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="bladder" value="Continent" <?php $result = chkdata_Radio($obj,"bladder","Continent"); echo $result;?>/> 
      <?php xl("Continent",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="bladder" value="Incontinent" <?php $result = chkdata_Radio($obj,"bladder","Incontinent"); echo $result;?>/> 
      <?php xl("Incontinent",'e') ?> 
    </label>
  </span></span></td>
</tr>
<tr>
  <td colspan="3"><span class="body_top"><span class="FontColor">
    <label>
      <?php xl("Program Used",'e') ?>
      <input type="checkbox" name="bladder_program[]" value="Depends"<?php $result = chkdata_CB($obj,"bladder_program","Depends"); echo $result;?> /> 
      <?php xl("Depends",'e') ?> 
      </label> 
    <label>
      <input type="checkbox" name="bladder_program[]" value="Ext. Cath." <?php $result = chkdata_CB($obj,"bladder_program","Ext. Cath."); echo $result;?>/> 
      <?php xl("Ext. Cath.",'e') ?> 
      </label>
    </span></span> <span class="body_top"><span class="FontColor">
      <?php xl("Other",'e') ?> 
      </span></span><span class="body_top"><span class="FontColor">
        <input type="text" name="other_bladder"  value="<?php $result = chkdata_Txt($obj,"other_bladder"); echo $result;?>"/>
      </span></span></td> 
  </tr>
<tr><td rowspan="2"> <span class="body_top"><span class="FontColor">
  <?php xl("Bowel",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="bowel" value="Continent" <?php $result = chkdata_Radio($obj,"bowel","Continent"); echo $result;?>/> 
      <?php xl("Continent",'e') ?> 
      </label> 
    <label>
      <input type="radio" name="bowel" value="Incontinent" <?php $result = chkdata_Radio($obj,"bowel","Incontinent"); echo $result;?>/> 
      <?php xl("Incontinent",'e') ?> 
      </label>
    </span></span></td>
</tr>
<tr> 
  <td><span class="body_top"><span class="FontColor">
    <?php xl("Program Used",'e') ?>
    <input type="text" name="bowel_program"  value="<?php $result = chkdata_Txt($obj,"bowel_program"); echo $result;?>"/>
  </span></span></td>
</tr>

</table>
<table></table><br>
<span class="FontColor">
<input type="submit" name="submit form" value="Save" />
</span>
</form>

<?php
formFooter();
?>
</span>