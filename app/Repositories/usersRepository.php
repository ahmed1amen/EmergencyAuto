<?php

namespace App\Repositories;

use App\Models\users;
use App\Repositories\BaseRepository;

/**
 * Class usersRepository
 * @package App\Repositories
 * @version August 2, 2020, 8:22 pm UTC
*/

class usersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'password',
        'phoneNumber',
        'address',
        'sex',
        'remember_token'
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
        return users::class;
    }
}
