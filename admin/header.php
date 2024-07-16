<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>ADM </title>
  <link rel="stylesheet" href="../Assets/css/admin.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <!--  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="../ckeditor/ckeditor.js"></script>
  <script>
    function confirmDelete() {
      var kq = confirm('Ban co muon xoa khong');
      if (kq) {
        alert('ban da xoa thanh cong');
        return true;
      } else {
        alert('ban da huy');
        return false;

      }
    }
  </script>
  <!--   
  <style>
    tr td a {
      text-decoration: none;
      display: block;
      text-align: center;
      background-color: grey;
      border: 1px solid grey;
      color: black;
      border-radius: 2px;
    }
  </style> -->
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <a href="../index.php?act=admin">
        <span class="logo_name">BlackClear</span>
      </a>

    </div>
    <ul class="nav-links">
      <li>
        <a href="index.php?act=show_thong_ke" class="active">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="index.php?act=showPro">
          <i class='bx bx-box'></i>
          <span class="links_name">Movie</span>
        </a>
      </li>
      <li>
        <a href="index.php?act=showfood">
          <i class='bx bx-box'></i>
          <span class="links_name">Food</span>
        </a>
      </li>
      <li>
        <a href="index.php?act=showkm">
          <i class='bx bx-box'></i>
          <span class="links_name">Promotion</span>
        </a>
      </li>
      <li>
        <a href="index.php?act=showghe">
          <i class='bx bx-box'></i>
          <span class="links_name">Chair table</span>
        </a>
      </li>
      <li>
        <a href="index.php?act=showsc">
          <i class='bx bx-box'></i>
          <span class="links_name">Movie screening</span>
        </a>
      </li>
      <li>
        <a href="index.php?act=showrap">
          <i class='bx bx-box'></i>
          <span class="links_name">Cinema</span>
        </a>
      </li>
      <li>
        <a href="index.php?act=showpc">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Cinema Room</span>
        </a>
      </li>
      <li>
        <a href="index.php?act=showtlp">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Movie genre</span>
        </a>
      </li>
      <li>
        <a href="index.php?act=showve">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Cinema ticket</span>
        </a>
      </li>
      <!-- <li>
        <a href="index.php?act=show_thong_ke">
          <i class='bx bx-pie-chart-alt-2'></i>
          <span class="links_name">Statistical</span>
        </a>
      </li> -->
      <li>
        <a href="index.php?act=show_contact">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Contact</span>
        </a>
      </li>
      <li>
        <a href="index.php?act=show_list_users">
          <i class='bx bx-book-alt'></i>
          <span class="links_name">Accounts</span>
        </a>
      </li>
      <li class="log_out">
        <a href="index.php?act=logout_admin">
          <i class='bx bx-log-out'></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <form action="index.php?act=search" method="post">
          <input type="text" placeholder="Search..." name="keyw" style="height: 48px;" required>
          <button type="submit"><i class='bx bx-search'></i></button>
        </form>
      </div>
      <!-- <div class="profile-details">
        <img src="../Assets/img/pro5.jpg" alt="">
        <span class="admin_name">Hoàng Kỳ</span>
        <i class='bx bx-chevron-down'></i>
      </div> -->
      <a href="../index.php">Trang chủ</a>
    </nav>
    <div class="home-content">