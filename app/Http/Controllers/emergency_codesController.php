<?php

namespace App\Http\Controllers;

use App\DataTables\emergency_codesDataTable;
use App\Http\Requests;
use App\Http\Requests\Createemergency_codesRequest;
use App\Http\Requests\Updateemergency_codesRequest;
use App\Repositories\emergency_codesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class emergency_codesController extends AppBaseController
{
    /** @var  emergency_codesRepository */
    private $emergencyCodesRepository;

    public function __construct(emergency_codesRepository $emergencyCodesRepo)
    {
        $this->emergencyCodesRepository = $emergencyCodesRepo;
    }

    /**
     * Display a listing of the emergency_codes.
     *
     * @param emergency_codesDataTable $emergencyCodesDataTable
     * @return Response
     */
    public function index(emergency_codesDataTable $emergencyCodesDataTable)
    {
        return $emergencyCodesDataTable->render('emergency_codes.index');
    }

    /**
     * Show the form for creating a new emergency_codes.
     *
     * @return Response
     */
    public function create()
    {
        return view('emergency_codes.create');
    }

    /**
     * Store a newly created emergency_codes in storage.
     *
     * @param Createemergency_codesRequest $request
     *
     * @return Response
     */
    public function store(Createemergency_codesRequest $request)
    {
        $input = $request->all();

        $emergencyCodes = $this->emergencyCodesRepository->create($input);

        Flash::success('Emergency Codes saved successfully.');

        return redirect(route('emergencyCodes.index'));
    }

    /**
     * Display the specified emergency_codes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $emergencyCodes = $this->emergencyCodesRepository->find($id);

        if (empty($emergencyCodes)) {
            Flash::error('Emergency Codes not found');

            return redirect(route('emergencyCodes.index'));
        }

        return view('emergency_codes.show')->with('emergencyCodes', $emergencyCodes);
    }

    /**
     * Show the form for editing the specified emergency_codes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $emergencyCodes = $this->emergencyCodesRepository->find($id);

        if (empty($emergencyCodes)) {
            Flash::error('Emergency Codes not found');

            return redirect(route('emergencyCodes.index'));
        }

        return view('emergency_codes.edit')->with('emergencyCodes', $emergencyCodes);
    }

    /**
     * Update the specified emergency_codes in storage.
     *
     * @param  int              $id
     * @param Updateemergency_codesRequest $request
     *
     * @return Response
     */
    public function update($id, Updateemergency_codesRequest $request)
    {
        $emergencyCodes = $this->emergencyCodesRepository->find($id);

        if (empty($emergencyCodes)) {
            Flash::error('Emergency Codes not found');

            return redirect(route('emergencyCodes.index'));
        }

        $emergencyCodes = $this->emergencyCodesRepository->update($request->all(), $id);

        Flash::success('Emergency Codes updated successfully.');

        return redirect(route('emergencyCodes.index'));
    }

    /**
     * Remove the specified emergency_codes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $emergencyCodes = $this->emergencyCodesRepository->find($id);

        if (empty($emergencyCodes)) {
            Flash::error('Emergency Codes not found');

            return redirect(route('emergencyCodes.index'));
        }

        $this->emergencyCodesRepository->delete($id);

        Flash::success('Emergency Codes deleted successfully.');

        return redirect(route('emergencyCodes.index'));
    }
}
