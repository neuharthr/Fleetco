<?php 
 
//	locale functions
//	number, currency, date & time functions
/**
 * 	valDigits - parameter from program, user can set decimal digets 
 * @intellisense
 */
function str_format_number($val,$valDigits = false)
{
	global $locale_info;
	if(!is_numeric($val))
	  return $val;
 
	$iDigits = $valDigits;
	if($iDigits === false)  
		$iDigits = $locale_info["LOCALE_IDIGITS"];
	
	$val = round($val,$iDigits);
	if($val>=0)
	{
	  $sign=1;
	  $int = floor($val);
	  $frac = $val-$int;
	} else {
	  $sign=-1;
	  $int = floor(-$val);
	  $frac = -$val-$int;
	}
	$out = number_format($int,0,'','');
//	grouping
    $grouping=explode(";",$locale_info["LOCALE_SGROUPING"]);
	if(count($grouping) && $grouping[0])
	{
		$ptr=strlen($out);
		for($gi=0;$gi<count($grouping);$gi++)
		{
			if(!$grouping[$gi])
				$gi--;
			if($ptr<=$grouping[$gi])
			{
				$ptr=0;
				break;
			}
			$out=substr($out,0,$ptr-$grouping[$gi]).$locale_info["LOCALE_STHOUSAND"].substr($out,$ptr-$grouping[$gi]);
			$ptr-=$grouping[$gi];
		}
	}
//	fractional digits
    if($iDigits>0)
    {
      $fmul=1;
      for($i=0;$i<$iDigits;$i++)
        $fmul*=10;
      $sfrac=round($frac*$fmul);
	  //$sfrac=mysprintf("%.0f",array($frac));
	  while(strlen($sfrac)<$iDigits)
	    $sfrac="0".$sfrac;
	  $out.=$locale_info["LOCALE_SDECIMAL"].$sfrac;
    }
//	format output
	if($sign>0)
		return $locale_info["LOCALE_SPOSITIVESIGN"].$out;
	else
	{
		switch($locale_info["LOCALE_INEGNUMBER"])
		{
			case 0:
				return "(".$out.")";
			case 1:
				return "-".$out;
			case 2:
				return "- ".$out;
			case 3:
				return $out."-";
			case 4:
				return $out." -";
		}
	}
	return $val;
}


/**
 * @intellisense
 */
