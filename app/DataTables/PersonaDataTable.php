<?php

namespace App\DataTables;

use App\Models\Persona;
use Form;
use Yajra\Datatables\Services\DataTable;

class PersonaDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'personas.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $personas = Persona::query();

        return $this->applyScopes($personas);
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
            'id' => ['name' => 'id', 'data' => 'id'],
            'nombre' => ['name' => 'nombre', 'data' => 'nombre'],
            'paterno' => ['name' => 'paterno', 'data' => 'paterno'],
            'materno' => ['name' => 'materno', 'data' => 'materno'],
            'alias' => ['name' => 'alias', 'data' => 'alias'],
            'fechaNacimiento' => ['name' => 'fechaNacimiento', 'data' => 'fechaNacimiento'],
            'sexo' => ['name' => 'sexo', 'data' => 'sexo'],
           ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Personas';
    }
}
