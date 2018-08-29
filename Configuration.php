<?php
    final class Configuration {
        const BASE = 'http://localhost/projekat/';

        const DATABASE_HOST = 'localhost';
        const DATABASE_USER = 'root';
        const DATABASE_PASS = '';
        const DATABASE_NAME = 'Ispit';

        const SESSION_STORAGE = '\\App\\Core\\Session\\FileSessionStorage';
        const SESSION_STORAGE_DATA = [ './sessions/' ];
        const SESSION_LIFETIME = 3600;

        const FINGERPRINT_PROVIDER_FACTORY = '\\App\\Core\\Fingerprint\\BasicFingerprintProviderFactory';
        const FINGERPRINT_PROVIDER_METHOD  = 'getInstance';
        const FINGERPRINT_PROVIDER_ARGS    = [ 'SERVER' ];
    }