function str_format_currency($val)
{
	global $locale_info;
	if(!is_numeric($val))
	  return $val;
	$val=round($val,$locale_info["LOCALE_ICURRDIGITS"]);
	if($val>=0)
	{
	  $sign=1;
	  $int = floor($val);
	  $frac = $val-$int;
	} else {
	  $sign=-1;
	  $int = floor(-$val);
	  $frac = -$val-$int;
	}
	$out = number_format($int,0,'','');
//	grouping
    $grouping=explode(";",$locale_info["LOCALE_SMONGROUPING"]);
	if(count($grouping) && $grouping[0])
	{
		$ptr=strlen($out);
		for($gi=0;$gi<count($grouping);$gi++)
		{
			if(!$grouping[$gi])
				$gi--;
			if($ptr<=$grouping[$gi])
			{
				$ptr=0;
				break;
			}
			$out=substr($out,0,$ptr-$grouping[$gi]).$locale_info["LOCALE_SMONTHOUSANDSEP"].substr($out,$ptr-$grouping[$gi]);
			$ptr-=$grouping[$gi];
		}
	}
//	fractional digits
    if($locale_info["LOCALE_ICURRDIGITS"]>0)
    {
      $fmul=1;
      for($i=0;$i<$locale_info["LOCALE_ICURRDIGITS"];$i++)
        $fmul*=10;
      $frac=round($frac*$fmul);
	  $sfrac=mysprintf("%d",array($frac));
	  while(strlen($sfrac)<$locale_info["LOCALE_ICURRDIGITS"])
	    $sfrac="0".$sfrac;
	  $out.=$locale_info["LOCALE_SMONDECIMALSEP"].$sfrac;
    }
//	format output
	if($sign>0)
	{
		switch($locale_info["LOCALE_ICURRENCY"])
		{
			case 0:
				return mysprintf("%s%s",array($locale_info["LOCALE_SCURRENCY"],$out));
			case 1:
				return mysprintf("%s%s",array($out,$locale_info["LOCALE_SCURRENCY"]));
			case 2:
				return mysprintf("%s %s",array($locale_info["LOCALE_SCURRENCY"],$out));
			case 3:
				return mysprintf("%s %s",array($out,$locale_info["LOCALE_SCURRENCY"]));
		}
	}
	else
	{
		switch($locale_info["LOCALE_INEGCURR"])
		{
			case 0:
				return mysprintf("(%s%s)",array($locale_info["LOCALE_SCURRENCY"],$out));
			case 1:
				return mysprintf("-%s%s",array($locale_info["LOCALE_SCURRENCY"],$out));
			case 2:
				return mysprintf("%s-%s",array($locale_info["LOCALE_SCURRENCY"],$out));
			case 3:
				return mysprintf("%s%s-",array($locale_info["LOCALE_SCURRENCY"],$out));
			case 4:
				return mysprintf("(%s%s)",array($out,$locale_info["LOCALE_SCURRENCY"]));
			case 5:
				return mysprintf("-%s%s",array($out,$locale_info["LOCALE_SCURRENCY"]));
			case 6:
				return mysprintf("%s-%s",array($out,$locale_info["LOCALE_SCURRENCY"]));
			case 7:
				return mysprintf("%s%s-",array($out,$locale_info["LOCALE_SCURRENCY"]));
			case 8:
				return mysprintf("-%s %s",array($out,$locale_info["LOCALE_SCURRENCY"]));
			case 9:
				return mysprintf("-%s %s",array($locale_info["LOCALE_SCURRENCY"],$out));
			case 10:
				return mysprintf("%s %s-",array($out,$locale_info["LOCALE_SCURRENCY"]));
			case 11:
				return mysprintf("%s %s-",array($locale_info["LOCALE_SCURRENCY"],$out));
			case 12:
				return mysprintf("%s -%s",array($locale_info["LOCALE_SCURRENCY"],$out));
			case 13:
				return mysprintf("%s- %s",array($out,$locale_info["LOCALE_SCURRENCY"]));
			case 14:
				return mysprintf("(%s %s)",array($locale_info["LOCALE_SCURRENCY"],$out));
			case 15:
				return mysprintf("(%s %s)",array($out,$locale_info["LOCALE_SCURRENCY"]));
				
		}
	}
	return $val;
}

/**
 * @intellisense
 */
function format_datetime_custom($time,$format)
{
	global $locale_info;
	if(count($time)<3)
		return "";
	$i=0;
	$subst=array();
	if( strpos( $format, "ddd" ) !== false ) {
		$weekday=getdayofweek($time);
		$subst["dddd"]=$locale_info["LOCALE_SDAYNAME".$weekday];
		$subst["ddd"]=$locale_info["LOCALE_SABBREVDAYNAME".$weekday];
	}
	$subst["dd"]=mysprintf("%02d",array($time[2]));
	$subst["d"]=$time[2];
	if(array_key_exists("LOCALE_SMONTHNAME".$time[1],$locale_info))
	{
		$subst["MMMM"]=$locale_info["LOCALE_SMONTHNAME".$time[1]];
		$subst["MMM"]=$locale_info["LOCALE_SABBREVMONTHNAME".$time[1]];
		$subst["MM"]=mysprintf("%02d",array($time[1]));
	}
	else
	{
		$subst["MMMM"]="";
		$subst["MMM"]="";
		$subst["MM"]="00";
	}
	$subst["M"]=$time[1];
	$subst["yyyy"]=mysprintf("%04d",array($time[0]));
	$subst["yy"]=mysprintf("%02d",array($time[0]%100));
	$subst["y"]=$time[0]%10;
	$subst["gg"]="";
	$subst["HH"]=mysprintf("%02d",array($time[3]));
	$subst["H"]=$time[3];
	$subst["mm"]=mysprintf("%02d",array($time[4]));
	$subst["m"]=$time[4];
	$subst["ss"]=mysprintf("%02d",array($time[5]));
	$subst["s"]=$time[5];
	$hour12=$time[3];
	$am=1;
	if($hour12>=12)
	{
		$am=0;
		$hour12-=12;
	}
	if(!$hour12)
		$hour12=12;
	$subst["hh"]=mysprintf("%02d",array($hour12));
	$subst["h"]=$hour12;
	if($am)
	{
		if ( strlen($locale_info["LOCALE_S1159"]) !== 0 )
		{
			$subst["tt"]= $locale_info["LOCALE_S1159"];
			$subst["t"]=substr($locale_info["LOCALE_S1159"],0,1);			
		}
		else
		{
			$subst["tt"]= "am";
			$subst["t"]= "a";
		}
	}
	else
	{
		if ( strlen($locale_info["LOCALE_S2359"]) !== 0 )
		{
			$subst["tt"]= $locale_info["LOCALE_S2359"];
			$subst["t"]=substr($locale_info["LOCALE_S2359"],0,1);			
		}
		else
		{
			$subst["tt"]= "pm";
			$subst["t"]= "p";
		}
	}
	$out=$format;
	$inquot=0;
	while($i<strlen($out))
	{
		if($out[$i]=="'")
		{
			$inquot=1-$inquot;
			$out=substr($out,0,$i).substr($out,$i+1);
			continue;
		}
		else if(!$inquot)
		{
			foreach($subst as $key=>$value)
				if(substr($out,$i,strlen($key))==$key)
				{
					$out=substr($out,0,$i).$value.substr($out,strlen($key)+$i);
					$i+=strlen($value)-1;
					break;
				}
		}
		$i++;
	}
	return $out;
}

