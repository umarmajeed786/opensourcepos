<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Locale extends BaseConfig
{
    public string $defaultLocale = 'en';

    public array $supportedLocales = ['en'];

    public bool $negotiateLocale = false;

    public string $defaultTimezone = 'UTC';

    public bool $forceGlobalSecureRequests = false;
}
