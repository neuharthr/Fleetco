<?php
class SearchClauseBase implements Serializable 
{
	public function serialize()
	{
		// PHP7 can't serialize connection object which is linked through one of the objects
		$vars = get_object_vars( $this );
		unset( $vars["cipherer"] );
		unset( $vars["pSetSearch"] );
		return serialize( $vars );
	}

	public function unserialize($serialized)
    {
        // the Unserialize
		$unserialized = unserialize($serialized);
     
        if(is_array($unserialized) === true) {
            foreach($unserialized as $property => $value) {
//               $estr = "\$this->" . $property . " = \$value;";
//				exec( $estr );
				$this->{$property} = $value;
            }
        }
    }
}
?>