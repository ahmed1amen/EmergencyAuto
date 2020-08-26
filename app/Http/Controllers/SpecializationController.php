<?php

namespace App\Http\Controllers;

use App\DataTables\SpecializationDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateSpecializationRequest;
use App\Http\Requests\UpdateSpecializationRequest;
use App\Repositories\SpecializationRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class SpecializationController extends AppBaseController
{
    /** @var  SpecializationRepository */
    private $specializationRepository;

    public function __construct(SpecializationRepository $specializationRepo)
    {
        $this->specializationRepository = $specializationRepo;
    }

    /**
     * Display a listing of the Specialization.
     *
     * @param SpecializationDataTable $specializationDataTable
     * @return Response
     */
    public function index(SpecializationDataTable $specializationDataTable)
    {
        return $specializationDataTable->render('specializations.index');
    }

    /**
     * Show the form for creating a new Specialization.
     *
     * @return Response
     */
    public function create()
    {
        return view('specializations.create');
    }

    /**
     * Store a newly created Specialization in storage.
     *
     * @param CreateSpecializationRequest $request
     *
     * @return Response
     */
    public function store(CreateSpecializationRequest $request)
    {
        $input = $request->all();

        $specialization = $this->specializationRepository->create($input);

        Flash::success('Specialization saved successfully.');

        return redirect(route('specializations.index'));
    }

    /**
     * Display the specified Specialization.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $specialization = $this->specializationRepository->find($id);

        if (empty($specialization)) {
            Flash::error('Specialization not found');

            return redirect(route('specializations.index'));
        }

        return view('specializations.show')->with('specialization', $specialization);
    }

    /**
     * Show the form for editing the specified Specialization.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $specialization = $this->specializationRepository->find($id);

        if (empty($specialization)) {
            Flash::error('Specialization not found');

            return redirect(route('specializations.index'));
        }

        return view('specializations.edit')->with('specialization', $specialization);
    }

    /**
     * Update the specified Specialization in storage.
     *
     * @param  int              $id
     * @param UpdateSpecializationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSpecializationRequest $request)
    {
        $specialization = $this->specializationRepository->find($id);

        if (empty($specialization)) {
            Flash::error('Specialization not found');

            return redirect(route('specializations.index'));
        }

        $specialization = $this->specializationRepository->update($request->all(), $id);

        Flash::success('Specialization updated successfully.');

        return redirect(route('specializations.index'));
    }

    /**
     * Remove the specified Specialization from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $specialization = $this->specializationRepository->find($id);

        if (empty($specialization)) {
            Flash::error('Specialization not found');

            return redirect(route('specializations.index'));
        }

        $this->specializationRepository->delete($id);

        Flash::success('Specialization deleted successfully.');

        return redirect(route('specializations.index'));
    }
}
