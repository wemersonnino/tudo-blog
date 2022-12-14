<?php
/**
 * @property String Id
 * @property String PieceType
 * @property String PieceTitle
 * @property String Categories
 */
class Mpp_Infusionsoft_Generated_Template extends Mpp_Infusionsoft_Generated_Base{
    protected static $tableFields = array('Id', 'PieceType', 'PieceTitle', 'Categories');


    public function __construct($id = null, $app = null){
    	parent::__construct('Template', $id, $app);
    }

    public function getFields(){
		return self::$tableFields;
	}

	public function addCustomField($name){
		self::$tableFields[] = $name;
	}

    public function removeField($fieldName){
        $fieldIndex = array_search($fieldName, self::$tableFields);
        if($fieldIndex !== false){
            unset(self::$tableFields[$fieldIndex]);
            self::$tableFields = array_values(self::$tableFields);
        }
    }
}
