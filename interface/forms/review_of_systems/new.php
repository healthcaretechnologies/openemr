<?php
include_once("../../globals.php");
include_once("$srcdir/api.inc");
formHeader("Form: review_of_systems");
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
<form method=post action="<?echo $rootdir;?>/forms/review_of_systems/save.php?mode=new" name="review_of_systems" onSubmit="return top.restoreSession()">
<span class="FontColor"><strong>
  <?php xl("Review of Systems",'e') ?> 
  </strong><br>

</span>
<table border="1">
  
  <tr><td> <span class="FontColor"><span class="body_top">
    <?php xl("Constitutional",'e') ?> 
    </span></span></td> 
    <td><span class="FontColor"><span class="body_top">
      <label>
        <input type="checkbox" name="constitutional[]" value="Fever" /> 
        <?php xl("Fever    ",'e') ?> 
      </label> &nbsp;&nbsp;
      <label>
        <input type="checkbox" name="constitutional[]" value="Chills" /> 
        <?php xl("Chills    ",'e') ?> 
      </label> 
      <label>&nbsp;&nbsp;
        <input type="checkbox" name="constitutional[]" value="Weight Loss" /> 
        <?php xl("Weight Loss    ",'e') ?> 
      </label> 
      <label>&nbsp;&nbsp;
        <input type="checkbox" name="constitutional[]" value="Weight Gain" /> 
        <?php xl("Weight Gain    ",'e') ?> 
      </label> &nbsp;&nbsp;
      <label>
        <input type="checkbox" name="constitutional[]" value="Fatigue" />
        <?php xl("Fatigue    ",'e') ?>
      </label>
      </span></span></td>
    </tr>
