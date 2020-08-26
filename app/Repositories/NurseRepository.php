<?php

namespace App\Repositories;

use App\Models\Nurse;
use App\Repositories\BaseRepository;

/**
 * Class NurseRepository
 * @package App\Repositories
 * @version August 26, 2020, 12:34 pm UTC
*/

class NurseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Job'
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
        return Nurse::class;
    }
}
