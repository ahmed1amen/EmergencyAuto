<?php

namespace App\DataTables;

use App\Models\Doctor;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class DoctorDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('user.photo', function($data) {
            return '<img  class="img-fluid w-50"  src="'. $data->user->photo.  '"> </img>';
        })->addColumn('action', 'doctors.datatables_actions') ->rawColumns(['user.photo','action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Doctor $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Doctor $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            new Column(['data'=>'user.photo', 'name'=>'user.photo','title'=>'Photo']),
            new Column(['data'=>'user.name', 'name'=>'user.name','title'=>'Name']),
            new Column(['data'=>'user.phoneNumber', 'name'=>'user.phoneNumber','title'=>'Phone']),
            new Column(['data'=>'user.name', 'name'=>'user.name','title'=>'Name']),
            new Column(['data'=>'user.sex', 'name'=>'user.sex','title'=>'Gender']),
            new Column(['data'=>'department.name', 'name'=>'department.name','title'=>'Department']),
            new Column(['data'=>'special.name', 'name'=>'special.name','title'=>'Specialization']),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'doctors_datatable_' . time();
    }
}
