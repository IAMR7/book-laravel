<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AdminModel;
use App\Models\BookModel;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->BookModel = new BookModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data['listbook'] = $this->BookModel->alldata();
        return view('admin/v_index', $data);
    }
}
