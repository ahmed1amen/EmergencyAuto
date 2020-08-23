<?php

namespace App\Http\Controllers;

use App\DataTables\doctorsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatedoctorsRequest;
use App\Http\Requests\UpdatedoctorsRequest;
use App\Repositories\doctorsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class doctorsController extends AppBaseController
{
    /** @var  doctorsRepository */
    private $doctorsRepository;

    public function __construct(doctorsRepository $doctorsRepo)
    {
        $this->doctorsRepository = $doctorsRepo;
    }

    /**
     * Display a listing of the doctors.
     *
     * @param doctorsDataTable $doctorsDataTable
     * @return Response
     */
    public function index(doctorsDataTable $doctorsDataTable)
    {
        return $doctorsDataTable->render('doctors.index');
    }

    /**
     * Show the form for creating a new doctors.
     *
     * @return Response
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Store a newly created doctors in storage.
     *
     * @param CreatedoctorsRequest $request
     *
     * @return Response
     */
    public function store(CreatedoctorsRequest $request)
    {
        $input = $request->all();

        $doctors = $this->doctorsRepository->create($input);

        Flash::success('Doctors saved successfully.');

        return redirect(route('doctors.index'));
    }

    /**
     * Display the specified doctors.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $doctors = $this->doctorsRepository->find($id);

        if (empty($doctors)) {
            Flash::error('Doctors not found');

            return redirect(route('doctors.index'));
        }

        return view('doctors.show')->with('doctors', $doctors);
    }

    /**
     * Show the form for editing the specified doctors.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $doctors = $this->doctorsRepository->find($id);

        if (empty($doctors)) {
            Flash::error('Doctors not found');

            return redirect(route('doctors.index'));
        }

        return view('doctors.edit')->with('doctors', $doctors);
    }

    /**
     * Update the specified doctors in storage.
     *
     * @param  int              $id
     * @param UpdatedoctorsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedoctorsRequest $request)
    {
        $doctors = $this->doctorsRepository->find($id);

        if (empty($doctors)) {
            Flash::error('Doctors not found');

            return redirect(route('doctors.index'));
        }

        $doctors = $this->doctorsRepository->update($request->all(), $id);

        Flash::success('Doctors updated successfully.');

        return redirect(route('doctors.index'));
    }

    /**
     * Remove the specified doctors from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $doctors = $this->doctorsRepository->find($id);

        if (empty($doctors)) {
            Flash::error('Doctors not found');

            return redirect(route('doctors.index'));
        }

        $this->doctorsRepository->delete($id);

        Flash::success('Doctors deleted successfully.');

        return redirect(route('doctors.index'));
    }
}
