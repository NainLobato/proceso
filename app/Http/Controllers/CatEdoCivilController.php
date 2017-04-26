<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCatEdoCivilRequest;
use App\Http\Requests\UpdateCatEdoCivilRequest;
use App\Repositories\CatEdoCivilRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CatEdoCivilController extends AppBaseController
{
    /** @var  CatEdoCivilRepository */
    private $catEdoCivilRepository;

    public function __construct(CatEdoCivilRepository $catEdoCivilRepo)
    {
        $this->catEdoCivilRepository = $catEdoCivilRepo;
    }

    /**
     * Display a listing of the CatEdoCivil.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->catEdoCivilRepository->pushCriteria(new RequestCriteria($request));
        $catEdoCivils = $this->catEdoCivilRepository->all();

        return view('cat_edo_civils.index')
            ->with('catEdoCivils', $catEdoCivils);
    }

    /**
     * Show the form for creating a new CatEdoCivil.
     *
     * @return Response
     */
    public function create()
    {
        return view('cat_edo_civils.create');
    }

    /**
     * Store a newly created CatEdoCivil in storage.
     *
     * @param CreateCatEdoCivilRequest $request
     *
     * @return Response
     */
    public function store(CreateCatEdoCivilRequest $request)
    {
        $input = $request->all();

        $catEdoCivil = $this->catEdoCivilRepository->create($input);

        Flash::success('Cat Edo Civil saved successfully.');

        return redirect(route('catEdoCivils.index'));
    }

    /**
     * Display the specified CatEdoCivil.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $catEdoCivil = $this->catEdoCivilRepository->findWithoutFail($id);

        if (empty($catEdoCivil)) {
            Flash::error('Cat Edo Civil not found');

            return redirect(route('catEdoCivils.index'));
        }

        return view('cat_edo_civils.show')->with('catEdoCivil', $catEdoCivil);
    }

    /**
     * Show the form for editing the specified CatEdoCivil.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $catEdoCivil = $this->catEdoCivilRepository->findWithoutFail($id);

        if (empty($catEdoCivil)) {
            Flash::error('Cat Edo Civil not found');

            return redirect(route('catEdoCivils.index'));
        }

        return view('cat_edo_civils.edit')->with('catEdoCivil', $catEdoCivil);
    }

    /**
     * Update the specified CatEdoCivil in storage.
     *
     * @param  int              $id
     * @param UpdateCatEdoCivilRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCatEdoCivilRequest $request)
    {
        $catEdoCivil = $this->catEdoCivilRepository->findWithoutFail($id);

        if (empty($catEdoCivil)) {
            Flash::error('Cat Edo Civil not found');

            return redirect(route('catEdoCivils.index'));
        }

        $catEdoCivil = $this->catEdoCivilRepository->update($request->all(), $id);

        Flash::success('Cat Edo Civil updated successfully.');

        return redirect(route('catEdoCivils.index'));
    }

    /**
     * Remove the specified CatEdoCivil from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $catEdoCivil = $this->catEdoCivilRepository->findWithoutFail($id);

        if (empty($catEdoCivil)) {
            Flash::error('Cat Edo Civil not found');

            return redirect(route('catEdoCivils.index'));
        }

        $this->catEdoCivilRepository->delete($id);

        Flash::success('Cat Edo Civil deleted successfully.');

        return redirect(route('catEdoCivils.index'));
    }
}
