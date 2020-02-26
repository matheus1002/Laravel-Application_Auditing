<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use OwenIt\Auditing\Models\Audit;

class AuditController extends Controller
{
    public function index()
    {
        $audits = Audit::all();
        return view('admin.audits.index', compact('audits'));
    }

    public function show(Audit $audit)
    {

        return view('admin.audits.show', compact('audit'));
    }
}
