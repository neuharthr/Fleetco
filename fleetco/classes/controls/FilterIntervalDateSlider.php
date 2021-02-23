<?php
class FilterIntervalDateSlider extends FilterIntervalSlider
{
	/**
	 * The slider's step type
	 */
	protected $stepType;
	
	/**
	 * The max knob ds date/ date-time formatted value
	 * @type String
	 */
	protected $maxKnobFormatValue;
	
	/**
	 * The min knob ds date/ date-time formatted value
	 * @type String
	 */	
	protected $minKnobFormatValue;
	
	/**
	 * The array representation of the min slider's value
	 * or step-rounded slider's value for the sliders with 
	 * 'minutes' or 'seconds' type
	 * @type Array
	 */
	protected $minDateArray;
	
	/**
	 * The array representation of the max slider's value
	 * @type Array
	 */
	protected $maxDateArray;	
	
	/**
	 * The prop containing (for the 'months' type sliders 
	 * only) the step-rounded min date's month number
	 * @type Number
	 */
	protected $adjMinDateMonth; 
	
	/**
	 * The prop containing (for the 'months' type sliders 
	 * only) the step-rounded max date's month number
	 * @type Number
	 */
	protected $adjMaxDateMonth; 
	
	/**
	 * The array of month names
	 * @type Array
	 */
	protected $months = array();
	
	
	public function __construct($fName, $pageObject, $id, $viewControls)
	{
		parent::__construct($fName, $pageObject, $id, $viewControls);

		$this->stepType = $this->pSet->getFilterStepType($fName);
		
		if($this->stepType == FSST_MONTHS)
		{
			$this->months = array(	
				mlang_message("MONTH_JAN"),
				mlang_message("MONTH_FEB"),
				mlang_message("MONTH_MAR"),
				mlang_message("MONTH_APR"),
				mlang_message("MONTH_MAY"),
				mlang_message("MONTH_JUN"),
				mlang_message("MONTH_JUL"),
				mlang_message("MONTH_AUG"),
				mlang_message("MONTH_SEP"),
				mlang_message("MONTH_OCT"),
				mlang_message("MONTH_NOV"),
				mlang_message("MONTH_DEC") );
		}
	}

	/**
	 * Assign the control's knobs properties
	 */
	protected function assignKnobsValues() 
	{
		$filterValues = $this->filteredFields[ $this->fName ]['values'];	
		$value1 = prepare_for_db($this->fName, $filterValues[0], "");
		$dateArray = $this->getDateTimeArray($value);
				
		if($this->knobsType == FS_MIN_ONLY) 
		{
			$this->minKnobValue = $value1;
			$this->minKnobFormatValue = $filterValues[0];
			return;	
		}
		
		if($this->knobsType == FS_MAX_ONLY) 
		{		
			$this->maxKnobValue = $value1;
			$this->maxKnobFormatValue = $filterValues[0];
			return;
		}
		
		$this->minKnobValue = $value1;
		$this->maxKnobValue = prepare_for_db($this->fName, $filterValues[1], "");
		
		$this->minKnobFormatValue = $filterValues[0];
		$this->maxKnobFormatValue = $filterValues[1];
	}
	
	/**
	 * Get the array representation of the db-formatted date string:
	 * array(year, month, day, hour, minute, second)
	 * @param String value
	 * @return Array
	 */
	protected function getDateTimeArray($value, $forCaption = false)
	{
		return db2time($value);
	}
	
