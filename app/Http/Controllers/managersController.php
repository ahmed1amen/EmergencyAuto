<?php

namespace App\Http\Controllers;

use App\DataTables\managersDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatemanagersRequest;
use App\Http\Requests\UpdatemanagersRequest;
use App\Repositories\managersRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class managersController extends AppBaseController
{
    /** @var  managersRepository */
    private $managersRepository;

    public function __construct(managersRepository $managersRepo)
    {
        $this->managersRepository = $managersRepo;
    }

    /**
     * Display a listing of the managers.
     *
     * @param managersDataTable $managersDataTable
     * @return Response
     */
    public function index(managersDataTable $managersDataTable)
    {
        return $managersDataTable->render('managers.index');
    }

    /**
     * Show the form for creating a new managers.
     *
     * @return Response
     */
    public function create()
    {
        return view('managers.create');
    }

    /**
     * Store a newly created managers in storage.
     *
     * @param CreatemanagersRequest $request
     *
     * @return Response
     */
    public function store(CreatemanagersRequest $request)
    {
        $input = $request->all();

        $managers = $this->managersRepository->create($input);

        Flash::success('Managers saved successfully.');

        return redirect(route('managers.index'));
    }

    /**
     * Display the specified managers.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $managers = $this->managersRepository->find($id);

        if (empty($managers)) {
            Flash::error('Managers not found');

            return redirect(route('managers.index'));
        }

        return view('managers.show')->with('managers', $managers);
    }

    /**
     * Show the form for editing the specified managers.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $managers = $this->managersRepository->find($id);

        if (empty($managers)) {
            Flash::error('Managers not found');

            return redirect(route('managers.index'));
        }

        return view('managers.edit')->with('managers', $managers);
    }

    /**
     * Update the specified managers in storage.
     *
     * @param  int              $id
     * @param UpdatemanagersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemanagersRequest $request)
    {
        $managers = $this->managersRepository->find($id);

        if (empty($managers)) {
            Flash::error('Managers not found');

            return redirect(route('managers.index'));
        }

        $managers = $this->managersRepository->update($request->all(), $id);

        Flash::success('Managers updated successfully.');

        return redirect(route('managers.index'));
    }

    /**
     * Remove the specified managers from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $managers = $this->managersRepository->find($id);

        if (empty($managers)) {
            Flash::error('Managers not found');

            return redirect(route('managers.index'));
        }

        $this->managersRepository->delete($id);

        Flash::success('Managers deleted successfully.');

        return redirect(route('managers.index'));
    }
}
