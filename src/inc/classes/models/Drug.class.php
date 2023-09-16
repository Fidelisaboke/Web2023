<?php
include 'inc/autoloader.inc.php';
class Drug extends DatabaseHandler{

    public function __construct(){
        
    }

    public function addDrug($drugData){
        $this->setData('tbl_drugs', $drugData);
    }

    public function getDrugByID($search_value){
        return $this->getData('tbl_drugs', 'drug_id', $search_value);
    }
    public function getDrugByTradeName($search_value){
        return $this->getData('tbl_drugs', 'trade_name', $search_value);
    }

    public function getAllDrugs(){
        return $this->getTable('tbl_drugs');
    }
    public function getIDs(){
        return $this->getColumn('drug_id', 'tbl_drugs');
    }
    public function getTradeNames(){
        return $this->getColumn('trade_name', 'tbl_drugs');
    }

    public function updateDrug($drug_data, $unique_value){
        $this->updateData('tbl_drugs', 'drug_id', $drug_data, $unique_value);
    }
    public function deleteDrug($unique_value){
        $this->deleteData('tbl_drugs','drug_id', $unique_value);

    }

}
?>