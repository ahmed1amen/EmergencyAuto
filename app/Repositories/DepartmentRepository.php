<?php

namespace App\Repositories;

use App\Models\Department;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DepartmentRepository
 * @package App\Repositories
 * @version August 26, 2020, 12:33 pm UTC
*/

class DepartmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'numberOfBeds',
        'alarmSound',
        'hospital_id'
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
//


    /**
     * Create model record
     *
     * @param array $input
     *
     * @return Model
     */
    public function create($input)
    {
        $model = $this->model->newInstance($input);


        $this->StoreFile(request()->file('alarmSound'),'');
        $model->save();

        return $model;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Department::class;
    }
}
