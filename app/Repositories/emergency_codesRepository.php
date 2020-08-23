<?php

namespace App\Repositories;

use App\Models\emergency_codes;
use App\Repositories\BaseRepository;

/**
 * Class emergency_codesRepository
 * @package App\Repositories
 * @version August 23, 2020, 7:31 am UTC
*/

class emergency_codesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'icon',
        'title',
        'description',
        'color'
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
        return emergency_codes::class;
    }
}
