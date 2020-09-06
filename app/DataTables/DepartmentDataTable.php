<?php

namespace App\DataTables;

use App\Models\Department;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class DepartmentDataTable extends DataTable
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

        return $dataTable->addColumn('alarmSound', function($data) {
            return '<audio controls class="m-0 p-0 w-60" style="height: 30px"><source src="horse.mp3" type="audio/mpeg"></audio>';
        })->addColumn('action', 'departments.datatables_actions') ->rawColumns(['alarmSound','action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Department $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Department $model)
    {

        return $model->newQuery()->with( ['hospital:id,name']);
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
            new Column([ 'data' => 'name', 'name' => 'name', 'title' => 'name' ]),
            new Column([ 'data' => 'numberOfBeds', 'name' => 'numberOfBeds', 'title' => 'numberOfBeds' ]),
            new Column([ 'data' => 'alarmSound', 'name' => 'alarmSound', 'title' => 'alarmSound' ]),
            new Column(['data'=>'hospital.name', 'name'=>'hospital.name','title'=>'Hospital Name']),

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'departments_datatable_' . time();
    }
}