	/**
	 * Get the html markup for the slider knobs' captions
	 * @return String
	 */
	protected function getCaptionSpansHTML() 
	{
		$inlineStyelPrefix = $inlineStyelPostfix = ' style="display: none;"';
		$inlineStyelMin = $inlineStyelMax = '';
	
		if( $this->stepType != FSST_YEARS || $this->stepType != FSST_DAYS )
		{
			$minValueArr = $this->minDateArray;
			if( $this->getValueInSeconds($this->minKnobValue) >= $this->getValueInSeconds($this->minValue) )
				$minValueArr = $this->getDateTimeArray($this->minKnobValue);
				
			$maxValueArr = $this->maxDateArray;
			if($this->getValueInSeconds($this->maxKnobValue) <= $this->getValueInSeconds($this->maxValue))
				$maxValueArr = $this->getDateTimeArray($this->maxKnobValue);
	
			if( $this->stepType == FSST_MONTHS ) 
			{
				$month = $minValueArr[1];
				if( !$this->filtered || $this->isMonthNumberToAdjust(true, $minValueArr[0], $minValueArr[1]) )
					$month = $this->getAdjustedMonthNumber($minValueArr[1], true);

				$prefix = $this->getMonthName($month);
				
				if( $minValueArr[0] == $maxValueArr[0] )
				{
					$inlineStyelMin = ' style="display: none;"';
					$inlineStyelPrefix = '';
				}
			} 
			else if( $this->stepType == FSST_HOURS || $this->stepType == FSST_MINUTES || $this->stepType == FSST_SECONDS ) 
			{
				global $locale_info;
				$timeFormatString = $locale_info["LOCALE_STIMEFORMAT"];
				if($this->stepType != FSST_SECONDS)
					$timeFormatString = str_replace( $locale_info["LOCALE_STIME"]."ss", "", $timeFormatString );
					
				$postfix = format_datetime_custom($maxValueArr, $timeFormatString);
				if( $minValueArr[0] == $maxValueArr[0] && $minValueArr[1] == $maxValueArr[1] && $minValueArr[2] == $maxValueArr[2] )
				{
					$inlineStyelMax = ' style="display: none;"';
					$inlineStyelPostfix = '';
				}
			}
		}
		
		$minSpan = '<span class="slider-min"'.$inlineStyelMin.'>'.$this->getMinSpanValue().'</span>';
		$maxSpan = '<span class="slider-max"'.$inlineStyelMax.'>'.$this->getMaxSpanValue().'</span>';
		$captionSpans = $minSpan."&nbsp;-&nbsp".$maxSpan;
		
		$prefixSpan = '<span class="slider-caption-prefix"'.$inlineStyelPrefix.'>'.$prefix.'</span>';
		$postfixSpan = '<span class="slider-caption-postfix"'.$inlineStyelPostfix.'>'.$postfix.'</span>';
		
		$captionSpans = $prefixSpan . $captionSpans . $postfixSpan;
		
		return $captionSpans;
	}	
	
	/**
	 * Get the value converted into seconds
	 * @param String value
	 * @return Number
	 */	
	protected function getValueInSeconds($value)
	{
		return strtotime($value);
	}
		
	/**
	 * Get the caption fot the min slider's knob
	 * @return String
	 */
	protected function getMinSpanValue() 
	{
		$minSpanValue = $this->minKnobValue;
		//process the case when other where conditions make 
		//the real minKnobValue going out of the slider's bounds	
		if( $this->getValueInSeconds($minSpanValue) < $this->getValueInSeconds($this->minValue) )
			$minSpanValue = $this->minValue;
		
		$minSpanValue = $this->getRoundedDateCaption($minSpanValue, true);
		
		return $minSpanValue;
	}
	
	/**
	 * Get the caption fot the max slider's knob
	 * @return String
	 */
	protected function getMaxSpanValue() 
	{
		$maxSpanValue = $this->maxKnobValue;
		//process the case when other where conditions make
		//the real maxKnobValue going out of the slider's bounds
		if($this->getValueInSeconds($maxSpanValue) > $this->getValueInSeconds($this->maxValue))
			$maxSpanValue = $this->maxValue;
			
		$maxSpanValue = $this->getRoundedDateCaption($maxSpanValue, false);	
					
		return $maxSpanValue;		
	}

	/**
	 * Get the caption for the rounded date corresponding to
	 * the db-formatted date string passed
	 * @param String value
	 * @param Boolean isLower
	 * @return String 
	 */	
	protected function getRoundedDateCaption($value, $isLower = false)
	{
		//array(year,month,day,hour,minute,second)	
		$dateArray = $this->getDateTimeArray($value, true);
		switch($this->stepType)
		{
			case FSST_SECONDS:
				return $this->getSecondsCaption($dateArray);		
			case FSST_MINUTES:
				return $this->getMinutesCaption($dateArray);	
			case FSST_HOURS:
				return $this->getHoursCaption($dateArray, $isLower);		
			case FSST_DAYS:
				return format_shortdate($dateArray);
			case FSST_MONTHS:
				return $this->getMonthCaption($dateArray, $isLower);		
			case FSST_YEARS:
				return $dateArray[0];
			default: 
				return $value;
		}	
	}
	
