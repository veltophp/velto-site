<?php

namespace Modules\Auth\Models;

use Velto\Core\Model\Model;
use Modules\Community\Models\Thread;
use Modules\Community\Models\Comment;

class User extends Model
{
    protected string $table = 'users';

    protected array $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role',
        'email_verified',
    ];

    protected array $searchable = [
        'name','username','email','role',
    ];

    public function threads()
    {
        return $this->hasMany(Thread::class, 'userId', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'userId', 'id');
    }
}