/**
 * @intellisense
 */
function str_format_datetime($time)
{
	global $locale_info;
	return format_datetime_custom($time,$locale_info["LOCALE_SSHORTDATE"]." ".$locale_info["LOCALE_STIMEFORMAT"]);
}

/**
 * @intellisense
 */
function str_format_time($time)
{
	global $locale_info;
	return format_datetime_custom($time,$locale_info["LOCALE_STIMEFORMAT"]);
}

/**
 * @intellisense
 */
function format_shortdate($time)
{
	global $locale_info;
	return format_datetime_custom($time,$locale_info["LOCALE_SSHORTDATE"]);
}

/**
 * @intellisense
 */
function format_longdate($time)
{
	global $locale_info;
	return format_datetime_custom($time,$locale_info["LOCALE_SLONGDATE"]);
}

/**
 * @intellisense
 */
function simpledate2db($strdate,$formatid)
{
	$str=$strdate;
	$numbers=parsenumbers($str);
	if(!count($numbers))
		return $strdate;
	while(count($numbers)<3)
		$numbers[]=1;
	if(!$formatid)
	{
		$vMonth=$numbers[0];
		$vDay=$numbers[1];
		$vYear=$numbers[2];
		
	}
	else if($formatid==1)
	{
		$vDay=$numbers[0];
		$vMonth=$numbers[1];
		$vYear=$numbers[2];
	}
	else if($formatid==2)
	{
		$vYear=$numbers[0];
		$vMonth=$numbers[1];
		$vDay=$numbers[2];
	}
	else
		return $strdate;
	if($vYear<100)
	{
		if($vYear<60)
			$vYear+=2000;
		else
			$vYear+=1900;
	}
	return mysprintf("%04d-%02d-%02d",array($vYear,$vMonth,$vDay));
}


/**
 * @intellisense
 */
function localdate2db($strdate)
{
	global $locale_info;
	return simpledate2db($strdate,$locale_info["LOCALE_IDATE"]);
}

/**
 * @intellisense
 */
