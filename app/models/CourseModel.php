<?php
require_once  BASE_PATH . '/config/Database.php';

class CourseModel {
    private $conn;

    public function __construct() {
        $this->conn = Database::connect();
    }

    public function getAllCourses() {
        $query = "SELECT * FROM courses";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCoursesByCategory($category) {
        $query = "SELECT * FROM courses WHERE category = :category";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':category', $category);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCategories() {
        $query = "SELECT DISTINCT category FROM courses";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
