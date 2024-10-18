<?php

namespace TagPlugin\Entities;

use CodeIgniter\Entity\Entity;

class Tag extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts   = [];
}
