<?php

namespace App\Repositories;

use App\Models\Doctor;
use App\Models\User;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DoctorRepository
 * @package App\Repositories
 * @version August 26, 2020, 12:33 pm UTC
 */
class DoctorRepository extends BaseRepository
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
        return Doctor::class;
    }


    /**
     * Create model record
     *
     * @param  array  $input
     *
     * @return Model
     */
    public function create($input)
    {


        $user = User::create($input);
        $user->save();


        $model = $this->model->newInstance($input);
        $model->user_id = $user->id;

        $model->save();

        return $model;
    }


    /**
     * Update model record for given id
     *
     * @param  array  $input
     * @param  int  $id
     *
     * @return Builder|Builder[]|Collection|Model
     */
    public function update($input, $id)
    {

        $query = $this->model->newQuery();

        $model = $query->findOrFail($id);

        $model->fill($input);
        $model->user->fill($input['user']);
        $model->user->save();
        $model->codes()->detach();
        $model->codes()->attach($input['codes']);

        $model->push();
        $model->save();

        return $model;
    }

}
