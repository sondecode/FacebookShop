<?php

namespace App\Repositories;

use App\Repositories\RepositoryInterface;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

abstract class BaseRepository implements RepositoryInterface
{
    /**
     * model
     *
     * @var mixed
     */
    protected $model;

    /**
     * Create new controller instance
     *
     * @return void
     */
    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        $result = $this->model->find($id);

        return $result;
    }

    public function create($attributes = [])
    {
        try {
            $add = $this->model->create($attributes);
            if (!$add) {
                throw new Exception();
            }
            return true;
        } catch (Exception $ex) {
            Log::error('create: ' . $ex);
            return false;
        }
    }

    public function update($id, $attributes = [])
    {
        $result = $this->find($id);
        if ($result) {
            try {
                $update = $result->update($attributes);
                if (!$update) {
                    throw new Exception();
                }
                return true;
            } catch (Exception $ex) {
                Log::error('update: ' . $ex);
                return false;
            }
        }

        return false;
    }

    public function delete($id)
    {
        $result = $this->find($id);
        if ($result) {
            try {
                $delete = $result->delete();
                if (!$delete) {
                    throw new Exception();
                }
                return true;
            } catch (Exception $ex) {
                Log::error('delete: ' . $ex);
                return false;
            }
        }

        return false;
    }

    public function findCondition($whereConditions = [], $selectColumns = [])
    {
        $data = $this->model;
        foreach ($whereConditions as $condition) {
            $data = $data->where($condition[0], $condition[1], $condition[2]); // [field, operator, value]
        }
        foreach ($selectColumns as $key => $item) {
            $data = $data->addselect($item);
        }

        $data = $data->get();
        if (count($data) == 1) {
            return $data[0];
        }
        return $data;
    }

    public function updateCondition($whereConditions = [], $updateData = [])
    {
        $result = $this->model;
        foreach ($whereConditions as $condition) {
            $result = $result->where($condition[0], $condition[1], $condition[2]); // [field, operator, value]
        }
        if ($result) {
            return $result->update($updateData);
        }

        return 0;
    }

    public function countCondition($whereConditions = [])
    {
        $data = $this->model;
        foreach ($whereConditions as $key => $item) {
            $data = $data->where($key, $item);
        }
        $data = $data->get();
        return count($data->toArray());
    }
}
