<?php
include_once("../../globals.php");
include_once("$srcdir/api.inc");
formHeader("Form: neuro_rehab_physical_exam");
?>
<html><head>
<link rel=stylesheet href="<?echo $css_header;?>" type="text/css">
</head>
<body <?echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<form method=post action="<?echo $rootdir;?>/forms/neuro_rehab_physical_exam/save.php?mode=new" name="my_form" onsubmit="return top.restoreSession()">
<h1> neuro_rehab_physical_exam </h1>
<hr>
<input type="submit" name="submit form" value="submit form" /><br>
<br>
Summary

<table>

<tr><td> <?php xl("Vital signs",'e') ?> </td> <td><input type="text" name="vital_signs"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("General appearance",'e') ?> </td> <td><input type="text" name="general_appearance"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Cor",'e') ?> </td> <td><input type="text" name="cor"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Lungs",'e') ?> </td> <td><input type="text" name="lungs"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Abd",'e') ?> </td> <td><input type="text" name="abd"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Ext",'e') ?> </td> <td><input type="text" name="ext"  /></td></tr>

</table>
<br>
Mental Status and Central Language Function

<table>

<tr><td> <?php xl("Grossly inspected mntl",'e') ?> </td> <td><label><input type="checkbox" name="grossly_inspected_mntl[]" value="intact" /> <?php xl("intact",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Oriented to",'e') ?> </td> <td><label><input type="checkbox" name="oriented_to[]" value="Person" /> <?php xl("Person",'e') ?> </label> <label><input type="checkbox" name="oriented_to[]" value="Place" /> <?php xl("Place",'e') ?> </label> <label><input type="checkbox" name="oriented_to[]" value="Time" /> <?php xl("Time",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Recent memory",'e') ?> </td> <td><label><input type="radio" name="recent_memory" value="Good" /> <?php xl("Good",'e') ?> </label> <label><input type="radio" name="recent_memory" value="Fair" /> <?php xl("Fair",'e') ?> </label> <label><input type="radio" name="recent_memory" value="Poor" /> <?php xl("Poor",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Repeatobj",'e') ?> </td> <td><input type="text" name="repeatobj"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Remote memory",'e') ?> </td> <td><label><input type="radio" name="remote_memory" value="Good" /> <?php xl("Good",'e') ?> </label> <label><input type="radio" name="remote_memory" value="Fair" /> <?php xl("Fair",'e') ?> </label> <label><input type="radio" name="remote_memory" value="Poor" /> <?php xl("Poor",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Name or identify",'e') ?> </td> <td><input type="text" name="name_or_identify"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Knowledge of current events",'e') ?> </td> <td><label><input type="radio" name="knowledge_of_current_events" value="Good" /> <?php xl("Good",'e') ?> </label> <label><input type="radio" name="knowledge_of_current_events" value="Fair" /> <?php xl("Fair",'e') ?> </label> <label><input type="radio" name="knowledge_of_current_events" value="Poor" /> <?php xl("Poor",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Repeat simple phrase",'e') ?> </td> <td><label><input type="radio" name="repeat_simple_phrase" value="Yes" /> <?php xl("Yes",'e') ?> </label> <label><input type="radio" name="repeat_simple_phrase" value="No" /> <?php xl("No",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Attention span",'e') ?> </td> <td><label><input type="radio" name="attention_span" value="Good" /> <?php xl("Good",'e') ?> </label> <label><input type="radio" name="attention_span" value="Fair" /> <?php xl("Fair",'e') ?> </label> <label><input type="radio" name="attention_span" value="Poor" /> <?php xl("Poor",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Follow verbal commands",'e') ?> </td> <td><input type="text" name="follow_verbal_commands"  /></td></tr>

</table>
<br>
Step(s)

<table>

<tr><td> <?php xl("Word findings",'e') ?> </td> <td><input type="text" name="word_findings"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Anomia",'e') ?> </td> <td><input type="text" name="anomia"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Other mental",'e') ?> </td> <td><input type="text" name="other_mental"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Rancho los amigo level",'e') ?> </td> <td><input type="text" name="rancho_los_amigo_level"  /></td></tr>

