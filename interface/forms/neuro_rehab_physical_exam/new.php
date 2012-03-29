<?php
include_once("../../globals.php");
include_once("$srcdir/api.inc");
formHeader("Form: neuro_rehab_physical_exam");
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
	font-size: 12px;
}
</style>
</head>
<body class="body_top"> 
<form method=post action="<?echo $rootdir;?>/forms/neuro_rehab_physical_exam/save.php?mode=new" name="neuro_rehab_physical_exam" onSubmit="return top.restoreSession()">
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
      <input type="text" name="vital_signs"  />
      </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
      <?php xl("COR",'e') ?> 
      </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="cor"  />
      </span></span></td>
  </tr>
  <tr><td> <span class="body_top"><span class="FontColor">
    <?php xl("General appearance",'e') ?> 
    </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="general_appearance"  />
      </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
      <?php xl("ABD",'e') ?> 
      </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="abd"  />
      </span></span></td>
  </tr>
  <tr><td> <span class="body_top"><span class="FontColor">
    <?php xl("Lungs",'e') ?> 
    </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="lungs"  />
      </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
      <?php xl("EXT",'e') ?> 
      </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="ext"  />
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
        <input type="checkbox" name="grossly_inspected_mntl[]" value="intact" /> 
        <?php xl("intact",'e') ?> 
      </label>
      </span></span></td><td width="148"> <span class="body_top"><span class="FontColor">
  <?php xl("Oriented to",'e') ?> 
  </span></span></td> 
  <td width="212"><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="oriented_to[]" value="Person" /> 
      <?php xl("Person",'e') ?> 
    </label> 
    <label>
      <input type="checkbox" name="oriented_to[]" value="Place" /> 
      <?php xl("Place",'e') ?> 
    </label> 
    <label>
      <input type="checkbox" name="oriented_to[]" value="Time" /> 
      <?php xl("Time",'e') ?> 
    </label>
  </span></span></td>
  </tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Recent memory",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="recent_memory" value="Good" /> 
      <?php xl("Good",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="recent_memory" value="Fair" /> 
      <?php xl("Fair",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="recent_memory" value="Poor" /> 
      <?php xl("Poor",'e') ?> 
    </label>
  </span></span></td><td> <span class="body_top"><span class="FontColor">
  <?php xl("Repeat",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="repeatobj"  />
 </span> <?php echo htmlspecialchars( xl('/3 Objects'), ENT_NOQUOTES) ; ?></span> </td>
</tr>

<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Remote memory",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="remote_memory" value="Good" /> 
      <?php xl("Good",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="remote_memory" value="Fair" /> 
      <?php xl("Fair",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="remote_memory" value="Poor" /> 
      <?php xl("Poor",'e') ?> 
    </label>
  </span></span></td><td> <span class="body_top"><span class="FontColor">
  <?php xl("Name or identify",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="name_or_identify"  />
  </span><?php echo htmlspecialchars( xl('/3 Objects'), ENT_NOQUOTES) ; ?></span> </td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Sense of current events",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="knowledge_of_current_events" value="Good" /> 
      <?php xl("Good",'e') ?> 
      </label> 
    <label>
      <input type="radio" name="knowledge_of_current_events" value="Fair" /> 
      <?php xl("Fair",'e') ?> 
      </label> 
    <label>
      <input type="radio" name="knowledge_of_current_events" value="Poor" /> 
      <?php xl("Poor",'e') ?> 
      </label>
    </span></span></td><td> <span class="body_top"><span class="FontColor">
      <?php xl("Repeat simple phrase",'e') ?> 
      </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="repeat_simple_phrase" value="Yes" /> 
      <?php xl("Yes",'e') ?> 
      </label> 
    <label>
      <input type="radio" name="repeat_simple_phrase" value="No" /> 
      <?php xl("No",'e') ?> 
      </label>
    </span></span></td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Attention span",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="attention_span" value="Good" /> 
      <?php xl("Good",'e') ?> 
      </label> 
    <label>
      <input type="radio" name="attention_span" value="Fair" /> 
      <?php xl("Fair",'e') ?> 
      </label> 
    <label>
      <input type="radio" name="attention_span" value="Poor" /> 
      <?php xl("Poor",'e') ?> 
      </label>
    </span></span></td>
  <td> <span class="body_top"><span class="FontColor">
    <?php xl("Follow verbal commands",'e') ?> 
    </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="follow_verbal_commands"  />
    </span><?php echo htmlspecialchars( xl('Step(s)'), ENT_NOQUOTES) ; ?></span> </td>
</tr>
  <tr><td> <span class="body_top"><span class="FontColor">
    <?php xl("Word findings",'e') ?> 
    </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="word_findings"  />
      </span></span></td>
 <td> <span class="body_top"><span class="FontColor">
  <?php xl("Anomia",'e') ?> 
  </span></span></td> 
  <td ><span class="body_top"><span class="FontColor">
    <input type="text" name="anomia"  />
    </span></span> </td>
    
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Rancho los amigo level",'e') ?> 
  </span></span></td> 
  <td ><span class="body_top"><span class="FontColor">
    <input name="rancho_los_amigo_level" type="text"  />
  </span></span></td><td><span class="body_top"><span class="FontColor">
      <?php xl("Other",'e') ?> 
      </span></span></td><td><span class="body_top"><span class="FontColor">
        <input type="text" name="other_mental"  />
</span></span></td>
</tr>

</table>
<span class="FontColor"><br>
<strong><?php echo htmlspecialchars( xl('Cranial Nerves'), ENT_NOQUOTES) ; ?></strong></span>
<table border="1">
  
  <tr><td width="143"> <span class="body_top"><span class="FontColor">
    <?php xl("Grossly inspected",'e') ?> 
    </span></span></td> 
    <td width="167"><span class="body_top"><span class="FontColor">
      <label>
        <input type="checkbox" name="grossly_inspected_cranial[]" value="intact" /> 
        <?php xl("intact",'e') ?> 
      </label>
      </span></span></td>
<td width="148"> <span class="body_top"><span class="FontColor">
  <?php xl("Facial sensation",'e') ?> 
  </span></span></td> 
  <td width="208"><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="facial_sensation[]" value="intact" /> 
      <?php xl("intact",'e') ?> 
    </label>
  </span></span></td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Visual fields",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="visual_fields[]" value="intact" /> 
      <?php xl("intact",'e') ?> 
    </label> 
    <label>
      <input type="checkbox" name="visual_fields[]" value="Hemianop" /> 
      <?php xl("Hemianop",'e') ?> 
    </label>
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Facial summetry",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="facial_summetry[]" value="intact" /> 
      <?php xl("intact",'e') ?> 
    </label>
  </span></span></td>
</tr>

<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Eomi",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="eomi[]" value="intact" /> 
      <?php xl("intact",'e') ?> 
    </label> 
    <label>
      <input type="checkbox" name="eomi[]" value="Dysconjugate" /> 
      <?php xl("Dysconjugate",'e') ?> 
    </label>
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Hearing",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="hearing[]" value="intact" /> 
      <?php xl("intact",'e') ?> 
    </label>
  </span></span></td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Tongue protrusion",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="tongue_protrusion[]" value="intact" /> 
      <?php xl("intact",'e') ?> 
    </label> 
    <label>
      <input type="checkbox" name="tongue_protrusion[]" value="Midline" /> 
      <?php xl("Midline",'e') ?> 
    </label>
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Shoulder shrug",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="shoulder_shrug[]" value="intact" /> 
      <?php xl("intact",'e') ?> 
    </label>
  </span></span></td>
</tr>

<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Palate movement",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="palate_movement[]" value="intact" /> 
      <?php xl("intact",'e') ?> 
    </label>
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Abnormalities",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="abnormalities"  />
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
      <input type="radio" name="red_reflex" value="Yes" /> 
      <?php xl("Yes",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="red_reflex" value="No" /> 
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
      <input type="radio" name="exudates" value="Yes" /> 
      <?php xl("Yes",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="exudates" value="No" /> 
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
      <input type="radio" name="optic_discs" value="Yes" /> 
      <?php xl("Yes",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="optic_discs" value="No" /> 
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
      <input type="radio" name="hemorrhages" value="Yes" /> 
      <?php xl("Yes",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="hemorrhages" value="No" /> 
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
    <input type="text" name="other_ophth"  />
    </span></td>
</tr>

</table>
<span class="FontColor"><br>
<strong><?php echo htmlspecialchars( xl('Extremities'), ENT_NOQUOTES) ; ?></strong></span>

<table>
  
  <tr><td width="95" > <span class="body_top"><span class="FontColor">
    <?php xl("UE PROM",'e') ?> 
    </span></span></td> 
    <td width="186"><span class="body_top"><span class="FontColor">
      <label>
        <input type="checkbox" name="ue_prom[]" value="Normal" /> 
        <?php xl("Normal",'e') ?> 
      </label> 
      <label>
        <input type="checkbox" name="ue_prom[]" value="Decreased" /> 
        <?php xl("Decreased",'e') ?> 
      </label>
      </span></span></td><td colspan="2"> <span class="body_top"><span class="FontColor">
        <?php xl(" at",'e') ?> 
        </span></span><span class="body_top"><span class="FontColor">
          <label>
            <input type="radio" name="ue_decreased_at" value="Shoulder" /> 
            <?php xl("Shoulder",'e') ?> 
        </label> 
          <label>
            <input type="radio" name="ue_decreased_at" value="Elbow" /> 
            <?php xl("Elbow",'e') ?> 
        </label> 
          <label>
            <input type="radio" name="ue_decreased_at" value="Wrist" /> 
            <?php xl("Wrist",'e') ?> 
        </label> 
          <label>
            <input type="radio" name="ue_decreased_at" value="Hand" /> 
            <?php xl("Hand",'e') ?> 
        </label>
        </span></span></td> 
</tr>
<tr><td><span class="body_top"><span class="FontColor"> <?php xl("Tone",'e') ?> </span></span></td> <td><span class="body_top"><span class="FontColor"><input type="text" name="ue_tone"  /></span></span></td><td width="81"><span class="body_top"><span class="FontColor"> <?php xl("Abnormalities",'e') ?> </span></span></td> <td width="227"><span class="body_top"><span class="FontColor"><input type="text" name="ue_abnormalities"  /></span></span></td></tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("LE PROM",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="le_prom[]" value="Normal" /> 
      <?php xl("Normal",'e') ?> 
    </label> 
    <label>
      <input type="checkbox" name="le_prom[]" value="Decreased" /> 
      <?php xl("Decreased",'e') ?> 
    </label>
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl(" at",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="le_decreased_at" value="Hip" /> 
      <?php xl("Hip",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="le_decreased_at" value="Knee" /> 
      <?php xl("Knee",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="le_decreased_at" value="Ankle" /> 
      <?php xl("Ankle",'e') ?> 
    </label>
  </span></span></td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Tone",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="le_tone"  />
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Abnormalities",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="le_abnormalities"  />
  </span></span></td>
</tr>

<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Edema",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="le_edema[]" value="Not Present" /> 
      <?php xl("Not Present",'e') ?> 
    </label> 
    <label>
      <input type="checkbox" name="le_edema[]" value="Present " /> 
      <?php xl("Present ",'e') ?> 
    </label>
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl(" at",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="le_edema_at"  />
  </span></span></td>
</tr>

</table>
<span class="FontColor"><br>
<strong><?php echo htmlspecialchars( xl('Motor'), ENT_NOQUOTES) ; ?></strong></span>

<table>
  
  <tr><td width="145"> <span class="body_top"><span class="FontColor">
    <?php xl("Motor dominant side",'e') ?> 
    </span></span></td> 
    <td width="283"><span class="body_top"><span class="FontColor">
      <label>
        <input type="checkbox" name="motor_dominant_side[]" value="Right" /> 
        <?php xl("Right",'e') ?> 
      </label> 
      <label>
        <input type="checkbox" name="motor_dominant_side[]" value="Left" /> 
        <?php xl("Left",'e') ?> 
      </label>
      </span></span></td></tr>
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
    <input type="text" name="ue_right_shoulder_abd"  />    
    </span></td>
    <td>      <span class="body_top">
      <?php xl("ADD",'e') ?>      
      </span></td> 
  <td>    <span class="body_top">
    <input type="text" name="ue_right_shoulder_add"  />    
    </span></td>
   
  </tr>
  <tr>
    <td><span class="body_top">
      <?php xl("EXT",'e') ?>
    </span></td>
    <td><span class="body_top">
      <input type="text" name="ue_right_shoulder_ext"  />
    </span></td>
    <td><span class="body_top">
      <?php xl("FLEX",'e') ?>
    </span></td>
    <td><span class="body_top">
      <input type="text" name="ue_right_shoulder_flex"  />
    </span></td>
    </tr>
  <tr>
    <td><span class="body_top"><?php echo htmlspecialchars( xl('Elbow'), ENT_NOQUOTES) ; ?></span></td>
    <td>      <span class="body_top">
      <?php xl("EXT",'e') ?>      
      </span></td> 
  <td>    <span class="body_top">
    <input type="text" name="ue_right_elbow_ext"  />    
    </span></td>
    <td>      <span class="body_top">
      <?php xl("FLEX",'e') ?>      
      </span></td> 
  <td>    <span class="body_top">
    <input type="text" name="ue_right_elbow_flex"  />    
    </span></td>
  </tr>
  <tr>
    <td><span class="body_top"><?php echo htmlspecialchars( xl('Wrist'), ENT_NOQUOTES) ; ?></span></td>
   <td>     <span class="body_top">
     <?php xl("EXT",'e') ?>     
     </span></td> 
  <td>    <span class="body_top">
    <input type="text" name="ue_right_wrist_ext"  />    
    </span></td>
    <td>      <span class="body_top">
      <?php xl("FLEX",'e') ?>      
      </span></td> 
  <td>    <span class="body_top">
    <input type="text" name="ue_right_wrist_flex"  />    
    </span></td>
  </tr>
  <tr>
    <td><span class="body_top"><?php echo htmlspecialchars( xl('MP'), ENT_NOQUOTES) ; ?></span></td>
    <td>      <span class="body_top">
      <?php xl("EXT",'e') ?>      
      </span></td> 
  <td>    <span class="body_top">
    <input type="text" name="ue_right_mp_ext"  />    
    </span></td>
    
   <td>     <span class="body_top">
     <?php xl("FLEX",'e') ?>     
     </span></td> 
  <td>    <span class="body_top">
    <input type="text" name="ue_right_ip_ext"  />    
    </span></td>
    
  </tr>
  <tr>
    <th rowspan="5" scope="row"><span class="body_top"><?php echo htmlspecialchars( xl('Left'), ENT_NOQUOTES) ; ?></span></th>
    <td rowspan="2"><span class="body_top"><?php echo htmlspecialchars( xl('Shoulder'), ENT_NOQUOTES) ; ?></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("ABD",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="ue_left_shoulder_abd"  />
  </span></span></td>
  <td> <span class="body_top"><span class="FontColor">
  <?php xl("ADD",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="ue_left_shoulder_add"  />
  </span></span></td>
  </tr>
  <tr>
  <td> <span class="body_top"><span class="FontColor">
  <?php xl("EXT",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="ue_left_shoulder_ext"  />
  </span></span></td>
 <td> <span class="body_top"><span class="FontColor">
  <?php xl("FLEX",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="ue_left_shoulder_flex"  />
  </span></span></td>
  </tr>
  <tr>
    <td><span class="body_top"><?php echo htmlspecialchars( xl('Elbow'), ENT_NOQUOTES) ; ?></span></td>
   <td> <span class="body_top"><span class="FontColor">
  <?php xl("EXT",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="ue_left_elbow_ext"  />
  </span></span></td>
   <td> <span class="body_top"><span class="FontColor">
  <?php xl("FLEX",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="ue_left_elbow_flex"  />
  </span></span></td>
  </tr>
  <tr>
    <td><span class="body_top"><?php echo htmlspecialchars( xl('Wrist'), ENT_NOQUOTES) ; ?></span></td>
   <td> <span class="body_top"><span class="FontColor">
  <?php xl("EXT",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="ue_left_wrist_ext"  />
  </span></span></td>
  <td> <span class="body_top"><span class="FontColor">
  <?php xl("FLEX",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="ue_left_wrist_flex"  />
  </span></span></td>
  </tr>
  <tr>
    <td><span class="body_top"><?php echo htmlspecialchars( xl('MP'), ENT_NOQUOTES) ; ?></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("EXT",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="ue_left_mp_ext"  />
  </span></span></td>
   <td> <span class="body_top"><span class="FontColor">
  <?php xl("FLEX",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="ue_left_ip_ext"  />
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
    <input type="text" name="le_right_hip_abd"  />
  </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("EXT",'e') ?>
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="le_right_hip_ext"  />
  </span></span></td>
  </tr>
  <tr>
   <td> <span class="body_top"><span class="FontColor">
 <?php xl("FLEX",'e') ?>
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="le_right_hip_flex"  />
  </span></span></td>
   
  </tr>
  <tr>
    <td><span class="body_top"><?php echo htmlspecialchars( xl('Knee'), ENT_NOQUOTES) ; ?></span></td>
  <td> <span class="body_top"><span class="FontColor">
  <?php xl("EXT",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="le_right_knee_ext"  />
  </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("FLEX",'e') ?>
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="le_right_knee_flex"  />
  </span></span></td>
  </tr>
  <tr>
    <td><span class="body_top"><?php echo htmlspecialchars( xl('Ankle'), ENT_NOQUOTES) ; ?></span></td>
    <td> <span class="body_top"><span class="FontColor">
      <?php xl("DF",'e') ?>
      </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
     <input type="text" name="le_right_ankle_df"  />
      </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
      <?php xl("PF",'e') ?>
      </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="le_right_ankle_pf"  />
      </span></span></td>
  </tr>
  <tr>
    <th rowspan="4" scope="row"><span class="body_top"><?php echo htmlspecialchars( xl('Left'), ENT_NOQUOTES) ; ?></span></th>
    <td rowspan="2"><span class="body_top"><?php echo htmlspecialchars( xl('Hip'), ENT_NOQUOTES) ; ?></span></td>
    <td> <span class="body_top"><span class="FontColor">
      <?php xl("ABD",'e') ?>
      </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="le_left_hip_abd"  />
      </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
      <?php xl("EXT",'e') ?>
      </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="le_left_hip_ext"  />
      </span></span></td>
  </tr>
  <tr>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("FLEX",'e') ?>
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="le_left_hip_flex"  />
  </span></span></td>
      </tr>
  <tr>
    <td><span class="body_top"><?php echo htmlspecialchars( xl('Knee'), ENT_NOQUOTES) ; ?></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("EXT",'e') ?>
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="le_left_knee_ext"  />
  </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("FLEX",'e') ?>
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="le_left_knee_flex"  />
  </span></span></td>
  </tr>
  <tr>
    <td><span class="body_top"><?php echo htmlspecialchars( xl('Ankle'), ENT_NOQUOTES) ; ?></span></td>
    <td> <span class="body_top"><span class="FontColor">
      <?php xl("DF",'e') ?>
      </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
    <input type="text" name="le_left_ankle_df"  />
      </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
      <?php xl("PF",'e') ?>
      </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="le_left_ankle_pf"  />
      </span></span></td>
  </tr>
  </table>


</table>
<span class="FontColor"><br>
<strong><?php echo htmlspecialchars( xl('Sensory'), ENT_NOQUOTES) ; ?></strong></span>

<table>
  
  <tr><td width="97"> <span class="body_top"><span class="FontColor">
    <?php xl("Toe proprioception",'e') ?> 
    </span></span></td> 
    <td width="481"><span class="body_top"><span class="FontColor">
      <label>
        <input type="checkbox" name="toe_proprioception[]" value="Intact" /> 
        <?php xl("Intact",'e') ?> 
      </label> 
      <label>
        <input type="checkbox" name="toe_proprioception[]" value="Impaired " /> 
        <?php xl("Impaired ",'e') ?> 
      </label>
      </span></span></td>
  </tr>

<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Light touch",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="light_touch[]" value="Intact" /> 
      <?php xl("Intact",'e') ?> 
    </label> 
    <label>
      <input type="checkbox" name="light_touch[]" value="Impaired " /> 
      <?php xl("Impaired ",'e') ?> 
    </label>
  </span></span></td>
</tr>

<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Pin prick",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="pin_prick[]" value="Intact" /> 
      <?php xl("Intact",'e') ?> 
    </label> 
    <label>
      <input type="checkbox" name="pin_prick[]" value="Impaired " /> 
      <?php xl("Impaired ",'e') ?> 
    </label>
  </span></span></td>
</tr>

<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Extinction to DSS",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="checkbox" name="extinction_to_dss[]" value="Intact" /> 
      <?php xl("Intact",'e') ?> 
    </label> 
    <label>
      <input type="checkbox" name="extinction_to_dss[]" value="Impaired " /> 
      <?php xl("Impaired ",'e') ?> 
    </label>
  </span></span></td>
</tr>

<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Neglect",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label><input type="radio" name="neglect" value="None" /> <?php xl("None",'e') ?> </label> <label><input type="radio" name="neglect" value="Mild" /> <?php xl("Mild",'e') ?> </label> <label><input type="radio" name="neglect" value="Moderate" /> <?php xl("Moderate",'e') ?> </label> <label><input type="radio" name="neglect" value="Severe" /> <?php xl("Severe",'e') ?> </label>
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
      <input type="text" name="right_biceps"  />
      </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Brach",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_brach"  />
  </span></span></td>
  </tr>
  <tr>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Triceps",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_triceps"  />
  </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Hoffman",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_hoffman"  />
  </span></span></td>
  </tr>
  <tr>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Palmomental",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_palmomental"  />
  </span></span></td>
   <td> <span class="body_top"><span class="FontColor">
  <?php xl("Knee",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_knee"  />
  </span></span></td>
  </tr>
  <tr>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Ankle",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_ankle"  />
  </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Babinski",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_babinski"  />
  </span></span></td>
  </tr>
  <tr>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Glabellar",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_glabellar"  />
  </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Clonus",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_conus"  />
  </span></span></td>
  </tr>
  <tr>
   <th rowspan="5" scope="row"><span class="body_top"><?php echo htmlspecialchars( xl('Left'), ENT_NOQUOTES) ; ?></span></th>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Biceps",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_biceps"  />
  </span></span></td>
   <td> <span class="body_top"><span class="FontColor">
  <?php xl("Brach",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_brach"  />
  </span></span></td>
  </tr>
  <tr>
   <td> <span class="body_top"><span class="FontColor">
  <?php xl("Triceps",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_triceps"  />
  </span></span></td>
   <td> <span class="body_top"><span class="FontColor">
  <?php xl("Hoffman",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_hoffman"  />
  </span></span></td>
  </tr>
  <tr>
   <td> <span class="body_top"><span class="FontColor">
  <?php xl("Palmomental",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_palmomental"  />
  </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Knee",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_knee"  />
  </span></span></td>
  </tr>
  <tr>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Ankle",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_ankle"  />
  </span></span></td>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Babinski",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_babinski"  />
  </span></span></td>
  </tr>
  <tr>
    <td> <span class="body_top"><span class="FontColor">
  <?php xl("Glabellar",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_glabellar"  />
  </span></span></td>
   <td> <span class="body_top"><span class="FontColor">
  <?php xl("Clonus",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_conus"  />
  </span></span></td>
  </tr>
</table>

<span class="FontColor"><strong><br><?php echo htmlspecialchars( xl('Cerebellar'), ENT_NOQUOTES) ; ?></strong></span>

<table>
  
  <tr><td><span class="body_top"><?php echo htmlspecialchars( xl('Right'), ENT_NOQUOTES) ; ?></span></td><td> <span class="body_top"><span class="FontColor">
    <?php xl("F-N-F",'e') ?> 
    </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="right_fnf"  />
      </span></span></td>
 <td> <span class="body_top"><span class="FontColor">
  <?php xl("H-Kn-S",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_hkns"  />
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("RAM's",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_rams"  />
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Dysmetria",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_dysmetria"  />
  </span></span></td>
</tr>
<tr><td><span class="body_top"><?php echo htmlspecialchars( xl('Left'), ENT_NOQUOTES) ; ?></span></td><td> <span class="body_top"><span class="FontColor">
  <?php xl("F-N-F",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_fnf"  />
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("H-Kn-S",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_hkns"  />
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("RAM's",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_rams"  />
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Dysmetria",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_dysmetria"  />
  </span></span></td>
</tr>

</table>
<span class="FontColor"><br><strong><?php echo htmlspecialchars( xl('Balance'), ENT_NOQUOTES) ; ?></strong></span>

<table>
  
  <tr><td><span class="body_top"><?php echo htmlspecialchars( xl('Right'), ENT_NOQUOTES) ; ?></span></td><td> <span class="body_top"><span class="FontColor">
    <?php xl("Static Sit",'e') ?> 
    </span></span></td> 
    <td><span class="body_top"><span class="FontColor">
      <input type="text" name="right_static_sit"  />
      </span></span></td>
 <td> <span class="body_top"><span class="FontColor">
  <?php xl("Dynamic Sit",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_dynamic_sit"  />
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Static Stand",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_static_stand"  />
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Dynamic Stand",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="right_dynamic_stand"  />
  </span></span></td>
</tr>

<tr><td><span class="body_top"><?php echo htmlspecialchars( xl('Left'), ENT_NOQUOTES) ; ?></span></td><td> <span class="body_top"><span class="FontColor">
  <?php xl("Sstatic Sit",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_static_sit"  />
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Dynamic Sit",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_dynamic_sit"  />
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Static Stand",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_static_stand"  />
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Dynamic Stand",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="left_dynamic_stand"  />
  </span></span></td>
</tr>

</table>
<span class="FontColor"><br><strong><?php echo htmlspecialchars( xl('Gait'), ENT_NOQUOTES) ; ?></strong></span>
<table>

<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Gait tested",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="giat_tested" value="Yes" /> 
      <?php xl("Yes",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="giat_tested" value="No" /> 
      <?php xl("No",'e') ?> 
    </label>
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Gait if yes",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="giat_if_yes"  />
  </span></span></td>
</tr>

</table>
<span class="FontColor"><br><strong><?php echo htmlspecialchars( xl('Skin'), ENT_NOQUOTES) ; ?></span>
<table>

<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Skin breakdown",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <label>
      <input type="radio" name="skin_breakdown" value="Yes" /> 
      <?php xl("Yes",'e') ?> 
    </label> 
    <label>
      <input type="radio" name="skin_breakdown" value="No" /> 
      <?php xl("No",'e') ?> 
    </label>
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Skin breakdown if yes",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="skin_breakdown_if_yes"  />
  </span></span></td>
</tr>

</table>
<span class="FontColor"><br><strong><?php echo htmlspecialchars( xl('Other Findings'), ENT_NOQUOTES) ; ?></strong></span>

<table>
  <tr><td width="149"> <span class="body_top"><span class="FontColor">
    <?php xl("Thomas Test",'e') ?> 
    </span></span></td> 
    <td width="154"><span class="body_top"><span class="FontColor">
      <input type="text" name="tomas_test"  />
      </span></span></td>
<td width="93"> <span class="body_top"><span class="FontColor">
  <?php xl("C Spine",'e') ?> 
  </span></span></td> 
  <td width="260"><span class="body_top"><span class="FontColor">
    <input type="text" name="cspine"  />
  </span></span></td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("P O Popliteal Angle",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="popoplitealangle"  />
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("LS Spine",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="lsspine"  />
  </span></span></td>
</tr>
<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("Ely's Test",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="elystest"  />
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("SLR",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="slr"  />
  </span></span></td>
</tr>


<tr><td> <span class="body_top"><span class="FontColor">
  <?php xl("SILVFERSKIOLD Man.",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="silvferskiold_maneuver"  />
  </span></span></td>
<td> <span class="body_top"><span class="FontColor">
  <?php xl("Other Findings",'e') ?> 
  </span></span></td> 
  <td><span class="body_top"><span class="FontColor">
    <input type="text" name="otherfindings"  />
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
