<?php
namespace Advan\BlogWeb\Controller;

use Advan\BlogWeb\Model\Post;
use Advan\BlogWeb\Config\Database;
use Advan\BlogWeb\Core\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $postModel = new Post();
        $posts = $postModel->getAll();

        $this->view('Blog/index', [
            'posts' => $posts
        ]);
        return $posts; 
    }

    public function show()
    {
        $id = $_GET['id'] ?? null;

        if (!$id) {
            echo "Post tidak ditemukan";
            return;
        }

        $postModel = new Post();
        $post = $postModel->getById($id);

        $this->view('Blog/show', [
            'post' => $post
        ]);
        return $post; 
    }
}