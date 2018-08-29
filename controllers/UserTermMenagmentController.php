<?php
    namespace App\Controllers;

    class UserTermManagementController extends \App\Core\Role\UserRoleController {
        public function terms() {
            $termModel = new \App\Models\TermModel($this->getDatabaseConnection());
            $terms = $termModel->getAll();
            $this->set('terms', $terms);
        }

        public function getEdit($termId) {
            $termModel = new \App\Models\TermModel($this->getDatabaseConnection());
            $term = $termModel->getById($termId);

            if (!$term) {
                $this->redirect(\Configuration::BASE . 'user/terms');
            }

            $this->set('term', $term);

            return $termModel;
        }

        public function postEdit($termId) {
            $termModel = $this->getEdit($termId);

            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

            $termModel->editById($termId, [
                'name' => $name
            ]);

            $this->redirect(\Configuration::BASE . 'user/terms');
        }

        public function getAdd() {

        }

        public function postAdd() {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

            $termModel = new \App\Models\TermModel($this->getDatabaseConnection());
            
            $termId = $termModel->add([
                'name' => $name
            ]);

            if ($termId) {
                $this->redirect(\Configuration::BASE . 'user/terms');
            }

            $this->set('message', 'Doslo je do greske: Nije moguce dodati ovu kategoriju!');
        }
    }