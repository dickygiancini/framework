<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Kantin Powerful</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/dashboard/">

    <!-- Bootstrap core CSS -->
<link href="asset/css/bootstrap.css" rel="stylesheet">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="asset/css/dashboard.css" rel="stylesheet">
  <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>

      <h2>Orders</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                <th>No</th>
                <th>Nama Warung</th>
                <th>Nama Menu</th>
                <th>Harga</th>
                <th>Jumlah</th>
            </tr>
          </thead>
          <tbody>
          <?php 
          $no=1;
          for($y=0;$y<sizeof($order);$y++) {?>
            <tr>
            <form action="<?php echo base_url(). 'menukantin/add_data'; ?>" method="post">
                <td><?php echo $no++?></td>

                <td><?php echo $order[$y]['nama_warung']; ?></td>
                <input type="text" id="nama_warung" name="nama_warung" value="<?php echo $order[$y]['nama_warung']; ?>" hidden />
                
                <td><?php echo $order[$y]['nama_menu']; ?></td>
                <input type="text" id="nama_menu" name="nama_menu" value="<?php echo $order[$y]['nama_menu']; ?>" hidden />
                
                <td><?php echo $order[$y]['harga']; ?></td>
                <input type="number" id="harga" name="harga" value="<?php echo $order[$y]['harga']; ?>" hidden />
            
                <td><?php echo $order[$y]['jumlah']; ?></td>
            </form>
            </tr>
        <?php } 
        ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<script src="asset/js/jquery-3.js"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
        <script src="asset/js/bootstrap.js"></script>
        <script src="asset/js/feather.js"></script>
        <script src="asset/js/Chart.js"></script>
        <script src="asset/js/dashboard.js"></script>

</body></html>