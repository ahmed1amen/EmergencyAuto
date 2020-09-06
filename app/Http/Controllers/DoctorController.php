<?php

namespace App\Http\Controllers;

use App\DataTables\DoctorDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Repositories\DoctorRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DoctorController extends AppBaseController
{
    /** @var  DoctorRepository */
    private $doctorRepository;

    public function __construct(DoctorRepository $doctorRepo)
    {
        $this->doctorRepository = $doctorRepo;
    }

    /**
     * Display a listing of the Doctor.
     *
     * @param DoctorDataTable $doctorDataTable
     * @return Response
     */
    public function index(DoctorDataTable $doctorDataTable)
    {
        return $doctorDataTable->render('doctors.index');
    }

    /**
     * Show the form for creating a new Doctor.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {

       $departments=  $this->doctorRepository->GetDataForSelect('departments');
        $specialties = $this->doctorRepository->GetDataForSelect('specialties');
        $codes = $this->doctorRepository->GetDataForSelect('emergency_codes');
        return view('doctors.create')->with(['specialties'=>$specialties,'departments'=>$departments , 'codes' => $codes]);
    }

    /**
     * Store a newly created Doctor in storage.
     *
     * @param CreateDoctorRequest $request
     *
     * @return Response
     */
    public function store(CreateDoctorRequest $request)
    {
        $input = $request->all();

        $doctor = $this->doctorRepository->create($input);

        Flash::success('Doctor saved successfully.');

        return redirect(route('doctors.index'));
    }

    /**
     * Display the specified Doctor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $doctor = $this->doctorRepository->find($id);

        if (empty($doctor)) {
            Flash::error('Doctor not found');

            return redirect(route('doctors.index'));
        }

        return view('doctors.show')->with('doctor', $doctor);
    }

    /**
     * Show the form for editing the specified Doctor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $doctor = $this->doctorRepository->find($id);


        $departments=  $this->doctorRepository->GetDataForSelect('departments');
        $specialties = $this->doctorRepository->GetDataForSelect('specialties');
        $codes = $this->doctorRepository->GetDataForSelect('emergency_codes');



        if (empty($doctor)) {
            Flash::error('Doctor not found');

            return redirect(route('doctors.index'));
        }

        return view('doctors.edit')->with(['doctor'=>$doctor,'specialties'=>$specialties,'departments'=>$departments , 'codes' => $codes]);
    }

    /**
     * Update the specified Doctor in storage.
     *
     * @param  int              $id
     * @param UpdateDoctorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDoctorRequest $request)
    {
        $doctor = $this->doctorRepository->find($id);

        if (empty($doctor)) {
            Flash::error('Doctor not found');

            return redirect(route('doctors.index'));
        }

            $doctor = $this->doctorRepository->update($request->password == "" ? $request->except(['user.password']) : request()->all(), $id);

        Flash::success('Doctor updated successfully.');

        return redirect(route('doctors.index'));
    }

    /**
     * Remove the specified Doctor from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $doctor = $this->doctorRepository->find($id);

        if (empty($doctor)) {
            Flash::error('Doctor not found');

            return redirect(route('doctors.index'));
        }

        $this->doctorRepository->delete($id);

        Flash::success('Doctor deleted successfully.');

        return redirect(route('doctors.index'));
    }
}
