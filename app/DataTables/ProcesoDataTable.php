<?php

namespace App\DataTables;

use App\Models\Proceso;
use Form;
use Yajra\Datatables\Services\DataTable;
use DB;
use Yajra\Datatables\Datatables;

class ProcesoDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
       /* return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'procesos.datatables_actions')
            ->make(true);*/
            $procesos = DB::table('procesos')
                    ->join('cat_juezs','procesos.idJuez','=','cat_juezs.id')
                    ->join('cat_juzgados','procesos.idJuzgado','=','cat_juzgados.id')
                    ->join('cat_fiscals','procesos.idFiscal','=','cat_fiscals.id')
                    ->join('unidads','procesos.idUIPJ','=','unidads.id')
                    ->whereNull('procesos.deleted_at')
                    ->select(['procesos.*', 'unidads.nombre', 'cat_fiscals.name', 'cat_juzgados.juzgado','cat_juezs.juez']);
            /*return Datatables::of($procesos)
            ->addColumn('action', 'procesos.datatables_actions')
            ->make(true);*/
            return $this->datatables
            ->queryBuilder($procesos)
            ->addColumn('action', 'procesos.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
      /*  $procesos = DB::table('procesos')
                    ->join('cat_juezs','procesos.idJuez','=','cat_juezs.id')
                    ->join('cat_juzgados','procesos.idJuzgado','=','cat_juzgados.id')
                    ->join('cat_fiscals','procesos.idFiscal','=','cat_fiscals.id')
                    ->join('unidads','procesos.idUIPJ','=','unidads.id')
                    ->select(['procesos.*', 'unidads.nombre as uipj', 'cat_fiscals.name as fiscal', 'cat_juzgados.juzgado','cat_juezs.juez']);
        */
        $procesos =Proceso::query();
        return $this->applyScopes($procesos);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => '10%'])
            ->ajax('')
            ->parameters([
                'dom' => 'Bfrtip',
                'scrollX' => false,
                'buttons' => [
                    'print',
                    'reset',
                    'reload',
                    [
                         'extend'  => 'collection',
                         'text'    => '<i class="fa fa-download"></i> Export',
                         'buttons' => [
                             'csv',
                             'excel',
                             'pdf',
                         ],
                    ],
                    'colvis'
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'UIPJ' => ['name' => 'unidads.nombre', 'data' => 'nombre'],
            'Año Carpeta' => ['name' => 'anioCarpeta', 'data' => 'anioCarpeta'],
            'No. Carpeta' => ['name' => 'numeroCarpeta', 'data' => 'numeroCarpeta'],
            'Año Proceso' => ['name' => 'anioProceso', 'data' => 'anioProceso'],
            'No. Proceso' => ['name' => 'numeroProceso', 'data' => 'numeroProceso'],
            'Fiscal' => ['name' => 'cat_fiscals.name', 'data' => 'name'],
            'Juez' => ['name' => 'cat_juezs.juez', 'data' => 'juez'],
            'Juzgado' => ['name' => 'cat_juzgados.juzgado', 'data' => 'juzgado'],
            'Fecha' => ['name' => 'fechaRadicacion', 'data' => 'fechaRadicacion'],
            'Observaciones' => ['name' => 'observaciones', 'data' => 'observaciones']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'procesos';
    }
}
