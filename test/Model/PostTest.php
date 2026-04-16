<?php

use PHPUnit\Framework\TestCase;
use Advan\BlogWeb\Model\Post;

require_once __DIR__ . '/../../app/Model/Post.php';
require_once __DIR__ . '/../../app/Config/database.php';
require_once __DIR__ . '/../../config/database.php';

class PostTest extends TestCase
{
    private Post $post;

    protected function setUp(): void
    {
        $this->post = new Post();
    }

    public function testGetAll()
    {
        $result = $this->post->getAll();

        $this->assertIsArray($result);
    }

    public function testGetById()
    {
        $result = $this->post->getById(1);

        $this->assertIsArray($result);
        $this->assertArrayHasKey('title', $result);
    }
}