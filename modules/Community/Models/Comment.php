<?php

namespace Modules\Community\Models;

use Velto\Core\Model\Model;
use Modules\Auth\Models\User;
use Modules\Community\Models\Thread;

class Comment extends Model
{
    protected string $table = 'comments';

    protected array $fillable = [
        'commentId',
        'comment',
        'userId',
        'threadId',
        'status',
    ];

    protected array $searchable = ['comment'];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'id');
    }

    public function thread()
    {
        return $this->belongsTo(Thread::class, 'threadId', 'threadId');
    }
}
