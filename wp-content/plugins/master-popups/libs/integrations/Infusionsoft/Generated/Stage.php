<?php
/**
 * @property String Id
 * @property String StageName
 * @property String StageOrder
 * @property String TargetNumDays
 */
class Mpp_Infusionsoft_Generated_Stage extends Mpp_Infusionsoft_Generated_Base{
    protected static $tableFields = array('Id', 'StageName', 'StageOrder', 'TargetNumDays');


    public function __construct($id = null, $app = null){
    	parent::__construct('Stage', $id, $app);
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
