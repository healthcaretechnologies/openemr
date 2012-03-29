<?php
include_once("../../globals.php");
include_once("$srcdir/api.inc");
formHeader("Form: current_functional_status");
?>
<html><head>
<link rel=stylesheet href="<?echo $css_header;?>" type="text/css">
</head>
<body <?echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<form method=post action="<?echo $rootdir;?>/forms/current_functional_status/save.php?mode=new" name="my_form" onsubmit="return top.restoreSession()">
<h1> Current Functions Status </h1>
<hr>
<input type="submit" name="submit form" value="submit form" /><br>

<table>

<tr><td> <?php xl("Eating or feeding",'e') ?> </td> <td><label><input type="radio" name="eating_or_feeding" value="no Help" /> <?php xl("no Help",'e') ?> </label> <label><input type="radio" name="eating_or_feeding" value="25%" /> <?php xl("25%",'e') ?> </label> <label><input type="radio" name="eating_or_feeding" value="50%" /> <?php xl("50%",'e') ?> </label> <label><input type="radio" name="eating_or_feeding" value="75%" /> <?php xl("75%",'e') ?> </label> <label><input type="radio" name="eating_or_feeding" value="100% Help" /> <?php xl("100% Help",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Diet",'e') ?> </td> <td><input type="text" name="diet"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Feeding tube",'e') ?> </td> <td><label><input type="radio" name="feeding_tube" value="Yes" /> <?php xl("Yes",'e') ?> </label> <label><input type="radio" name="feeding_tube" value="No" /> <?php xl("No",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Upper bathing",'e') ?> </td> <td><label><input type="radio" name="upper_bathing" value="no Help" /> <?php xl("no Help",'e') ?> </label> <label><input type="radio" name="upper_bathing" value="25%" /> <?php xl("25%",'e') ?> </label> <label><input type="radio" name="upper_bathing" value="50%" /> <?php xl("50%",'e') ?> </label> <label><input type="radio" name="upper_bathing" value="75%" /> <?php xl("75%",'e') ?> </label> <label><input type="radio" name="upper_bathing" value="100% Help" /> <?php xl("100% Help",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Lower bathing",'e') ?> </td> <td><label><input type="radio" name="lower_bathing" value="no Help" /> <?php xl("no Help",'e') ?> </label> <label><input type="radio" name="lower_bathing" value="25%" /> <?php xl("25%",'e') ?> </label> <label><input type="radio" name="lower_bathing" value="50%" /> <?php xl("50%",'e') ?> </label> <label><input type="radio" name="lower_bathing" value="75%" /> <?php xl("75%",'e') ?> </label> <label><input type="radio" name="lower_bathing" value="100% Help" /> <?php xl("100% Help",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Upper dressing",'e') ?> </td> <td><label><input type="radio" name="upper_dressing" value="no Help" /> <?php xl("no Help",'e') ?> </label> <label><input type="radio" name="upper_dressing" value="25%" /> <?php xl("25%",'e') ?> </label> <label><input type="radio" name="upper_dressing" value="50%" /> <?php xl("50%",'e') ?> </label> <label><input type="radio" name="upper_dressing" value="75%" /> <?php xl("75%",'e') ?> </label> <label><input type="radio" name="upper_dressing" value="100% Help" /> <?php xl("100% Help",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Lower dressing",'e') ?> </td> <td><label><input type="radio" name="lower_dressing" value="no Help" /> <?php xl("no Help",'e') ?> </label> <label><input type="radio" name="lower_dressing" value="25%" /> <?php xl("25%",'e') ?> </label> <label><input type="radio" name="lower_dressing" value="50%" /> <?php xl("50%",'e') ?> </label> <label><input type="radio" name="lower_dressing" value="75%" /> <?php xl("75%",'e') ?> </label> <label><input type="radio" name="lower_dressing" value="100% Help" /> <?php xl("100% Help",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Transfers",'e') ?> </td> <td><label><input type="radio" name="transfers" value="no Help" /> <?php xl("no Help",'e') ?> </label> <label><input type="radio" name="transfers" value="25%" /> <?php xl("25%",'e') ?> </label> <label><input type="radio" name="transfers" value="50%" /> <?php xl("50%",'e') ?> </label> <label><input type="radio" name="transfers" value="75%" /> <?php xl("75%",'e') ?> </label> <label><input type="radio" name="transfers" value="100% Help" /> <?php xl("100% Help",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Ambulate",'e') ?> </td> <td><label><input type="radio" name="ambulate" value="no Help" /> <?php xl("no Help",'e') ?> </label> <label><input type="radio" name="ambulate" value="25%" /> <?php xl("25%",'e') ?> </label> <label><input type="radio" name="ambulate" value="50%" /> <?php xl("50%",'e') ?> </label> <label><input type="radio" name="ambulate" value="75%" /> <?php xl("75%",'e') ?> </label> <label><input type="radio" name="ambulate" value="100% Help" /> <?php xl("100% Help",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Any device used",'e') ?> </td> <td><input type="text" name="any_device_used"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Bladder",'e') ?> </td> <td><label><input type="radio" name="bladder" value="Continent" /> <?php xl("Continent",'e') ?> </label> <label><input type="radio" name="bladder" value="Incontinent" /> <?php xl("Incontinent",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Bladder program",'e') ?> </td> <td><label><input type="checkbox" name="bladder_program[]" value="Depends" /> <?php xl("Depends",'e') ?> </label> <label><input type="checkbox" name="bladder_program[]" value="Ext. Cath." /> <?php xl("Ext. Cath.",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Other bladder",'e') ?> </td> <td><input type="text" name="other_bladder"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Bowel",'e') ?> </td> <td><label><input type="radio" name="bowel" value="Continent" /> <?php xl("Continent",'e') ?> </label> <label><input type="radio" name="bowel" value="Incontinent" /> <?php xl("Incontinent",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Bowel program",'e') ?> </td> <td><input type="text" name="bowel_program"  /></td></tr>

</table>
<table></table><input type="submit" name="submit form" value="submit form" />
</form>
<?php
formFooter();
?>
