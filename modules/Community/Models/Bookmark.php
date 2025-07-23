<?php

namespace Modules\Community\Models;

use Velto\Core\Model\Model;
use Modules\Community\Models\Thread;
use Modules\Auth\Models\User;

class Bookmark extends Model
{
    protected string $table = 'bookmarks';
    protected array $fillable = [
        'userId',
        'threadId'
    ];
    protected array $searchable = [];


    public function thread()
    {
        return $this->belongsTo(Thread::class, 'threadId', 'threadId');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'userId');
    }


}
