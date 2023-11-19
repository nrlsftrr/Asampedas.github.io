<!-- resources/views/live-chat.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Chat</title>
</head>
<body>
    <script>
        const socket = new WebSocket('ws://127.0.0.1:8000/livechat/whatsapp');

        socket.onopen = () => {
            console.log('Koneksi ke server berhasil dibuat');
        };

        socket.onmessage = (event) => {
            const messageContainer = document.getElementById('messages');
            const messageElement = document.createElement('div');
            messageElement.innerText = event.data;
            messageContainer.appendChild(messageElement);
        };

        function sendMessage() {
            const inputElement = document.getElementById('messageInput');
            const message = inputElement.value;
            socket.send(message);
            inputElement.value = '';
        }
    </script>

    <div id="messages"></div>
    <input type="text" id="messageInput" placeholder="Ketik pesan...">
    <button onclick="sendMessage()">Kirim</button>
</body>
</html>
