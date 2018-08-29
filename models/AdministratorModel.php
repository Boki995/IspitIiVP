<?php
    namespace App\Models;

    use App\Core\Model;
    use App\Core\Field;
    use App\Validators\NumberValidator;
    use App\Validators\DateTimeValidator;
    use App\Validators\StringValidator;
    use App\Validators\BitValidator;

    class AdministratorModel extends Model {
        protected function getFields(): array {
            return [
                'Admin_ID'      => new Field((new NumberValidator())->setIntegerLength(11), false),
                'email'        => new Field((new \App\Validators\StringValidator(0, 64)) ),
                'password'        => new Field((new \App\Validators\StringValidator(0, 64)) ),
                'ID_Radnika'        => new Field((new NumberValidator())->setIntegerLenght(11), false),
                'ID_Korisnika'     => new Field((new NumberValidator())->setIntegerLength(11))
            ];
        }

        public function getAllByUserId(int $userId): array {
            return $this->getAllByFieldName('ID_Korisnika', $userId);
        }
    }