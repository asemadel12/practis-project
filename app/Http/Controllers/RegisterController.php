<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;
use app\Services\ManagerService;

class RegisterController extends Controller
{
    protected $managerService;
    public function __construct(ManagerService $managerService)
    {
        $this->managerService = $managerService;
    }

    function index()
    {
        return view('register');
    }
    public function register(Request $request)
    {
        try {
            $manager = $this->managerService->register($request->all());
            return redirect()->route('home')->with('success', 'Manager registered successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }
}
