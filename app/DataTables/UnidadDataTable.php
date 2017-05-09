<?php

namespace App\DataTables;

use App\Models\Unidad;
use Form;
use Yajra\Datatables\Services\DataTable;

class UnidadDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'unidads.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $unidads = Unidad::query();

        return $this->applyScopes($unidads);
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
            'nombre' => ['name' => 'nombre', 'data' => 'nombre'],
            'direccion' => ['name' => 'direccion', 'data' => 'direccion'],
            'latitud' => ['name' => 'latitud', 'data' => 'latitud'],
            'longitud' => ['name' => 'longitud', 'data' => 'longitud'],
            'idFiscal' => ['name' => 'idFiscal', 'data' => 'idFiscal'],
            'telefono' => ['name' => 'telefono', 'data' => 'telefono'],
            'distrito' => ['name' => 'distrito', 'data' => 'distrito'],
            'region' => ['name' => 'region', 'data' => 'region'],
            'clave' => ['name' => 'clave', 'data' => 'clave']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'unidads';
    }
}
