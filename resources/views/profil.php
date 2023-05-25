<?php include 'header_pro.php'; ?>

<main>
    <section id="about">
        <h2>Tentang Kami</h2>
        <div class="company-logo">
            <img src="company-logo.png" alt="Company Logo">
        </div>
       <center> <h3>Selamat datang di Global Service Center - Pusat Layanan Elektronik Terpercaya sejak 1993!</h3></center>

        <p>Kualitas Terbaik dalam Pemulihan Barang Elektronik Anda: Global Service Center telah menjadi mitra andalan dalam memperbaiki dan merawat barang elektronik Anda sejak 1993. Kami memberikan layanan perbaikan yang unggul untuk semua jenis TV, termasuk TV LCD, LED, dan TV tabung.</p>

        <p>Pemulihan Terbaik untuk TV Anda: Jangan biarkan TV Anda rusak mengganggu momen hiburan Anda. Dengan dukungan teknisi terampil kami, Global Service Center siap memulihkan TV Anda dengan keahlian dan perhatian penuh. Kami menangani perbaikan mulai dari masalah tampilan hingga kerusakan internal yang lebih kompleks.</p>

        <p>Ahli Perbaikan Elektronik: Di Global Service Center, kami memiliki tim teknisi yang berpengalaman dan terlatih secara profesional dalam perbaikan elektronik. Mereka terus mengikuti tren terbaru dalam industri ini untuk memberikan solusi terbaik bagi pelanggan kami. Keahlian dan dedikasi mereka menjadi jaminan kualitas yang tinggi untuk setiap perbaikan yang kami lakukan.</p>
        
        <p>Kepuasan Pelanggan adalah Prioritas Utama: Kami memahami betapa pentingnya kepuasan pelanggan dalam bisnis kami. Oleh karena itu, Global Service Center selalu berkomitmen untuk memberikan pelayanan yang ramah, transparan, dan responsif. Kami berusaha keras untuk memenuhi harapan Anda dan memastikan barang elektronik Anda kembali berfungsi dengan sempurna.</p>
        
        <p>Pelayanan yang Luas: Selain perbaikan TV, Global Service Center juga menyediakan layanan perbaikan untuk berbagai barang elektronik lainnya, termasuk perangkat audio, sistem home theater, dan perangkat elektronik rumah tangga. Jadi, jika Anda memiliki barang elektronik yang perlu diperbaiki, kami siap membantu Anda.</p>
    </section>

    <section id="services">
        <h2>Layanan</h2>
        <div class="card">
            <img src="service1.jpg" alt="Service 1">
            <h3>Perbaikan TV</h3>
            <p>Kami menyediakan layanan perbaikan TV segala merk dan tipe dengan kualitas terbaik.</p>
        </div>
        <div class="card">
            <img src="service2.jpg" alt="Service 2">
            <h3>Perbaikan Radio</h3>
            <p>Kami ahli dalam perbaikan radio rusak dengan berbagai macam masalah.</p>
        </div>
        <div class="card">
            <img src="service3.jpg" alt="Service 3">
            <h3>Perbaikan Alat Rumah Tangga Berbasis Elektronik</h3>
            <p>Kami juga menyediakan layanan perbaikan alat rumah tangga berbasis elektronik seperti mesin cuci, kulkas, dan lainnya.</p>
        </div>
        <div class="card">
            <img src="service4.jpg" alt="Service 4">
            <h3>Garansi Terjamin</h3>
            <p>Kami Menyediakan Garansi Hingga 1 Bulan</p>
        </div>
    </section>

    <section id="cek-barang">
        <h2>Cek Barang</h2>
        <!-- Form pencarian -->
        <div class="col text-end">
        <div class="search-add-container">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari...">
            <button class="btn btn-primary" type="button">Cari</button>
          </div>

        </div>
      </div>
    </div>

        <div class="card mt-5 me-5 ms-5">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <!-- Isi tabel disini -->
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Member</th>
              <th scope="col">Status</th>
              <th scope="col">Foto Barang</th>
              <th scope="col">Total Harga</th>
            </tr>
          </thead>
          <tbody>
            @php
            $i = 1;
            @endphp
            @foreach ($transaksis as $transaksi)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $transaksi->nama_barang }}</td>
                <td>{{ $transaksi->pelanggan->nama }}</td>
                <td>{{ ($transaksi->status)? "selesai": "Proses" }}</td>
                <td>{{ $transaksi->Foto }}</td>
                <td>{{ $transaksi->tot_harga }}</td>
            </tr>
            @endforeach

            <!-- Tambahkan baris lainnya sesuai dengan data yang dimiliki -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
    </section>

    <section id="contact">
        <h2>Kontak</h2>
        <p>Email: info@globalservicecenter.com</p>
        <p>Telepon: 123-456-7890</p>
        <p>Alamat: Jl. Raya Elektronik No. 123, Kota ABC</p>
        <div class="map-container">
        <center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15845.371731678762!2d107.91737616977537!3d-6.849431499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68d1d072ee2419%3A0xf736800dcf60d7!2sGlobal%20service%20senter!5e0!3m2!1sid!2sid!4v1684995900950!5m2!1sid!2sid" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </center>
        </div>
    </section>
</main>

<?php include 'footer_pro.php'; ?>
