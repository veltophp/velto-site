<?php

namespace Modules\Axion\Controllers;

use Velto\Core\Controller\Controller;
use Velto\Core\Request\Request;
use Velto\Core\Session\Session;

use Modules\Auth\Models\User;
use Modules\Auth\Models\Auth;
use Modules\Community\Models\Thread;
use Modules\Community\Models\Comment;
use Modules\Community\Models\Activity;
use Modules\Community\Models\Bookmark;

class AxionController extends Controller
{
    public function axionDashboard()
    {
        return view('Axion.axion-dashboard',[
            'message' => 'Welcome to Axion Dashboard.',
        ]);
    }

    public function axionThread()
    {
        $userId = Auth::user()->id;

        $threads = Thread::where('userId', $userId)->desc()->paginate();

        foreach ($threads as $thread) {
            $thread->commentCount = count($thread->comments());
        }

        return view('Axion.axion-thread',[
            'message' => 'Welcome to Axion Dashboard.',
            'threads' => $threads,
        ]);
    }

    public function examplePage()
    {
        $message = 'Hello, this is Example page!';
        
        return view('Axion.axion-example-page')->compact($message);

    }

    public function axionProfile()
    {
        return view('Axion.axion-profile');
    }

    public function updateName(Request $request)
    {
        $errors = validate($request->all(), [
            'name' => 'required|string|min:3|max:50',
        ]);

        if (!empty($errors)) {
            flash()->to('#form-update-name')->error($errors);
            return to_route('axion.profile');
        }

        $name = $request->name;
        $nameLower = strtolower($name);

        $forbiddenNames = ['velto', 'veltophp', 'admin', 'official', 'developer', 'moderator'];

        foreach ($forbiddenNames as $forbidden) {
            if (strpos($nameLower, $forbidden) !== false) {
                flash()->to('#form-update-name')->error('The name is not available. Please use your real name.');
                return to_route('axion.profile');
            }
        }

        $regexPatterns = [
            '/^velto/i',                 
            '/^admin/i',                 
            '/(official|support)/i',     
            '/velto\s?team/i',           
            '/^dev(eloper)?$/i',         
        ];

        foreach ($regexPatterns as $pattern) {
            if (preg_match($pattern, $name)) {
                flash()->to('#form-update-name')->error('The name is not available. Please use your real name.');
                return to_route('axion.profile');
            }
        }

        $user = Auth::user();

        if (!$user) {
            flash()->to('#form-update-name')->error('Session expired. Please login again.');
            return to_route('login');
        }

        $updateName = User::where('id', $user->id)->update('name', $name);

        if (!$updateName) {
            flash()->to('#form-update-name')->error('Failed to update name. Please try again.');
            return to_route('axion.profile');
        }

        flash()->to('#form-update-name')->success('Name updated successfully.');
        return to_route('axion.profile');
    }

    public function changePassword(Request $request)
    {
        $errors = validate($request->all(), [
            'current_password'          => 'required',
            'new_password'              => 'required|min:8',
            'new_password_confirmation' => 'required|same:new_password',
        ]);

        if (!empty($errors)) {
            flash()->to('#form-change-password')->error($errors);
            return to_route('axion.profile');
        }

        $user = Auth::user();

        if (!$user) {
            flash()->to('#form-change-password')->error('Session expired. Please login again.');
            return to_route('login');
        }
        
        if (!hash_check($request->current_password, $user->password)) {
            flash()->to('#form-change-password')->error('Incorrect current password.');
            return to_route('axion.profile');
        }

        $changePassword = User::where('id', $user->id)->update('password', bcrypt($request->input('new_password')));

        if (!$changePassword) {
            flash()->to('#form-change-account')->error('Failed to change password. Please try again.');
            return to_route('axion.profile');
        }

        flash()->to('#form-change-password')->success('Password updated successfully.');
        return to_route('axion.profile');

    }

    public function deleteAccount(Request $request)
    {
        $password = $request->password;

        if (!$password) {
            flash()->to('#form-delete-account')->error('Password is required.');
            return to_route('axion.profile');
        }

        $user = Auth::user();

        if (!$user) {
            flash()->to('#form-delete-account')->error('Session expired. Please login again.');
            return to_route('login');
        }

        if (!hash_check($password, $user->password)) {
            flash()->to('#form-delete-account')->error('Incorrect password.');
            return to_route('axion.profile');
        }

        Comment::where('userId', $user->id)->delete();

        $threads = Thread::where('userId', $user->id)->get();

        foreach ($threads as $thread) {

            deleteImage($thread->image);

            Comment::where('threadId', $thread->id)->delete();

            $thread->delete();
        }

        $deleted = User::where('email', $user->email)->delete();

        if (!$deleted) {
            flash()->to('#form-delete-account')->error('Failed to delete account. Please try again.');
            return to_route('axion.profile');
        }

        Session::destroy();
        return to_route('home');
    }


    public function axionActivity()
    {
        $userId = Auth::user()->id;
        $bookmarks = Bookmark::where('userId', $userId)->get();

        $threads = [];

        foreach ($bookmarks as $bookmark) {
            $result = Thread::where('threadId', $bookmark->threadId)->get();
            foreach ($result as $thread) {
                $threads[] = $thread;
            }
        }

        foreach ($threads as $thread) {
            $thread->commentCount = count($thread->comments());
        }

        return view('Axion.axion-activity', [
            'threads' => $threads
        ]);
    }
    
}

