<?php

namespace App\DataTables;

use App\Models\Imputado;
use Form;
use Yajra\Datatables\Services\DataTable;

class ImputadoDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'imputados.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $imputados = Imputado::query();

        return $this->applyScopes($imputados);
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
            'idPersona' => ['name' => 'idPersona', 'data' => 'idPersona'],
            'idProceso' => ['name' => 'idProceso', 'data' => 'idProceso'],
            'idDireccion' => ['name' => 'idDireccion', 'data' => 'idDireccion'],
            'esDetenido' => ['name' => 'esDetenido', 'data' => 'esDetenido'],
            'fechaDetencion' => ['name' => 'fechaDetencion', 'data' => 'fechaDetencion']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'imputados';
    }
}
