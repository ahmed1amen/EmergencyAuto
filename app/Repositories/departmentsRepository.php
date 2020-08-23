<?php

namespace App\Repositories;

use App\Models\departments;
use App\Repositories\BaseRepository;

/**
 * Class departmentsRepository
 * @package App\Repositories
 * @version August 23, 2020, 7:30 am UTC
*/

class departmentsRepository extends BaseRepository
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
        return departments::class;
    }
}
