<?php

namespace App\Http\Controllers\Admin;

use App\Datatable;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;

class DataTablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.examples.datatables');
    }

    public function data()
    {
        $tables = Datatable::select(['id', 'firstname', 'lastname', 'email']);

        return DataTables::of($tables)
            ->make(true);
    }
}
