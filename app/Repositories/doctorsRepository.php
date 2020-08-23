<?php

namespace App\Repositories;

use App\Models\doctors;
use App\Repositories\BaseRepository;

/**
 * Class doctorsRepository
 * @package App\Repositories
 * @version August 23, 2020, 7:31 am UTC
*/

class doctorsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'department_id',
        'special_id'
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
        return doctors::class;
    }
}
