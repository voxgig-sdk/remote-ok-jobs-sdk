<?php
declare(strict_types=1);

// RemoteOkJobs SDK configuration

class RemoteOkJobsConfig
{
    public static function make_config(): array
    {
        return [
            "main" => [
                "name" => "RemoteOkJobs",
            ],
            "feature" => [
                "test" => [
          'options' => [
            'active' => false,
          ],
        ],
            ],
            "options" => [
                "base" => "https://remoteok.com/api",
                "auth" => [
                    "prefix" => "Bearer",
                ],
                "headers" => [
          'content-type' => 'application/json',
        ],
                "entity" => [
                    "get_all_job" => [],
                ],
            ],
            "entity" => [
        'get_all_job' => [
          'fields' => [
            [
              'active' => true,
              'name' => 'disclaimer',
              'req' => false,
              'type' => '`$STRING`',
              'index$' => 0,
            ],
            [
              'active' => true,
              'name' => 'term',
              'req' => false,
              'type' => '`$STRING`',
              'index$' => 1,
            ],
          ],
          'name' => 'get_all_job',
          'op' => [
            'list' => [
              'input' => 'data',
              'name' => 'list',
              'points' => [
                [
                  'active' => true,
                  'args' => [],
                  'method' => 'GET',
                  'orig' => '/',
                  'parts' => [],
                  'select' => [],
                  'transform' => [
                    'req' => '`reqdata`',
                    'res' => '`body`',
                  ],
                  'index$' => 0,
                ],
              ],
              'key$' => 'list',
            ],
          ],
          'relations' => [
            'ancestors' => [],
          ],
        ],
      ],
        ];
    }


    public static function make_feature(string $name)
    {
        require_once __DIR__ . '/features.php';
        return RemoteOkJobsFeatures::make_feature($name);
    }
}
