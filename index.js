const express = require('express');
const path = require('path');
const app = express();

// Tentukan port untuk aplikasi
const port = process.env.PORT || 3000;

// Menggunakan express untuk menyajikan file statis (seperti index.html)
app.use(express.static(path.join(__dirname, 'public')));

// Menyajikan index.html untuk permintaan ke root ("/")
app.get('/', (req, res) => {
  res.sendFile(path.join(__dirname, 'public', 'index.html'));
});

// Mulai server
app.listen(port, () => {
  console.log(`Server berjalan di http://localhost:${port}`);
});
