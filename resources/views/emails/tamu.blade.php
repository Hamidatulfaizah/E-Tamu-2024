<!-- resources/views/emails/tamu.blade.php -->

<p>Halo!</p>

<p>Anda memiliki tamu baru:</p>
<ul>
    <li>Nama: {{ $tamu->nama }}</li>
    <li>Alamat: {{ $tamu->alamat }}</li>
    <li>Keperluan: {{ $tamu->keperluan }}</li>
    <!-- Tambahkan lebih banyak informasi sesuai kebutuhan Anda -->
</ul>

<p>Terima kasih.</p>