	/**
	 * Get the full caption value for the slider with the 'seconds' step type
	 * @param Array dateArray
	 * @return String	
	 */	
	protected function getSecondsCaption($dateArray)
	{
		return str_format_datetime($dateArray);
	}
	
	/**
	 * Get the full caption value for the slider with the 'minutes' step type
	 * @param Array dateArray
	 * @return String
	 */		
	protected function getMinutesCaption($dateArray) 
	{
		global $locale_info;
		$dateArray[5] = 0;
		
		$timeFormatString = str_replace( $locale_info["LOCALE_STIME"]."ss", "", $locale_info["LOCALE_STIMEFORMAT"]);
		return format_datetime_custom($dateArray, $locale_info["LOCALE_SSHORTDATE"]." ".$timeFormatString);
	}
	
	/**
	 * Get the full caption value for the slider with the 'hours' step type
	 * @param Array dateArray
	 * @param Boolean isLower
	 * @return String
	 */
	protected function getHoursCaption($dateArray, $isLower)
	{
		global $locale_info;
		
		$hours = $this->getAdjustedHoursValue($dateArray[3], $dateArray[4], $isLower);
		$dateArray[3] = $dateArray[4] = $dateArray[5] = 0;
		$dateArray = addHours($dateArray, $hours);
		
		$timeFormatString = str_replace( $locale_info["LOCALE_STIME"]."ss", "", $locale_info["LOCALE_STIMEFORMAT"]);
			
		return format_datetime_custom($dateArray, $locale_info["LOCALE_SSHORTDATE"]." ".$timeFormatString);
	}
	
	/**
	 * Get the srep-rounded hours value
	 * @param Number hours
	 * @param Number minutes
	 * @param Boolean isLower
	 * @return Number
	 */		
	protected function getAdjustedHoursValue($hours, $minutes, $isLower) 
	{
		$step = $this->stepValue * 60;
		$minutes = $hours * 60 + $minutes;
		
		if($isLower)
			return floor( $minutes / $step ) * $this->stepValue;
	
		return ceil( $minutes / $step ) * $this->stepValue;		
	}
	
	/**
	 * Get the full caption value for the slider with the 'months' step type
	 * @param Array dateArray
	 * @param Boolean isLower
	 * @return String
	 */		
	protected function getMonthCaption($dateArray, $isLower)
	{
		$year = $dateArray[0];
		$month = $dateArray[1];
		
		if( !$this->filtered || $this->isMonthNumberToAdjust($isLower, $year, $month) )
			$month = $this->getAdjustedMonthNumber($month, $isLower); 
		
		return $this->getMonthName($month)." ".$year;
	}
	
	/**
	 * Check if it's necessary to adjust the month value
	 * It returns true for the limit knobs year, month values	 
	 * @param Boolean isLower
	 * @param Number year
	 * @param Number month
	 * @return Boolean 
	 */
	protected function isMonthNumberToAdjust( $isLower, $year, $month )
	{
		switch( $this->knobsType )
		{
			case FS_MIN_ONLY:
				return !$isLower;
			
			case FS_MAX_ONLY:
				return $isLower;
			
			case FS_BOTH:
				if( $isLower && $year == $this->minDateArray[0] && abs($month - $this->adjMinDateMonth) < $this->stepValue 
					|| !$isLower && $year == $this->maxDateArray[0] && abs($month - $this->adjMaxDateMonth) < $this->stepValue )
				{
					return true;
				}
				return false;
				
			default: 
				return false;	
		}
	}
	
	/**
	 * Get the month's name by its number
	 * @param Number month
	 * @return String
	 */		
	protected function getMonthName($month)
	{
		return $this->months[ $month - 1 ];
	}
	
