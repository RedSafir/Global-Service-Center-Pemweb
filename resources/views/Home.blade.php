<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Website Responsif</title>
    <link rel="stylesheet" href="resources\css\MainMenu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Document</title>
    <style>
        body {
            background-color: #AAAAAA;
        }

        .navbar {
            background-color: #343A40;
        }

        .navbar-brand {
            color: #FFFFFF;
        }

        .navbar-toggler {
            border-color: #FFFFFF;
        }

        .offcanvas-header {
            background-color: #343A40;
            color: #FFFFFF;
        }

        .offcanvas-body {
            background-color: #AAAAAA;
            color: #FFFFFF;
        }

        .list-group-item {
            background-color: #AAAAAA;
            color: #FFFFFF;
            border-color: #343A40;
        }

        .list-group-item:hover {
            background-color: #343A40;
        }

        a {
            color: #FFFFFF;
        }

    </style>
</head>
<body>
    @include('partials.NavbarHome');
   
        <div class="card-group mt-5" >
            <div class="card ms-5 me-5">
              <div class="card-body">
                <h5 class="card-title">Statistik Pelanggan</h5>
                <div class="chart-container" >
                  <canvas id="customerChart" style="width: 100%; height: 100%;"></canvas>
                </div>
              </div>
            </div>
            
            <div class="card me-5 ms-5">
                <div class="card-body">
                  <h5 class="card-title">Statistik Transaksi</h5>
                  <div class="chart-container" >
                    <canvas id="transactionChart" style="width: 100%; height: 100%;"></canvas>
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
                        <th scope="col">No Invoice</th>
                        <th scope="col">Pelanggan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Pembayaran</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>INV001</td>
                        <td>John Doe</td>
                        <td>Paid</td>
                        <td>Completed</td>
                        <td>$100</td>
                        <td>
                          <button class="btn btn-primary"><a href="">Detail</a></button>
                         
                        </td>
                      </tr>
                      <tr>
                        <td>INV002</td>
                        <td>Jane Smith</td>
                        <td>Unpaid</td>
                        <td>Pending</td>
                        <td>$75</td>
                        <td>
                          <button class="btn btn-primary"><a href="">Detail</a></button>
                         
                        </td>
                      </tr>
                      <!-- Tambahkan baris lainnya sesuai dengan data yang dimiliki -->
                    </tbody>
                </table>
              </div>
            </div>
          </div>
          
            
          </div>
</body>
@include('partials.Footer')
<script>
    // Mengambil elemen canvas
    var customerCanvas = document.getElementById("customerChart").getContext("2d");
    var transactionCanvas = document.getElementById("transactionChart").getContext("2d");

    // Data statistik pelanggan
    var customerData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May"]
        , datasets: [{
                label: "New Customers"
                , data: [10, 20, 15, 25, 30]
                , backgroundColor: "#007BFF"
            , }
            , {
                label: "Active Customers"
                , data: [30, 25, 20, 15, 10]
                , backgroundColor: "#AAAAAA"
            , }
        , ]
    , };

    // Data statistik transaksi
    var transactionData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May"]
        , datasets: [{
            label: "Transactions"
            , data: [50, 60, 70, 80, 90]
            , backgroundColor: "#007BFF"
        , }, ]
    , };

    // Opsi konfigurasi diagram
    var chartOptions = {
        responsive: true
        , scales: {
            y: {
                beginAtZero: true
            , }
        , }
        , animation: false, // Menonaktifkan animasi
    };

    // Membuat chart untuk statistik pelanggan
    var customerChart = new Chart(customerCanvas, {
        type: "bar"
        , data: customerData
        , options: chartOptions
    , });

    // Membuat chart untuk statistik transaksi
    var transactionChart = new Chart(transactionCanvas, {
        type: "bar"
        , data: transactionData
        , options: chartOptions
    , });

</script>
</html>
