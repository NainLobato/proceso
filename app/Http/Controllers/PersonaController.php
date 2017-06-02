<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePersonaRequest;
use App\Http\Requests\UpdatePersonaRequest;
use App\Repositories\PersonaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use DB;
use Yajra\Datatables\Datatables;
use App\Models\CatEdoCivil;
use App\Models\CatReligion;
use App\Models\CatEscolaridad;
use App\Models\CatEtnia;
use App\Models\CatNacionalidad;
use App\DataTables\PersonaDataTable;


class PersonaController extends AppBaseController
{
    /** @var  PersonaRepository */
    private $personaRepository;

    public function __construct(PersonaRepository $personaRepo)
    {
        $this->personaRepository = $personaRepo;
    }

    /**
     * Display a listing of the Persona.
     *
     * @param Request $request
     * @return Response
     */
    /**public function index(Request $request)
    {
        $this->personaRepository->pushCriteria(new RequestCriteria($request));
        $personas = $this->personaRepository->all();

        return view('personas.index')
            ->with('personas', $personas);
    }
*/
    public function index(personaDataTable $personaDataTable)
    {
        return $personaDataTable->render('personas.index');
    }


    /**
     * Show the form for creating a new Persona.
     *
     * @return Response
     */
    public function create()
    {
        $catEtnia=CatEtnia::orderBy('etnia','asc')->pluck('etnia','id');
        $catEdoCivil=CatEdoCivil::orderBy('estadoCivil','asc')->pluck('estadoCivil','id');
        $catReligion = CatReligion::orderBy('religion','asc')->pluck('religion','id');
        $catNacionalidad = CatNacionalidad::orderBy('nacionalidad','asc')->pluck('nacionalidad','id');
        $catEscolaridad = CatEscolaridad::orderBy('escolaridad','asc')->pluck('escolaridad','id');
        return view('personas.create',array('catEtnia'=>$catEtnia,'catReligion'=>$catReligion,'catNacionalidad'=>$catNacionalidad,'catEscolaridad'=>$catEscolaridad,'catEdoCivil'=>$catEdoCivil));
    }

    /**
     * Store a newly created Persona in storage.
     *
     * @param CreatePersonaRequest $request
     *
     * @return Response
     */
    public function store(CreatePersonaRequest $request)
    {
        $input = $request->all();
        $input['fechaNacimiento'] = $this->formatDate($input['fechaNacimiento']);

        $persona = $this->personaRepository->create($input);

        Flash::success('Persona guardado exitosamente.');

        return redirect(route('personas.index'));
    }

    /**
     * Display the specified Persona.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $persona = $this->personaRepository->findWithoutFail($id);

        if (empty($persona)) {
            Flash::error('Persona not found');

            return redirect(route('personas.index'));
        }

        return view('personas.show')->with('persona', $persona);
    }

    /**
     * Show the form for editing the specified Persona.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $persona = $this->personaRepository->findWithoutFail($id);

        if (empty($persona)) {
            Flash::error('Persona not found');

            return redirect(route('personas.index'));
        }

        $catEtnia=CatEtnia::pluck('etnia','id');
        $catEdoCivil=CatEdoCivil::pluck('estadoCivil','id');
        $catReligion = CatReligion::pluck('religion','id');
        $catNacionalidad = CatNacionalidad::pluck('nacionalidad','id');
        $catEscolaridad = CatEscolaridad::pluck('escolaridad','id');
  /*      
        $selectedEtnia=$persona->etnias()->get();
        $selectedEdoCivil=$persona->estadoCivil()->get();
        $selectedReligion = $persona->religion()->get();
        $selectedNacionalidad = $persona->nacionalidad()->get();
        $selectedEscolaridad = $persona->escolaridad()->get();
*/        

        return view('personas.edit',array('persona'=> $persona,'catEtnia'=>$catEtnia,'catReligion'=>$catReligion,'catNacionalidad'=>$catNacionalidad,'catEscolaridad'=>$catEscolaridad,'catEdoCivil'=>$catEdoCivil));
    }

    /**
     * Update the specified Persona in storage.
     *
     * @param  int              $id
     * @param UpdatePersonaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePersonaRequest $request)
    {
        $input=$request->all();
        $input['fechaNacimiento'] = $this->formatDate($input['fechaNacimiento']);
        $persona = $this->personaRepository->findWithoutFail($id);

        if (empty($persona)) {
            Flash::error('Persona not found');

            return redirect(route('personas.index'));
        }

        $persona = $this->personaRepository->update($input, $id);

        Flash::success('Persona updated successfully.');

        return redirect(route('personas.index'));
    }

    /**
     * Remove the specified Persona from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $persona = $this->personaRepository->findWithoutFail($id);

        if (empty($persona)) {
            Flash::error('Persona not found');

            return redirect(route('personas.index'));
        }

        $this->personaRepository->delete($id);

        Flash::success('Persona deleted successfully.');

        return redirect(route('personas.index'));
    }
}
