<?php

namespace App\Http\Controllers;

use App\DataTables\AvanceDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateAvanceRequest;
use App\Http\Requests\UpdateAvanceRequest;
use App\Repositories\AvanceRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class AvanceController extends AppBaseController
{
    /** @var  AvanceRepository */
    private $avanceRepository;

    public function __construct(AvanceRepository $avanceRepo)
    {
        $this->avanceRepository = $avanceRepo;
    }

    /**
     * Display a listing of the Avance.
     *
     * @param AvanceDataTable $avanceDataTable
     * @return Response
     */
    public function index(AvanceDataTable $avanceDataTable)
    {
        return $avanceDataTable->render('avances.index');
    }

    /**
     * Show the form for creating a new Avance.
     *
     * @return Response
     */
    public function create()
    {
        return view('avances.create');
    }

    /**
     * Store a newly created Avance in storage.
     *
     * @param CreateAvanceRequest $request
     *
     * @return Response
     */
    public function store(CreateAvanceRequest $request)
    {
        $input = $request->all();

        $avance = $this->avanceRepository->create($input);

        Flash::success('Avance saved successfully.');

        return redirect(route('avances.index'));
    }

    /**
     * Display the specified Avance.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $avance = $this->avanceRepository->findWithoutFail($id);

        if (empty($avance)) {
            Flash::error('Avance not found');

            return redirect(route('avances.index'));
        }

        return view('avances.show')->with('avance', $avance);
    }

    /**
     * Show the form for editing the specified Avance.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $avance = $this->avanceRepository->findWithoutFail($id);

        if (empty($avance)) {
            Flash::error('Avance not found');

            return redirect(route('avances.index'));
        }

        return view('avances.edit')->with('avance', $avance);
    }

    /**
     * Update the specified Avance in storage.
     *
     * @param  int              $id
     * @param UpdateAvanceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAvanceRequest $request)
    {
        $avance = $this->avanceRepository->findWithoutFail($id);

        if (empty($avance)) {
            Flash::error('Avance not found');

            return redirect(route('avances.index'));
        }

        $avance = $this->avanceRepository->update($request->all(), $id);

        Flash::success('Avance updated successfully.');

        return redirect(route('avances.index'));
    }

    /**
     * Remove the specified Avance from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $avance = $this->avanceRepository->findWithoutFail($id);

        if (empty($avance)) {
            Flash::error('Avance not found');

            return redirect(route('avances.index'));
        }

        $this->avanceRepository->delete($id);

        Flash::success('Avance deleted successfully.');

        return redirect(route('avances.index'));
    }
}
