<?php 

/**
 * @author Andressa Felipe Rodrigues <andressaf.rodrigues@hotmail.com>
 */
class Type
{
	
	public $idType;
	public $typeName;
	
	public function getIdType() 
	{
		return $this->idType;
	}

	public function setIdType($idType) 
	{
		$this->idType = $idType;
	}

	public function getTypeName() 
	{
		return $this->typeName;
	}

	public function setTypeName($typeName) 
	{
		$this->typeName = $typeName;
	}
}


?>