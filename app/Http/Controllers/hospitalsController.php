<?php

namespace App\Http\Controllers;

use App\DataTables\hospitalsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatehospitalsRequest;
use App\Http\Requests\UpdatehospitalsRequest;
use App\Repositories\hospitalsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class hospitalsController extends AppBaseController
{
    /** @var  hospitalsRepository */
    private $hospitalsRepository;

    public function __construct(hospitalsRepository $hospitalsRepo)
    {
        $this->hospitalsRepository = $hospitalsRepo;
    }

    /**
     * Display a listing of the hospitals.
     *
     * @param hospitalsDataTable $hospitalsDataTable
     * @return Response
     */
    public function index(hospitalsDataTable $hospitalsDataTable)
    {
        return $hospitalsDataTable->render('hospitals.index');
    }

    /**
     * Show the form for creating a new hospitals.
     *
     * @return Response
     */
    public function create()
    {
        return view('hospitals.create');
    }

    /**
     * Store a newly created hospitals in storage.
     *
     * @param CreatehospitalsRequest $request
     *
     * @return Response
     */
    public function store(CreatehospitalsRequest $request)
    {
        $input = $request->all();

        $hospitals = $this->hospitalsRepository->create($input);

        Flash::success('Hospitals saved successfully.');

        return redirect(route('hospitals.index'));
    }

    /**
     * Display the specified hospitals.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $hospitals = $this->hospitalsRepository->find($id);

        if (empty($hospitals)) {
            Flash::error('Hospitals not found');

            return redirect(route('hospitals.index'));
        }

        return view('hospitals.show')->with('hospitals', $hospitals);
    }

    /**
     * Show the form for editing the specified hospitals.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $hospitals = $this->hospitalsRepository->find($id);

        if (empty($hospitals)) {
            Flash::error('Hospitals not found');

            return redirect(route('hospitals.index'));
        }

        return view('hospitals.edit')->with('hospitals', $hospitals);
    }

    /**
     * Update the specified hospitals in storage.
     *
     * @param  int              $id
     * @param UpdatehospitalsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatehospitalsRequest $request)
    {
        $hospitals = $this->hospitalsRepository->find($id);

        if (empty($hospitals)) {
            Flash::error('Hospitals not found');

            return redirect(route('hospitals.index'));
        }

        $hospitals = $this->hospitalsRepository->update($request->all(), $id);

        Flash::success('Hospitals updated successfully.');

        return redirect(route('hospitals.index'));
    }

    /**
     * Remove the specified hospitals from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $hospitals = $this->hospitalsRepository->find($id);

        if (empty($hospitals)) {
            Flash::error('Hospitals not found');

            return redirect(route('hospitals.index'));
        }

        $this->hospitalsRepository->delete($id);

        Flash::success('Hospitals deleted successfully.');

        return redirect(route('hospitals.index'));
    }
}
