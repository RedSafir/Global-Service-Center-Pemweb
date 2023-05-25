<style>
    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 9999;
      justify-content: center;
    
        background-color: #343A40;
        border-bottom: 4px solid #FFC107;
    
    } 
    body {
            background-color: #AAAAAA;
        }

    .navbar-brand {
      margin-right: auto;
      margin-left: auto;
      font-size: 30px;
    }
    a {
        color: #434242;
    }
    a:hover {
        color: #FFFFFF;
    }

</style>
<header>
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        
        <a class="navbar-brand text-center mx-auto" href="/home">
            <img src="{{ asset('images\image1.jpg') }}" alt="Logo" width="40" height="40" class="me-2">
            Global Service Center
        </a>
    </div>
      </nav>
</header>