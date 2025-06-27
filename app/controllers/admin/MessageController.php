<?php 
// app/controllers/MessageController.php
require_once __DIR__ . '/../models/Message.php';

class MessageController {
    private $messageModel;

    public function __construct($conn) {
        $this->messageModel = new Message($conn);
    }

    public function send() {
        $sender_id = $_POST['sender_id'];
        $receiver_id = $_POST['receiver_id'];
        $message = $_POST['message'];
        $this->messageModel->sendMessage($sender_id, $receiver_id, $message);
        echo "OK";
    }

    public function fetch($user1, $user2) {
        $messages = $this->messageModel->getMessages($user1, $user2);
        include __DIR__ . '/../views/chat.php';
    }
}
?>