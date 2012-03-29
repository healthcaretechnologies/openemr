
<?php
// Copyright (C) 2008-2011 Rod Roark <rod@sunsetsystems.com>
//
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.
// This code is to generate a bill sheet for a encouter and 
// it is a pdf file that will be used to send to billing company

require_once("Claim.class.php");

$bill_curr_line = 1;
$bill_curr_col = 1;
$bill_curr_page = 1;
$bill_data = '';
$bill_proc_index = 0;
$bill_max_lines = 60;
$bill_header_lines=10;
$pl=1;


function put_bill($line, $col, $maxlen, $data)
{
	global $bill_curr_line, $bill_curr_col, $bill_data,$bill_max_lines,$bill_header_lines,$pl,$bill_curr_page;

	if ($line < $bill_curr_line) die("Data item at ($line, $col) precedes current line.");

	while ($bill_curr_line < $line)
	{
		$bill_data .= "\n";
		++$bill_curr_line;
		$bill_curr_col = 1;
	}

	if ($col < $bill_curr_col) die("Data item at ($line, $col) precedes current column.");

	while ($bill_curr_col < $col)
	{
		$bill_data .= " ";
		++$bill_curr_col;
	}
	
	

	//$data = preg_replace('/[.#]/', '', $data);

	$len = min(strlen($data), $maxlen);
	$bill_data .= substr($data, 0, $len);
	$bill_curr_col += $len;
	
	if(($line%$bill_max_lines)==0)
	{
		$bill_data .= "\014";
		$bill_curr_page++;
		$i=1;
		$header=explode("\n",$bill_data );
		
		foreach ($header as $hd)
		{
			if($i<$bill_header_lines)	
			{
				if($i<=1)
				{
					$bill_data .= substr($hd,0,74).$bill_curr_page."\n";
				}
				else {
					$bill_data .= $hd."\n";
				}
				$i++;
				++$bill_curr_line;
				++$pl;
			}
			else
			{
				break;
			}
		}
		$bill_data .= "\n";
		$bill_data.= 'ENCOUNTER INFORMATION (CONT.)'."\n";
		$bill_data.= '-------------------------------------------------------------------------------------------';
	}
}

function gen_bill($pid, $encounter, &$log)
{
	global $bill_data, $bill_proc_index,$bill_max_lines;

	$bill_data = '';
	$bill_proc_index = 0;

	$today = time();
	$claim = new Claim($pid, $encounter);

	$log .= "Generating bill claim $pid-$encounter for ".
		$claim->patientFirstName().' '.$claim->patientMiddleName().' '.$claim->patientLastName().' on '.date('Y-m-d H:i', $today).".\n";

//	while ($bill_proc_index < $claim->procCount())
//	{
		if ($bill_proc_index) $bill_data .= "\014"; // append form feed for new page
		gen_bill_page($pid, $encounter, &$log, &$claim);
//	}

	$log .= "\n";
	return $bill_data;
}

