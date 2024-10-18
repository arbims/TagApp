<?php

namespace App\Controllers;

use App\Entities\Post;
use CodeIgniter\Config\Factories;

class PostsController extends BaseController 
{
    private $postModel;
    private $tagModel;

    public function __construct()
    {
        $this->postModel = Factories::models('PostModel');
        $this->tagModel = Factories::models('TagModel');
    }

    public function index()
    {
        $posts = $this->postModel->findAll();
        return view('posts/index', compact('posts'));
    }

    public function add()
    {
        $post = new Post();
        if ($this->request->is('post')) {
            $data = $this->request->getPost();
            if ($this->postModel->insert($data) == false) {
                return redirect()->back()->with('errors' , $this->postModel->errors())->withInput();
            }
            return redirect()->to('/posts')->with('success', 'Ajout avec success');
        }
        return view('posts/add', compact('post'));
    }

    public function edit(int $id)
    {
        $post = $this->postModel->find($id);
        if ($this->request->is('post') || $this->request->is('put')) {
            $data = $this->request->getPost();
            if ($this->postModel->update($id, $data) == false) {
                return redirect()->back()->with('errors' , $this->postModel->errors())->withInput();
            }
            return redirect()->to('/posts')->with('success', 'Modification avec success');
        }
        $tags = $this->tagModel->select('tags.id, tags.name')->join('posts_tags', 'posts_tags.tag_id = tags.id')->where('posts_tags.post_id', $id)->findAll();
        return view('posts/edit', compact('post', 'tags'));
    }
}