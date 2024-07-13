<?php
include "../connect.php";
session_start();
if (!isset($_SESSION['mySessionAdmin'])){
  echo "<script>alert('Bạn chưa Đăng nhập! Để tiếp tục bạn hãy tiến hành Đặng nhập nhé!');</script>"; 
  header("Refresh: 0;url=index.php");
} 

?>


<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tables - Windmill Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="./assets/js/init-alpine.js"></script>
</head>

<body>
  <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen}">
    <!-- Desktop sidebar -->
    <aside class="z-20 flex-shrink-0 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block">
      <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="index1.php">
          VAN TU
        </a>
        <ul class="mt-6">
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLKH.php">

              <i class="fa fa-users"></i>
              <span class="ml-4">QUẢN LÝ KHÁCH HÀNG</span>
            </a>
          </li>

          <li class="relative px-6 py-3">
                        <!-- <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span> -->
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLNV.php">
                            <i class="fa fa-user-secret"></i>
                            <span class="ml-4">QUẢN LÝ NHÂN VIÊN</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <!-- <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span> -->
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLTX.php">
                            <i class="fa fa-user-secret"></i>
                            <span class="ml-4">QUẢN LÝ TÀI XẾ</span>
                        </a>
                    </li>
          <li class="relative px-6 py-3">

            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLTuyen.php">
              <i class="fa fa-road"></i>
              <span class="ml-4">QUẢN LÝ TUYẾN</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
              
              <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="QLChuyen.php"
              >
              <i class="fa fa-car"></i>
                <span class="ml-4">QUẢN LÝ CHUYẾN</span>
              </a>
            </li>

        </ul>
        <ul>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLDV.php">
              <i class="fa fa-ticket"></i>
              </svg>
              <span class="ml-4">QUẢN LÝ VÉ ĐẶT</span>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLKM.php">
              <i class="fa fa-tags"></i>
              <span class="ml-4">QUẢN LÝ KHUYẾN MÃI</span>
            </a>
          </li>
          
          <li class="relative px-6 py-3">
                    <!-- <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span> -->
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLXe.php">
                            <i class="fa fa-bus"></i>
                            <span class="ml-4">QUẢN LÝ XE</span>
                        </a>
                    </li>

          <li class="relative px-6 py-3">
                        <!-- <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span> -->
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLBX.php">
              <i class="fa fa-university" aria-hidden="true"></i>
                <span class="ml-4">QUẢN LÝ BẾN XE</span>
            </a>
          </li>

          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="thongke.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
              </svg>
              <span class="ml-4">THỐNG KÊ</span>
            </a>
          </li>


          <!-- QUẢN LÝ TUYẾN -->

        </ul>

      </div>
    </aside>
    <!-- Mobile sidebar -->
    <!-- Backdrop -->
    <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
    <aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden" x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu" @keydown.escape="closeSideMenu">
      <div class="py-4 text-gray-500 dark:text-gray-400">
        <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="index1.php">
          VAN TU
        </a>
        <ul class="mt-6">
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLKH.php">
              <i class="fa fa-users"></i>
              <span class="ml-4">QUẢN LÝ KHÁCH HÀNG</span>
            </a>
          </li>

          <li class="relative px-6 py-3">
                        <!-- <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span> -->
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLNV.php">
                            <i class="fa fa-user-secret"></i>
                            <span class="ml-4">QUẢN LÝ NHÂN VIÊN</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <!-- <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span> -->
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLTX.php">
                            <i class="fa fa-user-secret"></i>
                            <span class="ml-4">QUẢN LÝ TÀI XẾ</span>
                        </a>
                    </li>
          <li class="relative px-6 py-3">

            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLTuyen.php">
              <i class="fa fa-road"></i>
              <span class="ml-4">QUẢN LÝ TUYẾN</span>
            </a>
          </li>

          <li class="relative px-6 py-3">
              
              <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="QLChuyen.php"
              >
              <i class="fa fa-car"></i>
                <span class="ml-4">QUẢN LÝ CHUYẾN</span>
              </a>
            </li>

        </ul>
        <ul>
          <li class="relative px-6 py-3">

            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLDV.php">
              <i class="fa fa-ticket"></i>
              <span class="ml-4">QUẢN LÝ VÉ ĐẶT</span>
            </a>
          </li>



          <li class="relative px-6 py-3">
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLKM.php">
              <i class="fa fa-tags"></i>
              <span class="ml-4">QUẢN LÝ KHUYẾN MÃI</span>
            </a>
          </li>
          
          <li class="relative px-6 py-3">
                    <!-- <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span> -->
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="QLXe.php">
                            <i class="fa fa-bus"></i>
                            <span class="ml-4">QUẢN LÝ XE</span>
                        </a>
                    </li>
          <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="thongke.php">
              <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
              </svg>
              <span class="ml-4">THỐNG KÊ</span>
            </a>
          </li>



        </ul>

      </div>
    </aside>
    <div class="flex flex-col flex-1 w-full">
      <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
        <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
          <!-- Mobile hamburger -->
          <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple" @click="toggleSideMenu" aria-label="Menu">
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
          </button>
          <!-- Search input -->
          <div class="flex justify-center flex-1 lg:mr-32">
          <form method="post" class="flex justify-center flex-1 lg:mr-32">
            <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
              <div class="absolute inset-y-0 flex items-center pl-2">
                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <input name="noidung" class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" type="text" placeholder="Tìm kiếm " aria-label="Search" />
            </div>
            <button name="timkiem" class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Tìm kiếm</button>

          </form>


          </div>
          <ul class="flex items-center flex-shrink-0 space-x-6">
            <!-- Theme toggler -->
            <li class="flex">
              <button class="rounded-md focus:outline-none focus:shadow-outline-purple" @click="toggleTheme" aria-label="Toggle color mode">
                <template x-if="!dark">
                  <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                  </svg>
                </template>
                <template x-if="dark">
                  <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                  </svg>
                </template>
              </button>
            </li>
            <!-- Notifications menu -->

            <!-- Profile menu -->
            <li class="relative">

              <button class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none" @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account" aria-haspopup="true">
                <?php
                $mail = $_SESSION['mySessionAdmin'];
                $sql = "SELECT * FROM admin where A_Email='$mail' ";
                $result = mysqli_query($conn, $sql);
                if (isset($_SESSION['mySessionAdmin'])) {
                  if ($row = mysqli_fetch_array($result)) {
                ?>

                    <img class="object-cover w-8 h-8 rounded-full" src="../img/Xe/ghe/<?php echo $row["A_Hinh"]; ?>" alt="" aria-hidden="true" />
                <?php }
                } ?>
              </button>
              <a class="btn  " data-toggle="dropdown" href="">
                <?php
                if (isset($_SESSION['mySessionAdmin'])) {
                  echo '' . $_SESSION['mySessionAdmin'];
                }
                ?><i class="dropdown-toggle"> </i></a>
              <template x-if="isProfileMenuOpen">
                <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click.away="closeProfileMenu" @keydown.escape="closeProfileMenu" class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700" aria-label="submenu">
                  <li class="flex">
                    <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="taikhoan.php">
                      <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                      </svg>
                      <span>Hồ sơ</span>
                    </a>
                  </li>

                  <li class="flex">
                    <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="dangxuat.php">
                      <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                      </svg>
                      <span>Đăng xuất</span>
                    </a>
                  </li>
                </ul>
              </template>
            </li>
            <li class="relative">

            </li>

          </ul>

      </header>
      <main class="h-full pb-16 overflow-y-auto">
        <!-- THÊM TUYẾN -->
        <form action="themkm.php" method="post">
          <div class="container grid px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
              DANH SÁCH KHUYẾN MÃI
            </h2>
            <div class="px-6 my-6">
              <button class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                THêm khuyến mãi
                <span class="ml-2" aria-hidden="true">+</span>
              </button>

            </div>
        </form>

        <!-- DANH SÁCH TUYẾN -->

        <div class="w-full overflow-hidden rounded-lg shadow-xs">
          <div class="w-full overflow-x-auto" >
            <table class="w-full whitespace-no-wrap">
              <thead >
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                  <th class="px-4 py-3" style="width: 15%;">Mã khuyến mãi</th>
                  <th class="px-4 py-3" style="width: 15%">Tên khuyến mãi</th>
                  <th class="px-4 py-3" style="width: 10%">Tên tuyến</th>
                  <th class="px-4 py-3" style="width: 10%">Ngày bắt đầu</th>
                  <th class="px-4 py-3" style="width: 10%">Ngày kết thúc</th>

                  <th class="px-4 py-3" style="width: 10%">Tỷ lệ giảm</th>
                  <th class="px-4 py-3" style="width: 20%">Nội dung</th>
                  <th class="px-4 py-3" style="width: 30%">Hình ảnh</th>

                  <th class="px-4 py-3">Hành độnng</th>

                </tr>
              </thead>
              <?php
                if (isset($_POST['timkiem'])) {
                  $noidung = $_POST['noidung'];
                } else {
                  echo $noidung = false;
                }
             ?>
              <?php

              // $sql = "SELECT * FROM khuyenmai a, tuyenchay b where a.TC_Ma =b.TC_Ma and KM_Ten LIKE '%$noidung%' order by KM_Ma DESC ";
              // $query = mysqli_query($conn, $sql);
              $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:10;
              $current_page = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
              $offset = ($current_page - 1) * $item_per_page;
              $products = mysqli_query($conn, "SELECT * FROM khuyenmai a, tuyenchay b where a.TC_Ma =b.TC_Ma and KM_Ten LIKE '%$noidung%' order by KM_Ma DESC    LIMIT " . $item_per_page . " OFFSET " . $offset);
              $totalRecords = mysqli_query($conn, "SELECT * FROM khuyenmai ");
              $totalRecords = $totalRecords->num_rows;
              $totalPages = ceil($totalRecords / $item_per_page);

              while ($row = mysqli_fetch_array($products)) {
              ?>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                  <tr class="text-gray-700 dark:text-gray-400">
                    <!-- MÃ KHUYẾN MÃI -->
                    <td class="px-4 py-3">
                      <div class="flex items-center text-sm">
                        <div>
                          <p class="font-semibold"><?php echo $row['KM_Ma']; ?></p>

                        </div>
                      </div>
                    </td>
                    <!-- TÊN KHUYẾN MÃI -->

                    <td class="px-4 py-3 text-sm">
                      <?php echo $row['KM_Ten']; ?>
                    </td>

                    <!-- TÊN TUYẾN -->
                    <td class="px-4 py-3 text-xs">
                      <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                        <?php echo $row['TC_Ten']; ?>
                      </span>
                    </td>

                    <!-- THỜI GIAN -->

                    <td class="px-4 py-3 text-xs">
                      <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                        <?php  $date=date_create($row["KM_NgayBD"]); echo date_format( $date, "d-m-Y H:s:i") ; ?>
                      </span>
                    </td>

                    <td class="px-4 py-3 text-xs">
                      <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                        <?php  $date=date_create($row["KM_NgayKT"]); echo date_format( $date, "d-m-Y H:s:i")  ; ?>
                      </span>
                    </td>

                    <!-- TỶ LỆ -->
                    <td class="px-4 py-3 text-sm">
                      <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                        <?php echo number_format($row["KM_TyLeGG"]); ?>%
                      </span>
                    </td>

                    <!-- NỘI DUNG -->
                    <td class="px-4 py-3 text-sm" >
                      <!-- <style>
                        .line-clamp {
                        display: -webkit-box;
                        -webkit-line-clamp: 1;
                        -webkit-box-orient: vertical;  
                        overflow: hidden;
                        color: red;
                          
                      
                      }
                      </style> -->
                    <?php
                                           
                                           $str = $row['KM_NoiDung'];
                                           $str = substr( $str, 0, 30);
                                           ?>
                      <div><p class="line-clamp"><?php echo $str?>...</p></div>
                    </td>

                    <!-- HINH -->
                    <td class="px-4 py-3 text-sm " >
                      <div>
                        <img src="../img/Xe/ghe/<?php echo $row["KM_Hinh"]; ?>" loading="lazy" />
                        <div aria-hidden="true"></div>
                      </div>
                    </td>

                    <td class="px-4 py-3">
                      <!-- SỬA -->
                      <div class="flex items-center space-x-4 text-sm">
                        <form action="" method="post">
                          <a class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Sua" href="capnhatKM.php?this_id=<?php echo $row['KM_Ma'] ?> ">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                              <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                            </svg>

                          </a>
                          <input type="hidden" name="KM_Ma" value="<?php echo $row['KM_Ma']; ?>" />
                        </form>

                        <!-- XOÁ -->

                        <form action="" method="post">
                          <a style="color: red;" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Xoa" class="btn btn-info btn-sm" href="xoaKM.php?this_id=<?php echo $row['KM_Ma'] ?> ">

                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                              <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                          </a>
                          <input type="hidden" name="KM_Ma" value="<?php echo $row['KM_Ma']; ?>" />
                        </form>

                      </div>
                    </td>
                  </tr>
                </tbody>
              <?php } ?>

            </table>
          </div>
          <?php include "trang.php"?>
        </div>
    </div>
    </main>
  </div>
  </div>
</body>

</html>