<?php
    namespace App\Core;

    interface Validator {
        public function isValid(string $value): bool;
    }