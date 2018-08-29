<?php
    namespace App\Models;

    use App\Core\Model;
    use App\Core\Field;

    class UserModel extends Model {
        protected function getFields(): array {
            return [
                'ID_Korisnika'         => new Field((new \App\Validators\NumberValidator())->setIntegerLength(11), false),
                'User'     => new Field((new \App\Validators\StringValidator(0, 64)) ),
                'Ime'        => new Field((new \App\Validators\StringValidator(0, 64)) ),
                'Prezime'         => new Field((new \App\Validators\StringValidator(0, 64)) ),
                'Grupa'         => new Field((new \App\Validators\StringValidator(0, 128)) ),
                'Kontakt'           => new Field((new \App\Validators\NumberValidator(0, 11)) ),
                'Email'        => new Field((new \App\Validators\StringValidator(0, 64)) ),
                'Password'         => new Field((new \App\Validators\StringValidator(0, 64)) )
                ];
        }

        public function getByUsername(string $username) {
            return $this->getByFieldName('User', $username);
        }
    }
