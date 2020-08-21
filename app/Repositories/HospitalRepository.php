<?php

namespace App\Repositories;

use App\Models\Hospital;
use App\Repositories\BaseRepository;

/**
 * Class HospitalRepository
 * @package App\Repositories
 * @version August 2, 2020, 8:39 pm UTC
*/

class HospitalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'clinicalCapacity'
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
        return Hospital::class;
    }
}
