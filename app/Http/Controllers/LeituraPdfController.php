<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\LeituraPdfService;


class LeituraPdfController extends Controller
{
    private $leituraPdfService;
    public function __construct(
        LeituraPdfService $leituraPdfService
    ) {
        $this->leituraPdfService = $leituraPdfService;
    }

    public function LeituraPDf(Request $request)
    {
        $pdf = $request->file('pdf');
        $pdf = $this->leituraPdfService->getPdf($pdf);
        $this->leituraPdfService->getDadosEmpresa();
    }
}
