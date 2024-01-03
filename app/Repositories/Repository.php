<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class Repository
{
    public Model $model;

    /**
     * Constructor
     * 
     * @return void
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Get all records
     * 
     * @return Collection
     */
    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * Get some records
     * 
     * @return Collection
     */
    public function getSome(int $limit)
    {
        return $this->model->limit($limit)->get();
    }

    /**
     * Get some records
     * 
     * @return Collection
     */
    public function getOne($id)
    {
        return $this->model->find($id);
    }

    /**
     * Get some records
     * 
     * @return Collection
     */
    public function getPaginated($perPage = 10)
    {
        return $this->model->cursorPaginate($perPage);
    }
}
