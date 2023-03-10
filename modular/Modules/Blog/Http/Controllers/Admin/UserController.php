<?php

namespace Modules\Blog\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Modules\Blog\Entities\Role;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Modules\Blog\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */



     public function __construct()
     {
        
        $this->middleware('isAdmin');
     }



    public function index()
    {
        $users=User::with('roles')->get();

        return view('blog::Admin.Users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('blog::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('blog::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(User $user)
    {
        $roles=Role::all();
        return view('blog::Admin.Users.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        //
        //Synchroniser les roles de l'utilisateur par les nouveaux roles, representer par un table d'id
        $user->roles()->sync($request->roles);

        // Modifier les informations de l'utilisateur
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();
        
        //redirection vers la route de l'index
        return redirect()->route('user.index')->with('succes','L\'utilisateur a été modifier !');;
        
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
