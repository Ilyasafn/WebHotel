<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKING</title>
</head>
<body>
    <h1>Book Your Room</h1>
    <form action="" method="post">
    <label for="name">Nama Lengkap:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="check_in">Tanggal Check-In:</label>
    <input type="date" id="check_in" name="check_in" required><br><br>

    <label for="check_out">Tanggal Check-Out:</label>
    <input type="date" id="check_out" name="check_out" required><br><br>

    <label for="guests">Jumlah Tamu:</label>
    <select id="guests" name="guests">
      <option value="1">1 Orang</option>
      <option value="2">2 Orang</option>
      <option value="3">3 Orang</option>
      <option value="4">4 Orang</option>
    </select><br><br>

    <label for="room_type">Tipe Kamar:</label>
    <select id="room_type" name="room_type">
      <option value="standard">Standard</option>
      <option value="deluxe">Deluxe</option>
      <option value="suite">Suite</option>
    </select><br><br>

    <input type="submit" value="Book">
  </form>
</body>
</html>