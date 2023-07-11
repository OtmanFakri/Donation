<?php

namespace App\Http\Controllers;

use App\Repositories\Imp\ImpRepositories;
use App\Models\Admin;
use App\Models\User;
use App\Services\AdminService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UsersController extends Controller
{

    private $userService;


    public function __construct()
    {
        $userRepository = new ImpRepositories('App\Models\User');
        $userService = new AdminService($userRepository);
        $this->userService = $userService;

    }


    public function index()
    {
        $users = $this->userService->findAll();

        return View::make('Dashboard.Users-view',['users' => $users]);
    }

    public function shows()
    {

        $userRepository = new ImpRepositories('App\Models\Admin');
        $userService = new AdminService($userRepository);

        $user = $this->userService->findAll();

        return View::make('test.index',['users' => $user]);
    }

    public function Filter(Request $request)
    {
        $adminChecked = $request->input('admin', "Admin");
        $userChecked = $request->input('user', "User");
        if (!$adminChecked){
            echo  $adminChecked;
        }else
            echo $userChecked;
        return View::make('Dashboard.Users-view');
    }

    public function create()
    {
        // your code here
    }

    public function store(Request $request)
    {
        // your code here
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
