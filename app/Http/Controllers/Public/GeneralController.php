<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\ApiController;
use App\Repositories\FoundationRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class GeneralController extends ApiController
{
    private FoundationRepository $foundationRepository;

    public function __construct()
    {
        $this->foundationRepository = new FoundationRepository();
    }

    /**
     * Search foundation by name
     * 
     * @param Request
     * @return json
     */
    public function searchFoundation(Request $request)
    {
        $this->validate($request, [
            "q" => "required|max:255"
        ]);

        $result = $this->foundationRepository->searchName($request->get("q"));

        return Response::make($result);
    }
}