	/**
	 * Get the srep-rounded month value
	 * @param Number month
	 * @param Boolean isLower
	 * @return Number
	 */			
	protected function getAdjustedMonthNumber($month, $isLower)
	{				
		$step = $this->stepValue;
		if($step != 1)
		{
			if($isLower)
				$month = floor( ( $month - 1 ) / $step ) * $step + 1; 
			else
				$month = ceil( $month / $step ) * $step ; 
		}		
		return $month;
	}

	/**
	 * Get date-time formatted string
	 * @param Array dateArray
	 * @return String
	 */
	protected function getDateTimeString($dateArray)
	{
		global $locale_info;
		//to avoid locale-specific formatting
		$formatString = $locale_info["LOCALE_SSHORTDATE"]." HH:mm:ss";	
		return format_datetime_custom($dateArray, $formatString);
	}
	
	/**
	 * Get the step-rounded date/date-time formatted string
	 * @param String value
	 * @param Boolean isLower
	 * @return String
	 */	
	protected function getRoundedDate($value, $isLower, $isKnob = false)
	{
		//array(year,month,day,hour,minute,second)
		$dateArray = $this->getDateTimeArray($value);
		
		switch($this->stepType)
		{
			case FSST_SECONDS:
				if($isKnob)
					return $this->getDateTimeString($dateArray);
					
				$prepDateArray = $this->minDateArray;	
				
				$diffSec = $this->getDifferenceInSecWithMin($value, $isLower);
				$prepDateArray = addSeconds($prepDateArray, $diffSec);

				return $this->getDateTimeString($prepDateArray);
			
			case FSST_MINUTES:
				if($isKnob)
					return $this->getDateTimeString($dateArray);
	
				$prepDateArray = $this->minDateArray;
					
				$diffSec = $this->getDifferenceInSecWithMin($value, $isLower);
				$minutes = floor( $diffSec / 60);
				$prepDateArray = addMinutes($prepDateArray, $minutes);

				return $this->getDateTimeString($prepDateArray);
			
			case FSST_HOURS:
				$hours = $this->getAdjustedHoursValue( $dateArray[3], $dateArray[4], $isLower );
				$dateArray[3] = $dateArray[4] = $dateArray[5] = 0;			
				$dateArray = addHours($dateArray, $hours);
				
				return $this->getDateTimeString($dateArray);
			
			case FSST_DAYS:
				return format_shortdate($dateArray);

			case FSST_MONTHS:
				if($isKnob)
					return format_shortdate($dateArray);
				
				$dateArray[1] = $this->getAdjustedMonthNumber( $dateArray[1], $isLower );
				$dateArray[2] = $isLower? 1 : getLastMonthDayNumber( $dateArray[0], $dateArray[1] );
				$dateArray[3] = $dateArray[4] = $dateArray[5] = 0;
				
				return format_shortdate($dateArray);
			
			case FSST_YEARS:
				$dateArray[3] = $dateArray[4] = $dateArray[5] = 0;
				$dateArray[1] = $isLower ? 1 : 12;
				$dateArray[2] = $isLower ? 1 : 31;		
				
				return format_shortdate($dateArray);	

			default: 
				return $value;
		}	
	}

	/**
	 * Get the seconds between the step-rounded value and the min slider's value
	 * @param String value		Db time-formatted string
	 * @param Boolean isLower
	 * @return Number
	 */	
	protected function getDifferenceInSecWithMin($value, $isLower)
	{
		$step = $this->getStepValue();
		$minSec = $this->getValueInSeconds($this->minValue);
		$valueSec = $this->getValueInSeconds($value);
		
		$min = floor( $minSec / $step ) * $step;
		if($isLower)
			$rvalue = floor( $valueSec / $step) * $step;
		else
			$rvalue = ceil( $valueSec / $step ) * $step;
			
		return $rvalue - $min;	
	}
	
	/**
	 * Get the slider step value
	 * basing on the step type
	 * @return Number 
	 */	
	protected function getStepValue() 
	{
		switch($this->stepType)
		{			
			case FSST_MINUTES:
				return 60 * $this->stepValue;
				
			case FSST_HOURS:
				return 3600 * $this->stepValue;
				
			case FSST_DAYS:
				return 86400 * $this->stepValue;
				
			default: 
				return $this->stepValue;
		}
	}
	
