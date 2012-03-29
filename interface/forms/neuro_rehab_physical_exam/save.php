<?php
//------------This file inserts your field data into the MySQL database
include_once("../../globals.php");
include_once("$srcdir/api.inc");
include_once("$srcdir/forms.inc");
require_once("$srcdir/formdata.inc.php");

//process form variables here
//create an array of all of the existing field names
$field_names = array('vital_signs' => 'textfield','general_appearance' => 'textfield','cor' => 'textfield','lungs' => 'textfield','abd' => 'textfield','ext' => 'textfield','grossly_inspected_mntl' => 'checkbox_group','oriented_to' => 'checkbox_group','recent_memory' => 'radio_group','repeatobj' => 'textfield','remote_memory' => 'radio_group','name_or_identify' => 'textfield','knowledge_of_current_events' => 'radio_group','repeat_simple_phrase' => 'radio_group','attention_span' => 'radio_group','follow_verbal_commands' => 'textfield','word_findings' => 'textfield','anomia' => 'textfield','other_mental' => 'textfield','rancho_los_amigo_level' => 'textfield','grossly_inspected_cranial' => 'checkbox_group','facial_sensation' => 'checkbox_group','visual_fields' => 'checkbox_group','facial_summetry' => 'checkbox_group','eomi' => 'checkbox_group','hearing' => 'checkbox_group','tongue_protrusion' => 'checkbox_group','shoulder_shrug' => 'checkbox_group','palate_movement' => 'checkbox_group','abnormalities' => 'textfield','red_reflex' => 'radio_group','exudates' => 'radio_group','optic_discs' => 'radio_group','hemorrhages' => 'radio_group','other_ophth' => 'textfield','ue_prom' => 'checkbox_group','ue_decreased_at' => 'radio_group','ue_tone' => 'textfield','ue_abnormalities' => 'textfield','le_prom' => 'checkbox_group','le_decreased_at' => 'radio_group','le_tone' => 'textfield','le_abnormalities' => 'textfield','le_edema' => 'checkbox_group','le_edema_at' => 'textfield','motor_dominant_side' => 'checkbox_group','ue_right_shoulder_abd' => 'textfield','ue_right_shoulder_add' => 'textfield','ue_right_shoulder_ext' => 'textfield','ue_right_shoulder_flex' => 'textfield','ue_right_elbow_ext' => 'textfield','ue_right_elbow_flex' => 'textfield','ue_right_wrist_ext' => 'textfield','ue_right_wrist_flex' => 'textfield','ue_right_mp_ext' => 'textfield','ue_right_ip_ext' => 'textfield','ue_left_shoulder_abd' => 'textfield','ue_left_shoulder_add' => 'textfield','ue_left_shoulder_ext' => 'textfield','ue_left_shoulder_flex' => 'textfield','ue_left_elbow_ext' => 'textfield','ue_left_elbow_flex' => 'textfield','ue_left_wrist_ext' => 'textfield','ue_left_wrist_flex' => 'textfield','ue_left_mp_ext' => 'textfield','ue_left_ip_ext' => 'textfield','le_right_hip_abd' => 'textfield','le_right_hip_ext' => 'textfield','le_right_hip_flex' => 'textfield','le_right_knee_ext' => 'textfield','le_right_knee_flex' => 'textfield','le_right_ankle_df' => 'textfield','le_right_ankle_pf' => 'textfield','le_left_hip_abd' => 'textfield','le_left_hip_ext' => 'textfield','le_left_hip_flex' => 'textfield','le_left_knee_ext' => 'textfield','le_left_knee_flex' => 'textfield','le_left_ankle_df' => 'textfield','le_left_ankle_pf' => 'textfield','toe_proprioception' => 'checkbox_group','light_touch' => 'checkbox_group','pin_prick' => 'checkbox_group','extinction_to_dss' => 'checkbox_group','neglect' => 'radio_group','right_biceps' => 'textfield','right_brach' => 'textfield','right_triceps' => 'textfield','right_hoffman' => 'textfield','right_palmomental' => 'textfield','right_knee' => 'textfield','right_ankle' => 'textfield','right_babinski' => 'textfield','right_glabellar' => 'textfield','right_conus' => 'textfield','left_biceps' => 'textfield','left_brach' => 'textfield','left_triceps' => 'textfield','left_hoffman' => 'textfield','left_palmomental' => 'textfield','left_knee' => 'textfield','left_ankle' => 'textfield','left_babinski' => 'textfield','left_glabellar' => 'textfield','left_conus' => 'textfield','right_fnf' => 'textfield','right_hkns' => 'textfield','right_rams' => 'textfield','right_dysmetria' => 'textfield','left_fnf' => 'textfield','left_hkns' => 'textfield','left_rams' => 'textfield','left_dysmetria' => 'textfield','right_static_sit' => 'textfield','right_dynamic_sit' => 'textfield','right_static_stand' => 'textfield','right_dynamic_stand' => 'textfield','left_static_sit' => 'textfield','left_dynamic_sit' => 'textfield','left_static_stand' => 'textfield','left_dynamic_stand' => 'textfield','giat_tested' => 'radio_group','giat_if_yes' => 'textfield','skin_breakdown' => 'radio_group','skin_breakdown_if_yes' => 'textfield','tomas_test' => 'textfield','cspine' => 'textfield','lsspine' => 'textfield','popoplitealangle' => 'textfield','elystest' => 'textfield','slr' => 'textfield','silvferskiold_maneuver' => 'textfield','otherfindings' => 'textfield');
$negatives = array();
//process each field according to it's type
foreach($field_names as $key=>$val)
{
  $pos = '';
  $neg = '';
	if ($val == "checkbox")
	{
		if ($_POST[$key]) {$field_names[$key] = "yes";}
		else {$field_names[$key] = "negative";}
	}
	elseif (($val == "checkbox_group")||($val == "scrolling_list_multiples"))
	{
		if (array_key_exists($key,$negatives)) #a field requests reporting of negatives
		{
                  if ($_POST[$key]) 
                  {
			foreach($_POST[$key] as $var) #check positives against list
			{
				if (array_key_exists($var, $negatives[$key]))
				{	#remove positives from list, leaving negatives
					unset($negatives[$key][$var]);
				}
			}
                  }
			if (is_array($negatives[$key]) && count($negatives[$key])>0) 
			{
				$neg = "Negative for ".implode(', ',$negatives[$key]).'.';
			}
		}
		if (is_array($_POST[$key]) && count($_POST[$key])>0) 
		{
			$pos = implode(', ',$_POST[$key]);
		}
		if($pos) {$pos = 'Positive for '.$pos.'.  ';}
		$field_names[$key] = $pos.$neg;	
	}
	else
	{
		$field_names[$key] = $_POST[$key];
	}
        if ($field_names[$key] != '')
        {
//          $field_names[$key] .= '.';
          $field_names[$key] = preg_replace('/\s*,\s*([^,]+)\./',' and $1.',$field_names[$key]); // replace last comma with 'and' and ending period
        } 
}

