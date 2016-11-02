<?php
class ViewCheckboxField extends ViewControl
{
	public function showDBValue(&$data, $keylink)
	{		
		$result = "<img src=\"";
		$imgSrc = "images/check_";
		
		if( $this->getHostPageDbType() == nDATABASE_PostgreSQL )
			$trueCondition = $data[$this->field] === "t" || $data[$this->field] != 0 && $data[$this->field] != "";
		else
			$trueCondition = $data[$this->field] != 0 && $data[$this->field] != "";
		
		$imgSrc.= $trueCondition ? "yes" : "no";

		$result.= GetRootPathForResources($imgSrc.".gif")."\" border=0";
		if(isEnableSection508())
			$result .= " alt=\" \"";
		$result .=  ">";
		
		return $result;
	}
	
	/**
	 * Get the host page's db connection's type
	 * @return Number
	 */
	protected function getHostPageDbType()
	{
		global $cman;
		return $cman->byTable( $this->container->tName )->dbType;
	}

	/**
	 * Get the field's content that will be exported
	 * @prarm &Array data
	 * @prarm String keylink
	 * @return String
	 */
	public function getExportValue(&$data, $keylink = "")
	{
		return nl2br( $data[ $this->field ] );
	}
}
?>