<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActionLog;

class LogBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actionLogs = ActionLog::where('object_type', '=', 'barangs')->orderBy('created_at', 'desc')->paginate(20);

        return view('admin.log_barang.index', [
            'actionLogs' => $actionLogs,
        ]);
    }
}