function localtime2db($strtime)
{
	global $locale_info;

	//	check if we use 12hours clock
	$use12 = 0;
	$pos = strpos($locale_info["LOCALE_STIMEFORMAT"],"h".$locale_info["LOCALE_STIME"]);
	$amstr = $locale_info["LOCALE_S1159"];
	$pmstr = $locale_info["LOCALE_S2359"];

	$amRegular = "a\.?m\.?";
	$pmRegular = "p\.?m\.?";

	if( strlen($amstr) )
		$amRegular .= "|".$amstr;
	if ( strlen($pmstr) )
		$pmRegular .= "|".$pmstr;

	$isAm = preg_match("/(" . $amRegular . ")/isU", $strtime);
	$isPm = preg_match("/(" . $pmRegular . ")/isU", $strtime);

	if ( $pos ||  $isAm || $isPm )
	{
		$use12=1;
		$pm=0;

		if ( !$isAm && $isPm )
			$pm = 1;
		elseif ( $isAm && !$isPm )
			$pm = 0;
		elseif ( !$isAm && !$isPm ) 
			$use12 = 0;
	}

	$str = $strtime;
	$numbers = parsenumbers($str);
	while ( count($numbers) < 3 )
		$numbers[] = 0;
	$h = $numbers[0];
	$m = $numbers[1];
	$s = $numbers[2];
	//	list($h,$m,$s)=$numbers;
	if( $use12 && $h )
	{
		if( !$pm && $h == 12 )
			$h = 0;
		if( $pm && $h < 12 )
			$h += 12;
	}

	return mysprintf("%02d:%02d:%02d",array($h,$m,$s));
}


/**
 * @intellisense
 */
function localdatetime2db($strdatetime,$format="")
{
	global $locale_info;
	$locale_idate=$locale_info["LOCALE_IDATE"];
	if($format=="dmy")
		$locale_idate=1;
	if($format=="mdy")
		$locale_idate=0;
	if($format=="ymd")
		$locale_idate=2;

	//	check if we use 12hours clock
	$use12 = 0;
	$pos = strpos($locale_info["LOCALE_STIMEFORMAT"],"h".$locale_info["LOCALE_STIME"]);
	$amstr = $locale_info["LOCALE_S1159"];
	$pmstr = $locale_info["LOCALE_S2359"];

	$amRegular = "a\.?m\.?";
	$pmRegular = "p\.?m\.?";

	if( strlen($amstr) )
		$amRegular .= "|".$amstr;
	if ( strlen($pmstr) )
		$pmRegular .= "|".$pmstr;

	$isAm = preg_match("/(" . $amRegular . ")/isU", $strdatetime);
	$isPm = preg_match("/(" . $pmRegular . ")/isU", $strdatetime);

	if ( $pos ||  $isAm || $isPm )
	{
		$use12=1;
		$pm=0;

		if ( !$isAm && $isPm )
			$pm = 1;
		elseif ( $isAm && !$isPm )
			$pm = 0;
		elseif ( !$isAm && !$isPm ) 
			$use12 = 0;
	}

	$numbers = parsenumbers($strdatetime);
	if( !$numbers || count($numbers) < 2 )
		return "null";
//	add current year if not specified
	if(count($numbers)<3)
	{	
		if($locale_idate!=1)
		{
			$vMonth=$numbers[0];
			$vDay=$numbers[1];
		}
		else
		{
			$vMonth=$numbers[1];
			$vDay=$numbers[0];
		}
		$vYear=GetCurrentYear();
	}
	else
	{
		if(!$locale_idate)
		{
			$vMonth=$numbers[0];
			$vDay=$numbers[1];
			$vYear=$numbers[2];
//			list($month,$day,$year)=$numbers;
		}
		else if($locale_idate==1)
		{
			$vDay=$numbers[0];
			$vMonth=$numbers[1];
			$vYear=$numbers[2];
//			list($day,$month,$year)=$numbers;
		}
		else if($locale_idate==2)
		{
			$vYear=$numbers[0];
			$vMonth=$numbers[1];
			$vDay=$numbers[2];
//			list($year,$month,$day)=$numbers;
		}
	}		
	if(!$vMonth || !$vDay)
		return "null";
	while(count($numbers)<6)
		$numbers[]=0;
	$h=$numbers[3];
	$m=$numbers[4];
	$s=$numbers[5];
	if($use12 && $h)
	{
		if(!$pm && $h==12)
			$h=0;
		if($pm && $h<12)
			$h+=12;
	}
	if($vYear<100)
	{
		if($vYear<60)
			$vYear+=2000;
		else
			$vYear+=1900;
	}
	return mysprintf("%04d-%02d-%02d",array($vYear,$vMonth,$vDay))." ".mysprintf("%02d:%02d:%02d",array($h,$m,$s));
}




