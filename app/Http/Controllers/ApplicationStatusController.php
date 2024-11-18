<?php

namespace App\Http\Controllers;

use App\Services\ApplicationStatus\ApplicationStatusService;

class ApplicationStatusController extends Controller
{
    public function getApplicationStatus(ApplicationStatusService $applicationStatus)
    {
        return response()->json($applicationStatus->getStatus());
    }
}
