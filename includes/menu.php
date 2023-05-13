<?php require_once 'includes/init.php' ?>
<!doctype html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>لیست اساتید | یونس خورابلو</title>
  <link rel="stylesheet" href="Theme/css/font-awesome.min.css">
  <link rel="stylesheet" href="Theme/css/style.css">
  <link rel="stylesheet" href="Theme/css/bootstrap.rtl.min.css">
</head>

<body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"> لیست اساتید</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">خانه</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">درباره دانشگاه</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              دسته بندی
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php
            $showCategory = selectAllCategory();
            foreach ($showCategory as $value) {
                echo "<li><a class='dropdown-item' href='categories.php?cate_id={$value->cate_id}'>{$value->cate_title}</a></li>";
            }
            ?>
            </ul>
          </li>
        </ul>
        <form action="search.php" method="post" class="d-flex">
          <input class="form-control me-2" name="search" type="text" placeholder="جستجو اساتید" aria-label="Search">
          <button class="btn btn-outline-success" name="btnSearch">جستجو</button>
        </form>
      </div>
    </div>
  </nav>
  <section class="home py-5" id="home">
    <div class="container-lg">
      <div class="row align-items-center align-content-center">
        <div class="col-md-12 mt-4 mt-md-0">
          <div class="home-img text-center bg-secondary py-4">
            <!-- <img src="Theme/img/profile.jpg" width="250px" height="250px" class="rounded-circle mx-auto d-block" alt="profile img"> -->
            <img src="Theme/img/head.jpg" width="280px" height="280px" class="rounded-circle mx-6 d-block" alt="profile img">
          </div>
        </div>
        </div>
        <div class="row align-items-center align-content-center">
        <div class="col-md-12 mt-4 mt-md-0">
          <h3 class="text-muted py-4 text-center">به وبسایت معرفی اساتید توسط یونس خورابلو خوش آمدید</h3>
          <div class="text-center py-4 ">
          <?php
            $showCategory = selectAllCategory();
            foreach ($showCategory as $value) {
                echo "<a class='btn btn-outline-secondary m-1' href='categories.php?cate_id={$value->cate_id}'>{$value->cate_title}</a>";
            }
            ?>
          </div>
        </div>
      </div>