<?php

use PHPUnit\Framework\TestCase;
use Advan\BlogWeb\Model\Post;
use Advan\BlogWeb\Controller\BlogController;

require_once __DIR__ . '/../../vendor/autoload.php';

class BlogControllerTest extends TestCase
{
    public function testIndex()
    {
        // mock data
        $mockPost = $this->createMock(Post::class);

        $mockPost->method('getAll')
                 ->willReturn([
                     ['title' => 'Test']
                 ]);

        $controller = new BlogController($mockPost);

        $result = $controller->index();

        $this->assertIsArray($result);
        $this->assertEquals('Test', $result[0]['title']);
    }

    public function testShow()
    {
        $_GET['id'] = 1;

        $mockPost = $this->createMock(Post::class);

        $mockPost->method('getById')
                 ->willReturn([
                     'title' => 'Test'
                 ]);

        $controller = new BlogController($mockPost);

        $result = $controller->show();

        $this->assertIsArray($result);
        $this->assertEquals('Test', $result['title']);
    }
}