	/**
	 * Check if there are database values for the filter's field
	 * that are differs from each other for more than a step value
	 * @param Array data
	 * @return Boolean
	 */
	protected function fieldHasNoRange($data)
	{
		if (is_null( $data['sliderMin'] ) && is_null( $data['sliderMax'] ) || $data['sliderMax'] == $data['sliderMin']) 
			return true;
			
		$step = $this->getStepValue();	
		if($this->stepType == FSST_MONTHS || $this->stepType == FSST_YEARS)
		{
			$dateArrayMin = db2time( $data['sliderMin'] );	
			$dateArrayMax = db2time( $data['sliderMax'] );
			
			if($this->stepType == FSST_MONTHS && $dateArrayMax[0] == $dateArrayMin[0] && ($dateArrayMax[1] - $dateArrayMin[1]) < $step )
				return true;
			
			if($this->stepType == FSST_YEARS && ($dateArrayMax[0] - $dateArrayMin[0]) < $step)
				return true;
		} 
		else 
		{
			if( (strtotime( $data['sliderMax'] ) - strtotime( $data['sliderMin'] )) < $step )
				return true;
		}
		return false;
	}	
	
	/**
	 * Get the html markup representing the control on the page
	 * @param Array data
	 * @param Array parentFiltersData (optional)
	 * @return String
	 */
	protected function buildControl( $data, $parentFiltersData = array() )
	{
		$this->minValue = $data['sliderMin'];
		$this->maxValue = $data['sliderMax'];
		
		$timeZone = date_default_timezone_get(); 
		date_default_timezone_set(UTC);
		
		$this->minDateArray = $this->getDateTimeArray($this->minValue);	
		$this->maxDateArray = $this->getDateTimeArray($this->maxValue);	
		if($this->stepType == FSST_MINUTES)
			$this->minDateArray = $this->getMinuteAdjustedMinValue();
		else if($this->stepType == FSST_SECONDS)
			$this->minDateArray = $this->getSecAdjustedMinValue();
			
		if($this->stepType == FSST_MONTHS)
		{
			$this->adjMinDateMonth = $this->getAdjustedMonthNumber($this->minDateArray[1], true); 	
			$this->adjMaxDateMonth = $this->getAdjustedMonthNumber($this->maxDateArray[1], false); 	
		}
		
		//assign the knobs values
		if( !$this->filtered )
		{
			$this->minKnobValue = $data['sliderMin'];
			$this->maxKnobValue = $data['sliderMax'];
		} 
		else 
		{
			if($this->knobsType == FS_MAX_ONLY)
				$this->minKnobValue = $data['sliderMin'];	
				
			if($this->knobsType == FS_MIN_ONLY)
				$this->maxKnobValue = $data['sliderMax'];	
		}
		
		date_default_timezone_set($timeZone); 
		return $this->getSliderHTML();
	}
	
	/**
	 * Get the step-rounded min slider value's array representation
	 * for the sliders with 'seconds' step type
	 * @return Array
	 */	
	function getSecAdjustedMinValue()
	{
		$prepDateArray = $this->minDateArray;
		$prepDateArray[5] = 0;	
		
		$step = $this->getStepValue();
		$minRoundSec = floor( strtotime($this->minValue) / $step ) * $step ;
		$minUpToSec = floor( strtotime($this->minValue) / 60 ) * 60;
		$diffSec = $minRoundSec - $minUpToSec;
		
		$prepDateArray = addSeconds($prepDateArray, $diffSec);
		return $prepDateArray;
	}
	
	/**
	 * Get the step-rounded min slider value's array representation
	 * for the sliders with 'minutes' step type
	 * @return Array
	 */		
	function getMinuteAdjustedMinValue()
	{
		$prepDateArray = $this->minDateArray;
		$prepDateArray[4] = $prepDateArray[5] = 0;				

		$step = $this->getStepValue();				
		$minRoundSec = floor( strtotime($this->minValue) / $step ) * $step ;
		$minUpToHour = floor( strtotime($this->minValue) / 3600 ) * 3600;
		$diffSec = $minRoundSec - $minUpToHour;

		$minutes = floor( $diffSec / 60);
		$prepDateArray = addMinutes($prepDateArray, $minutes);

		return $prepDateArray;		
	}
	