<tr><td> <span class="FontColor"><span class="body_top">
  <?php xl("Eyes",'e') ?> 
  </span></span></td> 
  <td><span class="FontColor"><span class="body_top">
    <label>
      <input type="checkbox" name="eyes[]" value="Cataract" /> 
      <?php xl("Cataract",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="eyes[]" value="Blurred Vision" /> 
      <?php xl("Blurred Vision",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="eyes[]" value="Double Vision" /> 
      <?php xl("Double Vision",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="eyes[]" value="Corrective Lenses" /> 
      <?php xl("Corrective Lenses",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="eyes[]" value="Glaucoma" /> 
      <?php xl("Glaucoma",'e') ?> 
    </label>&nbsp;&nbsp;
  </span></span></td>
</tr>


<tr><td> <span class="FontColor"><span class="body_top">
  <?php xl("Ent",'e') ?> 
  </span></span></td> 
  <td><span class="FontColor"><span class="body_top">
    <label>
      <input type="checkbox" name="ent[]" value="Ringing" /> 
      <?php xl("Ringing",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="ent[]" value="Hearing Loss" /> 
      <?php xl("Hearing Loss",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="ent[]" value="Nasal Discharge" /> 
      <?php xl("Nasal Discharge",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="ent[]" value="Sore Throat" /> 
      <?php xl("Sore Throat",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="ent[]" value="Ear Ache" /> 
      <?php xl("Ear Ache",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="ent[]" value="Sinusitis" /> 
      <?php xl("Sinusitis",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="ent[]" value="Hoarseness" /> 
      <?php xl("Hoarseness",'e') ?> 
    </label>&nbsp;&nbsp;
  </span></span></td>
</tr>


<tr><td> <span class="FontColor"><span class="body_top">
  <?php xl("Heart",'e') ?> 
  </span></span></td> 
  <td><span class="FontColor"><span class="body_top">
    <label>
      <input type="checkbox" name="heart[]" value="Chest Pain" /> 
      <?php xl("Chest Pain",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="heart[]" value="Edema" /> 
      <?php xl("Edema",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="heart[]" value="High Blood Pressure" /> 
      <?php xl("High Blood Pressure",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="heart[]" value="Murmur" /> 
      <?php xl("Murmur",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="heart[]" value="Rheumatic Fever" /> 
      <?php xl("Rheumatic Fever",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="heart[]" value="Irregular Beat" /> 
      <?php xl("Irregular Beat",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="heart[]" value="Palpitations" /> 
      <?php xl("Palpitations",'e') ?> 
    </label>&nbsp;&nbsp;
  </span></span></td>
</tr>

<tr><td> <span class="FontColor"><span class="body_top">
  <?php xl("Respiratory",'e') ?> 
  </span></span></td> 
  <td><span class="FontColor"><span class="body_top">
    <label>
      <input type="checkbox" name="respiratory[]" value="Shortt of Breath" /> 
      <?php xl("Shortt of Breath",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="respiratory[]" value="Wheezing" /> 
      <?php xl("Wheezing",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="respiratory[]" value="Cough" /> 
      <?php xl("Cough",'e') ?> 
    </label>&nbsp;&nbsp;
  </span></span></td>
</tr>

<tr><td> <span class="FontColor"><span class="body_top">
  <?php xl("Gastrointestinal (GI)",'e') ?> 
  </span></span></td> 
  <td><span class="FontColor"><span class="body_top">
    <label>
      <input type="checkbox" name="gi[]" value="Difficulty Swallowing" /> 
      <?php xl("Difficulty In Swallowing",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="gi[]" value="Nausea" /> 
      <?php xl("Nausea",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="gi[]" value="Heartburn" /> 
      <?php xl("Heartburn",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="gi[]" value="Vomiting" /> 
      <?php xl("Vomiting",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="gi[]" value="Diarrhea" /> 
      <?php xl("Diarrhea",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="gi[]" value="Abdominal Pain" /> 
      <?php xl("Abdominal Pain",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="gi[]" value="Constipation" /> 
      <?php xl("Constipation",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="gi[]" value="Incontinent" /> 
      <?php xl("Incontinent",'e') ?> 
    </label>&nbsp;&nbsp;
  </span></span></td>
</tr>

<tr><td> <span class="FontColor"><span class="body_top">
  <?php xl("Genito-Urinary (GU)",'e') ?> 
  </span></span></td> 
  <td><span class="FontColor"><span class="body_top">
    <label>
      <input type="checkbox" name="gu[]" value="Painful Urination" /> 
      <?php xl("Painful Urination",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="gu[]" value="Frequency" /> 
      <?php xl("Frequency",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="gu[]" value="Blood in Urine" /> 
      <?php xl("Blood in Urine",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="gu[]" value="Veginal or Penile Discharge" /> 
      <?php xl("Veginal or Penile Discharge",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="gu[]" value="Sexual Dysfunction" /> 
      <?php xl("Sexual Dysfunction",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="gu[]" value="Incontinent" /> 
      <?php xl("Incontinent",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="gu[]" value="Awaken from Sleep" /> 
      <?php xl("Awaken from Sleep",'e') ?> 
    </label>&nbsp;&nbsp;
  </span></span></td>
</tr>

<tr><td> <span class="FontColor"><span class="body_top">
  <?php xl("Skin",'e') ?> 
  </span></span></td> 
  <td><span class="FontColor"><span class="body_top">
    <label>
      <input type="checkbox" name="skin[]" value="Rash" /> 
      <?php xl("Rash",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="skin[]" value="Sores" /> 
      <?php xl("Sores",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="skin[]" value="Discoloration" /> 
      <?php xl("Discoloration",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="skin[]" value="Itching" /> 
      <?php xl("Itching",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="skin[]" value="Moles" /> 
      <?php xl("Moles",'e') ?> 
    </label>&nbsp;&nbsp;
  </span></span></td>
</tr>


<tr><td> <span class="FontColor"><span class="body_top">
  <?php xl("Musculoskeletal",'e') ?> 
  </span></span></td> 
  <td><span class="FontColor"><span class="body_top">
    <label>
      <input type="checkbox" name="musculoskeletal[]" value="Joint Swelling" /> 
      <?php xl("Joint Swelling",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="musculoskeletal[]" value="Joint Pain" /> 
      <?php xl("Joint Pain",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="musculoskeletal[]" value="Joint Stiffness" /> 
      <?php xl("Joint Stiffness",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="musculoskeletal[]" value="Muscle Pain" /> 
      <?php xl("Muscle Pain",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="musculoskeletal[]" value="Back Pain" /> 
      <?php xl("Back Pain",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="musculoskeletal[]" value="Muscle Spasms" /> 
      <?php xl("Muscle Spasms",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="musculoskeletal[]" value="Rigidity" /> 
      <?php xl("Rigidity",'e') ?> 
    </label>
  </span></span></td>
</tr>


<tr><td> <span class="FontColor"><span class="body_top">
  <?php xl("Neurological",'e') ?> 
  </span></span></td> 
  <td><span class="FontColor"><span class="body_top">
    <label>
      <input type="checkbox" name="neurological[]" value="Seizures" /> 
      <?php xl("Seizures",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="neurological[]" value="Weakness" /> 
      <?php xl("Weakness",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="neurological[]" value="Tingling" /> 
      <?php xl("Tingling",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="neurological[]" value="Confusion" /> 
      <?php xl("Confusion",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="neurological[]" value="Tremores" /> 
      <?php xl("Tremores",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="neurological[]" value="Unsteady Gait" /> 
      <?php xl("Unsteady Gait",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="neurological[]" value="Headaches" /> 
      <?php xl("Headaches",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="neurological[]" value="Memory Loss" /> 
      <?php xl("Memory Loss",'e') ?> 
    </label>&nbsp;&nbsp;
  </span></span></td>
</tr>


<tr><td> <span class="FontColor"><span class="body_top">
  <?php xl("Psychiatric",'e') ?> 
  </span></span></td> 
  <td><span class="FontColor"><span class="body_top">
    <label>
      <input type="checkbox" name="psychiatric[]" value="Depression" /> 
      <?php xl("Depression",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="psychiatric[]" value="Anxiety" /> 
      <?php xl("Anxiety",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="psychiatric[]" value="Seeing Things" /> 
      <?php xl("Seeing Things",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="psychiatric[]" value="Hearing Things" /> 
      <?php xl("Hearing Things",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="psychiatric[]" value="Suicidal Thoughts" /> 
      <?php xl("Suicidal Thoughts",'e') ?> 
    </label>&nbsp;&nbsp;
  </span></span></td>
</tr>


<tr><td> <span class="FontColor"><span class="body_top">
  <?php xl("Endocrine",'e') ?> 
  </span></span></td> 
  <td><span class="FontColor"><span class="body_top">
    <label>
      <input type="checkbox" name="endocrine[]" value="Increased Thirst" /> 
      <?php xl("Increased Thirst",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="endocrine[]" value="Decreased Energy" /> 
      <?php xl("Decreased Energy",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="endocrine[]" value="Hot Intolerance" /> 
      <?php xl("Hot Intolerance",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="endocrine[]" value="Cold Intolerance" /> 
      <?php xl("Cold Intolerance",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="endocrine[]" value="Weight Loss" /> 
      <?php xl("Weight Loss",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="endocrine[]" value="Wight Gain" /> 
      <?php xl("Weight Gain",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="endocrine[]" value="Diabetes" /> 
      <?php xl("Diabetes",'e') ?> 
    </label>&nbsp;&nbsp;
  </span></span></td>
</tr>


<tr><td> <span class="FontColor"><span class="body_top">
  <?php xl("Heme/Lymph",'e') ?> 
  </span></span></td> 
  <td><span class="FontColor"><span class="body_top">
    <label>
      <input type="checkbox" name="heme_lymph[]" value="Easy Bruising" /> 
      <?php xl("Easy Bruising",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="heme_lymph[]" value="Bleeding" /> 
      <?php xl("Bleeding",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="heme_lymph[]" value="Tender" /> 
      <?php xl("Tender",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="heme_lymph[]" value="Enlarged" /> 
      <?php xl("Enlarged",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="heme_lymph[]" value="Lymph Nodes" /> 
      <?php xl("Lymph Nodes",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="heme_lymph[]" value="Anemia" /> 
      <?php xl("Anemia",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="heme_lymph[]" value="Enlarged Liver" /> 
      <?php xl("Enlarged Liver",'e') ?> 
    </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="heme_lymph[]" value="Enlarged Spleen" /> 
      <?php xl("Enlarged Spleen",'e') ?> 
    </label>&nbsp;&nbsp;
  </span></span></td>
</tr>


<tr><td> <span class="FontColor"><span class="body_top">
  <?php xl("Immunologic",'e') ?> 
  </span></span></td> 
  <td colspan="3"><span class="FontColor"><span class="body_top">
    <label>
      <input type="checkbox" name="immunologic[]" value="Tongue Swelling" /> 
      <?php xl("Tongue Swelling",'e') ?> 
      </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="immunologic[]" value="Rash" /> 
      <?php xl("Rash",'e') ?> 
      </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="immunologic[]" value="Itching" /> 
      <?php xl("Itching",'e') ?> 
      </label> &nbsp;&nbsp;
    <label>
      <input type="checkbox" name="immunologic[]" value="Frequent Infections" /> 
      <?php xl("Frequent Infections",'e') ?> 
      </label>&nbsp;&nbsp;
    </span></span> <span class="FontColor"><span class="body_top">
      <?php xl("at",'e') ?> 
      </span></span><span class="FontColor"><span class="body_top">
        <input type="text" name="infections_at"  />
      </span></span></td> 
  </tr>
</table>
<br />
<span class="FontColor">
<input type="submit" name="submit form" value="Save" />
</span>
</form>
<span class="FontColor">
<?php
formFooter();
?>
</span>