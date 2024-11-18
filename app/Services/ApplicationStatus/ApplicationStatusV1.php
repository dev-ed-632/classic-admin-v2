<?php

namespace App\Services\ApplicationStatus;


class ApplicationStatusV1 implements ApplicationStatusService
{
    public function getStatus()
    {
        return [
            'status' => 'success',
            'message' => 'Application is running',
        ];
    }
}
