<?php
    namespace App\Models;

    use App\Core\Model;
    use App\Core\Field;

    class TermModel extends Model {
        protected function getFields(): array {
            return [
                'ID_Termina'     => new Field((new \App\Validators\NumberValidator())->setIntegerLength(11), false),
                'Status'            => new Field((new \App\Validators\BitValidator()) ),
                'Tip_Termina'      => new Field((new \App\Validators\StringValidator(0, 64)) ),
                'ID_Korisnika'     => new Field((new \App\Validators\NumberValidator())->setIntegerLength(11), false)
            ];
        }
    }