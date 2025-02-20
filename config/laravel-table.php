<?php

return [

    'classes' => [
        'container' => ['table-responsive'],
        'table'     => ['table-striped', 'table-hover'],
        'tr'        => [],
        'th'        => ['align-middle'],
        'td'        => ['align-middle'],
        'results'   => ['table-dark', 'font-weight-bold'],
        'disabled'  => ['table-danger', 'disabled'],
    ],

    'icon' => [
        'rowsNumber' => '<i class="fas fa-list"></i>',
        'sort'       => '<i class="fas fa-sort fa-fw"></i>',
        'sortAsc'    => '<i class="fas fa-sort-up fa-fw"></i>',
        'sortDesc'   => '<i class="fas fa-sort-down fa-fw"></i>',
        'search'     => '<i class="fas fa-search"></i>',
        'validate'   => '<i class="fas fa-check"></i>',
        'cancel'     => '<i class="fas fa-times"></i>',
        'create'     => '<i class="fas fa-plus-circle fa-fw "></i>',
        'edit'       => '<i class="fas fa-edit fa-fw"></i>',
        'destroy'    => '<i class="fas fa-trash fa-fw"></i>',
        'show'       => '<i class="fas fa-eye fa-fw"></i>',
    ],

    'value' => [
        'rowsNumber'                    => 20,
        'rowsNumberSelectionActivation' => true,
    ],

    'template' => [
        'table'   => 'bootstrap.table',
        'thead'   => 'bootstrap.thead',
        'tbody'   => 'bootstrap.tbody',
        'results' => 'bootstrap.results',
        'tfoot'   => 'bootstrap.tfoot',
    ],

];
