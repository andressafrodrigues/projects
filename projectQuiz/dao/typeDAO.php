<?php 

require_once("../util/serialization.php");
require_once("../model/type.php");

class TypeDAO 
{

	private $serialize;

	public function __construct() {
		$this->serialize = new Serialization();
	}

	public function listType(){
		include "../config/ConnectionSQL.php";
		$sql      = "SELECT * FROM tb_type";
		$query    = mysqli_query($conn, $sql);
		$num_row  = mysqli_num_rows($query);
        if ($num_row > 0) {
            while($rows = mysqli_fetch_assoc($query)) {
                if ($query = mysqli_query($conn, $sql)) {
                    while ($row = mysqli_fetch_assoc($query)) {
                        $idType     = $row['id'];
                        $typeName 	= $row['type_name'];
                        $result['resp'][]  =	[	'id' => $idType, 
                                              		'type_name'=> $typeName
                                            	];
                    }
                }
            }
        }
        $result = json_encode($result);
        return $result;
	}
}

?>