function gen_bill_page($pid, $encounter, &$log, &$claim)
{
	global $bill_curr_line, $bill_curr_col, $bill_data, $bill_proc_index,$bill_max_lines,$bill_curr_page,$pl;

	$bill_curr_line = 1;
	$bill_curr_col = 1;
//	$bill_max_lines = 61;
//	$bill_curr_page=1;
	$pl = 1;
	$pg = 1;

	// HEADER
	$bpn = $claim->providerFirstName().' '.$claim->providerMiddleName().' '.$claim->providerLastName().', MD';
	put_bill($pl, 1, 66, trim($bpn));
//	put_bill($pl, 1, 66, $claim->billingFacilityName());
	put_bill($pl++, 69, 22, 'Page: '.$bill_curr_page);
	put_bill($pl, 1, 61, $claim->billingFacilityStreet());
	put_bill($pl++, 64, 27, 'Generated: '.date('Y-m-d H:i', time()));
	put_bill($pl++, 1, 91, $claim->billingFacilityCity().' '.$claim->billingFacilityState().' '.$claim->billingFacilityZip());
	put_bill($pl, 1, 12, substr($claim->billingContactPhone(),0,3).'-'.substr($claim->billingContactPhone(),3,3).'-'.substr($claim->billingContactPhone(),6));
//	$bptn = $claim->patientFirstName().' '.$claim->patientMiddleName().' '.$claim->patientLastName();
//	$bptn_i = 91 - strlen($bptn);
//	if ($bptn_i < 14) $bptn_i = 14;
//	put_bill($pl++, $bptn_i, 91-$bnpt_i, $bptn);
	$pl++; // blank
    $pl++; // blank
	// PATIENT INFORMATION
	put_bill($pl++, 1, 91, 'PATIENT INFORMATION');
	put_bill($pl++, 1, 91, '-------------------------------------------------------------------------------------------');
	put_bill($pl, 5, 33, 'Name: '.$claim->patientLastName().', '.$claim->patientFirstName().' '.$claim->patientMiddleName());
	put_bill($pl, 40, 6, 'Sex: '.$claim->patientSex());
	put_bill($pl, 51, 15, 'DOB: '.substr($claim->patientDOB(),0,4).'-'.substr($claim->patientDOB(),4,2).'-'.substr($claim->patientDOB(),6,2));
	put_bill($pl++, 72, 19, 'Record#: '.$claim->patientExternalID());
	put_bill($pl, 2, 35, 'Address: '. $claim->patientStreet());
	put_bill($pl, 39, 27, 'City: '.$claim->patientCity());
	put_bill($pl, 68, 6, 'ST: '.$claim->patientState());
	put_bill($pl++, 76, 15, 'Zip: '.$claim->patientZip());
	put_bill($pl, 4, 19, 'Phone: '.substr($claim->patientPhone(),0,3).'-'.substr($claim->patientPhone(),3,3).'-'.substr($claim->patientPhone(),6));
//	put_bill($pl, 28, 36, 'Deceased Reason: '.$claim->patientDeceasedReason());
//	//put_bill($pl++, 66, 25, 'Deceased Date: '.substr($claim->patientDeceasedDate(),0,10));
//	put_bill($pl, 66, 15, 'Deceased Date: ');
//	if (substr($claim->patientDeceasedDate(),0,10) !== '0000-00-00' AND strlen($claim->patientDeceasedDate()>0))
//	{
//		put_bill($pl, 81, 10, substr($claim->patientDeceasedDate(),0,10));
//	}
	$pl++;
	$pl++; // blank

	// INSURANCE INFORMATION
	put_bill($pl++, 1, 91, 'INSURANCE INFORMATION');
	put_bill($pl++, 1, 91, '-------------------------------------------------------------------------------------------');
	put_bill($pl++, 2, 89, 'Pri Carrier: '.$claim->payerName(0));
	put_bill($pl, 10, 27, 'ID#: '.$claim->policyNumber(0));
	put_bill($pl, 39, 30, 'Grp#: '.$claim->groupNumber(0));
	put_bill($pl++, 71, 20, 'Eff Date: '.($claim->effectiveDate(0)!== '0000-00-00'? $claim->effectiveDate(0): ''));
	$subName = $claim->insuredLastName(0).', '.$claim->insuredFirstName(0).' '.$claim->insuredMiddleName(0);
	if (strlen($subName) <= 3) $subName='';
	put_bill($pl, 5, 40, 'Sub Name: '.$subName);
	$subDOB = substr($claim->insuredDOB(0),0,4).'-'.substr($claim->insuredDOB(0),4,2).'-'.substr($claim->insuredDOB(0),6,2);
	if (strlen($subDOB) <= 2) $subDOB='';
	put_bill($pl, 47, 19, 'Sub DOB: '.($subDOB!== '0000-00-00'?$subDOB:''));
	put_bill($pl++, 72, 19, 'Sub Rel: '.$claim->insuredRelationshipText(0));
	$pl++; // blank
	put_bill($pl++, 2, 89, 'Sec Carrier: '.$claim->payerName(1));
	put_bill($pl, 10, 27, 'ID#: '.$claim->policyNumber(1));
	put_bill($pl, 39, 30, 'Grp#: '.$claim->groupNumber(1));
	put_bill($pl++, 71, 20, 'Eff Date: '.($claim->effectiveDate(1)!== '0000-00-00'? $claim->effectiveDate(1): ''));
	$subName = $claim->insuredLastName(1).', '.$claim->insuredFirstName(1).' '.$claim->insuredMiddleName(1);
	if (strlen($subName) <= 3) $subName='';
	put_bill($pl, 5, 40, 'Sub Name: '.$subName);
	$subDOB = substr($claim->insuredDOB(1),0,4).'-'.substr($claim->insuredDOB(1),4,2).'-'.substr($claim->insuredDOB(1),6,2);
	if (strlen($subDOB) <= 2) $subDOB='';
	put_bill($pl, 47, 19, 'Sub DOB: '.($subDOB!== '0000-00-00'?$subDOB:''));
	put_bill($pl++, 72, 19, 'Sub Rel: '.$claim->insuredRelationshipText(1));
	$pl++; // blank
	put_bill($pl++, 2, 89, 'Ter Carrier: '.$claim->payerName(2));
	put_bill($pl, 10, 27, 'ID#: '.$claim->policyNumber(2));
	put_bill($pl, 39, 30, 'Grp#: '.$claim->groupNumber(2));
	put_bill($pl++, 71, 20, 'Eff Date: '.($claim->effectiveDate(2)!== '0000-00-00'? $claim->effectiveDate(2): ''));
	$subName = $claim->insuredLastName(2).', '.$claim->insuredFirstName(2).' '.$claim->insuredMiddleName(2);
	if (strlen($subName) <= 3) $subName='';
	put_bill($pl, 5, 40, 'Sub Name: '.$subName);
	$subDOB = substr($claim->insuredDOB(2),0,4).'-'.substr($claim->insuredDOB(2),4,2).'-'.substr($claim->insuredDOB(2),6,2);
	if (strlen($subDOB) <= 2) $subDOB='';
	put_bill($pl, 47, 19, 'Sub DOB: '.($subDOB!== '0000-00-00'?$subDOB:''));
	put_bill($pl++, 72, 19, 'Sub Rel: '.$claim->insuredRelationshipText(2));
	$pl++;
	put_bill($pl++, 1, 91, 'MISC BILLING INFORMATION');
	put_bill($pl++, 1, 91, '-------------------------------------------------------------------------------------------');
	put_bill($pl, 5, 14, 'Emp Related: '.($claim->isRelatedEmployment() == 1 ? 'Y' : ' '));
	put_bill($pl, 30, 16, 'Auto Accident: '.($claim->isRelatedAuto() == 1 ? 'Y' : ''));
	put_bill($pl, 48, 20, 'Auto Accident ST: '.$claim->autoAccidentState());
	put_bill($pl++, 70, 17, 'Other Accident: '.($claim->isRelatedOther() == 1 ? 'Y' : ' '));
	
	$hospFromDate = substr($claim->hospitalizedFrom(),0,4).'-'.substr($claim->hospitalizedFrom(),4,2).'-'.substr($claim->hospitalizedFrom(),6);
	
	put_bill($pl, 2, 26, 'Hosp Date From: '.(($hospFromDate !== '0000-00-00' AND strlen($hospFromDate)>2) ? $hospFromDate : ''));
	$hospToDate = substr($claim->hospitalizedTo(),0,4).'-'.substr($claim->hospitalizedTo(),4,2).'-'.substr($claim->hospitalizedTo(),6);
	put_bill($pl++, 31, 24, 'Hosp Date To: '.(($hospToDate !== '0000-00-00' AND strlen($hospToDate)>2)? $hospToDate : ''));
	$pl++; // blank
	put_bill($pl, 5, 13, 'Addtl Notes: ');
	$wrappedNotes = wordwrap($claim->additionalNotes(), 73, '\n', true);
	$wrappedLines = explode('\n', $wrappedNotes);
	
	foreach ($wrappedLines as $wrappedLine)
	{
		put_bill($pl++, 18, 73, $wrappedLine);
	}
	$pl++; // blank
	// ENCOUNTER INFORMATION
	put_bill($pl++, 1, 91, 'ENCOUNTER INFORMATION');
	put_bill($pl++, 1, 91, '-------------------------------------------------------------------------------------------');
	put_bill($pl, 2, 23, 'Date of Svc: '.substr($claim->serviceDate(),0,4).'-'.substr($claim->serviceDate(),4,2).'-'.substr($claim->serviceDate(),6));
	put_bill($pl++, 48, 43, 'Facility: '.$claim->facilityName());
	put_bill($pl, 5, 38, 'Rend Prv: '.$claim->providerLastName().', '.$claim->providerFirstName().' '.$claim->providerMiddleName());
	put_bill($pl++, 50, 41, 'Reason: '.$claim->reasonForVist());
	$refPrv=$claim->referrerLastName().', '.$claim->referrerFirstName().' '.$claim->referrerMiddleName();
	if(strlen($refPrv)<=3)	$refPrv='';
	put_bill($pl, 6, 41, 'Ref Prv: '.$refPrv);
	
	//Start Change : Add PCP Inforamtion on Bill Sheet -Sanjeewa
	$priPrv=$claim->pcpLastName().', '.$claim->pcpFirstName().' '.$claim->pcpMiddleName();
	if(strlen($priPrv)<=3)	$priPrv='';
	put_bill($pl, 6, 41, 'Pri Prv: '.$priPrv);
	//End Change : Add PCP Inforamtion on Bill Sheet 
	
	$dateOfInjury=substr($claim->onsetDate(),0,4).'-'.substr($claim->onsetDate(),4,2).'-'.substr($claim->onsetDate(),6);
		
	put_bill($pl++, 45, 23, 'Date Of Inj: '.(($dateOfInjury !== '0000-00-00' AND strlen($dateOfInjury)>2)?$dateOfInjury:''));

	$bres1 = sqlStatement("SELECT date, code, code_type, code_text, modifier, justify ".
				"FROM billing WHERE pid = '$pid' AND encounter = '$encounter' AND activity = 1 ".
					       "AND code_type = 'ICD9' ".
	                                  "ORDER BY date");
	$pl++;
	put_bill($pl++, 4, 87, 'Diagnoses:');
	put_bill($pl++, 5, 86, 'Type   Code     Description');
	put_bill($pl++, 5, 86, '-----  ------   ----------------------------------------------------------------------');
	while ($brow1 = sqlFetchArray($bres1))
	{
		if(($pl%$bill_max_lines)==0)
		{
			put_bill($pl++, 5, 5, '');
		}
		put_bill($pl, 5, 5, $brow1['code_type']);
		put_bill($pl, 12, 7, $brow1['code']);
		put_bill($pl++, 21, 70, $brow1['code_text']);
	}
	$pl++; // blank

	$bres1 = sqlStatement("SELECT date, code, code_type, code_text, modifier, justify ".
				"FROM billing WHERE pid = '$pid' AND encounter = '$encounter' AND activity = 1 ".
					       "AND code_type  IN ( 'CPT4', 'HCPCS' ) ".
	                                  "ORDER BY date");

	put_bill($pl++, 3, 88, 'Procedures:');
	put_bill($pl++, 5, 86, 'Type   Code     Mod          Justify');
	put_bill($pl++, 5, 86, '-----  -------  -----------  ---------------------------------------------------------');
	while ($brow1 = sqlFetchArray($bres1))
	{
		if(($pl%$bill_max_lines)==0)
		{
			put_bill($pl++, 5, 5, '');
		}
		put_bill($pl, 5, 5, $brow1['code_type']);
		put_bill($pl, 12, 7, $brow1['code']);
		put_bill($pl, 21, 11, trim(preg_replace('/[,:\s]+/', ',', $brow1['modifier']), ' \t\n\r\0\x0B,'));
		put_bill($pl++, 34, 57, trim(preg_replace('/[,:\s]+/', ',', $brow1['justify']), ' \t\n\r\0\x0B,'));
		put_bill($pl++, 12, 79, $brow1['code_text']);
	}
	$pl++; // blank
	
	$total=explode("\n",$bill_data );
	$blanks=$bill_max_lines-(count($total)%$bill_max_lines);
	
	while ($blanks-->0)
	{
		$bill_data .= "\n";
	}
	
	$bill_data .= 'Signature: _____________________________________________  Date: ___________________';
	
return;
}
?>
