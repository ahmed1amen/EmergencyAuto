<?php

namespace App\Repositories;

use App\Models\Emergencycode;
use App\Repositories\BaseRepository;

/**
 * Class EmergencycodeRepository
 * @package App\Repositories
 * @version August 26, 2020, 12:46 pm UTC
*/

class EmergencycodeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'icon',
        'title',
        'description',
        'color',
        'alarm'
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
        return Emergencycode::class;
    }
}
