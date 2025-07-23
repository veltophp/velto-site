<?php

namespace Modules\Community\Controllers;

use Velto\Core\Controller\Controller;
use Velto\Core\Request\Request;
use Modules\Community\Models\Community;
use Modules\Community\Models\Thread;



class CommunityController extends Controller
{
    public function community()
    {
        $threads = Thread::where('status', 'open')->desc()->paginate(5);

        $categories = ['general-discussion', 'help-support', 'showcase', 'announcements'];
        $threadCounts = [];

        foreach ($categories as $key) {
            $threadCounts[$key] = Thread::where('category', $key)->count();
        }
    
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
                $tagCounts[$t] = ($tagCounts[$t] ?? 0) + 1;
            }
        }

        // --- Trending Threads ---
        $trendingThreads = filter_array($allThreads, function ($thread) {
            return count($thread->comments()) > 10;
        });

        $trendingThreads = sort_by_desc($trendingThreads, function ($thread) {
            return count($thread->comments());
        });

        $trendingThreads = array_slice($trendingThreads, 0, 5);

        // 💬 Simpan jumlah komentar
        $trendingThreadsCommentCount = array_map(function ($thread) {
            return count($thread->comments());
        }, $trendingThreads);

    
        arsort($tagCounts);
        $popularTags = array_slice($tagCounts, 0, 10, true);
    
        return view('Community.community', [
            'threads' => $threads,
            'popularTags' => $popularTags,
            'threadCounts' => $threadCounts,
            'trendingThreads' => $trendingThreads,
            'trendingThreadsCommentCount' => $trendingThreadsCommentCount
        ]);
    }

}