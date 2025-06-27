<?php while ($row = $messages->fetch_assoc()): ?>
    <p><b>User <?= $row['sender_id'] ?>:</b> <?= htmlspecialchars($row['message']) ?></p>
    <input type="hidden" id="sender_id" value="1">
<input type="hidden" id="receiver_id" value="2">

<div id="chat-box"></div>
<input type="text" id="message">
<button id="sendBtn">Gửi</button>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function loadChat() {
  let user1 = $('#sender_id').val();
  let user2 = $('#receiver_id').val();
  $('#chat-box').load('index.php?user1=' + user1 + '&user2=' + user2);
}

$('#sendBtn').click(function() {
  $.post('index.php', {
    sender_id: $('#sender_id').val(),
    receiver_id: $('#receiver_id').val(),
    message: $('#message').val()
  }, function() {
    $('#message').val('');
    loadChat();
  });
});

setInterval(loadChat, 2000);
loadChat();
</script>
<?php endwhile; ?>