</table>
<br>
Cranial Nerves

<table>

<tr><td> <?php xl("Grossly inspected cranial",'e') ?> </td> <td><label><input type="checkbox" name="grossly_inspected_cranial[]" value="intact" /> <?php xl("intact",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Facial sensation",'e') ?> </td> <td><label><input type="checkbox" name="facial_sensation[]" value="intact" /> <?php xl("intact",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Visual fields",'e') ?> </td> <td><label><input type="checkbox" name="visual_fields[]" value="intact" /> <?php xl("intact",'e') ?> </label> <label><input type="checkbox" name="visual_fields[]" value="Hemianop" /> <?php xl("Hemianop",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Facial summetry",'e') ?> </td> <td><label><input type="checkbox" name="facial_summetry[]" value="intact" /> <?php xl("intact",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Eomi",'e') ?> </td> <td><label><input type="checkbox" name="eomi[]" value="intact" /> <?php xl("intact",'e') ?> </label> <label><input type="checkbox" name="eomi[]" value="Dysconjugate" /> <?php xl("Dysconjugate",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Hearing",'e') ?> </td> <td><label><input type="checkbox" name="hearing[]" value="intact" /> <?php xl("intact",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Tongue protrusion",'e') ?> </td> <td><label><input type="checkbox" name="tongue_protrusion[]" value="intact" /> <?php xl("intact",'e') ?> </label> <label><input type="checkbox" name="tongue_protrusion[]" value="Midline" /> <?php xl("Midline",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Shoulder shrug",'e') ?> </td> <td><label><input type="checkbox" name="shoulder_shrug[]" value="intact" /> <?php xl("intact",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Palate movement",'e') ?> </td> <td><label><input type="checkbox" name="palate_movement[]" value="intact" /> <?php xl("intact",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Abnormalities",'e') ?> </td> <td><input type="text" name="abnormalities"  /></td></tr>

</table>
<br>
Ophthalmoscopic Exam

<table>

<tr><td> <?php xl("Red reflex",'e') ?> </td> <td><label><input type="radio" name="red_reflex" value="Yes" /> <?php xl("Yes",'e') ?> </label> <label><input type="radio" name="red_reflex" value="No" /> <?php xl("No",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Exudates",'e') ?> </td> <td><label><input type="radio" name="exudates" value="Yes" /> <?php xl("Yes",'e') ?> </label> <label><input type="radio" name="exudates" value="No" /> <?php xl("No",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Optic discs",'e') ?> </td> <td><label><input type="radio" name="optic_discs" value="Yes" /> <?php xl("Yes",'e') ?> </label> <label><input type="radio" name="optic_discs" value="No" /> <?php xl("No",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Hemorrhages",'e') ?> </td> <td><label><input type="radio" name="hemorrhages" value="Yes" /> <?php xl("Yes",'e') ?> </label> <label><input type="radio" name="hemorrhages" value="No" /> <?php xl("No",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Other ophth",'e') ?> </td> <td><input type="text" name="other_ophth"  /></td></tr>

</table>
<br>
Extremities 

<table>

<tr><td> <?php xl("Ue prom",'e') ?> </td> <td><label><input type="checkbox" name="ue_prom[]" value="Normal" /> <?php xl("Normal",'e') ?> </label> <label><input type="checkbox" name="ue_prom[]" value="Decreased" /> <?php xl("Decreased",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Ue decreased at",'e') ?> </td> <td><label><input type="radio" name="ue_decreased_at" value="Shoulder" /> <?php xl("Shoulder",'e') ?> </label> <label><input type="radio" name="ue_decreased_at" value="Elbow" /> <?php xl("Elbow",'e') ?> </label> <label><input type="radio" name="ue_decreased_at" value="Wrist" /> <?php xl("Wrist",'e') ?> </label> <label><input type="radio" name="ue_decreased_at" value="Hand" /> <?php xl("Hand",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Ue tone",'e') ?> </td> <td><input type="text" name="ue_tone"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Ue abnormalities",'e') ?> </td> <td><input type="text" name="ue_abnormalities"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Le prom",'e') ?> </td> <td><label><input type="checkbox" name="le_prom[]" value="Normal" /> <?php xl("Normal",'e') ?> </label> <label><input type="checkbox" name="le_prom[]" value="Decreased" /> <?php xl("Decreased",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Le decreased at",'e') ?> </td> <td><label><input type="radio" name="le_decreased_at" value="Hip" /> <?php xl("Hip",'e') ?> </label> <label><input type="radio" name="le_decreased_at" value="Knee" /> <?php xl("Knee",'e') ?> </label> <label><input type="radio" name="le_decreased_at" value="Ankle" /> <?php xl("Ankle",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Le tone",'e') ?> </td> <td><input type="text" name="le_tone"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Le abnormalities",'e') ?> </td> <td><input type="text" name="le_abnormalities"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Le edema",'e') ?> </td> <td><label><input type="checkbox" name="le_edema[]" value="Not Present" /> <?php xl("Not Present",'e') ?> </label> <label><input type="checkbox" name="le_edema[]" value="Present " /> <?php xl("Present ",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Le edema at",'e') ?> </td> <td><input type="text" name="le_edema_at"  /></td></tr>

</table>
<br>
Motor

<table>

<tr><td> <?php xl("Motor dominant side",'e') ?> </td> <td><label><input type="checkbox" name="motor_dominant_side[]" value="Right" /> <?php xl("Right",'e') ?> </label> <label><input type="checkbox" name="motor_dominant_side[]" value="Left" /> <?php xl("Left",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Ue right shoulder abd",'e') ?> </td> <td><input type="text" name="ue_right_shoulder_abd"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Ue right shoulder add",'e') ?> </td> <td><input type="text" name="ue_right_shoulder_add"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Ue right shoulder ext",'e') ?> </td> <td><input type="text" name="ue_right_shoulder_ext"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Ue right shoulder flex",'e') ?> </td> <td><input type="text" name="ue_right_shoulder_flex"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Ue right elbow ext",'e') ?> </td> <td><input type="text" name="ue_right_elbow_ext"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Ue right elbow flex",'e') ?> </td> <td><input type="text" name="ue_right_elbow_flex"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Ue right wrist ext",'e') ?> </td> <td><input type="text" name="ue_right_wrist_ext"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Ue right wrist flex",'e') ?> </td> <td><input type="text" name="ue_right_wrist_flex"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Ue right mp ext",'e') ?> </td> <td><input type="text" name="ue_right_mp_ext"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Ue right ip ext",'e') ?> </td> <td><input type="text" name="ue_right_ip_ext"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Ue left shoulder abd",'e') ?> </td> <td><input type="text" name="ue_left_shoulder_abd"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Ue left shoulder add",'e') ?> </td> <td><input type="text" name="ue_left_shoulder_add"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Ue left shoulder ext",'e') ?> </td> <td><input type="text" name="ue_left_shoulder_ext"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Ue left shoulder flex",'e') ?> </td> <td><input type="text" name="ue_left_shoulder_flex"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Ue left elbow ext",'e') ?> </td> <td><input type="text" name="ue_left_elbow_ext"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Ue left elbow flex",'e') ?> </td> <td><input type="text" name="ue_left_elbow_flex"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Ue left wrist ext",'e') ?> </td> <td><input type="text" name="ue_left_wrist_ext"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Ue left wrist flex",'e') ?> </td> <td><input type="text" name="ue_left_wrist_flex"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Ue left mp ext",'e') ?> </td> <td><input type="text" name="ue_left_mp_ext"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Ue left ip ext",'e') ?> </td> <td><input type="text" name="ue_left_ip_ext"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Le right hip abd",'e') ?> </td> <td><input type="text" name="le_right_hip_abd"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Le right hip ext",'e') ?> </td> <td><input type="text" name="le_right_hip_ext"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Le right hip flex",'e') ?> </td> <td><input type="text" name="le_right_hip_flex"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Le right knee ext",'e') ?> </td> <td><input type="text" name="le_right_knee_ext"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Le right knee flex",'e') ?> </td> <td><input type="text" name="le_right_knee_flex"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Le right ankle df",'e') ?> </td> <td><input type="text" name="le_right_ankle_df"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Le right ankle pf",'e') ?> </td> <td><input type="text" name="le_right_ankle_pf"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Le left hip abd",'e') ?> </td> <td><input type="text" name="le_left_hip_abd"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Le left hip ext",'e') ?> </td> <td><input type="text" name="le_left_hip_ext"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Le left hip flex",'e') ?> </td> <td><input type="text" name="le_left_hip_flex"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Le left knee ext",'e') ?> </td> <td><input type="text" name="le_left_knee_ext"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Le left knee flex",'e') ?> </td> <td><input type="text" name="le_left_knee_flex"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Le left ankle df",'e') ?> </td> <td><input type="text" name="le_left_ankle_df"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Le left ankle pf",'e') ?> </td> <td><input type="text" name="le_left_ankle_pf"  /></td></tr>

