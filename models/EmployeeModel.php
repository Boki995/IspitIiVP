<?php
    namespace App\Models;

    use App\Core\Model;
    use App\Core\Field;
    use App\Validators\NumberValidator;
    use App\Validators\DateTimeValidator;
    use App\Validators\StringValidator;
    use App\Validators\BitValidator;

    class EmployeeModel extends Model {
        protected function getFields(): array {
            return [
                'ID_Radnika'      => new Field((new NumberValidator())->setIntegerLength(11), false),
                'Ime'        => new Field((new \App\Validators\StringValidator(0, 64)) ),
                'Prezime'        => new Field((new \App\Validators\StringValidator(0, 64)) ),
                'Tip Posla'        => new Field((new \App\Validators\StringValidator(0, 64)) ),
                'Smena'     => new Field((new \App\Validators\StringValidator(0, 64)) )
            ];
        }

        
    }