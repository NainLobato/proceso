<?php

namespace App\DataTables;

use App\Models\Audiencia;
use Form;
use Yajra\Datatables\Services\DataTable;

class AudienciaDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'audiencias.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $audiencias = Audiencia::query();

        return $this->applyScopes($audiencias);
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
            'idTipoAudiencia' => ['name' => 'idTipoAudiencia', 'data' => 'idTipoAudiencia'],
            'fecha' => ['name' => 'fecha', 'data' => 'fecha'],
            'idJuez' => ['name' => 'idJuez', 'data' => 'idJuez'],
            'idFiscal' => ['name' => 'idFiscal', 'data' => 'idFiscal'],
            'resolucion' => ['name' => 'resolucion', 'data' => 'resolucion'],
            'idEtapa' => ['name' => 'idEtapa', 'data' => 'idEtapa'],
            'observaciones' => ['name' => 'observaciones', 'data' => 'observaciones'],
            'idProceso' => ['name' => 'idProceso', 'data' => 'idProceso'],
            'idImputado' => ['name' => 'idImputado', 'data' => 'idImputado']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'audiencias';
    }
}
