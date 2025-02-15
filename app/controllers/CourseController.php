<?php
require_once  BASE_PATH . '/app/models/CourseModel.php';

class CourseController {
    private $model;

    public function __construct() {
        $this->model = new CourseModel();
    }

    public function showCourses() {
        if (isset($_GET['category'])) {
            $category = $_GET['category'];
            $courses = $this->model->getCoursesByCategory($category);
        } else {
            $courses = $this->model->getAllCourses();
        }

        return $courses;
    }

    public function showCategories() {
        return $this->model->getCategories();
    }
}
