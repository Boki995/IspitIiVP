<?php
    namespace App\Validators;

    use \App\Core\Validator;

    class BitValidator implements Validator {
        public function isValid(string $value): bool {
            return \boolval(\preg_match('/^[01]$/', $value));
        }
    }
