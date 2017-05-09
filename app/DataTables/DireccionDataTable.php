<?php

namespace App\DataTables;

use App\Models\Direccion;
use Form;
use Yajra\Datatables\Services\DataTable;

class DireccionDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'direccions.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $direccions = Direccion::query();

        return $this->applyScopes($direccions);
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
            'calle' => ['name' => 'calle', 'data' => 'calle'],
            'numeroInterior' => ['name' => 'numeroInterior', 'data' => 'numeroInterior'],
            'numeroExterior' => ['name' => 'numeroExterior', 'data' => 'numeroExterior'],
            'idCodigo' => ['name' => 'idCodigo', 'data' => 'idCodigo'],
            'entreCalle1' => ['name' => 'entreCalle1', 'data' => 'entreCalle1'],
            'entreCalle2' => ['name' => 'entreCalle2', 'data' => 'entreCalle2'],
            'referencia' => ['name' => 'referencia', 'data' => 'referencia'],
            'idTipoLugar' => ['name' => 'idTipoLugar', 'data' => 'idTipoLugar']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'direccions';
    }
}
