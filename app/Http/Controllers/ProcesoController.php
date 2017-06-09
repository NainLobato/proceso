<?php

namespace App\Http\Controllers;

use App\DataTables\ProcesoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateProcesoRequest;
use App\Http\Requests\UpdateProcesoRequest;
use App\Repositories\ProcesoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\Unidad;
use App\Models\CatFiscal;
use App\Models\CatJuez;
use App\Models\CatJuzgado;
use App\Models\Persona;
use App\Models\Proceso;
use App\Models\Direccion;
use App\Models\CatDelito;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\Victima;
use App\Models\Imputado;
class ProcesoController extends AppBaseController
{
    /** @var  ProcesoRepository */
    private $procesoRepository;

    public function __construct(ProcesoRepository $procesoRepo)
    {
        $this->procesoRepository = $procesoRepo;
    }

    /**
     * Display a listing of the Proceso.
     *
     * @param ProcesoDataTable $procesoDataTable
     * @return Response
     */
    public function index(ProcesoDataTable $procesoDataTable)
    {
        return $procesoDataTable->render('procesos.index');
    }

    /**
     * Show the form for creating a new Proceso.
     *
     * @return Response
     */
    public function create()
    {
        $personas=Persona::orderBy('nombreCompleto')->select(DB::raw('CONCAT(COALESCE(nombre," ")," ", COALESCE(paterno," ")," ",COALESCE(materno," ")) as nombreCompleto'),'id')->pluck('nombreCompleto','id');
        $procesos=Proceso::pluck('numeroProceso','id');
        $direcciones = Direccion::pluck('calle','id');
        $delitos = CatDelito::orderBy('delito')->pluck('delito','id');
        $unidades=Unidad::orderBy('nombre')->pluck('nombre','id');
        $fiscales= CatFiscal::orderBy('name')->pluck('name','id');
        $jueces= CatJuez::orderBy('juez')->pluck('juez','id');
        $juzgados= CatJuzgado::orderBy('juzgado')->pluck('juzgado','id');
        return view('procesos.create',array('unidades'=>$unidades,'fiscales'=>$fiscales, 'jueces'=>$jueces, 'juzgados'=>$juzgados,'personas'=>$personas,'procesos'=>$procesos,'direcciones'=>$direcciones,'delitos'=>$delitos));
    }

    /**
     * Store a newly created Proceso in storage.
     *
     * @param CreateProcesoRequest $request
     *
     * @return Response
     */
    public function store(CreateProcesoRequest $request)
    {
        $input = $request->all();
        $input['fechaInicioCarpeta'] = $this->formatDate($input['fechaInicioCarpeta']);
        $input['fechaRadicacion'] = $this->formatDate($input['fechaRadicacion']);
        $input['fechaOrden'] = $this->formatDate($input['fechaOrden']);
        $proceso = $this->procesoRepository->create($input);
        Flash::success('Proceso guardado exitosamente.');
        return redirect(route('procesos.index'));
    }

     /**
     * Store a newly created Proceso in storage.
     *
     * @param CreateProcesoRequest $request
     *
     * @return Response
     */
    public function saveProceso()
    {
        try{
              if (\Request::ajax()){
                $input=Input::all();
                $input['fechaInicioCarpeta'] = $this->formatDate(\Request::input('fechaInicioCarpeta'));
                $input['fechaRadicacion'] = $this->formatDate(\Request::input('fechaRadicacion'));
                $input['fechaOrden'] = $this->formatDate(\Request::input('fechaOrden'));
                $proceso = $this->procesoRepository->create($input);
                if($proceso){
                    return response()->json($proceso);
                }
                else{
                    return response()->json(['message' => 'Error al procesar la solicitud', 'proceso'=>json_encode($proceso)]);
                }
            }else{
                return response()->json(['message' => 'Formato de Petición Incorrecta']);
            }
        }catch(\Exception $e){
            return response()->json($e);
        }

    }


