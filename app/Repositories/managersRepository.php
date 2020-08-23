<?php

namespace App\Repositories;

use App\Models\managers;
use App\Repositories\BaseRepository;

/**
 * Class managersRepository
 * @package App\Repositories
 * @version August 23, 2020, 7:32 am UTC
*/

class managersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return managers::class;
    }
}
