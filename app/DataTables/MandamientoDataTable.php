<?php

namespace App\DataTables;

use App\Models\Mandamiento;
use Form;
use Yajra\Datatables\Services\DataTable;
use Yajra\Datatables\Facades\Datatables;

class MandamientoDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'mandamientos.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $mandamientos = Mandamiento::query();

        return $this->applyScopes($mandamientos);
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
            'idTipoMandamiento' => ['name' => 'idTipoMandamiento', 'data' => 'idTipoMandamiento'],
            'idAudiencia' => ['name' => 'idAudiencia', 'data' => 'idAudiencia'],
            'numeroOficio' => ['name' => 'numeroOficio', 'data' => 'numeroOficio'],
            'fechaOficio' => ['name' => 'fechaOficio', 'data' => 'fechaOficio'],
            'nombreGrupo' => ['name' => 'nombreGrupo', 'data' => 'nombreGrupo'],
            'fechaRecepcion' => ['name' => 'fechaRecepcion', 'data' => 'fechaRecepcion'],
            'fechaAsignacion' => ['name' => 'fechaAsignacion', 'data' => 'fechaAsignacion']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'mandamientos';
    }
}
