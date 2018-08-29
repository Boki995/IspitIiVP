<?php
    namespace App\Models;

    use App\Core\Model;
    use App\Core\Field;
    use App\Validators\NumberValidator;
    use App\Validators\DateTimeValidator;
    use App\Validators\StringValidator;
    use App\Validators\BitValidator;

    class ReservationModel extends Model {
        protected function getFields(): array {
            return [
                'ID_Rezervacije'      => new Field((new NumberValidator())->setIntegerLength(11), false),
                'ID_Termina'        => new Field((new NumberValidator())->setIntegerLenght(11), false),
                'ID_Korisnika'     => new Field((new NumberValidator())->setIntegerLength(11))
            ];
        }

        public function getAllByTermId(int $termId): array {
            return $this->getAllByFieldName('ID_Termina', $termId);
        }
    }