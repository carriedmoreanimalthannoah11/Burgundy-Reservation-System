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
        .cards { display: flex; gap: 20px; margin-top: 20px; }
        .card { flex: 1; padding: 20px; background: white; border-radius: 10px; box-shadow: 0 0 5px gray; text-align: center; }
        .table-container { margin-top: 20px; padding: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background: #1f3b5c; color: white; }
        .status-confirmed { color: green; font-weight: bold; }
        .status-cancelled { color: red; font-weight: bold; }
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
            <div class="header">RESERVATION</div>
            <div class="table-container">
                <table>
                    <tr>
                        <th>Guest Name</th>
                        <th>Room Type</th>
                        <th>Hours</th>
                        <th>Bill</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>Julian Dayata</td>
                        <td>Single Room</td>
                        <td>4</td>
                        <td>$200</td>
                        <td class="status-confirmed">Confirmed</td>
                        <td><button>Edit</button> <button>Cancel</button></td>
                    </tr>
                    <tr>
                        <td>Kokolawian</td>
                        <td>Standard Room</td>
                        <td>6</td>
                        <td>$300</td>
                        <td class="status-confirmed">Confirmed</td>
                        <td><button>Edit</button> <button>Cancel</button></td>
                    </tr>
                    <tr>
                        <td>Turo</td>
                        <td>Double-bed Room</td>
                        <td>8</td>
                        <td>$400</td>
                        <td class="status-cancelled">Cancelled</td>
                        <td><button>Edit</button> <button>Cancel</button></td>
                        <tr>
                    </tr>
                    <tr>
                        <td>John Doe</td>
                        <td>Luxury Suite</td>
                        <td>10</td>
                        <td>$500</td>
                        <td class="status-confirmed">Confirmed</td>
                        <td><button>Edit</button> <button>Cancel</button></td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>Deluxe Room</td>
                        <td>12</td>
                        <td>$600</td>
                        <td class="status-cancelled">Cancelled</td>
                        <td><button>Edit</button> <button>Cancel</button></td>
                    </tr>
                </table>
            </div>
    
            </div>
        </div>
    </div>
</body>
</html>
