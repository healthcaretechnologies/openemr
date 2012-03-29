<?php
include_once("../../globals.php");
include_once("$srcdir/api.inc");
formHeader("Form: current_functional_status");
$returnurl = $GLOBALS['concurrent_layout'] ? 'encounter_top.php' : 'patient_encounter.php';
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
  <?php xl("Current Function Status",'e') ?> 
 </strong> </span><br><br>
<table border="1">
<tr><td rowspan="2"> <span class="body_top"><span class="FontColor">
  <?php xl("Eating or feeding",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="eating_or_feeding" value="no Help" /> 
      <?php xl("no Help",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="eating_or_feeding" value="25%" /> 
      <?php xl("25%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="eating_or_feeding" value="50%" /> 
      <?php xl("50%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="eating_or_feeding" value="75%" /> 
      <?php xl("75%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="eating_or_feeding" value="100% Help" /> 
      <?php xl("100% Help",'e') ?> 
    </label>
  </span></span></td>
</tr>
<tr> 
  <td colspan="3"><span class="body_top"><span class="FontColor">
    <?php xl("Diet",'e') ?>
    </span><span class="FontColor">
      <input type="text" name="diet"  />
      </span></span> <span class="body_top"><span class="FontColor">
        <?php xl("Feeding tube",'e') ?> 
        </span></span><span class="body_top"><span class="FontColor">
        <label>
          <input type="radio" name="feeding_tube" value="Yes" /> 
          <?php xl("Yes",'e') ?> 
        </label> 
        <label>
          <input type="radio" name="feeding_tube" value="No" /> 
          <?php xl("No",'e') ?> 
        </label>
      </span></span></td> 
  </tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Upper bathing",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="upper_bathing" value="no Help" /> 
      <?php xl("no Help",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="upper_bathing" value="25%" /> 
      <?php xl("25%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="upper_bathing" value="50%" /> 
      <?php xl("50%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="upper_bathing" value="75%" /> 
      <?php xl("75%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="upper_bathing" value="100% Help" /> 
      <?php xl("100% Help",'e') ?> 
    </label>
  </span></span></td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Lower bathing",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="lower_bathing" value="no Help" /> 
      <?php xl("no Help",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="lower_bathing" value="25%" /> 
      <?php xl("25%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="lower_bathing" value="50%" /> 
      <?php xl("50%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="lower_bathing" value="75%" /> 
      <?php xl("75%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="lower_bathing" value="100% Help" /> 
      <?php xl("100% Help",'e') ?> 
    </label>
  </span></span></td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Upper dressing",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="upper_dressing" value="no Help" /> 
      <?php xl("no Help",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="upper_dressing" value="25%" /> 
      <?php xl("25%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="upper_dressing" value="50%" /> 
      <?php xl("50%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="upper_dressing" value="75%" /> 
      <?php xl("75%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="upper_dressing" value="100% Help" /> 
      <?php xl("100% Help",'e') ?> 
    </label>
  </span></span></td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Lower dressing",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="lower_dressing" value="no Help" /> 
      <?php xl("no Help",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="lower_dressing" value="25%" /> 
      <?php xl("25%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="lower_dressing" value="50%" /> 
      <?php xl("50%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="lower_dressing" value="75%" /> 
      <?php xl("75%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="lower_dressing" value="100% Help" /> 
      <?php xl("100% Help",'e') ?> 
    </label>
  </span></span></td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Transfers",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="transfers" value="no Help" /> 
      <?php xl("no Help",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="transfers" value="25%" /> 
      <?php xl("25%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="transfers" value="50%" /> 
      <?php xl("50%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="transfers" value="75%" /> 
      <?php xl("75%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="transfers" value="100% Help" /> 
      <?php xl("100% Help",'e') ?> 
    </label>
  </span></span></td>
</tr>
<tr><td rowspan="2"> <span class="body_top"><span class="FontColor">
  <?php xl("Ambulate",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="ambulate" value="no Help" /> 
      <?php xl("no Help",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="ambulate" value="25%" /> 
      <?php xl("25%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="ambulate" value="50%" /> 
      <?php xl("50%",'e') ?>
      <input type="radio" name="ambulate" value="75%" /> 
    </label> 
    <label>
      <?php xl("75%",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="ambulate" value="100% Help" /> 
      <?php xl("100% Help",'e') ?> 
    </label>
  </span></span></td>
</tr>
<tr>
  <td><span class="body_top"><span class="FontColor">
    <?php xl("Any device used",'e') ?>
    <input type="text" name="any_device_used"  />
  </span></span></td>
</tr>
<tr><td rowspan="2"> <span class="body_top"><span class="FontColor">
  <?php xl("Bladder",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="bladder" value="Continent" /> 
      <?php xl("Continent",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="bladder" value="Incontinent" /> 
      <?php xl("Incontinent",'e') ?> 
    </label>
  </span></span></td>
</tr>
<tr>
  <td colspan="3"><span class="body_top"><span class="FontColor">
    <label>
      <?php xl("Program Used",'e') ?>
      <input type="checkbox" name="bladder_program[]" value="Depends" /> 
      <?php xl("Depends",'e') ?> 
      </label> 
    <label>
      <input type="checkbox" name="bladder_program[]" value="Ext. Cath." /> 
      <?php xl("Ext. Cath.",'e') ?> 
      </label>
    </span></span> <span class="body_top"><span class="FontColor">
      <?php xl("Other",'e') ?> 
      </span></span><span class="body_top"><span class="FontColor">
        <input type="text" name="other_bladder"  />
      </span></span></td> 
  </tr>
<tr><td rowspan="2"> <span class="body_top"><span class="FontColor">
  <?php xl("Bowel",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="bowel" value="Continent" /> 
      <?php xl("Continent",'e') ?> 
      </label> 
    <label>
      <input type="radio" name="bowel" value="Incontinent" /> 
      <?php xl("Incontinent",'e') ?> 
      </label>
    </span></span></td>
</tr>
<tr> 
  <td><span class="body_top"><span class="FontColor">
    <?php xl("Program Used",'e') ?>
    <input type="text" name="bowel_program"  />
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