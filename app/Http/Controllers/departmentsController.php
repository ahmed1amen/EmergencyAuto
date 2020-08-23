<?php

namespace App\Http\Controllers;

use App\DataTables\departmentsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatedepartmentsRequest;
use App\Http\Requests\UpdatedepartmentsRequest;
use App\Repositories\departmentsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class departmentsController extends AppBaseController
{
    /** @var  departmentsRepository */
    private $departmentsRepository;

    public function __construct(departmentsRepository $departmentsRepo)
    {
        $this->departmentsRepository = $departmentsRepo;
    }

    /**
     * Display a listing of the departments.
     *
     * @param departmentsDataTable $departmentsDataTable
     * @return Response
     */
    public function index(departmentsDataTable $departmentsDataTable)
    {
        return $departmentsDataTable->render('departments.index');
    }

    /**
     * Show the form for creating a new departments.
     *
     * @return Response
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created departments in storage.
     *
     * @param CreatedepartmentsRequest $request
     *
     * @return Response
     */
    public function store(CreatedepartmentsRequest $request)
    {
        $input = $request->all();

        $departments = $this->departmentsRepository->create($input);

        Flash::success('Departments saved successfully.');

        return redirect(route('departments.index'));
    }

    /**
     * Display the specified departments.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $departments = $this->departmentsRepository->find($id);

        if (empty($departments)) {
            Flash::error('Departments not found');

            return redirect(route('departments.index'));
        }

        return view('departments.show')->with('departments', $departments);
    }

    /**
     * Show the form for editing the specified departments.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $departments = $this->departmentsRepository->find($id);

        if (empty($departments)) {
            Flash::error('Departments not found');

            return redirect(route('departments.index'));
        }

        return view('departments.edit')->with('departments', $departments);
    }

    /**
     * Update the specified departments in storage.
     *
     * @param  int              $id
     * @param UpdatedepartmentsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedepartmentsRequest $request)
    {
        $departments = $this->departmentsRepository->find($id);

        if (empty($departments)) {
            Flash::error('Departments not found');

            return redirect(route('departments.index'));
        }

        $departments = $this->departmentsRepository->update($request->all(), $id);

        Flash::success('Departments updated successfully.');

        return redirect(route('departments.index'));
    }

    /**
     * Remove the specified departments from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $departments = $this->departmentsRepository->find($id);

        if (empty($departments)) {
            Flash::error('Departments not found');

            return redirect(route('departments.index'));
        }

        $this->departmentsRepository->delete($id);

        Flash::success('Departments deleted successfully.');

        return redirect(route('departments.index'));
    }
}
