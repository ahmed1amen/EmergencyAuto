<?php

namespace App\Http\Controllers;

use App\DataTables\NurseDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateNurseRequest;
use App\Http\Requests\UpdateNurseRequest;
use App\Repositories\NurseRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class NurseController extends AppBaseController
{
    /** @var  NurseRepository */
    private $nurseRepository;

    public function __construct(NurseRepository $nurseRepo)
    {
        $this->nurseRepository = $nurseRepo;
    }

    /**
     * Display a listing of the Nurse.
     *
     * @param NurseDataTable $nurseDataTable
     * @return Response
     */
    public function index(NurseDataTable $nurseDataTable)
    {
        return $nurseDataTable->render('nurses.index');
    }

    /**
     * Show the form for creating a new Nurse.
     *
     * @return Response
     */
    public function create()
    {
        return view('nurses.create');
    }

    /**
     * Store a newly created Nurse in storage.
     *
     * @param CreateNurseRequest $request
     *
     * @return Response
     */
    public function store(CreateNurseRequest $request)
    {
        $input = $request->all();

        $nurse = $this->nurseRepository->create($input);

        Flash::success('Nurse saved successfully.');

        return redirect(route('nurses.index'));
    }

    /**
     * Display the specified Nurse.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $nurse = $this->nurseRepository->find($id);

        if (empty($nurse)) {
            Flash::error('Nurse not found');

            return redirect(route('nurses.index'));
        }

        return view('nurses.show')->with('nurse', $nurse);
    }

    /**
     * Show the form for editing the specified Nurse.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $nurse = $this->nurseRepository->find($id);

        if (empty($nurse)) {
            Flash::error('Nurse not found');

            return redirect(route('nurses.index'));
        }

        return view('nurses.edit')->with('nurse', $nurse);
    }

    /**
     * Update the specified Nurse in storage.
     *
     * @param  int              $id
     * @param UpdateNurseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNurseRequest $request)
    {
        $nurse = $this->nurseRepository->find($id);

        if (empty($nurse)) {
            Flash::error('Nurse not found');

            return redirect(route('nurses.index'));
        }

        $nurse = $this->nurseRepository->update($request->all(), $id);

        Flash::success('Nurse updated successfully.');

        return redirect(route('nurses.index'));
    }

    /**
     * Remove the specified Nurse from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $nurse = $this->nurseRepository->find($id);

        if (empty($nurse)) {
            Flash::error('Nurse not found');

            return redirect(route('nurses.index'));
        }

        $this->nurseRepository->delete($id);

        Flash::success('Nurse deleted successfully.');

        return redirect(route('nurses.index'));
    }
}
