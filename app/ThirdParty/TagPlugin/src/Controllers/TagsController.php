<?php

namespace TagPlugin\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Config\Factories;

class TagsController extends BaseController {

    use ResponseTrait;

    private $tagModel;
    
    public function __construct()
    {
        $this->tagModel = Factories::models('TagModel');
    }

    public function index()
    {
        $tags = $this->tagModel->findAll();
        return $this->respond($tags, 200);
    }
}