	/**
	 * Get the numeric equevalent for the date equivalent to the db date-formatted string
	 * @param String value	Db date-formatted string
	 * @param Boolean isLower
	 * @return Number
	 */
	protected function round($value, $isLower, $isKnob = false) 
	{
		switch($this->stepType)
		{
			case FSST_SECONDS: 		
			case FSST_MINUTES: 
			case FSST_HOURS: 
				return $this->getDifferenceInSecWithMin($value, $isLower);
			
			case FSST_DAYS:
				return strtotime($value) - strtotime($this->minValue);

			case FSST_MONTHS:		
				$dateArray = db2time($value);
				$year = $dateArray[0];
				$month = $dateArray[1];
				if(!$isKnob || !$this->filtered)
					$month = $this->getAdjustedMonthNumber($dateArray[1], $isLower);		

				$minYear = $this->minDateArray[0];					
					
				$monthsNumber = ($year - $minYear) * 12 + $month - $this->adjMinDateMonth;
				if(!$isLower)
					$monthsNumber = $monthsNumber + 1;
						
				return $monthsNumber;	
				
			case FSST_YEARS:
				$step = $this->getStepValue();
				$dateArray = db2time($value);
				$year = $dateArray[0];
				
				$minYear = $this->minDateArray[0];
								
				if($isLower)
					return floor( ( $year - $minYear ) / $step ) * $step ;
	
				return ceil( ( $year - $minYear ) / $step ) * $step ;
			
			default: 
				return $value;
		}
	}
	
	/**
	 * Get the real slider's date value adjusted accordit to the step type
	 * @param String value
	 * @return String
	 */	
	protected function getAdjustedRealDate($value)
	{
		$dateArray = $this->getDateTimeArray($value);	
		if($this->stepType == FSST_MINUTES)
			$dateArray[5] = 0;
		return $this->getDateTimeString($dateArray);
	}	
	
	/**
	 * Get date filter control's base ControlsMap array
	 * @return array
	 */	
	protected function getBaseContolsMapParams() 
	{
		$ctrlsMap = parent::getBaseContolsMapParams();
		$timeZone = date_default_timezone_get(); 
		date_default_timezone_set(UTC);		
		
		$ctrlsMap['stepType'] = $this->stepType;		

		if( $this->stepType == FSST_SECONDS || $this->stepType == FSST_MINUTES )
		{		
			$ctrlsMap['realMinValue'] = $this->getAdjustedRealDate($this->minValue);
			$ctrlsMap['realMaxValue'] = $this->getAdjustedRealDate($this->maxValue);	
		}
		
		//the min, max formated dates
		$ctrlsMap['minValue'] = $this->getRoundedDate($this->minValue, true);
		$ctrlsMap['maxValue'] = $this->getRoundedDate($this->maxValue, false);

		//the min, max slider values (numbers)		
		$ctrlsMap['roundedMin'] = 0;
		$ctrlsMap['roundedMax'] = $this->round( $this->maxValue, false);
				
		$ctrlsMap['roundedMinKnobValue'] = $this->round( $this->minKnobValue, true, true );
		$ctrlsMap['roundedMaxKnobValue'] = $this->round( $this->maxKnobValue, false, true );
		if($this->filtered)
		{
			$ctrlsMap['defaultValuesArray'] = $this->filteredFields[ $this->fName ]["values"];
			$ctrlsMap['minKnobValue'] = $ctrlsMap['minValue'];
			$ctrlsMap['maxKnobValue'] = $ctrlsMap['maxValue'];
			
			if($this->knobsType != FS_MAX_ONLY) 
				$ctrlsMap['minKnobValue'] = $this->getRoundedDate( $this->minKnobFormatValue, true, true );
			
			if($this->knobsType != FS_MIN_ONLY) 
				$ctrlsMap['maxKnobValue'] = $this->getRoundedDate( $this->maxKnobFormatValue, false, true );
		}	
		date_default_timezone_set($timeZone);
		
		if($this->stepType == FSST_SECONDS)
			$ctrlsMap['showSeconds'] = true;
			
		if($this->stepType == FSST_SECONDS || $this->stepType == FSST_MINUTES || $this->stepType == FSST_HOURS )
		{
			global $locale_info;
			$ctrlsMap['showTime'] = true;
			$ctrlsMap['timeDelimiter'] = $locale_info["LOCALE_STIME"];
			$ctrlsMap['timeFormat'] = $locale_info["LOCALE_STIMEFORMAT"];
			$ctrlsMap['is24hoursFormat'] = $locale_info["LOCALE_ITIME"] == "1";
			$ctrlsMap['leadingZero'] = $locale_info["LOCALE_ITLZERO"] == "1";
			if($locale_info["LOCALE_ITIME"] == "0")
				$ctrlsMap['designators'] = array("am" => $locale_info["LOCALE_S1159"], "pm" => $locale_info["LOCALE_S2359"]);
		}	
		
		return $ctrlsMap;
	}
	