</table>
<br>
Sensory

<table>

<tr><td> <?php xl("Toe proprioception",'e') ?> </td> <td><label><input type="checkbox" name="toe_proprioception[]" value="Intact" /> <?php xl("Intact",'e') ?> </label> <label><input type="checkbox" name="toe_proprioception[]" value="Impaired " /> <?php xl("Impaired ",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Light touch",'e') ?> </td> <td><label><input type="checkbox" name="light_touch[]" value="Intact" /> <?php xl("Intact",'e') ?> </label> <label><input type="checkbox" name="light_touch[]" value="Impaired " /> <?php xl("Impaired ",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Pin prick",'e') ?> </td> <td><label><input type="checkbox" name="pin_prick[]" value="Intact" /> <?php xl("Intact",'e') ?> </label> <label><input type="checkbox" name="pin_prick[]" value="Impaired " /> <?php xl("Impaired ",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Extinction to dss",'e') ?> </td> <td><label><input type="checkbox" name="extinction_to_dss[]" value="Intact" /> <?php xl("Intact",'e') ?> </label> <label><input type="checkbox" name="extinction_to_dss[]" value="Impaired " /> <?php xl("Impaired ",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Neglect",'e') ?> </td> <td><label><input type="radio" name="neglect" value="None" /> <?php xl("None",'e') ?> </label> <label><input type="radio" name="neglect" value="Mild" /> <?php xl("Mild",'e') ?> </label> <label><input type="radio" name="neglect" value="Moderate" /> <?php xl("Moderate",'e') ?> </label> <label><input type="radio" name="neglect" value="Severe" /> <?php xl("Severe",'e') ?> </label></td></tr>

