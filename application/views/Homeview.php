<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login & Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
   <nav class="navbar navbar-expand-lg bg-body-tertiary"data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Login & Register</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class= "container">
  <div class= "row">
    <div class= 'col md-4'></div>
    <div class= 'col md-4'>
      <div class="card" style= "margin-top:30px">
  <div class="card-header text-center">
    Register Now
  </div>
  <div class="card-body">
   <form method="post" autocomplete="off" action="<?=base_url('welcome/registernow')?>"> 
    <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="text" placeholder="User Name" name="username" class="form-control" id="name" aria-describedby="name">
    </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" placeholder="User Email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" placeholder="User Password" name="password" class="form-control" id="exampleInputPassword1">
  </div> 
  <div class="text-center">
  <button type="submit" class="btn btn-primary">Register Now</button>
</div>
<?php
if($this->session ->flashdata('success')) { ?>
<p class="text success text-center" style="margin-top: 10px;"> <?= $this->session ->flashdata('success')?></p>
<?php } ?>
</form>
  </div>
</div>

    </div>
    <div class= 'col md-4'></div>

  </div>
</div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>