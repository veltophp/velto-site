<?php

use Velto\Axion\Models\BlogTopic;

class TopicSeeder
{
    public function run()
    {
        
        $now = date('Y-m-d H:i:s');

        BlogTopic::insert([
            [
                'topic_id'      => uvid(6),
                'topic'         => 'Untopic',
                'description'   => 'This is Untopic',
                'created_at'    => $now,
                'updated_at'    => $now,
            ]
        ]);
    }
}