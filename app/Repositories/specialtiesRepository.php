<?php

namespace App\Repositories;

use App\Models\specialties;
use App\Repositories\BaseRepository;

/**
 * Class specialtiesRepository
 * @package App\Repositories
 * @version August 23, 2020, 7:30 am UTC
*/

class specialtiesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return specialties::class;
    }
}
