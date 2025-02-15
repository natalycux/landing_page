<?php
require_once  BASE_PATH . '/config/config.php';

class CommentModel {
    private $conn;

    public function __construct() {
        $this->conn = Database::connect();
    }

    public function getPlatformComments() {
        $query = "SELECT * FROM comments ORDER BY id DESC LIMIT 10";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCourseComments($course_id) {
        $query = "SELECT * FROM course_comments WHERE course_id = :course_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':course_id', $course_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
