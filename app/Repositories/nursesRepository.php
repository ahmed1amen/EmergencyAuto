<?php

namespace App\Repositories;

use App\Models\nurses;
use App\Repositories\BaseRepository;

/**
 * Class nursesRepository
 * @package App\Repositories
 * @version August 23, 2020, 7:32 am UTC
*/

class nursesRepository extends BaseRepository
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
        return nurses::class;
    }
}
