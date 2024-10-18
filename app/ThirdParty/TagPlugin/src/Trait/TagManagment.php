<?php

namespace TagPlugin\Trait;

use TagPlugin\Models\PostTagModel;
use TagPlugin\Models\TagModel;

trait TagManagment
{

  public function buildTags(array $entity)
  {
    $request = \Config\Services::request();

    $tagModel = new TagModel();
    $postTagModel = new PostTagModel();
    $data = $request->getPost();
    $tags = explode(',', $data['tags'][0]);
    $result = array_column($tagModel->whereIn('name', $tags)->asArray()->findAll(), 'name', 'id');
    $inexist = array_diff($tags, $result);
    foreach ($inexist as $v) {
      $tagModel->insert(['name' => $v]);
    }
    $endresult = $tagModel->whereIn('name', $tags)->asArray()->findAll();
    $existingPostTags = array_column($postTagModel->where('post_id', $entity['id'])->findAll(), 'tag_id');
    $newTagIds = array_column($endresult, 'id');
    $tagsToDelete = array_diff($existingPostTags, $newTagIds);
    if (!empty($tagsToDelete)) {
      $postTagModel->where('post_id', $entity['id'])
        ->whereIn('tag_id', $tagsToDelete)
        ->delete();
    }
    foreach ($newTagIds as $tagId) {
      if (!in_array($tagId, $existingPostTags)) {
        $postTagModel->insert([
          'tag_id' => $tagId,
          'post_id' => $entity['id']
        ]);
      }
    }
  }
}
