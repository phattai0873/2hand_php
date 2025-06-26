<?php
class Message {
    private $db;

    public function __construct($conn) {
        $this->db = $conn;
    }

    public function sendMessage($sender_id, $receiver_id, $message) {
        $stmt = $this->db->prepare("INSERT INTO messages (sender_id, receiver_id, message) VALUES (?, ?, ?)");
        $stmt->bind_param("iis", $sender_id, $receiver_id, $message);
        return $stmt->execute();
    }

    public function getMessages($user1, $user2) {
        $stmt = $this->db->prepare("
            SELECT * FROM messages 
            WHERE (sender_id = ? AND receiver_id = ?) 
               OR (sender_id = ? AND receiver_id = ?)
            ORDER BY created_at ASC
        ");
        $stmt->bind_param("iiii", $user1, $user2, $user2, $user1);
        $stmt->execute();
        return $stmt->get_result();
    }
}
