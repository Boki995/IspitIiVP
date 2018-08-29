<?php
    namespace App\Validators;

    use \App\Core\Validator;

    class StringValidator implements Validator {
        private $minLength;
        private $maxLength;

        public function __construct() {
            $this->minLength = 0;
            $this->maxLength = 255;
        }

        public function &setMinLength(int $length) : StringValidator {
            $this->minLength = max(0, $length);
            return $this;
        }

        public function &setMaxLength(int $length) : StringValidator {
            $this->maxLength = max(1, $length);
            return $this;
        }

        public function isValid(string $value): bool {
            $len = strlen($value);
            return $this->minLength <= $len && $len <= $this->maxLength;
        }
    }
