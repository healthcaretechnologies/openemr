<?php
include_once("../../globals.php");
include_once("$srcdir/api.inc");
formHeader("Form: neuro_rehab_physical_exam");
 $obj = formFetch("form_neuro_rehab_physical_exam", $_GET["id"]);  //#Use the formFetch function from api.inc to get values for existing form. 
  
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
 	if (preg_match("/Positive.*$var/",$obj{$nam})) {return "selected";} else {return ;} 
 }
?>
<html><head>
<link rel=stylesheet href="<?echo $css_header;?>" type="text/css">
<style type="text/css">
.FontColor {
	font-family: Arial, Helvetica, sans-serif;
}
.body_top {
	font-size: 11px;
}
.body_top form .FontColor strong {
	font-size: 12px;
}
</style>
</head>
<body class="body_top"> 
<form method=post action="<?echo $rootdir?>/forms/neuro_rehab_physical_exam/save.php?mode=update&id=<?echo $_GET["id"];?>" name="my_form" onsubmit="return top.restoreSession()"> 
<span class="FontColor"><strong>
  <?php xl("Neurologic Rehabilitation Physical Exam",'e') ?> 
  </strong></span><br>
<input type="submit" name="submit form" value="Save" /><br><br>
<span class="FontColor">
 <strong><?php echo htmlspecialchars( xl('Summary'), ENT_NOQUOTES) ; ?></strong> </span>

<table>
  
  <tr><td> <span class="body_top"><span class="FontColor">
    <?php xl("Vital signs",'e') ?> 
    </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="vital_signs"  value="<?php $result = chkdata_Txt($obj,"vital_signs"); echo $result;?>"/>
      </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
      <?php xl("COR",'e') ?> 
      </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="cor" value="<?php $result = chkdata_Txt($obj,"general_appearance"); echo $result;?>" />
      </span></span></td>
  </tr>
  <tr><td> <span class="body_top"><span class="FontColor">
    <?php xl("General appearance",'e') ?> 
    </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="general_appearance" value="<?php $result = chkdata_Txt($obj,"cor"); echo $result;?>" />
      </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
      <?php xl("ABD",'e') ?> 
      </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="abd" value="<?php $result = chkdata_Txt($obj,"lungs"); echo $result;?>" />
      </span></span></td>
  </tr>
  <tr><td> <span class="body_top"><span class="FontColor">
    <?php xl("Lungs",'e') ?> 
    </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="lungs"  value="<?php $result = chkdata_Txt($obj,"abd"); echo $result;?>"/>
      </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
      <?php xl("EXT",'e') ?> 
      </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="ext" value="<?php $result = chkdata_Txt($obj,"ext"); echo $result;?>" />
      </span></span></td>
  </tr>
</table>
<span class="FontColor"><br>
<strong><?php echo htmlspecialchars( xl('Mental Status and Central Language Function'), ENT_NOQUOTES) ; ?></strong></span>

