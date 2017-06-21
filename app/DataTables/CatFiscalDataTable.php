<?php

namespace App\DataTables;

use App\Models\CatFiscal;
use Form;
use Yajra\Datatables\Services\DataTable;

class CatFiscalDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'cat_fiscals.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $catFiscals = CatFiscal::query();

        return $this->applyScopes($catFiscals);
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
            'Usuario' => ['name' => 'username', 'data' => 'username'],
            'password' => ['name' => 'password', 'data' => 'password'],
            'Nombre' => ['name' => 'name', 'data' => 'name'],
            'Unidad' => ['name' => 'idUnidad', 'data' => 'idUnidad'],
            'Correo' => ['name' => 'correo', 'data' => 'correo'],
            'Nivel' => ['name' => 'level', 'data' => 'level'],
            'Nombramiento' => ['name' => 'nombramiento', 'data' => 'nombramiento']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'catFiscals';
    }
}
