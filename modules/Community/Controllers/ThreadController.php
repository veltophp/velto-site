<?php

namespace Modules\Community\Controllers;

use Velto\Core\Controller\Controller;
use Velto\Core\Request\Request;
use Modules\Community\Models\Thread;
use Modules\Community\Models\Comment;
use Modules\Community\Models\Bookmark;

use Modules\Auth\Models\Auth;
use Modules\Auth\Models\User;
use Velto\Core\Support\Uvid;
use Velto\Core\Support\Str;



class ThreadController extends Controller
{
    public function newThread()
    {
        $threads = Thread::where('status','open')->desc()->paginate(5);

        $categories = ['general-discussion', 'help-support', 'showcase', 'announcements'];
        $threadCounts = [];

        foreach ($categories as $key) {
            $threadCounts[$key] = Thread::where('category', $key)->count();
        }
    
        foreach ($threads as $thread) {
            $thread->commentCount = count($thread->comments());
        }

        return view('Community.new-thread',[
            'threads' => $threads,
            'threadCounts' => $threadCounts,
        ]);
    }

    public function submitThread(Request $request)
    {
        $userId = Auth::user()->id;

        $errors = validate($request->all(), [
            'category'  => 'required|string|max:255',
            'title'     => 'required|string|max:255',
            'content'   => 'required|string|max:2048',
            'tags'      => 'nullable|string|max:255',
            'image'     => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
        
        if (!empty($errors)) {
            flash()->to('#form-submit-thread')->error($errors);
            return to_route('new.thread');
        }

        $imageSave = null;

        if (hasFile($request, 'image')) {
            $file = $request->file('image');
            $imageName = imageName($file);
            $imageSave = imageSave($imageName)->from($file)->to('assets/thread/images');
        }

        $data =[
            'threadId' => Uvid::generate(8),
            'userId'  => $userId,
            'category' => $request->category,
            'title' => $request->title,
            'slug'  => Str::slug($request->title),
            'content' => $request->content,
            'tags' => $request->tags,
            'image' => $imageSave,
        ];

        $data = Thread::create($data);

        return to_route('community');

    }

    public function updateThread(Request $request)
    {
        $errors = validate($request->all(), [
            'category'  => 'required|string|max:255',
            'title'     => 'required|string|max:255',
            'content'   => 'required|string|max:2048',
            'tags'      => 'nullable|string|max:255',
            'status'    => 'nullable|string|max:255',
            'image'     => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        if (!empty($errors)) {
            return to_route_response('axion.dashboard')->errorAlert($errors);
        }
    
        $thread = Thread::where('threadId', $request->threadId)->first();
        if (!$thread) {
            return to_route_response('axion.dashboard')->errorAlert('Thread not found.');
        }
    
        if (hasFile($request, 'image')) {
            $file = $request->file('image');
            $imageName = imageName($file);
            $imageSave = imageSave($imageName)->from($file)->to('assets/thread/images');
        } else {
            $imageSave = $thread->image; 
        }
    
        $data = [
            'category' => $request->category,
            'title' => $request->title,
            'slug'  => Str::slug($request->title),
            'content' => $request->content,
            'tags' => $request->tags,
            'status' => $request->status,
            'image' => $imageSave,
        ];
    
        Thread::where('threadId', $request->threadId)->update($data);
    
        return to_route_response('axion.thread')->successAlert('Data updated successfully!');
    }
    
    public function deleteThread($slug)
    {
        $userId = Auth::user()->id;

        $thread = Thread::where('slug', $slug)->andWhere('userId', $userId)->first();

        if ($thread) {
            deleteImage($thread->image);

            Comment::where('threadId', $thread->threadId)->delete();
            Bookmark::where('threadId', $thread->threadId)->delete();

            $thread->delete();

            return to_route_response('axion.thread')->successAlert('Thread deleted successfully!');
        }

        return to_route_response('axion.thread')->errorAlert('Error! Failed to delete data.');
    }

    public function showTag($tag)
    {
        // Ambil threads berdasarkan tag
        $threads = Thread::where('status', 'open')
                    ->andWhere('tags', 'LIKE', "%$tag%")
                    ->desc('created_at')
                    ->paginate(5);

        // Ambil semua threads (untuk menghitung tag terpopuler)
        $allThreads = Thread::where('status', 'open')->get();

        // Hitung jumlah kemunculan setiap tag
        $tagCounts = [];

        foreach ($allThreads as $thread) {
            $tags = explode(',', $thread->tags ?? '');
            foreach ($tags as $t) {
                $t = trim($t);
                if ($t === '') continue;

                if (!isset($tagCounts[$t])) {
                    $tagCounts[$t] = 1;
                } else {
                    $tagCounts[$t]++;
                }
            }
        }

        // Urutkan berdasarkan jumlah kemunculan terbanyak
        arsort($tagCounts);

        // Ambil maksimal 10 tag terpopuler
        $popularTags = array_slice($tagCounts, 0, 10, true);

        return view('Community.tags',[
            'threads' => $threads,
            'popularTags' => $popularTags,
            'tag' => $tag
        ]);
    }

    public function showUser($username)
    {
        $user = User::where('username',$username)->first();

        $threads = Thread::where('userId', $user->id)->desc('created_at')->paginate(5);

        foreach ($threads as $thread) {
            $thread->commentCount = count($thread->comments());
        }

        $allThreads = Thread::where('status', 'open')->get();

        $tagCounts = [];

        foreach ($allThreads as $thread) {
            $tags = explode(',', $thread->tags ?? '');
            foreach ($tags as $t) {
                $t = trim($t);
                if ($t === '') continue;

                if (!isset($tagCounts[$t])) {
                    $tagCounts[$t] = 1;
                } else {
                    $tagCounts[$t]++;
                }
            }
        }

        arsort($tagCounts);

        $popularTags = array_slice($tagCounts, 0, 10, true);

        return view('Community.profile',[
            'threads' => $threads,
            'popularTags' => $popularTags,
            'user' => $user
        ]);

    }

    public function showCategory($category)
    {

        $threads = Thread::where('category', $category)->desc('created_at')->paginate(5);

        foreach ($threads as $thread) {
            $thread->commentCount = count($thread->comments());
        }

        $allThreads = Thread::where('status', 'open')->get();

        $tagCounts = [];

        foreach ($allThreads as $thread) {
            $tags = explode(',', $thread->tags ?? '');
            foreach ($tags as $t) {
                $t = trim($t);
                if ($t === '') continue;

                if (!isset($tagCounts[$t])) {
                    $tagCounts[$t] = 1;
                } else {
                    $tagCounts[$t]++;
                }
            }
        }

        arsort($tagCounts);

        $popularTags = array_slice($tagCounts, 0, 10, true);

        return view('Community.categories',[
            'threads' => $threads,
            'popularTags' => $popularTags,
            'category' => $category
        ]);
    }

    public function detailThread($slug)
    {
        $thread = Thread::where('slug', $slug)->first();

        if (!$thread) {
            abort(404, 'Thread not found.');
        } 

        // get all threads for sidebar menu 
        $threads = Thread::where('status','open')->desc()->paginate();

        // count thread on this user
        $postCount = Thread::where('userId', $thread->userId)->count();

        // get the comments from this threads
        $comments = $thread->comments();
        $commentCount = count($comments);

        $comments = collect($thread->comments)->sortByDesc('created_at')->values()->toArray();

        //get all category detail for side bar menu
        $categories = ['general-discussion', 'help-support', 'showcase', 'announcements'];
        $threadCounts = [];

        foreach ($categories as $key) {
            $threadCounts[$key] = Thread::where('category', $key)->count();
        }

        return view('Community.detail-thread', [
            'thread' => $thread,
            'threads' => $threads,
            'postCount' => $postCount,
            'comments' => $comments,
            'commentCount' => $commentCount,
            'threadCounts' => $threadCounts
        ]);
    }

    public function submitComment(Request $request, $threadId)
    {
        $userId = Auth::user()->id;

        $thread = Thread::where('threadId', $threadId)->first();

        if (!$thread) {
            abort(404, 'Thread not found.');
        }

        $comment = trim($request->comment);

        if ($comment === '') {
            flash()->to('#form-comment')->error('Comment cannot be empty.');
            return redirect()->route('detail.thread', ['slug' => $thread->slug]);
        }

        if (!is_clean_comment($comment)) {
            flash()->to('#form-comment')->error('Your comment contains words that are not allowed in this thread.');
            return redirect()->route('detail.thread', ['slug' => $thread->slug]);
        }

        $data = [
            'commentId' => Uvid::generate(12),
            'comment' => $comment,
            'userId' => $userId,
            'threadId' => $threadId,
        ];

        Comment::create($data);

        flash()->to('#form-comment')->success('Your comment has been posted successfully.');
        return redirect()->route('detail.thread', ['slug' => $thread->slug]);
    }

    public function searchThread(Request $request)
    {
        $keyword = trim($request->search ?? '');

        if ($keyword === '' || strlen($keyword) < 3) {
            return to_route('community');
        }

        if (!empty($searchError)) {
            flash()->to('#form-search')->error($searchError);
            return to_route('community');
        }

        $threads = Thread::search($keyword)->desc()->paginate();

        return view('Community.search-result')->with('threads',$threads);

    }

    public function bookmarkThread(Request $request)
    {
        $userId = Auth::user()->id;
        $threadId = $request->threadId;

        $thread = Thread::where('threadId',$request->threadId)->first();

        $ifExists = Bookmark::where('userId', $userId)
            ->andWhere('threadId', $threadId)
            ->first();

        if ($ifExists) {
            
            return to_route_response('detail.thread', ['slug' => $thread->slug])->errorAlert('This thread already in your bookmarks!');

        }

        Bookmark::create([
            'userId' => $userId,
            'threadId' => $request->threadId,
        ]);

        return to_route_response('detail.thread', ['slug' => $thread->slug])->successAlert('Added to your bookmarks');

    }

    public function deleteBookmark(Request $request, $slug)
    {
        $thread = Thread::where('slug', $slug)->first();

        if (!$thread) {
            abort(404);
        }

        Bookmark::where('threadId', $thread->threadId)
                ->andWhere('userId', Auth::user()->id)
                ->delete();

        return to_route_response('axion.activity')->successAlert('Bookmark has been removed!');
    }


}