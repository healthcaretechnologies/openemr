<!-- view.php --> 
 <?php 
 include_once("../../globals.php"); 
 include_once("$srcdir/api.inc"); 
 formHeader("Form: review_of_systems"); 
 $obj = formFetch("form_review_of_systems", $_GET["id"]);  //#Use the formFetch function from api.inc to get values for existing form. 
  
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
 	if (preg_match("/Positive.*$var/",$obj{$nam})) {return "checked";} else {return ;} 
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
 <form method=post action="<?echo $rootdir?>/forms/review_of_systems/save.php?mode=update&id=<?echo $_GET["id"];?>" name="my_form" onsubmit="return top.restoreSession()">
 
<span class="FontColor"><strong>
  <?php xl("Review of Systems",'e') ?> 
  </strong><br>

</span>
 
 <table border="1"> 
   
   <tr><td> <span class="body_top"><span class="FontColor">
     <?php xl("Constitutional",'e') ?> 
     </span></span></td> 
     <td><span class="body_top"><span class="FontColor">
       <label>
         <input type="checkbox" name="constitutional[]" value="Fever" <?php $result = chkdata_CB($obj,"constitutional","Fever"); echo $result;?>> 
         <?php xl("Fever",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="constitutional[]" value="Chills" <?php $result = chkdata_CB($obj,"constitutional","Chills"); echo $result;?>> 
         <?php xl("Chills",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="constitutional[]" value="Weight Loss" <?php $result = chkdata_CB($obj,"constitutional","Weight Loss"); echo $result;?>> 
         <?php xl("Weight Loss",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="constitutional[]" value="Weight Gain" <?php $result = chkdata_CB($obj,"constitutional","Weight Gain"); echo $result;?>> 
         <?php xl("Weight Gain",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="constitutional[]" value="Fatigue" <?php $result = chkdata_CB($obj,"constitutional","Fatigue"); echo $result;?>> 
         <?php xl("Fatigue",'e') ?> 
       </label>&nbsp;&nbsp;
      </span></span></td>
    </tr> 
   
   <tr><td> <span class="body_top"><span class="FontColor">
     <?php xl("Eyes",'e') ?> 
     </span></span></td> 
     <td><span class="body_top"><span class="FontColor">
       <label>&nbsp;&nbsp;
         <input type="checkbox" name="eyes[]" value="Cataract" <?php $result = chkdata_CB($obj,"eyes","Cataract"); echo $result;?>> 
         <?php xl("Cataract",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="eyes[]" value="Blurred Vision" <?php $result = chkdata_CB($obj,"eyes","Blurred Vision"); echo $result;?>> 
         <?php xl("Blurred Vision",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="eyes[]" value="Double Vision" <?php $result = chkdata_CB($obj,"eyes","Double Vision"); echo $result;?>> 
         <?php xl("Double Vision",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="eyes[]" value="Corrective Lenses" <?php $result = chkdata_CB($obj,"eyes","Corrective Lenses"); echo $result;?>> 
         <?php xl("Corrective Lenses",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="eyes[]" value="Glaucoma" <?php $result = chkdata_CB($obj,"eyes","Glaucoma"); echo $result;?>> 
         <?php xl("Glaucoma",'e') ?> 
       </label>&nbsp;&nbsp;
      </span></span></td>
    </tr> 
   
   
   <tr><td> <span class="body_top"><span class="FontColor">
     <?php xl("Ent",'e') ?> 
     </span></span></td> 
     <td><span class="body_top"><span class="FontColor">
       <label>
         <input type="checkbox" name="ent[]" value="Ringing" <?php $result = chkdata_CB($obj,"ent","Ringing"); echo $result;?>> 
         <?php xl("Ringing",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="ent[]" value="Hearing Loss" <?php $result = chkdata_CB($obj,"ent","Hearing Loss"); echo $result;?>> 
         <?php xl("Hearing Loss",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="ent[]" value="Nasal Discharge" <?php $result = chkdata_CB($obj,"ent","Nasal Discharge"); echo $result;?>> 
         <?php xl("Nasal Discharge",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="ent[]" value="Sore Throat" <?php $result = chkdata_CB($obj,"ent","Sore Throat"); echo $result;?>> 
         <?php xl("Sore Throat",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="ent[]" value="Ear Ache" <?php $result = chkdata_CB($obj,"ent","Ear Ache"); echo $result;?>> 
         <?php xl("Ear Ache",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="ent[]" value="Sinusitis" <?php $result = chkdata_CB($obj,"ent","Sinusitis"); echo $result;?>> 
         <?php xl("Sinusitis",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="ent[]" value="Hoarseness" <?php $result = chkdata_CB($obj,"ent","Hoarseness"); echo $result;?>> 
         <?php xl("Hoarseness",'e') ?> 
       </label>&nbsp;&nbsp;
      </span></span></td>
    </tr> 
   
   
   <tr><td> <span class="body_top"><span class="FontColor">
     <?php xl("Heart",'e') ?> 
     </span></span></td> 
     <td><span class="body_top"><span class="FontColor">
       <label>
         <input type="checkbox" name="heart[]" value="Chest Pain" <?php $result = chkdata_CB($obj,"heart","Chest Pain"); echo $result;?>> 
         <?php xl("Chest Pain",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="heart[]" value="Edema" <?php $result = chkdata_CB($obj,"heart","Edema"); echo $result;?>> 
         <?php xl("Edema",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="heart[]" value="High Blood Pressure" <?php $result = chkdata_CB($obj,"heart","High Blood Pressure"); echo $result;?>> 
         <?php xl("High Blood Pressure",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="heart[]" value="Murmur" <?php $result = chkdata_CB($obj,"heart","Murmur"); echo $result;?>> 
         <?php xl("Murmur",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="heart[]" value="Rheumatic Fever" <?php $result = chkdata_CB($obj,"heart","Rheumatic Fever"); echo $result;?>> 
         <?php xl("Rheumatic Fever",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="heart[]" value="Irregular Beat" <?php $result = chkdata_CB($obj,"heart","Irregular Beat"); echo $result;?>> 
         <?php xl("Irregular Beat",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="heart[]" value="Palpitations" <?php $result = chkdata_CB($obj,"heart","Palpitations"); echo $result;?>> 
         <?php xl("Palpitations",'e') ?> 
       </label>&nbsp;&nbsp;
      </span></span></td>
    </tr> 
   
   <tr><td> <span class="body_top"><span class="FontColor">
     <?php xl("Respiratory",'e') ?> 
     </span></span></td> 
     <td><span class="body_top"><span class="FontColor">
       <label>
         <input type="checkbox" name="respiratory[]" value="Shortt of Breath" <?php $result = chkdata_CB($obj,"respiratory","Shortt of Breath"); echo $result;?>> 
         <?php xl("Shortt of Breath",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="respiratory[]" value="Wheezing" <?php $result = chkdata_CB($obj,"respiratory","Wheezing"); echo $result;?>> 
         <?php xl("Wheezing",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="respiratory[]" value="Cough" <?php $result = chkdata_CB($obj,"respiratory","Cough"); echo $result;?>> 
         <?php xl("Cough",'e') ?> 
       </label>&nbsp;&nbsp;
      </span></span></td>
    </tr> 
   
   
   <tr><td> <span class="body_top"><span class="FontColor">
     <?php xl("Gastrointestinal (GI)",'e') ?> 
     </span></span></td> 
     <td><span class="body_top"><span class="FontColor">
       <label>
         <input type="checkbox" name="gi[]" value="Difficulty Swallowing" <?php $result = chkdata_CB($obj,"gi","Difficulty Swallowing"); echo $result;?>> 
         <?php xl("Difficulty Swallowing",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="gi[]" value="Nausea" <?php $result = chkdata_CB($obj,"gi","Nausea"); echo $result;?>> 
         <?php xl("Nausea",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="gi[]" value="Heartburn" <?php $result = chkdata_CB($obj,"gi","Heartburn"); echo $result;?>> 
         <?php xl("Heartburn",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="gi[]" value="Vomiting" <?php $result = chkdata_CB($obj,"gi","Vomiting"); echo $result;?>> 
         <?php xl("Vomiting",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="gi[]" value="Diarrhea" <?php $result = chkdata_CB($obj,"gi","Diarrhea"); echo $result;?>> 
         <?php xl("Diarrhea",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="gi[]" value="Abdominal Pain" <?php $result = chkdata_CB($obj,"gi","Abdominal Pain"); echo $result;?>> 
         <?php xl("Abdominal Pain",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="gi[]" value="Constipation" <?php $result = chkdata_CB($obj,"gi","Constipation"); echo $result;?>> 
         <?php xl("Constipation",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="gi[]" value="Incontinent" <?php $result = chkdata_CB($obj,"gi","Incontinent"); echo $result;?>> 
         <?php xl("Incontinent",'e') ?> 
       </label>&nbsp;&nbsp;
      </span></span></td>
    </tr> 
   
   
   
   <tr><td> <span class="body_top"><span class="FontColor">
     <?php xl("Genito-Urinary (GU",'e') ?> 
     </span></span></td> 
     <td><span class="body_top"><span class="FontColor">
       <label>
         <input type="checkbox" name="gu[]" value="Painful Urination" <?php $result = chkdata_CB($obj,"gu","Painful Urination"); echo $result;?>> 
         <?php xl("Painful Urination",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="gu[]" value="Frequency" <?php $result = chkdata_CB($obj,"gu","Frequency"); echo $result;?>> 
         <?php xl("Frequency",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="gu[]" value="Blood in Urine" <?php $result = chkdata_CB($obj,"gu","Blood in Urine"); echo $result;?>> 
         <?php xl("Blood in Urine",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="gu[]" value="Veginal or Penile Discharge" <?php $result = chkdata_CB($obj,"gu","Veginal or Penile Discharge"); echo $result;?>> 
         <?php xl("Veginal or Penile Discharge",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="gu[]" value="Sexual Dysfunction" <?php $result = chkdata_CB($obj,"gu","Sexual Dysfunction"); echo $result;?>> 
         <?php xl("Sexual Dysfunction",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="gu[]" value="Incontinent" <?php $result = chkdata_CB($obj,"gu","Incontinent"); echo $result;?>> 
         <?php xl("Incontinent",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="gu[]" value="Awaken from Sleep" <?php $result = chkdata_CB($obj,"gu","Awaken from Sleep"); echo $result;?>> 
         <?php xl("Awaken from Sleep",'e') ?> 
       </label>&nbsp;&nbsp;
      </span></span></td>
    </tr> 
   
   
   <tr><td> <span class="body_top"><span class="FontColor">
     <?php xl("Skin",'e') ?> 
     </span></span></td> 
     <td><span class="body_top"><span class="FontColor">
       <label>
         <input type="checkbox" name="skin[]" value="Rash" <?php $result = chkdata_CB($obj,"skin","Rash"); echo $result;?>> 
         <?php xl("Rash",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="skin[]" value="Sores" <?php $result = chkdata_CB($obj,"skin","Sores"); echo $result;?>> 
         <?php xl("Sores",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="skin[]" value="Discoloration" <?php $result = chkdata_CB($obj,"skin","Discoloration"); echo $result;?>> 
         <?php xl("Discoloration",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="skin[]" value="Itching" <?php $result = chkdata_CB($obj,"skin","Itching"); echo $result;?>> 
         <?php xl("Itching",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="skin[]" value="Moles" <?php $result = chkdata_CB($obj,"skin","Moles"); echo $result;?>> 
         <?php xl("Moles",'e') ?> 
       </label>&nbsp;&nbsp;
      </span></span></td>
    </tr> 
   
   
   <tr><td> <span class="body_top"><span class="FontColor">
     <?php xl("Musculoskeletal",'e') ?> 
     </span></span></td> 
     <td><span class="body_top"><span class="FontColor">
       <label>
         <input type="checkbox" name="musculoskeletal[]" value="Joint Swelling" <?php $result = chkdata_CB($obj,"musculoskeletal","Joint Swelling"); echo $result;?>> 
         <?php xl("Joint Swelling",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="musculoskeletal[]" value="Joint Pain" <?php $result = chkdata_CB($obj,"musculoskeletal","Joint Pain"); echo $result;?>> 
         <?php xl("Joint Pain",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="musculoskeletal[]" value="Joint Stiffness" <?php $result = chkdata_CB($obj,"musculoskeletal","Joint Stiffness"); echo $result;?>> 
         <?php xl("Joint Stiffness",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="musculoskeletal[]" value="Muscle Pain" <?php $result = chkdata_CB($obj,"musculoskeletal","Muscle Pain"); echo $result;?>> 
         <?php xl("Muscle Pain",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="musculoskeletal[]" value="Back Pain" <?php $result = chkdata_CB($obj,"musculoskeletal","Back Pain"); echo $result;?>> 
         <?php xl("Back Pain",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="musculoskeletal[]" value="Muscle Spasms" <?php $result = chkdata_CB($obj,"musculoskeletal","Muscle Spasms"); echo $result;?>> 
         <?php xl("Muscle Spasms",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="musculoskeletal[]" value="Rigidity" <?php $result = chkdata_CB($obj,"musculoskeletal","Rigidity"); echo $result;?>> 
         <?php xl("Rigidity",'e') ?> 
       </label>&nbsp;&nbsp;
      </span></span></td>
    </tr> 
   
   
   
   <tr><td> <span class="body_top"><span class="FontColor">
     <?php xl("Neurological",'e') ?> 
     </span></span></td> 
     <td><span class="body_top"><span class="FontColor">
       <label>
         <input type="checkbox" name="neurological[]" value="Seizures" <?php $result = chkdata_CB($obj,"neurological","Seizures"); echo $result;?>> 
         <?php xl("Seizures",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="neurological[]" value="Weakness" <?php $result = chkdata_CB($obj,"neurological","Weakness"); echo $result;?>> 
         <?php xl("Weakness",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="neurological[]" value="Tingling" <?php $result = chkdata_CB($obj,"neurological","Tingling"); echo $result;?>> 
         <?php xl("Tingling",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="neurological[]" value="Confusion" <?php $result = chkdata_CB($obj,"neurological","Confusion"); echo $result;?>> 
         <?php xl("Confusion",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="neurological[]" value="Tremores" <?php $result = chkdata_CB($obj,"neurological","Tremores"); echo $result;?>> 
         <?php xl("Tremores",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="neurological[]" value="Unsteady Gait" <?php $result = chkdata_CB($obj,"neurological","Unsteady Gait"); echo $result;?>> 
         <?php xl("Unsteady Gait",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="neurological[]" value="Headaches" <?php $result = chkdata_CB($obj,"neurological","Headaches"); echo $result;?>> 
         <?php xl("Headaches",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="neurological[]" value="Memory Loss" <?php $result = chkdata_CB($obj,"neurological","Memory Loss"); echo $result;?>> 
         <?php xl("Memory Loss",'e') ?> 
       </label>&nbsp;&nbsp;
      </span></span></td>
    </tr> 
   
   
   <tr><td> <span class="body_top"><span class="FontColor">
     <?php xl("Psychiatric",'e') ?> 
     </span></span></td> 
     <td><span class="body_top"><span class="FontColor">
       <label>
         <input type="checkbox" name="psychiatric[]" value="Depression" <?php $result = chkdata_CB($obj,"psychiatric","Depression"); echo $result;?>> 
         <?php xl("Depression",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="psychiatric[]" value="Anxiety" <?php $result = chkdata_CB($obj,"psychiatric","Anxiety"); echo $result;?>> 
         <?php xl("Anxiety",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="psychiatric[]" value="Seeing Things" <?php $result = chkdata_CB($obj,"psychiatric","Seeing Things"); echo $result;?>> 
         <?php xl("Seeing Things",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="psychiatric[]" value="Hearing Things" <?php $result = chkdata_CB($obj,"psychiatric","Hearing Things"); echo $result;?>> 
         <?php xl("Hearing Things",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="psychiatric[]" value="Suicidal Thoughts" <?php $result = chkdata_CB($obj,"psychiatric","Suicidal Thoughts"); echo $result;?>> 
         <?php xl("Suicidal Thoughts",'e') ?> 
       </label>&nbsp;&nbsp;
      </span></span></td>
    </tr> 
   
   
   
   <tr><td> <span class="body_top"><span class="FontColor">
     <?php xl("Endocrine",'e') ?> 
     </span></span></td> 
     <td><span class="body_top"><span class="FontColor">
       <label>
         <input type="checkbox" name="endocrine[]" value="Increased Thirst" <?php $result = chkdata_CB($obj,"endocrine","Increased Thirst"); echo $result;?>> 
         <?php xl("Increased Thirst",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="endocrine[]" value="Decreased Energy" <?php $result = chkdata_CB($obj,"endocrine","Decreased Energy"); echo $result;?>> 
         <?php xl("Decreased Energy",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="endocrine[]" value="Hot Intolerance" <?php $result = chkdata_CB($obj,"endocrine","Hot Intolerance"); echo $result;?>> 
         <?php xl("Hot Intolerance",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="endocrine[]" value="Cold Intolerance" <?php $result = chkdata_CB($obj,"endocrine","Cold Intolerance"); echo $result;?>> 
         <?php xl("Cold Intolerance",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="endocrine[]" value="Weight Loss" <?php $result = chkdata_CB($obj,"endocrine","Weight Loss"); echo $result;?>> 
         <?php xl("Weight Loss",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="endocrine[]" value="Wight Gain" <?php $result = chkdata_CB($obj,"endocrine","Wight Gain"); echo $result;?>> 
         <?php xl("Wight Gain",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="endocrine[]" value="Diabetes" <?php $result = chkdata_CB($obj,"endocrine","Diabetes"); echo $result;?>> 
         <?php xl("Diabetes",'e') ?> 
       </label>&nbsp;&nbsp;
      </span></span></td>
    </tr> 
   
   
   
   <tr><td> <span class="body_top"><span class="FontColor">
     <?php xl("Heme/Lymph",'e') ?> 
     </span></span></td> 
     <td><span class="body_top"><span class="FontColor">
       <label>
         <input type="checkbox" name="heme_lymph[]" value="Easy Bruising" <?php $result = chkdata_CB($obj,"heme_lymph","Easy Bruising"); echo $result;?>> 
         <?php xl("Easy Bruising",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="heme_lymph[]" value="Bleeding" <?php $result = chkdata_CB($obj,"heme_lymph","Bleeding"); echo $result;?>> 
         <?php xl("Bleeding",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="heme_lymph[]" value="Tender" <?php $result = chkdata_CB($obj,"heme_lymph","Tender"); echo $result;?>> 
         <?php xl("Tender",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="heme_lymph[]" value="Enlarged" <?php $result = chkdata_CB($obj,"heme_lymph","Enlarged"); echo $result;?>> 
         <?php xl("Enlarged",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="heme_lymph[]" value="Lymph Nodes" <?php $result = chkdata_CB($obj,"heme_lymph","Lymph Nodes"); echo $result;?>> 
         <?php xl("Lymph Nodes",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="heme_lymph[]" value="Anemia" <?php $result = chkdata_CB($obj,"heme_lymph","Anemia"); echo $result;?>> 
         <?php xl("Anemia",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="heme_lymph[]" value="Enlarged Liver" <?php $result = chkdata_CB($obj,"heme_lymph","Enlarged Liver"); echo $result;?>> 
         <?php xl("Enlarged Liver",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="heme_lymph[]" value="Enlarged Spleen" <?php $result = chkdata_CB($obj,"heme_lymph","Enlarged Spleen"); echo $result;?>> 
         <?php xl("Enlarged Spleen",'e') ?> 
       </label>&nbsp;&nbsp;
      </span></span></td>
    </tr> 
   
   
   
   <tr><td> <span class="body_top"><span class="FontColor">
     <?php xl("Immunologic",'e') ?> 
     </span></span></td> 
     <td colspan="3"><span class="body_top"><span class="FontColor">
       <label>
         <input type="checkbox" name="immunologic[]" value="Tongue Swelling" <?php $result = chkdata_CB($obj,"immunologic","Tongue Swelling"); echo $result;?>> 
         <?php xl("Tongue Swelling",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="immunologic[]" value="Rash" <?php $result = chkdata_CB($obj,"immunologic","Rash"); echo $result;?>> 
         <?php xl("Rash",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="immunologic[]" value="Itching" <?php $result = chkdata_CB($obj,"immunologic","Itching"); echo $result;?>> 
         <?php xl("Itching",'e') ?> 
       </label> &nbsp;&nbsp;
       <label>
         <input type="checkbox" name="immunologic[]" value="Frequent Infections" <?php $result = chkdata_CB($obj,"immunologic","Frequent Infections"); echo $result;?>> 
         <?php xl("Frequent Infections",'e') ?> 
       </label> &nbsp;&nbsp;
       <?php xl("at",'e') ?> 
       <input type="text" name="infections_at" value="<?php $result = chkdata_Txt($obj,"infections_at"); echo $result;?>">
      </span></span></td> 
    </tr> 
</table>
<span class="FontColor">
 <input type="submit" name="submit form" value="Save" /> 
  
 </span>
 </form>
<span class="FontColor">
<?php 
 formFooter(); 
 ?> 
</span>