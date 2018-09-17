<?php  

/**
 * @author Andressa Felipe Rodrigues <andressaf.rodrigues@hotmail.com>
 */

require_once("../dao/typeDAO.php");

class TypeController
{
	private $typeDAO;

	public function __construct()
	{
		$this->typeDAO = new TypeDAO();
	}

    public function listTypes()
    {
        return $this->typeDAO->listType();
    }
}

?>