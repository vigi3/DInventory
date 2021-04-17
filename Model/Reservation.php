<?php

require_once 'Model/Model.php';

class Reservation extends Model {
    
    /** 
     * 
     * @param string $dateStart Start date reservation
     * @param string $dateEnd End date reservation
     * @param string $nameCurrentUser Name current session User
     * @param int $materielId id item reserved
     * 
     * @return void
     * Create a new reservation for a item
     * 
    */
    public function setReservation(string $dateStart, string $dateEnd, string $nameCurrentUser, int $materielId): void 
    {
        $reservationParam = array($dateStart, $dateEnd, $nameCurrentUser, $materielId);
        $sql = 'INSERT INTO reservation (dateDebut, dateFin, userID, materielId) VALUES (?, ?, (SELECT idUser FROM user WHERE Name = ?), ?)';
        $this->RequestDB($sql, $reservationParam);
    }
}