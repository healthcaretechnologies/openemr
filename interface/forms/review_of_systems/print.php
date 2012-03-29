<?php
include_once("../../globals.php");
include_once("$srcdir/api.inc");
formHeader("Form: review_of_systems");
?>
<html><head>
<link rel=stylesheet href="<?echo $css_header;?>" type="text/css">
</head>
<body <?echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<form method=post action="<?echo $rootdir;?>/forms/review_of_systems/save.php?mode=new" name="my_form" onsubmit="return top.restoreSession()">
<h1> review_of_systems </h1>
<hr>
<input type="submit" name="submit form" value="submit form" /><br>

<table>

<tr><td> <?php xl("Constitutional",'e') ?> </td> <td><label><input type="checkbox" name="constitutional[]" value="Fever" /> <?php xl("Fever",'e') ?> </label> <label><input type="checkbox" name="constitutional[]" value="Chills" /> <?php xl("Chills",'e') ?> </label> <label><input type="checkbox" name="constitutional[]" value="Weight Loss" /> <?php xl("Weight Loss",'e') ?> </label> <label><input type="checkbox" name="constitutional[]" value="Weight Gain" /> <?php xl("Weight Gain",'e') ?> </label> <label><input type="checkbox" name="constitutional[]" value="Fatigue" /> <?php xl("Fatigue",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Eyes",'e') ?> </td> <td><label><input type="checkbox" name="eyes[]" value="Cataract" /> <?php xl("Cataract",'e') ?> </label> <label><input type="checkbox" name="eyes[]" value="Blurred Vision" /> <?php xl("Blurred Vision",'e') ?> </label> <label><input type="checkbox" name="eyes[]" value="Double Vision" /> <?php xl("Double Vision",'e') ?> </label> <label><input type="checkbox" name="eyes[]" value="Corrective Lenses" /> <?php xl("Corrective Lenses",'e') ?> </label> <label><input type="checkbox" name="eyes[]" value="Glaucoma" /> <?php xl("Glaucoma",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Ent",'e') ?> </td> <td><label><input type="checkbox" name="ent[]" value="Ringing" /> <?php xl("Ringing",'e') ?> </label> <label><input type="checkbox" name="ent[]" value="Hearing Loss" /> <?php xl("Hearing Loss",'e') ?> </label> <label><input type="checkbox" name="ent[]" value="Nasal Discharge" /> <?php xl("Nasal Discharge",'e') ?> </label> <label><input type="checkbox" name="ent[]" value="Sore Throat" /> <?php xl("Sore Throat",'e') ?> </label> <label><input type="checkbox" name="ent[]" value="Ear Ache" /> <?php xl("Ear Ache",'e') ?> </label> <label><input type="checkbox" name="ent[]" value="Sinusitis" /> <?php xl("Sinusitis",'e') ?> </label> <label><input type="checkbox" name="ent[]" value="Hoarseness" /> <?php xl("Hoarseness",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Heart",'e') ?> </td> <td><label><input type="checkbox" name="heart[]" value="Chest Pain" /> <?php xl("Chest Pain",'e') ?> </label> <label><input type="checkbox" name="heart[]" value="Edema" /> <?php xl("Edema",'e') ?> </label> <label><input type="checkbox" name="heart[]" value="High Blood Pressure" /> <?php xl("High Blood Pressure",'e') ?> </label> <label><input type="checkbox" name="heart[]" value="Murmur" /> <?php xl("Murmur",'e') ?> </label> <label><input type="checkbox" name="heart[]" value="Rheumatic Fever" /> <?php xl("Rheumatic Fever",'e') ?> </label> <label><input type="checkbox" name="heart[]" value="Irregular Beat" /> <?php xl("Irregular Beat",'e') ?> </label> <label><input type="checkbox" name="heart[]" value="Palpitations" /> <?php xl("Palpitations",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Respiratory",'e') ?> </td> <td><label><input type="checkbox" name="respiratory[]" value="Shortt of Breath" /> <?php xl("Shortt of Breath",'e') ?> </label> <label><input type="checkbox" name="respiratory[]" value="Wheezing" /> <?php xl("Wheezing",'e') ?> </label> <label><input type="checkbox" name="respiratory[]" value="Cough" /> <?php xl("Cough",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Gi",'e') ?> </td> <td><label><input type="checkbox" name="gi[]" value="Difficulty Swallowing" /> <?php xl("Difficulty Swallowing",'e') ?> </label> <label><input type="checkbox" name="gi[]" value="Nausea" /> <?php xl("Nausea",'e') ?> </label> <label><input type="checkbox" name="gi[]" value="Heartburn" /> <?php xl("Heartburn",'e') ?> </label> <label><input type="checkbox" name="gi[]" value="Vomiting" /> <?php xl("Vomiting",'e') ?> </label> <label><input type="checkbox" name="gi[]" value="Diarrhea" /> <?php xl("Diarrhea",'e') ?> </label> <label><input type="checkbox" name="gi[]" value="Abdominal Pain" /> <?php xl("Abdominal Pain",'e') ?> </label> <label><input type="checkbox" name="gi[]" value="Constipation" /> <?php xl("Constipation",'e') ?> </label> <label><input type="checkbox" name="gi[]" value="Incontinent" /> <?php xl("Incontinent",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Gu",'e') ?> </td> <td><label><input type="checkbox" name="gu[]" value="Painful Urination" /> <?php xl("Painful Urination",'e') ?> </label> <label><input type="checkbox" name="gu[]" value="Frequency" /> <?php xl("Frequency",'e') ?> </label> <label><input type="checkbox" name="gu[]" value="Blood in Urine" /> <?php xl("Blood in Urine",'e') ?> </label> <label><input type="checkbox" name="gu[]" value="Veginal or Penile Discharge" /> <?php xl("Veginal or Penile Discharge",'e') ?> </label> <label><input type="checkbox" name="gu[]" value="Sexual Dysfunction" /> <?php xl("Sexual Dysfunction",'e') ?> </label> <label><input type="checkbox" name="gu[]" value="Incontinent" /> <?php xl("Incontinent",'e') ?> </label> <label><input type="checkbox" name="gu[]" value="Awaken from Sleep" /> <?php xl("Awaken from Sleep",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Skin",'e') ?> </td> <td><label><input type="checkbox" name="skin[]" value="Rash" /> <?php xl("Rash",'e') ?> </label> <label><input type="checkbox" name="skin[]" value="Sores" /> <?php xl("Sores",'e') ?> </label> <label><input type="checkbox" name="skin[]" value="Discoloration" /> <?php xl("Discoloration",'e') ?> </label> <label><input type="checkbox" name="skin[]" value="Itching" /> <?php xl("Itching",'e') ?> </label> <label><input type="checkbox" name="skin[]" value="Moles" /> <?php xl("Moles",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Musculoskeletal",'e') ?> </td> <td><label><input type="checkbox" name="musculoskeletal[]" value="Joint Swelling" /> <?php xl("Joint Swelling",'e') ?> </label> <label><input type="checkbox" name="musculoskeletal[]" value="Joint Pain" /> <?php xl("Joint Pain",'e') ?> </label> <label><input type="checkbox" name="musculoskeletal[]" value="Joint Stiffness" /> <?php xl("Joint Stiffness",'e') ?> </label> <label><input type="checkbox" name="musculoskeletal[]" value="Muscle Pain" /> <?php xl("Muscle Pain",'e') ?> </label> <label><input type="checkbox" name="musculoskeletal[]" value="Back Pain" /> <?php xl("Back Pain",'e') ?> </label> <label><input type="checkbox" name="musculoskeletal[]" value="Muscle Spasms" /> <?php xl("Muscle Spasms",'e') ?> </label> <label><input type="checkbox" name="musculoskeletal[]" value="Rigidity" /> <?php xl("Rigidity",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Neurological",'e') ?> </td> <td><label><input type="checkbox" name="neurological[]" value="Seizures" /> <?php xl("Seizures",'e') ?> </label> <label><input type="checkbox" name="neurological[]" value="Weakness" /> <?php xl("Weakness",'e') ?> </label> <label><input type="checkbox" name="neurological[]" value="Tingling" /> <?php xl("Tingling",'e') ?> </label> <label><input type="checkbox" name="neurological[]" value="Confusion" /> <?php xl("Confusion",'e') ?> </label> <label><input type="checkbox" name="neurological[]" value="Tremores" /> <?php xl("Tremores",'e') ?> </label> <label><input type="checkbox" name="neurological[]" value="Unsteady Gait" /> <?php xl("Unsteady Gait",'e') ?> </label> <label><input type="checkbox" name="neurological[]" value="Headaches" /> <?php xl("Headaches",'e') ?> </label> <label><input type="checkbox" name="neurological[]" value="Memory Loss" /> <?php xl("Memory Loss",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Psychiatric",'e') ?> </td> <td><label><input type="checkbox" name="psychiatric[]" value="Depression" /> <?php xl("Depression",'e') ?> </label> <label><input type="checkbox" name="psychiatric[]" value="Anxiety" /> <?php xl("Anxiety",'e') ?> </label> <label><input type="checkbox" name="psychiatric[]" value="Seeing Things" /> <?php xl("Seeing Things",'e') ?> </label> <label><input type="checkbox" name="psychiatric[]" value="Hearing Things" /> <?php xl("Hearing Things",'e') ?> </label> <label><input type="checkbox" name="psychiatric[]" value="Suicidal Thoughts" /> <?php xl("Suicidal Thoughts",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Endocrine",'e') ?> </td> <td><label><input type="checkbox" name="endocrine[]" value="Increased Thirst" /> <?php xl("Increased Thirst",'e') ?> </label> <label><input type="checkbox" name="endocrine[]" value="Decreased Energy" /> <?php xl("Decreased Energy",'e') ?> </label> <label><input type="checkbox" name="endocrine[]" value="Hot Intolerance" /> <?php xl("Hot Intolerance",'e') ?> </label> <label><input type="checkbox" name="endocrine[]" value="Cold Intolerance" /> <?php xl("Cold Intolerance",'e') ?> </label> <label><input type="checkbox" name="endocrine[]" value="Weight Loss" /> <?php xl("Weight Loss",'e') ?> </label> <label><input type="checkbox" name="endocrine[]" value="Wight Gain" /> <?php xl("Wight Gain",'e') ?> </label> <label><input type="checkbox" name="endocrine[]" value="Diabetes" /> <?php xl("Diabetes",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Heme lymph",'e') ?> </td> <td><label><input type="checkbox" name="heme_lymph[]" value="Easy Bruising" /> <?php xl("Easy Bruising",'e') ?> </label> <label><input type="checkbox" name="heme_lymph[]" value="Bleeding" /> <?php xl("Bleeding",'e') ?> </label> <label><input type="checkbox" name="heme_lymph[]" value="Tender" /> <?php xl("Tender",'e') ?> </label> <label><input type="checkbox" name="heme_lymph[]" value="Enlarged" /> <?php xl("Enlarged",'e') ?> </label> <label><input type="checkbox" name="heme_lymph[]" value="Lymph Nodes" /> <?php xl("Lymph Nodes",'e') ?> </label> <label><input type="checkbox" name="heme_lymph[]" value="Anemia" /> <?php xl("Anemia",'e') ?> </label> <label><input type="checkbox" name="heme_lymph[]" value="Enlarged Liver" /> <?php xl("Enlarged Liver",'e') ?> </label> <label><input type="checkbox" name="heme_lymph[]" value="Enlarged Spleen" /> <?php xl("Enlarged Spleen",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Immunologic",'e') ?> </td> <td><label><input type="checkbox" name="immunologic[]" value="Tongue Swelling" /> <?php xl("Tongue Swelling",'e') ?> </label> <label><input type="checkbox" name="immunologic[]" value="Rash" /> <?php xl("Rash",'e') ?> </label> <label><input type="checkbox" name="immunologic[]" value="Itching" /> <?php xl("Itching",'e') ?> </label> <label><input type="checkbox" name="immunologic[]" value="Frequent Infections" /> <?php xl("Frequent Infections",'e') ?> </label></td></tr>

</table>

<table>

<tr><td> <?php xl("Infections at",'e') ?> </td> <td><input type="text" name="infections_at"  /></td></tr>

</table>
<table></table><input type="submit" name="submit form" value="submit form" />
</form>
<?php
formFooter();
?>
