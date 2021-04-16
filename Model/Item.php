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
     * @param int $stateInt state of the stock quantity
     * @param int $id id item
     * 
     * @return void
     * set state of stock for one item
     * 
    */
    public function setStateItem(int $stateInt, int $id): void 
    {
        $sql = 'UPDATE materiels SET stateItem=? WHERE idMateriels=?';
        $keyValue = array($stateInt, $id);
        $request = $this->RequestDB($sql, $keyValue);
    }

    /** 
     * @return array $itemLowStockList 
     * Array of stockItem quantity with Low Stock
     * 
    */
    public function getItemLowStock()
    {
        $sql = 'SELECT stockItem AS stockI FROM materiels WHERE stateItem = 1';
        $itemLowStockList = $this->RequestDB($sql);
        return $itemLowStockList;
    }

    /** 
     * @return array $itemOutOfStockList 
     * Array of stockItem quantity which are Out of Stock
     * 
    */
    public function getItemOutOfStock()
    {
        $sql = 'SELECT stockItem AS stockI FROM materiels WHERE stateItem = 0';
        $itemOutOfStockList = $this->RequestDB($sql);
        return $itemOutOfStockList;
    }
}