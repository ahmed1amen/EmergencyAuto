<?php

namespace App\Repositories;

use App\Models\hospitals;
use App\Repositories\BaseRepository;

/**
 * Class hospitalsRepository
 * @package App\Repositories
 * @version August 23, 2020, 7:31 am UTC
*/

class hospitalsRepository extends BaseRepository
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
        return hospitals::class;
    }
}
