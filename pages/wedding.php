<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wedding Package</title>
</head>
<body>
  <h1>Book Your Wedding Package</h1>
  <form action="process_wedding_booking.php" method="post">
    <label for="name">Nama Lengkap:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="contact_number">Nomor Telepon:</label>
    <input type="tel" id="contact_number" name="contact_number" required><br><br>

    <label for="wedding_date">Tanggal Pernikahan:</label>
    <input type="date" id="wedding_date" name="wedding_date" required><br><br>

    <label for="guests">Jumlah Tamu:</label>
    <input type="number" id="guests" name="guests" min="1" required><br><br>

    <label for="package_type">Tipe Paket:</label>
    <select id="package_type" name="package_type" required>
      <option value="basic">Basic</option>
      <option value="standard">Standard</option>
      <option value="premium">Premium</option>
    </select><br><br>

    <label for="additional_services">Layanan Tambahan (opsional):</label><br>
    <input type="checkbox" id="catering" name="additional_services[]" value="catering">
    <label for="catering">Catering</label><br>
    <input type="checkbox" id="decoration" name="additional_services[]" value="decoration">
    <label for="decoration">Dekorasi</label><br>
    <input type="checkbox" id="photography" name="additional_services[]" value="photography">
    <label for="photography">Fotografi</label><br><br>

    <input type="submit" value="Book">
    <input type="reset" value="Reset">
  </form>
</body>
</html>