	/**
	 * Add filter control's data to the ControlsMap
	 * @param Object pageObj
	 */
	public function addFilterControlToControlsMap($pageObj)
	{
		$ctrlsMap = $this->getBaseContolsMapParams();		
		$ctrlsMap['isFieldDateType'] = true;
		
		$pageObj->controlsMap["filters"]["controls"][] = $ctrlsMap;	
	}
	
	/**
	 * Get the date slider's where
	 * @return string
	 */
	static function getDateSliderWhere($fName, $pSet, $cipherer, $table, $SearchFor, $SearchFor2, $strSearchOption, $fullFieldName) 
	{
		$firstDelimPos = strpos($SearchFor, "-");
		$lastDelimPos = strrpos($SearchFor, "-");
		if($firstDelimPos === FALSE || $firstDelimPos == $lastDelimPos)
			return "";
		
		$stepType = $pSet->getFilterStepType($fName);
		$timeValueEnvolved = false;
		if( $stepType == FSST_SECONDS || $stepType == FSST_MINUTES || $stepType == FSST_HOURS ) 
			$timeValueEnvolved = true;
		
		$value1 = $cipherer->MakeDBValue($fName, $SearchFor, "", true);		
		
		switch($strSearchOption)
		{
			case "slider":	
				$firstDelimPos = strpos($SearchFor2, "-");
				$lastDelimPos = strrpos($SearchFor2, "-");
				if($firstDelimPos === FALSE || $firstDelimPos == $lastDelimPos)
					return "";
								
				$cleanvalue2 = prepare_for_db($fName, $SearchFor2, "");
				$timeArr = db2time($cleanvalue2);
				
				if(!$timeValueEnvolved)
				{
					// for dates without time, add one day	
					$timeArr = adddays($timeArr, 1);
					$value2 = $timeArr[0]."-".$timeArr[1]."-".$timeArr[2];
				}
				else
				{
					if($stepType == FSST_SECONDS)	
						$timeArr = addSeconds($timeArr, 1);
					else
						$timeArr = addMinutes($timeArr, 1);							
					
					$dateString = $timeArr[0]."-".$timeArr[1]."-".$timeArr[2];
					
					$hours = $timeArr[3] < 10 ? '0'.$timeArr[3] : $timeArr[3];	
					$minutes = $timeArr[4] < 10 ? '0'.$timeArr[4] : $timeArr[4];	
					$seconds = $timeArr[5] < 10 ? '0'.$timeArr[5] : $timeArr[5];		
					$timeString = $hours.":".$minutes.":".$seconds;
					
					$value2 = $dateString." ".$timeString;
				}

				$value2 = add_db_quotes($fName, $value2, $table);
				return $fullFieldName.">=".$value1." and ".$fullFieldName."<".$value2;	
				
			case 'moreequal':
				return $fullFieldName.">=".$value1;
				
			case 'lessequal':	
				return $fullFieldName."<=".$value1;

			default: 
				return "";
		}
	}
}
?>