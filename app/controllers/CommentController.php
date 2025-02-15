<?php
require_once  BASE_PATH .  '/app/models/CommentModel.php';

class CommentController {
    private $model;

    public function __construct() {
        $this->model = new CommentModel();
    }

    public function showPlatformComments() {
        return $this->model->getPlatformComments();
    }
}