/**
 * @intellisense
 */
function parsenumbers($str)
{
	$ret=array();
	$i=0;
	$num=0;
	$pos=0;
	while($i<strlen($str))
	{
		if(is_numeric(substr($str,$i,1)) && !$num)
		{
			$num=1;
			$pos=$i;
		}
		else if(!is_numeric(substr($str,$i,1)) && $num)
		{
			$ret[]=(integer)substr($str,$pos,$i-$pos);
			$num=0;
		}
		$i++;
	}
	if($num)
		$ret[]=(integer)substr($str,$pos,$i-$pos);
	return $ret;
}

/**
 * 	returns day of week (1-7) for (monday-sunday)
 * @intellisense
 */
function getdayofweek($time)
{
//	January 1, 2004 - Thursday
//	Get the differewnce in days between January 1, 2004 and January 1 of given year
	$daydif=0;
	if($time[0]>=2004)
	{
		for($i=2004;$i<$time[0];$i++)
			if(isleapyear($i))
				$daydif+=366;
			else
				$daydif+=365;
	}
	else
		for($i=2003;$i>=$time[0];$i--)
			if(isleapyear($i))
				$daydif-=366;
			else
				$daydif-=365;
//	to given month
	$mdays=array(1=>31,2=>28,3=>31,4=>30,5=>31,6=>30,7=>31,8=>31,9=>30,10=>31,11=>30,12=>31);
	if(isleapyear($time[0]))
		$mdays[2]=29;
	for($i=1;$i<$time[1] && $i<13;$i++)
		$daydif+=$mdays[$i];
//	to given day
	$daydif+=$time[2]-1;
	if($daydif>0)
		return (4+$daydif-1)%7 + 1;
	return 7-(3-$daydif)%7;
}

/**
 * 	returns abstract week number, 0 - January 1, 2004 (Thursday)
 * @param {array} time - array(year, month, day, hour, minute, second)
 * @param {int} firstdayofweek - the first day of the week. 0 - monday, 6 - sunday, -1 - use system settings
 * @intellisense
 */
function getweeknumber($time, $firstdayofweek = -1 )
{
//	January 1, 2004 - Thursday
	global $locale_info;
	if( $firstdayofweek < 0 )
	{
		$firstdayofweek = $locale_info["LOCALE_IFIRSTDAYOFWEEK"];
	}
	
	if($firstdayofweek<=3)
		$startweekday=3-$firstdayofweek;
	else
		$startweekday=10-$firstdayofweek;
//	Get the differewnce in days between January 1, 2004 and January 1 of given year
	$daydif=0;
	if($time[0]>=2004)
	{
		for($i=2004;$i<$time[0];$i++)
			if(isleapyear($i))
				$daydif+=366;
			else
				$daydif+=365;
	}
	else
		for($i=2003;$i>=$time[0];$i--)
			if(isleapyear($i))
				$daydif-=366;
			else
				$daydif-=365;
//	to given month
	$mdays=array(1=>31,2=>28,3=>31,4=>30,5=>31,6=>30,7=>31,8=>31,9=>30,10=>31,11=>30,12=>31);
	if(isleapyear($time[0]))
		$mdays[2]=29;
	for($i=1;$i<$time[1];$i++)
		$daydif+=$mdays[$i];
//	to given day
	$daydif+=$time[2]-1;
	
	$daydif+=$startweekday;
	$daydif = $daydif-($daydif%7);
	return $daydif/7;
}

/**
 * @intellisense
 */
function adddays_old($tm,$days)
{
	$mdays=array(1=>31,2=>28,3=>31,4=>30,5=>31,6=>30,7=>31,8=>31,9=>30,10=>31,11=>30,12=>31);
	$time=$tm;
	if(isleapyear($time[0]))
		$mdays[2]=29;

	if($days>0)
		for($i=0;$i<$days;$i++)
		{
			if($time[2]<$mdays[$time[1]])
				$time[2]++;
			else
			{
				$time[2]=1;
				$time[1]++;
				if($time[1]>12)
				{
					$time[1]=1;
					$time[0]++;
					if(isleapyear($time[0]))
						$mdays[2]=29;
					else
						$mdays[2]=28;
				}
			}
		}
	else
		for($i=0;$i<-$days;$i++)
		{
			if($time[2]>1)
				$time[2]--;
			else
			{
				$time[1]--;
				if($time[1]<1)
				{
					$time[0]--;
					if(isleapyear($time[0]))
						$mdays[2]=29;
					else
						$mdays[2]=28;
					$time[1]=12;
				}
				$time[2]=$mdays[$time[1]];
			}
		}
	return $time;
}



