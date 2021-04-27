<?php

namespace App;

/**
 * Class Config
 * @package App
 */
class Config
{
    private array $config;

    /**
     * Config constructor.
     */
    public function __construct()
    {
        $this->config = [
            "storage" => ["path" => "sqlite:" . APP_ROOT . "/db/storage.sqlite"],
            "auth" => ["url" => "https://api.supermetrics.com/assignment/register", "data" => ["client_id" => "ju16a6m81mhid5ue1z3v2g0uh", "email" => "test@gmail.com", "name" => "test"], "data_source" => "supermetrics", "access_token_name" => "sl_token", "valid" => 3600],
        ];
    }


    /**
     * @param string $key
     * @return array
     */
    public function getConfig(string $key = null): array
    {
        return $this->config[$key] ?? $this->config;
    }
}
