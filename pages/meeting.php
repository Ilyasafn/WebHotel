<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meeting Room</title>
</head>
<body>
  <h1>Book Your Meeting Room</h1>
  <form action="process_meeting_booking.php" method="post">
    <label for="name">Nama Lengkap:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="company">Nama Perusahaan (opsional):</label>
    <input type="text" id="company" name="company"><br><br>

    <label for="meeting_date">Tanggal Meeting:</label>
    <input type="date" id="meeting_date" name="meeting_date" required><br><br>

    <label for="meeting_time">Waktu Meeting:</label>
    <input type="time" id="meeting_time" name="meeting_time" required><br><br>

    <label for="duration">Durasi Meeting (jam):</label>
    <input type="number" id="duration" name="duration" min="1" required><br><br>

    <label for="guests">Jumlah Peserta:</label>
    <input type="number" id="guests" name="guests" min="1" required><br><br>

    <label for="room_type">Tipe Meeting Room:</label>
    <select id="room_type" name="room_type" required>
      <option value="small">Small Room (10-20 orang)</option>
      <option value="medium">Medium Room (21-40 orang)</option>
      <option value="large">Large Room (41-60 orang)</option>
      <option value="xlarge">Extra Large Room (61-90 orang)</option>
      <option value="hall">Hall Room (91-120 orang)</option>
    </select><br><br>

    <label for="equipment">Peralatan Tambahan (opsional):</label><br>
    <input type="checkbox" id="projector" name="equipment[]" value="projector">
    <label for="projector">Proyektor</label><br>
    <input type="checkbox" id="microphone" name="equipment[]" value="microphone">
    <label for="microphone">Mikrofon</label><br>
    <input type="checkbox" id="sound_system" name="equipment[]" value="sound_system">
    <label for="sound_system">Sound System</label><br><br>

    <label for="catering">Catering (opsional):</label>
    <select id="catering" name="catering">
      <option value="none">Tanpa Catering</option>
      <option value="coffee_break">Coffee Break</option>
      <option value="lunch">Lunch</option>
    </select><br><br>

    <input type="submit" value="Book">
    <input type="reset" value="Reset">
  </form>
</body>
</html>
