<?php
    namespace App\Controllers;

    class ApiReservationController extends \App\Core\ApiController {
        public function show($id) {
            $reservationModel = new \App\Models\ReservationModel($this->getDatabaseConnection());
            $reservation = $reservationModel->getById($id);
            $this->set('reservation', $reservation);
        }
    }