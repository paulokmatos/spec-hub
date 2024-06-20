<?php

return [
    'allowed_emails' => [
        'global' => explode(',', env('GLOBAL_ALLOWED_EMAILS', '')),
        'pulse' => explode(',', env('PULSE_SERVICE_ALLOWED_EMAILS', '')),
        'telescope' => explode(',', env('TELESCOPE_SERVICE_ALLOWED_EMAILS', '')),
        'horizon' => explode(',', env('HORIZON_SERVICE_ALLOWED_EMAILS', '')),
        'log_viewer' => explode(',', env('LOG_VIEWER_SERVICE_ALLOWED_EMAILS', '')),
    ],
];

