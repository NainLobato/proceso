<?php

namespace App\DataTables;

use App\Models\Proceso;
use Form;
use Yajra\Datatables\Services\DataTable;

class ProcesoDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
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
        $procesos = Proceso::query();

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
            'idUIPJ' => ['name' => 'idUIPJ', 'data' => 'idUIPJ'],
            'anioCarpeta' => ['name' => 'anioCarpeta', 'data' => 'anioCarpeta'],
            'numeroCarpeta' => ['name' => 'numeroCarpeta', 'data' => 'numeroCarpeta'],
            'anioProceso' => ['name' => 'anioProceso', 'data' => 'anioProceso'],
            'numeroProceso' => ['name' => 'numeroProceso', 'data' => 'numeroProceso'],
            'fechaInicioCarpeta' => ['name' => 'fechaInicioCarpeta', 'data' => 'fechaInicioCarpeta'],
            'idFiscal' => ['name' => 'idFiscal', 'data' => 'idFiscal'],
            'idJuez' => ['name' => 'idJuez', 'data' => 'idJuez'],
            'idJuzgado' => ['name' => 'idJuzgado', 'data' => 'idJuzgado'],
            'fechaRadicacion' => ['name' => 'fechaRadicacion', 'data' => 'fechaRadicacion'],
            'conDetenido' => ['name' => 'conDetenido', 'data' => 'conDetenido'],
            'obsequiaOrden' => ['name' => 'obsequiaOrden', 'data' => 'obsequiaOrden'],
            'fechaOrden' => ['name' => 'fechaOrden', 'data' => 'fechaOrden'],
            'observaciones' => ['name' => 'observaciones', 'data' => 'observaciones']
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