       /**
     * Store a newly created Victima for Proceso in storage.
     *
     * @param CreateProcesoRequest $request
     *
     * @return Response
     */
    public function saveVictima()
    {
         try{
             if (\Request::ajax()){
                $input=Input::all();
                $proceso = $this->procesoRepository->findWithoutFail($input['idProceso']);
                if (empty($proceso)) {
                    return response()->json(['message' => 'Proceso no encontrado']);
                }
                $victima=new Victima($input);
                if($victima){
                    $victima->save();
                    return response()->json($victima);
                }
                else{
                    return response()->json(['message' => 'Error al procesar la solicitud', 'proceso'=>json_encode($proceso)]);
                }
             }
             else{
                return response()->json(['message' => 'Formato de Petición Incorrecta']);
             }
        }catch(\Exception $e){
            return response()->json($e);
        }
    }

  /**
     * Store a newly created Victima for Proceso in storage.
     *
     * @param CreateProcesoRequest $request
     *
     * @return Response
     */
    public function saveImputado()
    {
         try{
             if (\Request::ajax()){
                $input=Input::all();
                $proceso = $this->procesoRepository->findWithoutFail($input['idProceso']);
                if (empty($proceso)) {
                    return response()->json(['message' => 'Proceso no encontrado']);
                }
                $imputado=new Imputado($input);
                if($imputado){
                    $imputado->save();    
                    return response()->json($imputado);
                }
                else{
                    return response()->json(['message' => 'Error al procesar la solicitud']);
                }
             }
             else{
                return response()->json(['message' => 'Formato de Petición Incorrecta']);
             }
        }catch(\Exception $e){
            return response()->json($e);
        }
    }

 /**
     * Store a newly created Victima for Proceso in storage.
     *
     * @param CreateProcesoRequest $request
     *
     * @return Response
     */
    public function saveImputacion()
    {
         try{
             if (\Request::ajax()){
                $input=Input::all();
                $proceso = $this->procesoRepository->findWithoutFail($input['idProceso']);
                if (empty($proceso)) {
                    return response()->json(['message' => 'Proceso no encontrado']);
                }
                $imputado=new Imputado($input);
                if($imputado){
                    $imputado->save();    
                    return response()->json($imputado);
                }
                else{
                    return response()->json(['message' => 'Error al procesar la solicitud']);
                }
             }
             else{
                return response()->json(['message' => 'Formato de Petición Incorrecta']);
             }
        }catch(\Exception $e){
            return response()->json($e);
        }
    }

    /**
     * Display the specified Proceso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $proceso = $this->procesoRepository->findWithoutFail($id);

        if (empty($proceso)) {
            Flash::error('Proceso not found');

            return redirect(route('procesos.index'));
        }

        return view('procesos.show')->with('proceso', $proceso);
    }

    /**
     * Show the form for editing the specified Proceso.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $unidades=Unidad::pluck('nombre','id');
        $fiscales= CatFiscal::pluck('name','id');
        $jueces= CatJuez::pluck('juez','id');
        $juzgados= CatJuzgado::pluck('juzgado','id');
   

   
        $proceso = $this->procesoRepository->findWithoutFail($id);

        if (empty($proceso)) {
            Flash::error('Proceso not found');

            return redirect(route('procesos.index'));
        }

        return view('procesos.edit',array('unidades'=>$unidades,'fiscales'=>$fiscales, 'jueces'=>$jueces, 'juzgados'=>$juzgados))->with('proceso', $proceso);
    }

    /**
     * Update the specified Proceso in storage.
     *
     * @param  int              $id
     * @param UpdateProcesoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProcesoRequest $request)
    {
        $proceso = $this->procesoRepository->findWithoutFail($id);

        if (empty($proceso)) {
            Flash::error('Proceso not found');

            return redirect(route('procesos.index'));
        }

        $proceso = $this->procesoRepository->update($request->all(), $id);

        Flash::success('Proceso updated successfully.');

        return redirect(route('procesos.index'));
    }

    /**
     * Remove the specified Proceso from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $proceso = $this->procesoRepository->findWithoutFail($id);

        if (empty($proceso)) {
            Flash::error('Proceso not found');

            return redirect(route('procesos.index'));
        }

        $this->procesoRepository->delete($id);

        Flash::success('Proceso deleted successfully.');

        return redirect(route('procesos.index'));
    }

   
}
