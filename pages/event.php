<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Social Event</title>
</head>
<body>
  <h1>Book Your Social Event</h1>
  <form action="process_social_event_booking.php" method="post">
    <label for="name">Nama Lengkap:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="contact_number">Nomor Telepon:</label>
    <input type="tel" id="contact_number" name="contact_number" required><br><br>

    <label for="event_type">Tipe Event:</label>
    <select id="event_type" name="event_type" required>
      <option value="birthday">Ulang Tahun</option>
      <option value="wedding_anniversary">Anniversary Pernikahan</option>
      <option value="corporate_gathering">Gathering Perusahaan</option>
      <option value="other">Lainnya</option>
    </select><br><br>

    <label for="event_date">Tanggal Event:</label>
    <input type="date" id="event_date" name="event_date" required><br><br>

    <label for="event_time">Waktu Event:</label>
    <input type="time" id="event_time" name="event_time" required><br><br>

    <label for="guests">Jumlah Tamu:</label>
    <input type="number" id="guests" name="guests" min="1" required><br><br>

    <label for="package_type">Tipe Paket:</label>
    <select id="package_type" name="package_type" required>
      <option value="basic">Basic (Ruangan & Dekorasi Sederhana)</option>
      <option value="standard">Standard (Ruangan, Dekorasi, & Catering)</option>
      <option value="premium">Premium (Ruangan, Dekorasi, Catering, & Hiburan)</option>
    </select><br><br>

    <label for="additional_services">Layanan Tambahan (opsional):</label><br>
    <input type="checkbox" id="photography" name="additional_services[]" value="photography">
    <label for="photography">Fotografi</label><br>
    <input type="checkbox" id="videography" name="additional_services[]" value="videography">
    <label for="videography">Videografi</label><br>
    <input type="checkbox" id="sound_system" name="additional_services[]" value="sound_system">
    <label for="sound_system">Sound System</label><br><br>

    <input type="submit" value="Book">
    <input type="reset" value="Reset">
  </form>
</body>
</html>
