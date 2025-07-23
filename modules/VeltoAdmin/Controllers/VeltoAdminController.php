<?php

namespace Modules\VeltoAdmin\Controllers;

use Velto\Core\Controller\Controller;
use Velto\Core\Request\Request;
use Modules\Auth\Models\VeltoAdmin;

use Modules\Auth\Models\User;
use Modules\Community\Models\Thread;
use Modules\Community\Models\Comment;
use Modules\Community\Models\Bookmark;


class VeltoAdminController extends Controller
{
    public function veltoAdmin()
    {

        $users = (new User)->desc()->paginate(10);
        $threads = (new Thread)->desc()->paginate(10);
        $comments = (new Comment)->desc()->paginate(10);

        $totalUsers = (new User)->desc()->count();
        $totalThreads = (new Thread)->desc()->count();
        $totalComments = (new Comment)->desc()->count();

        foreach ($threads as $thread) {
            $thread->commentCount = count($thread->comments());
        }


        return view('veltoadmin.veltoadmin',[
            'users' => $users,
            'threads' => $threads,
            'comments' => $comments,
            'totalUsers' => $totalUsers,
            'totalThreads' => $totalThreads,
            'totalComments' => $totalComments,
        ]);
    }


    public function searchUser(Request $request)
    {
        $keyword = trim($request->search_user ?? '');

        if ($keyword === '' || strlen($keyword) < 3) {
            return to_route('veltoadmin');
        }

        $users = User::search($keyword)->desc()->paginate(10);

        $threads = (new Thread)->desc()->paginate(10);
        $comments = (new Comment)->desc()->paginate(10);

        $totalUsers = (new User)->desc()->count();
        $totalThreads = (new Thread)->desc()->count();
        $totalComments = (new Comment)->desc()->count();

        foreach ($threads as $thread) {
            $thread->commentCount = count($thread->comments());
        }


        return view('veltoadmin.veltoadmin',[
            'users' => $users,
            'threads' => $threads,
            'comments' => $comments,
            'totalUsers' => $totalUsers,
            'totalThreads' => $totalThreads,
            'totalComments' => $totalComments,
        ]);

    }

    public function userUpdate(Request $request, $username)
    {

        $errors = validate($request->all(), [
            'name'  => 'required|string|max:60',
            'email' => 'required|email|max:60',
            'role'  => 'required|string|max:60',
        ]);
        
        if (!empty($errors)) {
            return to_route_response('veltoadmin')->errorAlert($errors);
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role
        ];

        $user = User::where('username', $username)->first();

        if($user){
           
            User::where('username', $username)->update($data);

            return to_route_response('veltoadmin')->successAlert('User data has been updated successfully!');

        }

        abort('404');

    }

    public function softDelete(Request $request)
    {

        validate($request->all(), [
            'commentId' => 'required',
            'status' => 'required|in:visible,hidden'

        ]);

        Comment::where('commentId', $request->commentId)
            ->update(['status' => $request->status]);

        $message = '';

            if ($request->status === 'hidden') {
                $message = 'Comment has been hidden!';
            } else {
                $message = 'Comment is now visible.';
            }

        return to_route_response('veltoadmin')->successAlert($message);
    }

    public function deleteThread($slug)
    {
        $thread = Thread::where('slug', $slug)->first();

        if ($thread) {
            deleteImage($thread->image);

            Comment::where('threadId', $thread->threadId)->delete();

            Bookmark::where('threadId', $thread->threadId)->delete();

            $thread->delete();

            return to_route_response('veltoadmin')->successAlert('Thread deleted successfully!');
        }

        return to_route_response('veltoadmin')->errorAlert('Error! Failed to delete data.');
    }


}