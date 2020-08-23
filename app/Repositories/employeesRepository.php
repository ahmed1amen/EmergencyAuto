<?php

namespace App\Repositories;

use App\Models\employees;
use App\Repositories\BaseRepository;

/**
 * Class employeesRepository
 * @package App\Repositories
 * @version August 23, 2020, 7:32 am UTC
*/

class employeesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return employees::class;
    }
}