</table>
<br>
Reflexes

<table>

<tr><td> <?php xl("Right biceps",'e') ?> </td> <td><input type="text" name="right_biceps"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Right brach",'e') ?> </td> <td><input type="text" name="right_brach"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Right triceps",'e') ?> </td> <td><input type="text" name="right_triceps"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Right hoffman",'e') ?> </td> <td><input type="text" name="right_hoffman"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Right palmomental",'e') ?> </td> <td><input type="text" name="right_palmomental"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Right knee",'e') ?> </td> <td><input type="text" name="right_knee"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Right ankle",'e') ?> </td> <td><input type="text" name="right_ankle"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Right babinski",'e') ?> </td> <td><input type="text" name="right_babinski"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Right glabellar",'e') ?> </td> <td><input type="text" name="right_glabellar"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Right conus",'e') ?> </td> <td><input type="text" name="right_conus"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Left biceps",'e') ?> </td> <td><input type="text" name="left_biceps"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Left brach",'e') ?> </td> <td><input type="text" name="left_brach"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Left triceps",'e') ?> </td> <td><input type="text" name="left_triceps"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Left hoffman",'e') ?> </td> <td><input type="text" name="left_hoffman"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Left palmomental",'e') ?> </td> <td><input type="text" name="left_palmomental"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Left knee",'e') ?> </td> <td><input type="text" name="left_knee"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Left ankle",'e') ?> </td> <td><input type="text" name="left_ankle"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Left babinski",'e') ?> </td> <td><input type="text" name="left_babinski"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Left glabellar",'e') ?> </td> <td><input type="text" name="left_glabellar"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Left conus",'e') ?> </td> <td><input type="text" name="left_conus"  /></td></tr>