<table border="1">
  
  <tr><td width="141"> <span class="body_top"><span class="FontColor">
    <?php xl("Grossly inspected",'e') ?> 
    </span></span></td> 
    <td width="167"><span class="body_top"><span class="FontColor">
      <label>
        <input type="checkbox" name="grossly_inspected_mntl[]" value="intact"
			<?php $result = chkdata_CB($obj,"grossly_inspected_mntl","intact"); echo $result;?>> 


        <?php xl("intact",'e') ?> 
      </label>
      </span></span></td><td width="148"> <span class="body_top"><span class="FontColor">
  <?php xl("Oriented to",'e') ?> 
  </span></span></td> 
  <td width="212"><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="oriented_to[]" value="Person"
		<?php $result = chkdata_CB($obj,"oriented_to","Person"); echo $result;?> /> 
      <?php xl("Person",'e') ?> 
    </label> 
    <label>
      <input type="checkbox" name="oriented_to[]" value="Place"
			<?php $result = chkdata_CB($obj,"oriented_to","Place"); echo $result;?> /> 
      <?php xl("Place",'e') ?> 
    </label> 
    <label>
      <input type="checkbox" name="oriented_to[]" value="Time"
			<?php $result = chkdata_CB($obj,"oriented_to","Time"); echo $result;?> /> 
      <?php xl("Time",'e') ?> 
    </label>
  </span></span></td>
  </tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Recent memory",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="recent_memory" value="Good" 
		<?php $result = chkdata_Radio($obj,"recent_memory","Good"); echo $result;?> /> 
      <?php xl("Good",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="recent_memory" value="Fair" 
			<?php $result = chkdata_Radio($obj,"recent_memory","Fair"); echo $result;?>/> 
      <?php xl("Fair",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="recent_memory" value="Poor" 
			<?php $result = chkdata_Radio($obj,"recent_memory","Poor"); echo $result;?> /> 
      <?php xl("Poor",'e') ?> 
    </label>
  </span></span></td><td> <span class="body_top"><span class="FontColor">
  <?php xl("Repeat",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="repeatobj" value="<?php $result = chkdata_Txt($obj,"repeatobj"); echo $result;?>" />
 </span><?php echo htmlspecialchars( xl(' /3 Objects'), ENT_NOQUOTES) ; ?></span> </td>
</tr>

<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Remote memory",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="remote_memory" value="Good" 
		<?php $result = chkdata_Radio($obj,"remote_memory","Good"); echo $result;?> /> 
      <?php xl("Good",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="remote_memory" value="Fair" 
			<?php $result = chkdata_Radio($obj,"remote_memory","Fair"); echo $result;?> /> 
      <?php xl("Fair",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="remote_memory" value="Poor" 
			<?php $result = chkdata_Radio($obj,"remote_memory","Poor"); echo $result;?> /> 
      <?php xl("Poor",'e') ?> 
    </label>
  </span></span></td><td> <span class="body_top"><span class="FontColor">
  <?php xl("Name or identify",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="name_or_identify" value="<?php $result = chkdata_Txt($obj,"name_or_identify"); echo $result;?>"  />
  </span><?php echo htmlspecialchars( xl(' /3 Objects'), ENT_NOQUOTES) ; ?></span> </td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Sense of current events",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="knowledge_of_current_events" value="Good" 
			<?php $result = chkdata_Radio($obj,"knowledge_of_current_events","Good"); echo $result;?> /> 
      <?php xl("Good",'e') ?> 
      </label> 
    <label>
      <input type="radio" name="knowledge_of_current_events" value="Fair" 
			<?php $result = chkdata_Radio($obj,"knowledge_of_current_events","Fair"); echo $result;?> /> 
      <?php xl("Fair",'e') ?> 
      </label> 
    <label>
      <input type="radio" name="knowledge_of_current_events" value="Poor" 
			<?php $result = chkdata_Radio($obj,"knowledge_of_current_events","Poor"); echo $result;?> /> 
      <?php xl("Poor",'e') ?> 
      </label>

    </span></span></td><td> <span class="body_top"><span class="FontColor">
      <?php xl("Repeat simple phrase",'e') ?> 
      </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="repeat_simple_phrase" value="Yes" 
		<?php $result = chkdata_Radio($obj,"repeat_simple_phrase","Yes"); echo $result;?>/> 
      <?php xl("Yes",'e') ?> 
      </label> 
    <label>
      <input type="radio" name="repeat_simple_phrase" value="No" 
			<?php $result = chkdata_Radio($obj,"repeat_simple_phrase","No"); echo $result;?> /> 
      <?php xl("No",'e') ?> 
      </label>
    </span></span></td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Attention span",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="attention_span" value="Good" 
		<?php $result = chkdata_Radio($obj,"attention_span","Good"); echo $result;?>/> 
      <?php xl("Good",'e') ?> 
      </label> 
    <label>
      <input type="radio" name="attention_span" value="Fair" 
			<?php $result = chkdata_Radio($obj,"attention_span","Fair"); echo $result;?> /> 
      <?php xl("Fair",'e') ?> 
      </label> 
    <label>
      <input type="radio" name="attention_span" value="Poor" 
			<?php $result = chkdata_Radio($obj,"attention_span","Poor"); echo $result;?>/> 
      <?php xl("Poor",'e') ?> 
      </label>
    </span></span></td>
  <td> <span class="body_top"><span class="FontColor">
    <?php xl("Follow verbal commands",'e') ?> 
    </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="follow_verbal_commands" value="<?php $result = chkdata_Txt($obj,"follow_verbal_commands"); echo $result;?>" />
    </span><?php echo htmlspecialchars( xl('Step(s)'), ENT_NOQUOTES) ; ?></span> </td>
</tr>
  <tr><td> <span class="body_top"><span class="FontColor">
    <?php xl("Word findings",'e') ?> 
    </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="word_findings" value="<?php $result = chkdata_Txt($obj,"word_findings"); echo $result;?>" />
      </span></span></td>
 <td> <span class="body_top"><span class="FontColor">
  <?php xl("Anomia",'e') ?> 
  </span></span></td> 
  <td ><span class="body_top"><span class="FontColor">
    <input type="text" name="anomia" value="<?php $result = chkdata_Txt($obj,"anomia"); echo $result;?>" />
    </span></span> </td>
    
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Rancho los amigo level",'e') ?> 
  </span></span></td> 
  <td ><span class="body_top"><span class="FontColor">
    <input name="rancho_los_amigo_level" type="text" value="<?php $result = chkdata_Txt($obj,"rancho_los_amigo_level"); echo $result;?>" />
  </span></span></td><td><span class="body_top"><span class="FontColor">
      <?php xl("Other",'e') ?> 
      </span></span></td><td><span class="body_top"><span class="FontColor">
        <input type="text" name="other_mental" value="<?php $result = chkdata_Txt($obj,"other_mental"); echo $result;?>" />
</span></span></td>
</tr>

</table>
<span class="FontColor"><br>
<strong><?php echo htmlspecialchars( xl('Cranial Nerves'), ENT_NOQUOTES) ; ?></strong></span>
<table border="1">
  
  <tr><td width="143"> <span class="body_top"><span class="FontColor">
    <?php xl("Grossly inspected cranial",'e') ?> 
    </span></span></td> 
    <td width="167"><span class="body_top"><span class="FontColor">
      <label>
        <input type="checkbox" name="grossly_inspected_cranial[]" value="intact" 
			<?php $result = chkdata_CB($obj,"grossly_inspected_cranial","intact"); echo $result;?>/> 
        <?php xl("intact",'e') ?> 
      </label>
      </span></span></td>
<td width="148"> <span class="body_top"><span class="FontColor">
  <?php xl("Facial sensation",'e') ?> 
  </span></span></td> 
  <td width="208"><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="facial_sensation[]" value="intact" 
			<?php $result = chkdata_CB($obj,"facial_sensation","intact"); echo $result;?> /> 
      <?php xl("intact",'e') ?> 
    </label>
  </span></span></td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Visual fields",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="visual_fields[]" value="intact" 
			<?php $result = chkdata_CB($obj,"visual_fields","intact"); echo $result;?>/> 
      <?php xl("intact",'e') ?> 
    </label> 
    <label>
      <input type="checkbox" name="visual_fields[]" value="Hemianop" 
			<?php $result = chkdata_CB($obj,"visual_fields","Hemianop"); echo $result;?> /> 
      <?php xl("Hemianop",'e') ?> 
    </label>
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Facial summetry",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="facial_summetry[]" value="intact" 
			<?php $result = chkdata_CB($obj,"facial_summetry","intact"); echo $result;?> /> 
      <?php xl("intact",'e') ?> 
    </label>
  </span></span></td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Eomi",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="eomi[]" value="intact" 
		<?php $result = chkdata_CB($obj,"eomi","intact"); echo $result;?> /> 
      <?php xl("intact",'e') ?> 
    </label> 
    <label>
      <input type="checkbox" name="eomi[]" value="Dysconjugate" 
			<?php $result = chkdata_CB($obj,"eomi","Dysconjugate"); echo $result;?> /> 
      <?php xl("Dysconjugate",'e') ?> 
    </label>
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Hearing",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="hearing[]" value="intact" 
		<?php $result = chkdata_CB($obj,"hearing","intact"); echo $result;?>/> 
      <?php xl("intact",'e') ?> 
    </label>
  </span></span></td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Tongue protrusion",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="tongue_protrusion[]" value="intact" 
			<?php $result = chkdata_CB($obj,"tongue_protrusion","intact"); echo $result;?>/> 
      <?php xl("intact",'e') ?> 
    </label> 
    <label>
      <input type="checkbox" name="tongue_protrusion[]" value="Midline" 
			<?php $result = chkdata_CB($obj,"tongue_protrusion","Midline"); echo $result;?>/> 
      <?php xl("Midline",'e') ?> 
    </label>
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Shoulder shrug",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="shoulder_shrug[]" value="intact" 
			<?php $result = chkdata_CB($obj,"shoulder_shrug","intact"); echo $result;?> /> 
      <?php xl("intact",'e') ?> 
    </label>
  </span></span></td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Palate movement",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="palate_movement[]" value="intact" 
			<?php $result = chkdata_CB($obj,"palate_movement","intact"); echo $result;?> /> 
      <?php xl("intact",'e') ?> 
    </label>
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Abnormalities",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="abnormalities" value="<?php $result = chkdata_Txt($obj,"abnormalities"); echo $result;?>" />
  </span></span></td>
</tr>
</table>
<span class="FontColor"><br>
<strong><?php echo htmlspecialchars( xl('Ophthalmoscopic Exam'), ENT_NOQUOTES) ; ?></strong></span>
<table>
<tr><td width="95"> 
  <span class="body_top">
  <?php xl("Red reflex",'e') ?> 
  </span></td> 
  <td width="217" class="FontColor">
    <span class="body_top">
    <label>
      <input type="radio" name="red_reflex" value="Yes" 
		<?php $result = chkdata_Radio($obj,"red_reflex","Yes"); echo $result;?>/> 
      <?php xl("Yes",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="red_reflex" value="No" 
			<?php $result = chkdata_Radio($obj,"red_reflex","No"); echo $result;?>/> 
      <?php xl("No",'e') ?> 
    </label>
    </span></td>
</tr>
<tr><td> 
  <span class="body_top">
  <?php xl("Exudates",'e') ?> 
  </span></td> 
  <td class="FontColor">
    <span class="body_top">
    <label>
      <input type="radio" name="exudates" value="Yes" 
		<?php $result = chkdata_Radio($obj,"exudates","Yes"); echo $result;?>/> 
      <?php xl("Yes",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="exudates" value="No" 
			<?php $result = chkdata_Radio($obj,"exudates","No"); echo $result;?> /> 
      <?php xl("No",'e') ?> 
    </label>
    </span></td>
</tr>

<tr><td> 
  <span class="body_top">
  <?php xl("Optic discs",'e') ?> 
  </span></td> 
  <td class="FontColor">
    <span class="body_top">
    <label>
      <input type="radio" name="optic_discs" value="Yes" 
		<?php $result = chkdata_Radio($obj,"optic_discs","Yes"); echo $result;?> /> 
      <?php xl("Yes",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="optic_discs" value="No" 
			<?php $result = chkdata_Radio($obj,"optic_discs","No"); echo $result;?> /> 
      <?php xl("No",'e') ?> 
    </label>
    </span></td>
</tr>

<tr><td> 
  <span class="body_top">
  <?php xl("Hemorrhages",'e') ?> 
  </span></td> 
  <td class="FontColor">
    <span class="body_top">
    <label>
      <input type="radio" name="hemorrhages" value="Yes" 
		<?php $result = chkdata_Radio($obj,"hemorrhages","Yes"); echo $result;?> /> 
      <?php xl("Yes",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="hemorrhages" value="No" 
			<?php $result = chkdata_Radio($obj,"hemorrhages","No"); echo $result;?>/> 
      <?php xl("No",'e') ?> 
    </label>
    </span></td>
</tr>

<tr ><td colspan="1"> 
  
  <span class="body_top">
  <?php xl("Other",'e') ?> 
  </span></td> 
  <td  >
    
    <span class="body_top">
    <input type="text" name="other_ophth"  value="<?php $result = chkdata_Txt($obj,"other_ophth"); echo $result;?>"/>
    </span></td>
</tr>

</table>
<span class="FontColor"><br>
<strong><?php echo htmlspecialchars( xl('Extremities'), ENT_NOQUOTES) ; ?></strong></span>

<table>
  
  <tr><td width="95" > <span class="body_top"><span class="FontColor">
    <?php xl("UE PROM",'e') ?> 
    </span></span></td> 
    <td width="155"><span class="body_top"><span class="FontColor">
      <label>
        <input type="checkbox" name="ue_prom[]" value="Normal" 
		<?php $result = chkdata_CB($obj,"ue_prom","Normal"); echo $result;?> /> 
        <?php xl("Normal",'e') ?> 
      </label> 
      <label>
        <input type="checkbox" name="ue_prom[]" value="Decreased" 
			<?php $result = chkdata_CB($obj,"ue_prom","Decreased"); echo $result;?>/> 
        <?php xl("Decreased",'e') ?> 
      </label>
      </span></span></td><td colspan="2"> <span class="body_top"><span class="FontColor">
        <?php xl(" at",'e') ?> 
        </span></span><span class="body_top"><span class="FontColor">
          <label>
            <input type="radio" name="ue_decreased_at" value="Shoulder" 
		<?php $result = chkdata_Radio($obj,"ue_decreased_at","Shoulder"); echo $result;?>/> 
            <?php xl("Shoulder",'e') ?> 
        </label> 
          <label>
            <input type="radio" name="ue_decreased_at" value="Elbow" 
			<?php $result = chkdata_Radio($obj,"ue_decreased_at","Elbow"); echo $result;?>/> 
            <?php xl("Elbow",'e') ?> 
        </label> 
          <label>
            <input type="radio" name="ue_decreased_at" value="Wrist" 
			<?php $result = chkdata_Radio($obj,"ue_decreased_at","Wrist"); echo $result;?>/> 
            <?php xl("Wrist",'e') ?> 
        </label> 
          <label>
            <input type="radio" name="ue_decreased_at" value="Hand" 
			<?php $result = chkdata_Radio($obj,"ue_decreased_at","Hand"); echo $result;?> /> 
            <?php xl("Hand",'e') ?> 
        </label>
        </span></span></td> 
</tr>
<tr><td><span class="body_top"><span class="FontColor"> <?php xl("Tone",'e') ?> </span></span></td> <td><span class="body_top"><span class="FontColor"><input type="text" name="ue_tone" value="<?php $result = chkdata_Txt($obj,"ue_tone"); echo $result;?>" /></span></span></td>
<td width="89"><span class="body_top"><span class="FontColor"> <?php xl("Abnormalities",'e') ?> </span></span></td> <td width="175"><span class="body_top"><span class="FontColor"><input type="text" name="ue_abnormalities" value="<?php $result = chkdata_Txt($obj,"ue_abnormalities"); echo $result;?>" /></span></span></td></tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("LE PROM",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="le_prom[]" value="Normal" 
		<?php $result = chkdata_CB($obj,"le_prom","Normal"); echo $result;?> /> 
      <?php xl("Normal",'e') ?> 
    </label> 
    <label>
      <input type="checkbox" name="le_prom[]" value="Decreased" 
			<?php $result = chkdata_CB($obj,"le_prom","Decreased"); echo $result;?>/> 
      <?php xl("Decreased",'e') ?> 
    </label>
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl(" at",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="le_decreased_at" value="Hip" 
		<?php $result = chkdata_Radio($obj,"le_decreased_at","Hip"); echo $result;?>/> 
      <?php xl("Hip",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="le_decreased_at" value="Knee" 
			<?php $result = chkdata_Radio($obj,"le_decreased_at","Knee"); echo $result;?>/> 
      <?php xl("Knee",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="le_decreased_at" value="Ankle" 
			<?php $result = chkdata_Radio($obj,"le_decreased_at","Ankle"); echo $result;?> /> 
      <?php xl("Ankle",'e') ?> 
    </label>
  </span></span></td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Tone",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="le_tone" value="<?php $result = chkdata_Txt($obj,"le_tone"); echo $result;?>" />
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Abnormalities",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="le_abnormalities"  value="<?php $result = chkdata_Txt($obj,"le_abnormalities"); echo $result;?>" />
  </span></span></td>
</tr>

<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Edema",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="le_edema[]" value="Not Present" 
			<?php $result = chkdata_CB($obj,"le_edema","Not Present"); echo $result;?>/> 
      <?php xl("Not Present",'e') ?> 
    </label> 
    <label>
      <input type="checkbox" name="le_edema[]" value="Present " 
			<?php $result = chkdata_CB($obj,"le_edema","Present "); echo $result;?>/> 
      <?php xl("Present ",'e') ?> 
    </label>
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl(" at",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="le_edema_at" value="<?php $result = chkdata_Txt($obj,"le_edema_at"); echo $result;?>" />
  </span></span></td>
</tr>

</table>
<span class="FontColor"><br><strong><?php echo htmlspecialchars( xl('Motor'), ENT_NOQUOTES) ; ?></strong></span>

<table>
  
  <tr><td width="145"> <span class="body_top"><span class="FontColor">
    <?php xl("Motor dominant side",'e') ?> 
    </span></span></td> 
    <td width="249"><span class="body_top"><span class="FontColor">
      <label>
        <input type="checkbox" name="motor_dominant_side[]" value="Right" 
			<?php $result = chkdata_CB($obj,"motor_dominant_side","Right"); echo $result;?> /> 
        <?php xl("Right",'e') ?> 
      </label> 
      <label>
        <input type="checkbox" name="motor_dominant_side[]" value="Left" 
			<?php $result = chkdata_CB($obj,"motor_dominant_side","Left"); echo $result;?>/> 
        <?php xl("Left",'e') ?> 
      </label>
      </span></span></td>
  </tr>
  </table>
<table width="200" border="1">
  <tr>
    <th colspan="10" align="left" scope="col"><span class="body_top"><?php echo htmlspecialchars( xl('Upper Extremities'), ENT_NOQUOTES) ; ?></span></th>
    </tr>
  <tr>
    <th rowspan="5" scope="row"><span class="body_top"><?php echo htmlspecialchars( xl('Right'), ENT_NOQUOTES) ; ?></span></th>
    <td rowspan="2"><span class="body_top"><?php echo htmlspecialchars( xl('Shoulder'), ENT_NOQUOTES) ; ?></span></td>
   <td>     <span class="body_top">
     <?php xl("ABD",'e') ?>     
     </span></td>
  <td>    <span class="body_top">
    <input type="text" name="ue_right_shoulder_abd" value="<?php $result = chkdata_Txt($obj,"ue_right_shoulder_abd"); echo $result;?>" />    
    </span></td>
    <td>      <span class="body_top">
      <?php xl("ADD",'e') ?>      
      </span></td> 
  <td>    <span class="body_top">
    <input type="text" name="ue_right_shoulder_add"  value="<?php $result = chkdata_Txt($obj,"ue_right_shoulder_add"); echo $result;?>"/>    
    </span></td>
   
  </tr>
  <tr>
    <td><span class="body_top">
      <?php xl("EXT",'e') ?>
    </span></td>
    <td><span class="body_top">
      <input type="text" name="ue_right_shoulder_ext" value="<?php $result = chkdata_Txt($obj,"ue_right_shoulder_ext"); echo $result;?>"  />
    </span></td>
    <td><span class="body_top">
      <?php xl("FLEX",'e') ?>
    </span></td>
    <td><span class="body_top">
      <input type="text" name="ue_right_shoulder_flex"  value="<?php $result = chkdata_Txt($obj,"ue_right_shoulder_flex"); echo $result;?>" />
    </span></td>
    </tr>
  <tr>
    <td><span class="body_top"><?php echo htmlspecialchars( xl('Elbow'), ENT_NOQUOTES) ; ?></span></td>
    <td>      <span class="body_top">
      <?php xl("EXT",'e') ?>      
      </span></td> 
  <td>    <span class="body_top">
    <input type="text" name="ue_right_elbow_ext" value="<?php $result = chkdata_Txt($obj,"ue_right_elbow_ext"); echo $result;?>" />    
    </span></td>
    <td>      <span class="body_top">
      <?php xl("FLEX",'e') ?>      
      </span></td> 
  <td>    <span class="body_top">
    <input type="text" name="ue_right_elbow_flex"  value="<?php $result = chkdata_Txt($obj,"ue_right_elbow_flex"); echo $result;?>" />    
    </span></td>
  </tr>
  <tr>
    <td><span class="body_top"><?php echo htmlspecialchars( xl('Wrist'), ENT_NOQUOTES) ; ?></span></td>
   <td>     <span class="body_top">
     <?php xl("EXT",'e') ?>     
     </span></td> 
  <td>    <span class="body_top">
    <input type="text" name="ue_right_wrist_ext" value="<?php $result = chkdata_Txt($obj,"ue_right_wrist_ext"); echo $result;?>" />    
    </span></td>
    <td>      <span class="body_top">
      <?php xl("FLEX",'e') ?>      
      </span></td> 
  <td>    <span class="body_top">
    <input type="text" name="ue_right_wrist_flex" value="<?php $result = chkdata_Txt($obj,"ue_right_wrist_flex"); echo $result;?>"  />    
    </span></td>
  </tr>
  <tr>
    <td><span class="body_top"><?php echo htmlspecialchars( xl('MP'), ENT_NOQUOTES) ; ?></span></td>
    <td>      <span class="body_top">
      <?php xl("EXT",'e') ?>      
      </span></td> 
  <td>    <span class="body_top">
    <input type="text" name="ue_right_mp_ext" value="<?php $result = chkdata_Txt($obj,"ue_right_mp_ext"); echo $result;?>" />    
    </span></td>
    
    <td>     <span class="body_top">
     <?php xl("FLEX",'e') ?>     
     </span></td> 
  <td>    <span class="body_top">
    <input type="text" name="ue_right_ip_ext" value="<?php $result = chkdata_Txt($obj,"ue_right_ip_ext"); echo $result;?>" />    
    </span></td>
    
  </tr>
  <tr>
    <th rowspan="5" scope="row"><span class="body_top"><?php echo htmlspecialchars( xl('Left'), ENT_NOQUOTES) ; ?></span></th>
    <td rowspan="2"><span class="body_top"><?php echo htmlspecialchars( xl('Shoulder'), ENT_NOQUOTES) ; ?></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("ABD",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="ue_left_shoulder_abd" value="<?php $result = chkdata_Txt($obj,"ue_left_shoulder_abd"); echo $result;?>" />
  </span></span></td>
  <td> <span class="body_top"><span class="FontColor">
  <?php xl("ADD",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="ue_left_shoulder_add" value="<?php $result = chkdata_Txt($obj,"ue_left_shoulder_add"); echo $result;?>" />
  </span></span></td>
  </tr>
  <tr>
  <td> <span class="body_top"><span class="FontColor">
  <?php xl("EXT",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="ue_left_shoulder_ext"  value="<?php $result = chkdata_Txt($obj,"ue_left_shoulder_ext"); echo $result;?>"/>
  </span></span></td>
 <td> <span class="body_top"><span class="FontColor">
  <?php xl("FLEX",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="ue_left_shoulder_flex" value="<?php $result = chkdata_Txt($obj,"ue_left_shoulder_flex"); echo $result;?>" />
  </span></span></td>
  </tr>
  <tr>
    <td><span class="body_top"><?php echo htmlspecialchars( xl('Elbow'), ENT_NOQUOTES) ; ?></span></td>
   <td> <span class="body_top"><span class="FontColor">
  <?php xl("EXT",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="ue_left_elbow_ext" value="<?php $result = chkdata_Txt($obj,"ue_left_elbow_ext"); echo $result;?>" />
  </span></span></td>
   <td> <span class="body_top"><span class="FontColor">
  <?php xl("FLEX",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="ue_left_elbow_flex" value="<?php $result = chkdata_Txt($obj,"ue_left_elbow_flex"); echo $result;?>" />
  </span></span></td>
  </tr>
  <tr>
    <td><span class="body_top"><?php echo htmlspecialchars( xl('Wrist'), ENT_NOQUOTES) ; ?></span></td>
   <td> <span class="body_top"><span class="FontColor">
  <?php xl("EXT",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="ue_left_wrist_ext" value="<?php $result = chkdata_Txt($obj,"ue_left_wrist_ext"); echo $result;?>" />
  </span></span></td>
  <td> <span class="body_top"><span class="FontColor">
  <?php xl("FLEX",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="ue_left_wrist_flex"  value="<?php $result = chkdata_Txt($obj,"ue_left_wrist_flex"); echo $result;?>"/>
  </span></span></td>
  </tr>
  <tr>
    <td><span class="body_top"><?php echo htmlspecialchars( xl('MP'), ENT_NOQUOTES) ; ?></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("EXT",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="ue_left_mp_ext" value="<?php $result = chkdata_Txt($obj,"ue_left_mp_ext"); echo $result;?>" />
  </span></span></td>
   <td> <span class="body_top"><span class="FontColor">
  <?php xl("FLEX",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="ue_left_ip_ext" value="<?php $result = chkdata_Txt($obj,"ue_left_ip_ext"); echo $result;?>" />
  </span></span></td>
    
  </tr>
</table>
<p>&nbsp;</p>
<table width="200" border="1">
  <tr>
    <th colspan="10" align="left" scope="col"><span class="body_top"><?php echo htmlspecialchars( xl('Lower Extremities'), ENT_NOQUOTES) ; ?></span></th>
    </tr>
  <tr>
    <th rowspan="4" scope="row"><span class="body_top"><?php echo htmlspecialchars( xl('Right'), ENT_NOQUOTES) ; ?></span></th>
    <td rowspan="2"><span class="body_top"><?php echo htmlspecialchars( xl('Hip'), ENT_NOQUOTES) ; ?></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("ABD",'e') ?>
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="le_right_hip_abd" value="<?php $result = chkdata_Txt($obj,"le_right_hip_abd"); echo $result;?>" />
  </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("EXT",'e') ?>
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="le_right_hip_ext" value="<?php $result = chkdata_Txt($obj,"le_right_hip_ext"); echo $result;?>" />
  </span></span></td>
  </tr>
  <tr>
   <td> <span class="body_top"><span class="FontColor">
 <?php xl("FLEX",'e') ?>
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="le_right_hip_flex"  value="<?php $result = chkdata_Txt($obj,"le_right_hip_flex"); echo $result;?>"/>
  </span></span></td>
   
  </tr>
  <tr>
    <td><span class="body_top"><?php echo htmlspecialchars( xl('Knee'), ENT_NOQUOTES) ; ?></span></td>
  <td> <span class="body_top"><span class="FontColor">
  <?php xl("EXT",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="le_right_knee_ext"  value="<?php $result = chkdata_Txt($obj,"le_right_knee_ext"); echo $result;?>"/>
  </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("FLEX",'e') ?>
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="le_right_knee_flex"  value="<?php $result = chkdata_Txt($obj,"le_right_knee_flex"); echo $result;?>"/>
  </span></span></td>
  </tr>
  <tr>
    <td><span class="body_top"><?php echo htmlspecialchars( xl('Ankle'), ENT_NOQUOTES) ; ?></span></td>
    <td> <span class="body_top"><span class="FontColor">
      <?php xl("DF",'e') ?>
      </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
     <input type="text" name="le_right_ankle_df"  value="<?php $result = chkdata_Txt($obj,"le_right_ankle_df"); echo $result;?>"/>
      </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
      <?php xl("PF",'e') ?>
      </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="le_right_ankle_pf"  value="<?php $result = chkdata_Txt($obj,"le_right_ankle_pf"); echo $result;?>"/>
      </span></span></td>
  </tr>
  <tr>
    <th rowspan="4" scope="row"><span class="body_top"><?php echo htmlspecialchars( xl('Left'), ENT_NOQUOTES) ; ?></span></th>
    <td rowspan="2"><span class="body_top"><?php echo htmlspecialchars( xl('Hip'), ENT_NOQUOTES) ; ?></span></td>
    <td> <span class="body_top"><span class="FontColor">
      <?php xl("ABD",'e') ?>
      </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="le_left_hip_abd"  value="<?php $result = chkdata_Txt($obj,"le_left_hip_abd"); echo $result;?>"/>
      </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
      <?php xl("EXT",'e') ?>
      </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="le_left_hip_ext"  value="<?php $result = chkdata_Txt($obj,"le_left_hip_ext"); echo $result;?>"/>
      </span></span></td>
  </tr>
  <tr>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("FLEX",'e') ?>
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="le_left_hip_flex"  value="<?php $result = chkdata_Txt($obj,"le_left_hip_flex"); echo $result;?>"/>
  </span></span></td>
      </tr>
  <tr>
    <td><span class="body_top"><?php echo htmlspecialchars( xl('Knee'), ENT_NOQUOTES) ; ?></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("EXT",'e') ?>
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="le_left_knee_ext" value="<?php $result = chkdata_Txt($obj,"le_left_knee_ext"); echo $result;?>" />
  </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("FLEX",'e') ?>
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="le_left_knee_flex" value="<?php $result = chkdata_Txt($obj,"le_left_knee_flex"); echo $result;?>" />
  </span></span></td>
  </tr>
  <tr>
    <td><span class="body_top"><?php echo htmlspecialchars( xl('Ankle'), ENT_NOQUOTES) ; ?></span></td>
    <td> <span class="body_top"><span class="FontColor">
      <?php xl("DF",'e') ?>
      </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
    <input type="text" name="le_left_ankle_df" value="<?php $result = chkdata_Txt($obj,"le_left_ankle_df"); echo $result;?>" />
      </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
      <?php xl("PF",'e') ?>
      </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="le_left_ankle_pf" value="<?php $result = chkdata_Txt($obj,"le_left_ankle_pf"); echo $result;?>" />
      </span></span></td>
  </tr>
  </table>


</table>
<span class="FontColor"><br>
<strong><?php echo htmlspecialchars( xl('Sensory'), ENT_NOQUOTES) ; ?></strong></span>

<table>
  
  <tr><td width="141"> <span class="body_top"><span class="FontColor">
    <?php xl("Toe proprioception",'e') ?> 
    </span></span></td> 
    <td width="443"><span class="body_top"><span class="FontColor">
      <label>
        <input type="checkbox" name="toe_proprioception[]" value="Intact"  
			<?php $result = chkdata_CB($obj,"toe_proprioception","Intact"); echo $result;?>/> 
        <?php xl("Intact",'e') ?> 
      </label> 
      <label>
        <input type="checkbox" name="toe_proprioception[]" value="Impaired " 
			<?php $result = chkdata_CB($obj,"toe_proprioception","Impaired "); echo $result;?>/> 
        <?php xl("Impaired ",'e') ?> 
      </label>
      </span></span></td>
  </tr>

<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Light touch",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="light_touch[]" value="Intact" 
		<?php $result = chkdata_CB($obj,"light_touch","Intact"); echo $result;?>/> 
      <?php xl("Intact",'e') ?> 
    </label> 
    <label>
      <input type="checkbox" name="light_touch[]" value="Impaired " 
			<?php $result = chkdata_CB($obj,"light_touch","Impaired "); echo $result;?>/> 
      <?php xl("Impaired ",'e') ?> 
    </label>
  </span></span></td>
</tr>

<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Pin prick",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="pin_prick[]" value="Intact" 
		<?php $result = chkdata_CB($obj,"pin_prick","Intact"); echo $result;?> /> 
      <?php xl("Intact",'e') ?> 
    </label> 
    <label>
      <input type="checkbox" name="pin_prick[]" value="Impaired " 
			<?php $result = chkdata_CB($obj,"pin_prick","Impaired "); echo $result;?>/> 
      <?php xl("Impaired ",'e') ?> 
    </label>
  </span></span></td>
</tr>

<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Extinction to DSS",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="extinction_to_dss[]" value="Intact" 
			<?php $result = chkdata_CB($obj,"extinction_to_dss","Intact"); echo $result;?>/> 
      <?php xl("Intact",'e') ?> 
    </label> 
    <label>
      <input type="checkbox" name="extinction_to_dss[]" value="Impaired " 
			<?php $result = chkdata_CB($obj,"extinction_to_dss","Impaired "); echo $result;?>/> 
      <?php xl("Impaired ",'e') ?> 
    </label>
  </span></span></td>
</tr>

<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Neglect",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label><input type="radio" name="neglect" value="None"
		<?php $result = chkdata_Radio($obj,"neglect","None"); echo $result;?>>
		<?php xl("None",'e') ?> </label> <label><input type="radio"
			name="neglect" value="Mild"
			<?php $result = chkdata_Radio($obj,"neglect","Mild"); echo $result;?>>
			<?php xl("Mild",'e') ?> </label> <label><input type="radio"
			name="neglect" value="Moderate"
			<?php $result = chkdata_Radio($obj,"neglect","Moderate"); echo $result;?>>
			<?php xl("Moderate",'e') ?> </label> <label><input type="radio"
			name="neglect" value="Severe"
			<?php $result = chkdata_Radio($obj,"neglect","Severe"); echo $result;?>>
			<?php xl("Severe",'e') ?> </label>
  </span></span></td>
</tr>

</table>
<p class="FontColor"><strong><br><?php echo htmlspecialchars( xl('Reflexes'), ENT_NOQUOTES) ; ?></strong></p>
<table width="200" border="1">
  <tr>
    <th rowspan="5" scope="row"><span class="body_top"><?php echo htmlspecialchars( xl('Right'), ENT_NOQUOTES) ; ?></span></th>
    <td> <span class="body_top"><span class="FontColor">
    <?php xl("Biceps",'e') ?> 
    </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="right_biceps" value="<?php $result = chkdata_Txt($obj,"right_biceps"); echo $result;?>" />
      </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Brach",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_brach"  value="<?php $result = chkdata_Txt($obj,"right_brach"); echo $result;?>"/>
  </span></span></td>
  </tr>
  <tr>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Triceps",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_triceps" value="<?php $result = chkdata_Txt($obj,"right_triceps"); echo $result;?>" />
  </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Hoffman",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_hoffman" value="<?php $result = chkdata_Txt($obj,"right_hoffman"); echo $result;?>" />
  </span></span></td>
  </tr>
  <tr>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Palmomental",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_palmomental"  value="<?php $result = chkdata_Txt($obj,"right_palmomental"); echo $result;?>"/>
  </span></span></td>
   <td> <span class="body_top"><span class="FontColor">
  <?php xl("Knee",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_knee"  value="<?php $result = chkdata_Txt($obj,"right_knee"); echo $result;?>"/>
  </span></span></td>
  </tr>
  <tr>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Ankle",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_ankle"  value="<?php $result = chkdata_Txt($obj,"right_ankle"); echo $result;?>" />
  </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Babinski",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_babinski"  value="<?php $result = chkdata_Txt($obj,"right_babinski"); echo $result;?>" />
  </span></span></td>
  </tr>
  <tr>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Glabellar",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_glabellar"  value="<?php $result = chkdata_Txt($obj,"right_glabellar"); echo $result;?>"/>
  </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Clonus",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_conus" value="<?php $result = chkdata_Txt($obj,"right_conus"); echo $result;?>" />
  </span></span></td>
  </tr>
  <tr>
   <th rowspan="5" scope="row"><span class="body_top"><?php echo htmlspecialchars( xl('Left'), ENT_NOQUOTES) ; ?></span></th>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Biceps",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_biceps" value="<?php $result = chkdata_Txt($obj,"left_biceps"); echo $result;?>" />
  </span></span></td>
   <td> <span class="body_top"><span class="FontColor">
  <?php xl("Brach",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_brach" value="<?php $result = chkdata_Txt($obj,"left_brach"); echo $result;?>" />
  </span></span></td>
  </tr>
  <tr>
   <td> <span class="body_top"><span class="FontColor">
  <?php xl("Triceps",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_triceps" value="<?php $result = chkdata_Txt($obj,"left_triceps"); echo $result;?>" />
  </span></span></td>
   <td> <span class="body_top"><span class="FontColor">
  <?php xl("Hoffman",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_hoffman" value="<?php $result = chkdata_Txt($obj,"left_hoffman"); echo $result;?>" />
  </span></span></td>
  </tr>
  <tr>
   <td> <span class="body_top"><span class="FontColor">
  <?php xl("Palmomental",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_palmomental"  value="<?php $result = chkdata_Txt($obj,"left_palmomental"); echo $result;?>"/>
  </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Knee",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_knee"  value="<?php $result = chkdata_Txt($obj,"left_knee"); echo $result;?>" />
  </span></span></td>
  </tr>
  <tr>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Ankle",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_ankle"  value="<?php $result = chkdata_Txt($obj,"left_ankle"); echo $result;?>"/>
  </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Babinski",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_babinski"  value="<?php $result = chkdata_Txt($obj,"left_babinski"); echo $result;?>"/>
  </span></span></td>
  </tr>
  <tr>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Glabellar",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_glabellar" value="<?php $result = chkdata_Txt($obj,"left_glabellar"); echo $result;?>"/>
  </span></span></td>
   <td> <span class="body_top"><span class="FontColor">
  <?php xl("Clonus",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_conus" value="<?php $result = chkdata_Txt($obj,"left_conus"); echo $result;?>" />
  </span></span></td>
  </tr>
</table>

<span class="FontColor"><strong><br><?php echo htmlspecialchars( xl('Cerebellar'), ENT_NOQUOTES) ; ?></strong></span>
<table>
  <tr><td><span class="body_top"><?php echo htmlspecialchars( xl('Right'), ENT_NOQUOTES) ; ?></span></td><td> <span class="body_top"><span class="FontColor">
    <?php xl("F-N-F",'e') ?> 
    </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="right_fnf"  value="<?php $result = chkdata_Txt($obj,"right_fnf"); echo $result;?>"/>
      </span></span></td>
 <td> <span class="body_top"><span class="FontColor">
  <?php xl("H-Kn-S",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_hkns" value="<?php $result = chkdata_Txt($obj,"right_hkns"); echo $result;?>" />
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("RAM's",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_rams"  value="<?php $result = chkdata_Txt($obj,"right_rams"); echo $result;?>"/>
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Dysmetria",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_dysmetria" value="<?php $result = chkdata_Txt($obj,"right_dysmetria"); echo $result;?>" />
  </span></span></td>
</tr>
<tr><td><span class="body_top"><?php echo htmlspecialchars( xl('Left'), ENT_NOQUOTES) ; ?></span></td><td> <span class="body_top"><span class="FontColor">
  <?php xl("F-N-F",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_fnf" value="<?php $result = chkdata_Txt($obj,"left_fnf"); echo $result;?>" />
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("H-Kn-S",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_hkns"  value="<?php $result = chkdata_Txt($obj,"left_hkns"); echo $result;?>"/>
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("RAM's",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_rams" value="<?php $result = chkdata_Txt($obj,"left_rams"); echo $result;?>"/>
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Dysmetria",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_dysmetria" value="<?php $result = chkdata_Txt($obj,"left_dysmetria"); echo $result;?>" />
  </span></span></td>
</tr>

</table>
<span class="FontColor"><br>
<strong><?php echo htmlspecialchars( xl('Balance'), ENT_NOQUOTES) ; ?></strong></span>

<table>
  
  <tr><td><span class="body_top"><?php echo htmlspecialchars( xl('Right'), ENT_NOQUOTES) ; ?></span></td><td> <span class="body_top"><span class="FontColor">
    <?php xl("Static Sit",'e') ?> 
    </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="right_static_sit"  value="<?php $result = chkdata_Txt($obj,"right_static_sit"); echo $result;?>" />
      </span></span></td>
 <td> <span class="body_top"><span class="FontColor">
  <?php xl("Dynamic Sit",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_dynamic_sit" value="<?php $result = chkdata_Txt($obj,"right_dynamic_sit"); echo $result;?>" />
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Static Stand",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_static_stand" value="<?php $result = chkdata_Txt($obj,"right_static_stand"); echo $result;?>" />
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Dynamic Stand",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_dynamic_stand" value="<?php $result = chkdata_Txt($obj,"right_dynamic_stand"); echo $result;?>" />
  </span></span></td>
</tr>

<tr><td><span class="body_top"><?php echo htmlspecialchars( xl('Left'), ENT_NOQUOTES) ; ?></span></td><td> <span class="body_top"><span class="FontColor">
  <?php xl("Sstatic Sit",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_static_sit" value="<?php $result = chkdata_Txt($obj,"left_static_sit"); echo $result;?>" />
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Dynamic Sit",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_dynamic_sit" value="<?php $result = chkdata_Txt($obj,"left_dynamic_sit"); echo $result;?>" />
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Static Stand",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_static_stand"  value="<?php $result = chkdata_Txt($obj,"left_static_stand"); echo $result;?>"/>
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Dynamic Stand",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_dynamic_stand" value="<?php $result = chkdata_Txt($obj,"left_dynamic_stand"); echo $result;?>" />
  </span></span></td>
</tr>

</table>
<span class="FontColor"><br>
<strong><?php echo htmlspecialchars( xl('Gait'), ENT_NOQUOTES) ; ?></strong></span>
<table>

<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Gait tested",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="giat_tested" value="Yes" 
		<?php $result = chkdata_Radio($obj,"giat_tested","Yes"); echo $result;?> /> 
      <?php xl("Yes",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="giat_tested" value="No" 
			<?php $result = chkdata_Radio($obj,"giat_tested","No"); echo $result;?>/> 
      <?php xl("No",'e') ?> 
    </label>
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Gait if yes",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="giat_if_yes"  value="<?php $result = chkdata_Txt($obj,"giat_if_yes"); echo $result;?>"/>
  </span></span></td>
</tr>

</table>
<span class="FontColor"><br>
<strong><?php echo htmlspecialchars( xl('Skin'), ENT_NOQUOTES) ; ?></strong></span>
<table>

<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Skin breakdown",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="skin_breakdown" value="Yes" 
		<?php $result = chkdata_Radio($obj,"skin_breakdown","Yes"); echo $result;?>/> 
      <?php xl("Yes",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="skin_breakdown" value="No" 
			<?php $result = chkdata_Radio($obj,"skin_breakdown","No"); echo $result;?>/> 
      <?php xl("No",'e') ?> 
    </label>
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Skin breakdown if yes",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="skin_breakdown_if_yes" value="<?php $result = chkdata_Txt($obj,"skin_breakdown_if_yes"); echo $result;?>" />
  </span></span></td>
</tr>

</table>
<span class="FontColor"><br>
<strong><?php echo htmlspecialchars( xl('Other Findings').' ', ENT_NOQUOTES) ; ?></strong></span>

<table>
  
  <tr><td width="123"> <span class="body_top"><span class="FontColor">
    <?php xl("Thomas Test",'e') ?> 
    </span></span></td> 
    <td width="144"><span class="body_top"><span class="FontColor">
      <input type="text" name="tomas_test"  value="<?php $result = chkdata_Txt($obj,"tomas_test"); echo $result;?>"/>
      </span></span></td>
<td width="104"> <span class="body_top"><span class="FontColor">
  <?php xl("C Spine",'e') ?> 
  </span></span></td> 
  <td width="298"><span class="body_top"><span class="FontColor">
    <input type="text" name="cspine" value="<?php $result = chkdata_Txt($obj,"cspine"); echo $result;?>" />
  </span></span></td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("P O Popliteal Angle",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="popoplitealangle" value="<?php $result = chkdata_Txt($obj,"popoplitealangle"); echo $result;?>"/>
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("LS Spine",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="lsspine" value="<?php $result = chkdata_Txt($obj,"lsspine"); echo $result;?>" />
  </span></span></td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Ely's Test",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="elystest" value="<?php $result = chkdata_Txt($obj,"elystest"); echo $result;?>" />
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("SLR",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="slr"  value="<?php $result = chkdata_Txt($obj,"slr"); echo $result;?>"/>
  </span></span></td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("SILVFERSKIOLD Man.",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="silvferskiold_maneuver"  value="<?php $result = chkdata_Txt($obj,"silvferskiold_maneuver"); echo $result;?>"/>
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Other Findings",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="otherfindings" value="<?php $result = chkdata_Txt($obj,"otherfindings"); echo $result;?>" />
  </span></span></td>
</tr>
</table>
<span class="FontColor">
<input type="submit" name="submit form" value="Save" />
</span>
</form>
<span class="FontColor">
<?php formFooter(); ?>
</span>
