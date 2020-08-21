<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\usersDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateusersRequest;
use App\Http\Requests\Admin\UpdateusersRequest;
use App\Repositories\Admin\usersRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class usersController extends AppBaseController
{
    /** @var  usersRepository */
    private $usersRepository;

    public function __construct(usersRepository $usersRepo)
    {
        $this->usersRepository = $usersRepo;
    }

    /**
     * Display a listing of the users.
     *
     * @param usersDataTable $usersDataTable
     * @return Response
     */
    public function index(usersDataTable $usersDataTable)
    {
        return $usersDataTable->render('admin.users.index');
    }

    /**
     * Show the form for creating a new users.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created users in storage.
     *
     * @param CreateusersRequest $request
     *
     * @return Response
     */
    public function store(CreateusersRequest $request)
    {
        $input = $request->all();

        $users = $this->usersRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/users.singular')]));

        return redirect(route('admin.users.index'));
    }

    /**
     * Display the specified users.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            Flash::error(__('models/users.singular').' '.__('messages.not_found'));

            return redirect(route('admin.users.index'));
        }

        return view('admin.users.show')->with('users', $users);
    }

    /**
     * Show the form for editing the specified users.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            Flash::error(__('messages.not_found', ['model' => __('models/users.singular')]));

            return redirect(route('admin.users.index'));
        }

        return view('admin.users.edit')->with('users', $users);
    }

    /**
     * Update the specified users in storage.
     *
     * @param  int              $id
     * @param UpdateusersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateusersRequest $request)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            Flash::error(__('messages.not_found', ['model' => __('models/users.singular')]));

            return redirect(route('admin.users.index'));
        }

        $users = $this->usersRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/users.singular')]));

        return redirect(route('admin.users.index'));
    }

    /**
     * Remove the specified users from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $users = $this->usersRepository->find($id);

        if (empty($users)) {
            Flash::error(__('messages.not_found', ['model' => __('models/users.singular')]));

            return redirect(route('admin.users.index'));
        }

        $this->usersRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/users.singular')]));

        return redirect(route('admin.users.index'));
    }
}
