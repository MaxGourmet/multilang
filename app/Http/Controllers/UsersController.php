<?php

namespace Multilang\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Multilang\Http\Requests;
use Symfony\Component\HttpFoundation\Request;
use Validator;

class UsersController extends Controller
{

    public function profile() {
        return view('users/profile');
    }

    public function saveProfile(Request $request) {
        $user = Auth::user();
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }
        $postData = $request->all();
        unset($postData['_token']);
        if ($postData['password'] == '') {
            unset($postData['password']);
            unset($postData['password_confirmation']);
        }
        $needSave = false;
        foreach ($postData as $key => $value) {
            if (isset($user->$key)) {
                if ($postData[$key] == $user->$key) {
                    unset($postData[$key]);
                } else {
                    $needSave = true;
                    $user->$key = $postData[$key];
                }
            }
        }
        if ($needSave) {
            if (isset($_COOKIE['usersLanguage'])) {
                setcookie('usersLanguage', null);
            }
            $user->save();
        }
        return redirect('profile');
    }

    protected function validator(array $data)
    {
        $user = Auth::user();
        return Validator::make($data, [
            'name' => 'required|max:100',
            'email' => 'required|email|max:150|unique:users,email,'.$user->id,
            'username' => 'required|max:25|alpha_num|unique:users,username,'.$user->id,
            'language_id' => 'required|exists:languages,id',
            'password' => 'min:6|confirmed',
        ]);
    }
}