//end special processing
foreach ($field_names as $k => $var) {
  #if (strtolower($k) == strtolower($var)) {unset($field_names[$k]);}
  $field_names[$k] = formDataCore($var);
echo "$var\n";
}
if ($encounter == "")
$encounter = date("Ymd");
if ($_GET["mode"] == "new"){
reset($field_names);
$newid = formSubmit("form_neuro_rehab_physical_exam", $field_names, $_GET["id"], $userauthorized);
addForm($encounter, "neuro_rehab_physical_exam", $newid, "neuro_rehab_physical_exam", $pid, $userauthorized);
}elseif ($_GET["mode"] == "update") {
sqlInsert("update form_neuro_rehab_physical_exam set pid = {$_SESSION["pid"]},groupname='".$_SESSION["authProvider"]."',user='".$_SESSION["authUser"]."',authorized=$userauthorized,activity=1, date = NOW(), vital_signs='".$field_names["vital_signs"]."',general_appearance='".$field_names["general_appearance"]."',cor='".$field_names["cor"]."',lungs='".$field_names["lungs"]."',abd='".$field_names["abd"]."',ext='".$field_names["ext"]."',grossly_inspected_mntl='".$field_names["grossly_inspected_mntl"]."',oriented_to='".$field_names["oriented_to"]."',recent_memory='".$field_names["recent_memory"]."',repeatobj='".$field_names["repeatobj"]."',remote_memory='".$field_names["remote_memory"]."',name_or_identify='".$field_names["name_or_identify"]."',knowledge_of_current_events='".$field_names["knowledge_of_current_events"]."',repeat_simple_phrase='".$field_names["repeat_simple_phrase"]."',attention_span='".$field_names["attention_span"]."',follow_verbal_commands='".$field_names["follow_verbal_commands"]."',word_findings='".$field_names["word_findings"]."',anomia='".$field_names["anomia"]."',other_mental='".$field_names["other_mental"]."',rancho_los_amigo_level='".$field_names["rancho_los_amigo_level"]."',grossly_inspected_cranial='".$field_names["grossly_inspected_cranial"]."',facial_sensation='".$field_names["facial_sensation"]."',visual_fields='".$field_names["visual_fields"]."',facial_summetry='".$field_names["facial_summetry"]."',eomi='".$field_names["eomi"]."',hearing='".$field_names["hearing"]."',tongue_protrusion='".$field_names["tongue_protrusion"]."',shoulder_shrug='".$field_names["shoulder_shrug"]."',palate_movement='".$field_names["palate_movement"]."',abnormalities='".$field_names["abnormalities"]."',red_reflex='".$field_names["red_reflex"]."',exudates='".$field_names["exudates"]."',optic_discs='".$field_names["optic_discs"]."',hemorrhages='".$field_names["hemorrhages"]."',other_ophth='".$field_names["other_ophth"]."',ue_prom='".$field_names["ue_prom"]."',ue_decreased_at='".$field_names["ue_decreased_at"]."',ue_tone='".$field_names["ue_tone"]."',ue_abnormalities='".$field_names["ue_abnormalities"]."',le_prom='".$field_names["le_prom"]."',le_decreased_at='".$field_names["le_decreased_at"]."',le_tone='".$field_names["le_tone"]."',le_abnormalities='".$field_names["le_abnormalities"]."',le_edema='".$field_names["le_edema"]."',le_edema_at='".$field_names["le_edema_at"]."',motor_dominant_side='".$field_names["motor_dominant_side"]."',ue_right_shoulder_abd='".$field_names["ue_right_shoulder_abd"]."',ue_right_shoulder_add='".$field_names["ue_right_shoulder_add"]."',ue_right_shoulder_ext='".$field_names["ue_right_shoulder_ext"]."',ue_right_shoulder_flex='".$field_names["ue_right_shoulder_flex"]."',ue_right_elbow_ext='".$field_names["ue_right_elbow_ext"]."',ue_right_elbow_flex='".$field_names["ue_right_elbow_flex"]."',ue_right_wrist_ext='".$field_names["ue_right_wrist_ext"]."',ue_right_wrist_flex='".$field_names["ue_right_wrist_flex"]."',ue_right_mp_ext='".$field_names["ue_right_mp_ext"]."',ue_right_ip_ext='".$field_names["ue_right_ip_ext"]."',ue_left_shoulder_abd='".$field_names["ue_left_shoulder_abd"]."',ue_left_shoulder_add='".$field_names["ue_left_shoulder_add"]."',ue_left_shoulder_ext='".$field_names["ue_left_shoulder_ext"]."',ue_left_shoulder_flex='".$field_names["ue_left_shoulder_flex"]."',ue_left_elbow_ext='".$field_names["ue_left_elbow_ext"]."',ue_left_elbow_flex='".$field_names["ue_left_elbow_flex"]."',ue_left_wrist_ext='".$field_names["ue_left_wrist_ext"]."',ue_left_wrist_flex='".$field_names["ue_left_wrist_flex"]."',ue_left_mp_ext='".$field_names["ue_left_mp_ext"]."',ue_left_ip_ext='".$field_names["ue_left_ip_ext"]."',le_right_hip_abd='".$field_names["le_right_hip_abd"]."',le_right_hip_ext='".$field_names["le_right_hip_ext"]."',le_right_hip_flex='".$field_names["le_right_hip_flex"]."',le_right_knee_ext='".$field_names["le_right_knee_ext"]."',le_right_knee_flex='".$field_names["le_right_knee_flex"]."',le_right_ankle_df='".$field_names["le_right_ankle_df"]."',le_right_ankle_pf='".$field_names["le_right_ankle_pf"]."',le_left_hip_abd='".$field_names["le_left_hip_abd"]."',le_left_hip_ext='".$field_names["le_left_hip_ext"]."',le_left_hip_flex='".$field_names["le_left_hip_flex"]."',le_left_knee_ext='".$field_names["le_left_knee_ext"]."',le_left_knee_flex='".$field_names["le_left_knee_flex"]."',le_left_ankle_df='".$field_names["le_left_ankle_df"]."',le_left_ankle_pf='".$field_names["le_left_ankle_pf"]."',toe_proprioception='".$field_names["toe_proprioception"]."',light_touch='".$field_names["light_touch"]."',pin_prick='".$field_names["pin_prick"]."',extinction_to_dss='".$field_names["extinction_to_dss"]."',neglect='".$field_names["neglect"]."',right_biceps='".$field_names["right_biceps"]."',right_brach='".$field_names["right_brach"]."',right_triceps='".$field_names["right_triceps"]."',right_hoffman='".$field_names["right_hoffman"]."',right_palmomental='".$field_names["right_palmomental"]."',right_knee='".$field_names["right_knee"]."',right_ankle='".$field_names["right_ankle"]."',right_babinski='".$field_names["right_babinski"]."',right_glabellar='".$field_names["right_glabellar"]."',right_conus='".$field_names["right_conus"]."',left_biceps='".$field_names["left_biceps"]."',left_brach='".$field_names["left_brach"]."',left_triceps='".$field_names["left_triceps"]."',left_hoffman='".$field_names["left_hoffman"]."',left_palmomental='".$field_names["left_palmomental"]."',left_knee='".$field_names["left_knee"]."',left_ankle='".$field_names["left_ankle"]."',left_babinski='".$field_names["left_babinski"]."',left_glabellar='".$field_names["left_glabellar"]."',left_conus='".$field_names["left_conus"]."',right_fnf='".$field_names["right_fnf"]."',right_hkns='".$field_names["right_hkns"]."',right_rams='".$field_names["right_rams"]."',right_dysmetria='".$field_names["right_dysmetria"]."',left_fnf='".$field_names["left_fnf"]."',left_hkns='".$field_names["left_hkns"]."',left_rams='".$field_names["left_rams"]."',left_dysmetria='".$field_names["left_dysmetria"]."',right_static_sit='".$field_names["right_static_sit"]."',right_dynamic_sit='".$field_names["right_dynamic_sit"]."',right_static_stand='".$field_names["right_static_stand"]."',right_dynamic_stand='".$field_names["right_dynamic_stand"]."',left_static_sit='".$field_names["left_static_sit"]."',left_dynamic_sit='".$field_names["left_dynamic_sit"]."',left_static_stand='".$field_names["left_static_stand"]."',left_dynamic_stand='".$field_names["left_dynamic_stand"]."',giat_tested='".$field_names["giat_tested"]."',giat_if_yes='".$field_names["giat_if_yes"]."',skin_breakdown='".$field_names["skin_breakdown"]."',skin_breakdown_if_yes='".$field_names["skin_breakdown_if_yes"]."',tomas_test='".$field_names["tomas_test"]."',cspine='".$field_names["cspine"]."',lsspine='".$field_names["lsspine"]."',popoplitealangle='".$field_names["popoplitealangle"]."',elystest='".$field_names["elystest"]."',slr='".$field_names["slr"]."',silvferskiold_maneuver='".$field_names["silvferskiold_maneuver"]."',otherfindings='".$field_names["otherfindings"]."' where id=$id");
}

$_SESSION["encounter"] = $encounter;
formHeader("Redirecting....");
formJump();
formFooter();
?>
