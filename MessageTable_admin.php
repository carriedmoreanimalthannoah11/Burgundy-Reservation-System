<?php
include 'db_connect.php';

// Fetch messages from contact_us table
$sql = "SELECT id, name, email, message, created_at FROM contact_us ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 0; }
        .container { display: flex; }
        .sidebar { width: 250px; background: #1f3b5c; color: white; padding: 20px; height: 100vh; }
        .sidebar h2 { text-align: center; }
        .sidebar a { display: block; color: white; text-decoration: none; padding: 10px; margin: 5px 0; background: #2a4d75; border-radius: 5px; }
        .content { flex: 1; padding: 20px; }
        .header { background: #005b5f; color: white; padding: 10px; text-align: center; font-size: 20px; }
        .table-container { margin-top: 20px; padding: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background: #1f3b5c; color: white; }
        .view-message { color: blue; cursor: pointer; text-decoration: underline; }
        .message-details { display: none; margin-top: 20px; padding: 20px; background: white; border-radius: 10px; box-shadow: 0 0 5px gray; }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Burgundy Inn</h2>
            <a href="admin_dashboard.php">Dashboard</a>
            <a href="reservation_admin.php">Reservations</a>
            <a href="ReservationManage_admin.php">Reservations Management</a>
            <h2>Overview</h2>
            <a href="rooms_admin.php">Rooms</a>
            <a href="Guestprofile_admin.php">Guests Profile</a>
            <a href="MessageTable_admin.php">Message Table</a>
        </div>
        <div class="content">
            <div class="header">MESSAGE TABLE</div>
            <div class="table-container">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Short Message Preview</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['name']); ?></td>
                        <td><?= htmlspecialchars($row['email']); ?></td>
                        <td><?= substr(htmlspecialchars($row['message']), 0, 20) . '...'; ?></td>
                        <td><?= $row['created_at']; ?></td>
                        <td><span class="view-message" onclick="viewMessage('<?= htmlspecialchars($row['name']); ?>', '<?= htmlspecialchars($row['message']); ?>')">View</span></td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
            <div class="message-details" id="messageDetails">
                <h3>Message Details</h3>
                <p><strong>Sender:</strong> <span id="senderName"></span></p>
                <p><strong>Message:</strong> <span id="fullMessage"></span></p>
                <label for="reply">Reply:</label>
                <textarea id="reply" rows="4" style="width:100%;"></textarea>
                <button onclick="sendReply()">Send Reply</button>
            </div>
        </div>
    </div>

    <script>
        function viewMessage(name, message) {
            document.getElementById('senderName').innerText = name;
            document.getElementById('fullMessage').innerText = message;
            document.getElementById('messageDetails').style.display = 'block';
        }
        function sendReply() {
            alert('Reply sent!');
        }
    </script>
</body>
</html>

<?php
$conn->close();
?>
