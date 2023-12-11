<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use app\Repository\UserRepository;
use Illuminate\View\View;


/**
 * Class UserController
 *
 * This class is responsible for handling user-related actions.
 */
class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @param UserRepository $users
     */
    public function __construct(protected UserRepository $users)    {

    }

    /**
     * Show user profile.
     *
     * @param string $id The ID of the user to show profile.
     * @return View The view rendering the user profile page.
     */
    public function show(string $id) : View
    {
        $user = $this->users->find($id);

        return view('user.profile', ['user' => $user]);
    }
}
