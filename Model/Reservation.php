<?php

require_once 'Model/Model.php';

class Reservation extends Model {
    
    /** 
     * 
     * @param string $dateStart Start date reservation
     * @param string $dateEnd End date reservation
     * @param int $idUser id current session User
     * @param int $materielId id item reserved
     * 
     * @return void
     * Create a new reservation for a item
     * 
    */
    public function setReservation(string $dateStart, string $dateEnd, int $idUser, int $materielId): void 
    {
        $reservationParam = array($dateStart, $dateEnd, $idUser, $materielId);
        $sql = 'INSERT INTO reservation (dateDebut, dateFin, userID, materielId) VALUES (?, ?, ?, ?)';
        $this->RequestDBWithInsert($sql, $reservationParam);
    }
}