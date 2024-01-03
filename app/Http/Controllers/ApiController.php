<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;

class ApiController extends Controller
{
    private int $status = 200;
    private string $message = "ok";
    private $data = [];

    /**
     * Set response status
     * 
     * @param int $status
     * @return ApiController
     */
    protected function setStatus(int $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Set response message
     * 
     * @param string $message
     * @return ApiController
     */
    protected function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Set response data
     * 
     * @param $data
     * @return ApiController
     */
    protected function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Deliver JSON response to the client
     * 
     * @return json
     */
    protected function deliver()
    {
        return Response::json([
            "status" => $this->status,
            "message" => $this->message,
            "data" => $this->data
        ], $this->status);
    }
}
