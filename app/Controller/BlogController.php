<?php

use Advan\BlogWeb\Model;

class BlogController extends Controller {

    public function index()
    {
        $postModel = new Post();
        $posts = $postModel->getAll();

        $this->view('blog/index', [
            'posts' => $posts
        ]);
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

        $this->view('blog/show', [
            'post' => $post
        ]);
    }
}