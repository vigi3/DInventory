<?php 

require_once 'Model/Model.php';

class Item extends Model {

    /** 
     * get All items
     * 
     * @return objet $itemsList
     * All items ordered by id Ascending
    */
    public function getAllItems() 
    {
        $sql = 'SELECT idMateriels AS id, nameItem AS nameI, typeItem AS typeI, stateItem AS stateI, stockItem AS stockI, initStock FROM materiels ORDER BY idMateriels ASC';
        $itemsList = $this->RequestDB($sql);
        return $itemsList;
    }

    /** 
     * @param array $stockLeft Stock left
     * Set new Stock
     * 
     * @param array $idItem id item
     * 
     * @return void 
     * 
    */
    public function setStock(array $stockLeft, array $idItem): void 
    {
        $sql = 'UPDATE materiels SET stockItem=? WHERE idMateriels=?';
        $this->RequestDB($sql, $stockLeft, $idItem);
    }

    /** 
     * @param array $stateInt
     * 0 = Out of Stock
     * 1 = Low
     * 2 = half
     * 3 = In Stock
     * 
     * @param array $id id item 
     * 
     * @return void
     * 
    */
    public function setStateItem(int $stateInt, int $id): void 
    {
        $sql = 'UPDATE materiels SET stateItem=? WHERE idMateriels=?';
        $keyValue = array($stateInt, $id);
        $request = $this->RequestDB($sql, $keyValue);
    }
}