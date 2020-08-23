<?php

namespace App\Repositories;

use App\Models\Department;
use App\Repositories\BaseRepository;

/**
 * Class DepartmentRepository
 * @package App\Repositories
 * @version August 23, 2020, 7:28 am UTC
*/

class DepartmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'numberOfBeds',
        'alarmSound',
        'hospital_id'
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
        return Department::class;
    }
}