/**
 *	Get nubmer of days in a month
 * @param {int} vYear 
 * @param {int} month - values 0-12, 0 - December, 1 - January, ..., 12 - December again
 * @intellisense
 */
function getMonthDays($vYear, $vMonth)
{
	global $_gmdays;
	if( $vMonth != 2 )
		return $_gmdays[ $vMonth ];
	return isleapyear( $vYear ) ? 29 : 28;
}

function adddays($tm,$days)
{
	$time = $tm;

	if($days>0)
	{
		$time[2] += $days;
		while( $time[2] > getMonthDays($time[0], $time[1]) )
		{
			$time[2] -= getMonthDays($time[0], $time[1]);
			$time[1]++;
			if( $time[1] == 13 )
			{
				$time[1] = 1;
				$time[0]++; 
			}
		}
	}
	else
	{
		$time[2] += $days;
		while( $time[2] < 1 )
		{
			//	getMonthDays accepts 0 as a month ( December )!
			$time[2] += getMonthDays($time[0], $time[1] - 1 );
			$time[1]--;
			if( $time[1] == 0 )
			{
				$time[1] = 12;
				$time[0]--; 
			}
		}
	}
	return $time;
}

/**
 *	Add or subtract months from date
 * 	@intellisense
 */
function addmonths( $tm, $months )
{
	$mdays=array(1=>31,2=>28,3=>31,4=>30,5=>31,6=>30,7=>31,8=>31,9=>30,10=>31,11=>30,12=>31);
	$time=$tm;
	
	$time[0] += (int)($months / 12);
	$time[1] += $months % 12;
	if( $time[1] > 12 )
	{
		$time[1] -= 12;
		$time[0]++;
	}
	else if( $time[1] < 1 )
	{
		$time[1] += 12;
		$time[0]--;
	}
	
	if( isleapyear( $time[0] ) )
		$mdays[ 2 ] = 29;

	if( $time[2] > $mdays[ $time[1] ] )
	{
		$time[2] = $mdays[ $time[1] ];
	}
	return $time;
}

/**
 *	Add or subtract years from date
 * 	@intellisense
 */
function addyears( $tm, $years )
{
	$time = $tm;
	$time[0] += $years;
	// February 29 fix
	if( $time[2] == 29 && $time[1] == 2 && !isleapyear( $time[0] ) )
		$time[2] = 28;
	return $time;
}



/**
 * Compare dates
 * @param {array} time1 - array(year, month, day, hour, minute, second)
 * @param {array} time2 - array(year, month, day, hour, minute, second)
 * @return {int} - returns 0 if time1=time2, -1 if time1<time2, 1 if time1>time2
 * @intellisense
 */
function comparedates($time1, $time2)
{
	for( $i=0; $i<6; ++$i )
	{
		if( $time1[$i] < $time2[$i] )
			return -1;
		if( $time1[$i] > $time2[$i] )
			return 1;
	}
	return 0;
}

/**
 * Combine dates
 * @param {array} datePart - array(year, month, day, 0,0,0)
 * @param {array} timePart - array(0, 0, 0, hour, minute, second)
 * @return {array} - combined date + time
 * @intellisense
 */
function combinedates($datePart, $timePart)
{
	return array($datePart[0], $datePart[1], $datePart[2], $timePart[3], $timePart[4], $timePart[5]);
}




/**
* Get the date-time array with particular number of hours added
* @param {number} hours
* @param {array} dateArray		Date-time array
* @return {array}
*/
function addHours($dateArray, $hours)
{
	$days = floor($hours / 24);
	if($days) 
	{
		$dateArray = adddays($dateArray, $days);
		$hours = $hours - ($days * 24);
	}
	
	if( $dateArray[3] + $hours < 24 )
		$dateArray[3] = $dateArray[3] + $hours;
	else 
	{
		$dateArray = adddays($dateArray, 1);
		$dateArray[3] = $dateArray[3] + $hours - 24;
	}
	return $dateArray;
}

