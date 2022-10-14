<!doctype html>
      <html lang="ar" dir="rtl">
       <style> html{
          background-image:url("https://s27051.pcdn.co/wp-content/uploads/2021/10/LifterLMS-Shopping-Resources.jpg");
        }
      </style>
      <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <style type="text/css">
         .bg-utama{
        text-align: center;
         }
        
      </style>
        <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
        
          <!-- border login-->
          <title>Login</title>
      </head>
          <body>
             <div class="bg-utama">
      <div class="konten-ditengah">
          <div class="row" style="margin-top:299px">
            <div class="col-md-4 offset-md-4">
              <div class="card">
                <div class="card-header">
                    Silahkan Login
                </div>
              <div class="card-body">
            <form method="post" action="<?= base_url('dashboard/login');?>">
          <div class="form-group"></div>
        <label>username</label>
        <input type="text" name="username" class="form-control" autocomplete="off">
        <small><span class="text-danger"><?= form_error('username');?></span></small>
        <div class="card-body">
            <form method="post" action="<?= base_url('dashboard/login');?>">
          <div class="form-group"></div>
        <label>password</label>
        <input type="password" name="password" class="form-control" autocomplete="off">
         <br>
        <button type="submit" class="btn btn-primary">Login</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    -->
  </body>
</html>