</table>
<br>
Cerebellar

<table>

<tr><td> <?php xl("Right fnf",'e') ?> </td> <td><input type="text" name="right_fnf"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Right hkns",'e') ?> </td> <td><input type="text" name="right_hkns"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Right rams",'e') ?> </td> <td><input type="text" name="right_rams"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Right dysmetria",'e') ?> </td> <td><input type="text" name="right_dysmetria"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Left fnf",'e') ?> </td> <td><input type="text" name="left_fnf"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Left hkns",'e') ?> </td> <td><input type="text" name="left_hkns"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Left rams",'e') ?> </td> <td><input type="text" name="left_rams"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Left dysmetria",'e') ?> </td> <td><input type="text" name="left_dysmetria"  /></td></tr>

</table>
<br>
Balance

<table>

<tr><td> <?php xl("Right static sit",'e') ?> </td> <td><input type="text" name="right_static_sit"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Right dynamic sit",'e') ?> </td> <td><input type="text" name="right_dynamic_sit"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Right static stand",'e') ?> </td> <td><input type="text" name="right_static_stand"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Right dynamic stand",'e') ?> </td> <td><input type="text" name="right_dynamic_stand"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Left static sit",'e') ?> </td> <td><input type="text" name="left_static_sit"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Left dynamic sit",'e') ?> </td> <td><input type="text" name="left_dynamic_sit"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Left static stand",'e') ?> </td> <td><input type="text" name="left_static_stand"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Left dynamic stand",'e') ?> </td> <td><input type="text" name="left_dynamic_stand"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Giat tested",'e') ?> </td> <td><label><input type="radio" name="giat_tested" value="Yes" /> <?php xl("Yes",'e') ?> </label> <label><input type="radio" name="giat_tested" value="No" /> <?php xl("No",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Giat if yes",'e') ?> </td> <td><input type="text" name="giat_if_yes"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Skin breakdown",'e') ?> </td> <td><label><input type="radio" name="skin_breakdown" value="Yes" /> <?php xl("Yes",'e') ?> </label> <label><input type="radio" name="skin_breakdown" value="No" /> <?php xl("No",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Skin breakdown if yes",'e') ?> </td> <td><input type="text" name="skin_breakdown_if_yes"  /></td></tr>

</table>
<br>
Other Findings

<table>

<tr><td> <?php xl("Tomas test",'e') ?> </td> <td><input type="text" name="tomas_test"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Cspine",'e') ?> </td> <td><input type="text" name="cspine"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Lsspine",'e') ?> </td> <td><input type="text" name="lsspine"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Popoplitealangle",'e') ?> </td> <td><input type="text" name="popoplitealangle"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Elystest",'e') ?> </td> <td><input type="text" name="elystest"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Slr",'e') ?> </td> <td><input type="text" name="slr"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Silvferskiold maneuver",'e') ?> </td> <td><input type="text" name="silvferskiold_maneuver"  /></td></tr>

</table>

<table>

<tr><td> <?php xl("Otherfindings",'e') ?> </td> <td><input type="text" name="otherfindings"  /></td></tr>

</table>
<table></table><input type="submit" name="submit form" value="submit form" />
</form>
<?php
formFooter();
?>
