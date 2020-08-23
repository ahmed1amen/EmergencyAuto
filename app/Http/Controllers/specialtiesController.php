<?php

namespace App\Http\Controllers;

use App\DataTables\specialtiesDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatespecialtiesRequest;
use App\Http\Requests\UpdatespecialtiesRequest;
use App\Repositories\specialtiesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class specialtiesController extends AppBaseController
{
    /** @var  specialtiesRepository */
    private $specialtiesRepository;

    public function __construct(specialtiesRepository $specialtiesRepo)
    {
        $this->specialtiesRepository = $specialtiesRepo;
    }

    /**
     * Display a listing of the specialties.
     *
     * @param specialtiesDataTable $specialtiesDataTable
     * @return Response
     */
    public function index(specialtiesDataTable $specialtiesDataTable)
    {
        return $specialtiesDataTable->render('specialties.index');
    }

    /**
     * Show the form for creating a new specialties.
     *
     * @return Response
     */
    public function create()
    {
        return view('specialties.create');
    }

    /**
     * Store a newly created specialties in storage.
     *
     * @param CreatespecialtiesRequest $request
     *
     * @return Response
     */
    public function store(CreatespecialtiesRequest $request)
    {
        $input = $request->all();

        $specialties = $this->specialtiesRepository->create($input);

        Flash::success('Specialties saved successfully.');

        return redirect(route('specialties.index'));
    }

    /**
     * Display the specified specialties.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $specialties = $this->specialtiesRepository->find($id);

        if (empty($specialties)) {
            Flash::error('Specialties not found');

            return redirect(route('specialties.index'));
        }

        return view('specialties.show')->with('specialties', $specialties);
    }

    /**
     * Show the form for editing the specified specialties.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $specialties = $this->specialtiesRepository->find($id);

        if (empty($specialties)) {
            Flash::error('Specialties not found');

            return redirect(route('specialties.index'));
        }

        return view('specialties.edit')->with('specialties', $specialties);
    }

    /**
     * Update the specified specialties in storage.
     *
     * @param  int              $id
     * @param UpdatespecialtiesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatespecialtiesRequest $request)
    {
        $specialties = $this->specialtiesRepository->find($id);

        if (empty($specialties)) {
            Flash::error('Specialties not found');

            return redirect(route('specialties.index'));
        }

        $specialties = $this->specialtiesRepository->update($request->all(), $id);

        Flash::success('Specialties updated successfully.');

        return redirect(route('specialties.index'));
    }

    /**
     * Remove the specified specialties from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $specialties = $this->specialtiesRepository->find($id);

        if (empty($specialties)) {
            Flash::error('Specialties not found');

            return redirect(route('specialties.index'));
        }

        $this->specialtiesRepository->delete($id);

        Flash::success('Specialties deleted successfully.');

        return redirect(route('specialties.index'));
    }
}