/**
* Get the date-time array with particular number of minutes added
* @param {number} minutes
* @param {array} dateArray		Date-time array
* @return {array}
*/
function addMinutes($dateArray, $minutes)
{
	$hours = floor($minutes / 60);
	if($hours) 
	{
		$dateArray = addHours($dateArray, $hours);
		$minutes = $minutes - ($hours * 60);
	}

	if( ($dateArray[4] + $minutes) < 60 )
		$dateArray[4] = $dateArray[4] + $minutes;
	else 
	{
		$dateArray = addHours($dateArray, 1);
		$dateArray[4] = $dateArray[4] + $minutes - 60;
	}
	
	return $dateArray;
}

/**
* Get the date-time array with particular number of seconds added
* @param {number} seconds
* @param {array} dateArray		Date-time array
* @return {array}
*/
function addSeconds($dateArray, $seconds)
{
	$minutes = floor($seconds / 60);
	if($minutes) 
	{
		$dateArray = addMinutes($dateArray, $minutes);
		$seconds = $seconds - ($minutes * 60);
	}
	
	if( ($dateArray[5] + $seconds) < 60 )
		$dateArray[5] = $dateArray[5] + $seconds;
	else 
	{
		$dateArray = addMinutes($dateArray, 1);
		$dateArray[5] = $dateArray[5] + $seconds - 60;
	}
	
	return $dateArray;
}


/**
 * @intellisense
 * @param {array} time - array(year, month, day, hour, minute, second)
 * @param {int} firstdayofweek - the first day of the week. 0 - monday, 6 - sunday, -1 - use system settings
 */
 function getweekstart( $time, $firstdayofweek = -1 )
{
	global $locale_info;
	if( $firstdayofweek < 0 )
	{
		$firstdayofweek = $locale_info["LOCALE_IFIRSTDAYOFWEEK"];
	}
	$wday = getdayofweek($time);
	if( $wday >= $firstdayofweek + 1 )
		$diff = $wday - $firstdayofweek - 1;
	else
		$diff = $wday + 7 - $firstdayofweek - 1;
	return adddays( $time, -$diff );
}


/**
 * @intellisense
 */
function isleapyear($y)
{
	//	is divided by 4 and either divided by 400 or not divided by 100
	return ( $y % 4 == 0 ) && ( ( $y % 400 == 0 ) || ( $y % 100 != 0 ) );
}

/**
 * @intellisense
 */
function GetLongDateFormat()
{
	global $locale_info;
	$format=$locale_info["LOCALE_SLONGDATE"];

//	dd,d - day
//	MMMM, MMM, MM, M - month
//	yyyy, yy, y - year
//	dddd, ddd - day of week, ignore it
//	'sdsd' - quoted string, ignore it.
	$dstart=-1;
	$inquote=false;
	$dindex=-1;
	$mindex=-1;
	$yindex=-1;
	for($i=0;true;$i++)
	{
		$c="";
		if($i<strlen($format))
			$c=substr($format,$i,1);
		if($dstart>=0 && $c!='d')
		{
			if($i-$dstart<=2)
				$dindex=$dstart;
			$dstart=-1;
		}
		if(!$inquote && $c=='\'')
			$inquote=true;
		else if($c=='\'')
			$inquote=false;
		else if(!$inquote)
		{
			if($dindex<0 && $c=='d')
			{
				if($dstart<0)
					$dstart=$i;
			}
			if($yindex<0 && $c=='y')
				$yindex=$i;
			if($mindex<0 && $c=='M')
				$mindex=$i;
		}
		if($i>=strlen($format))
			break;
	}
	if($dindex<0 || $mindex<0 || $yindex<0)
		return -1;
	if($dindex<$mindex && $mindex<$yindex)	// DMY 
		return 1;
	if($mindex<$dindex && $dindex<$yindex)	// MDY
		return 0;
	if($yindex<$mindex && $mindex<$dindex)	// YMD
		return 2;
	if($yindex<$dindex && $dindex<$mindex)	// YDM
		return 1;
	return -1;
}

