<?php

namespace App\Repositories;

use App\Models\Foundation;

class FoundationRepository extends Repository
{
    /**
     * Constructor
     * 
     * @return void
     **/
    public function __construct()
    {
        parent::__construct(new Foundation);
    }

    /**
     * Search foundation by name
     * 
     * @return void
     */
    public function searchName(string $query)
    {
        return $this->model->whereFullText('name', $query)
            ->simplePaginate(100);
    }
}
