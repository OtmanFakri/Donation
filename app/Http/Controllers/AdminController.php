<?php

namespace App\Http\Controllers;

use App\DTO\AdminRequest;
use App\Repositories\Imp\ImpRepositories;
use App\Models\Admin;
use App\Models\User;
use App\Services\AdminService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{

    private $userService;


    public function __construct()
    {
        $userRepository = new ImpRepositories('App\Models\Admin');
        $userService = new AdminService($userRepository);
        $this->userService = $userService;

    }


    public function index()
    {

    }


    public function create()
    {

    }

    public function store(Request $request)
    {

        try {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
            ]);
        } catch (ValidationException $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }

        $req=$this->userService->addUser(new AdminRequest($request->all()));
        if($req){
            return redirect()->route('users-view')->withsuccess('User created successfully');
        }else{
            return redirect()->route('users-view')->withErrors('User created failed');
        }
        //return response()->json(['success' => $adminRequest]);
        //return $adminRequest;
    }

    public function edit($id)
    {
        // your code here
    }

    public function update(Request $request, $id)
    {
        // your code here
    }

    public function destroy($id)
    {
        // your code here
    }
}
