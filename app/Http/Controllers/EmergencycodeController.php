<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmergencycodeRequest;
use App\Http\Requests\UpdateEmergencycodeRequest;
use App\Repositories\EmergencycodeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EmergencycodeController extends AppBaseController
{
    /** @var  EmergencycodeRepository */
    private $emergencycodeRepository;

    public function __construct(EmergencycodeRepository $emergencycodeRepo)
    {
        $this->emergencycodeRepository = $emergencycodeRepo;
    }

    /**
     * Display a listing of the Emergencycode.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $emergencycodes = $this->emergencycodeRepository->paginate(25);

        return view('emergencycodes.index')
            ->with('emergencycodes', $emergencycodes);
    }

    /**
     * Show the form for creating a new Emergencycode.
     *
     * @return Response
     */
    public function create()
    {
        return view('emergencycodes.create');
    }

    /**
     * Store a newly created Emergencycode in storage.
     *
     * @param CreateEmergencycodeRequest $request
     *
     * @return Response
     */
    public function store(CreateEmergencycodeRequest $request)
    {
        $input = $request->all();

        $emergencycode = $this->emergencycodeRepository->create($input);

        Flash::success('Emergencycode saved successfully.');

        return redirect(route('emergencycodes.index'));
    }

    /**
     * Display the specified Emergencycode.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $emergencycode = $this->emergencycodeRepository->find($id);

        if (empty($emergencycode)) {
            Flash::error('Emergencycode not found');

            return redirect(route('emergencycodes.index'));
        }

        return view('emergencycodes.show')->with('emergencycode', $emergencycode);
    }

    /**
     * Show the form for editing the specified Emergencycode.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $emergencycode = $this->emergencycodeRepository->find($id);

        if (empty($emergencycode)) {
            Flash::error('Emergencycode not found');

            return redirect(route('emergencycodes.index'));
        }

        return view('emergencycodes.edit')->with('emergencycode', $emergencycode);
    }

    /**
     * Update the specified Emergencycode in storage.
     *
     * @param int $id
     * @param UpdateEmergencycodeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmergencycodeRequest $request)
    {
        $emergencycode = $this->emergencycodeRepository->find($id);

        if (empty($emergencycode)) {
            Flash::error('Emergencycode not found');

            return redirect(route('emergencycodes.index'));
        }

        $emergencycode = $this->emergencycodeRepository->update($request->all(), $id);

        Flash::success('Emergencycode updated successfully.');

        return redirect(route('emergencycodes.index'));
    }

    /**
     * Remove the specified Emergencycode from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $emergencycode = $this->emergencycodeRepository->find($id);

        if (empty($emergencycode)) {
            Flash::error('Emergencycode not found');

            return redirect(route('emergencycodes.index'));
        }

        $this->emergencycodeRepository->delete($id);

        Flash::success('Emergencycode deleted successfully.');

        return redirect(route('emergencycodes.index'));
    }
}