/**
* Get the time array with particular number of seconds added
* @param {number} seconds
* @param {array} timeArr		Time array
* @return {array}
*/
function addSecondsToTime($timeArr, $seconds)
{
	$minutes = floor($seconds / 60);
	if($minutes) 
	{
		$timeArr = addMinutesToTime($timeArr, $minutes);
		$seconds = $seconds - ($minutes * 60);
	}
	
	if( ($timeArr[3] + $seconds) < 60 )
		$timeArr[3] = $timeArr[3] + $seconds;
	else 
	{
		$timeArr = addMinutesToTime($timeArr, 1);
		$timeArr[3] = $timeArr[3] + $seconds - 60;
	}
	
	return $timeArr;
}

/**
* Get the time array with particular number of minutes added
* @param {number} seconds
* @param {array} timeArr		Time array
* @return {array}
*/
function addMinutesToTime($timeArr, $minutes)
{
	$hours = floor($minutes / 60);
	if($hours) 
	{
		$timeArr[0] = $timeArr[0] + $hours;
		$minutes = $minutes - ($hours * 60);
	}

	if( ($timeArr[1] + $minutes) < 60 )
		$timeArr[1] = $timeArr[1] + $minutes;
	else 
	{
		$timeArr[0] = $timeArr[0] + 1;
		$timeArr[1] = $timeArr[1] + $minutes - 60;
	}
	
	return $timeArr;
}

/**
* Get the last month's day number
* @param {number} year
* @param {number} month
* @return {number}
*/
function getLastMonthDayNumber($year, $vMonth)
{
	if( $vMonth == 2 && isleapyear($year) )
		return 29;
		
	$mdays = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
	return $mdays[$vMonth - 1];
}

function date2db( $time )
{
	return mysprintf( "%04d-%02d-%02d", $time );
}

function getDatePart( $time )
{
	return array( $time[0], $time[1], $time[2], 0, 0, 0);
}

function getTimePart( $time )
{
	return array( 0, 0, 0, $time[3], $time[4], $time[5]);
}

/**
* Get the week day's name 
* @param {number} numDay
* @param {string} format "dddd" - Monday, "ddd" - Mon 
* @return {string}
*/
function getDayNameByNumber ($numDay, $format){
	global $locale_info;
	if ($format == "dddd") {
		return $locale_info["LOCALE_SDAYNAME".$numDay];
	}
	else if ($format == "ddd"){
		return $locale_info["LOCALE_SABBREVDAYNAME".$numDay];
	}
	return $numDay;
}

/**
* Get the month's name 
* @param {number} numMon
* @param {string} format "MMMM" - December, "MMM" - Dec 
* @return {string}
*/
function getMonthNameByNumber ($numMon, $format){
	global $locale_info;
	if(array_key_exists("LOCALE_SMONTHNAME".$numMon,$locale_info))
	{
		if ($format == "MMMM") {
			return $locale_info["LOCALE_SMONTHNAME".$numMon];
		}
		else if ($format == "MMM"){
			return $locale_info["LOCALE_SABBREVMONTHNAME".$numMon];
		}
		
	}
		
	return $numMon;
}

/**
* Check if the argument is a date in DB format
* @param {string} alleged date
* @return {boolean}
*/
function dateInDbFormat($str) 
{
	$dbdate = db2time($str);
	if( count( $dbdate ) < 3 || count( $dbdate ) > 6 )
		return false;
	if( $dbdate[1] < 1 || $dbdate[1] > 12 || $dbdate[2] < 1 || $dbdate[2] > 31 )
		return false;
	if( count( $dbdate ) >= 4 ) 
	{
		if( $dbdate[3] < 0 || $dbdate[3] > 23 )
			return false;
	}
	if( count( $dbdate ) >= 5 ) 
	{
		if( $dbdate[4] < 0 || $dbdate[4] > 59 )
			return false;
	}
	if( count( $dbdate ) == 6 ) 
	{
		if( $dbdate[5] < 0 || $dbdate[5] > 59 )
			return false;
	}
	return true;
}

?>