<?php

namespace Modules\Community\Models;

use Velto\Core\Model\Model;
use Modules\Auth\Models\User;
use Modules\Community\Models\Comment;

class Thread extends Model
{
    protected string $table = 'threads';

    protected array $fillable = [
        'threadId',
        'userId',
        'category',
        'title',
        'slug',
        'content',
        'tags',
        'image',
        'status'
    ];

    protected array $searchable = ['title', 'content', 'tags'];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'threadId', 'threadId');
    }
}
