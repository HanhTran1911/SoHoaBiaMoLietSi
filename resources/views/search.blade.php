<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
</head>

<body>
    <div id="root">
        <div class="content  mx-auto">
            <div class="header flex items-center bg-cover bg-repeat lg:pt-[10px] lg:pb-[10px] " style="background-image: url('/image/header2.png');">
                <!-- logo -->
                <div class="logo lg:ctn-1024">
                    <img src="../image/header11.png" alt="" class="lg:w-[60px] lg:h-[60px]">
                </div>
                <p class="text-white text-[14px] font-sans font-bold lg:text-[20px] mb-0">CỔNG THÔNG TIN ĐIỆN TỬ VỀ LIỆT SĨ, MỘ LIỆT SĨ VÀ NGHĨA TRANG
                    LIỆT SĨ</p>
            </div><!-- end header -->
            <hr class="bg-white h-[2px] m-0">

            <!-- menu -->
            <div class="menu bg-[#0369ce] pt-[5px] pb-[5px] mx-auto relative">
                <!-- icon memu -->
                <div class="lg:hidden ml-3" id="icon-menu">
                    <i class="fa-solid fa-bars-staggered"></i>
                </div>
                <div class="hidden lg:block ctn-1024 " id="toggle-menu">
                    <a href="#" class="lg:pr-3 text-[14px] text-white text-decoration-none">TRANG CHỦ</a>
                    <a href="#" class="item-menu text-decoration-none">TIN TỨC</a>
                    <a href="#" class="item-menu text-decoration-none">BẢN ĐỒ</a>
                    <a href="#" class="item-menu text-decoration-none">TRA CỨU</a>
                    <a href="#" class="item-menu text-decoration-none">LIÊN HỆ - PHẢN HỒI</a>
                </div>
            </div> <!-- end menu -->



            <div class="">
                <p class="mb-0 ctn-1024 lg:text-[20px] font-thin text-blue-700 ">Tra cứu thông tin bia mộ liệt sĩ</p>
            </div>

            <!-- form search -->
            <form action="" class="ctn-1024 border border-gray-300 rounded p-4 shadow-md mt-[10px]">
                <p class="mb-0 text-[20px] font-semibold">Liệt sĩ</p>
                <div class="h-[2px] bg-blue-700"></div>

                <!-- tên liệt sĩ -->
                <div class="flex mt-3 lg:flex-row flex-col">
                    <div class=" flex flex-col">
                        <label for="" class="text-[15px] text-gray-600 mb-2">Tên liệt sĩ </label>
                        <input type="text" class=" w-[200px] input_style mr-3">
                    </div>
                    <div class="flex flex-col">
                        <label for="" class="text-[15px] text-gray-600 mb-2">Năm sinh </label>
                        <input type="text" class=" w-[150px] input_style mr-3">
                    </div>
                    <div class="flex flex-col">
                        <label for="" class="text-[15px] text-gray-600 mb-2">Năm hi sinh</label>
                        <input type="text" class=" w-[150px] input_style mr-3">
                    </div>
                </div>

                <!-- quê quán -->
                <div class="mt-[30px]">
                    <p class="border_name_form">Quê quán</p>
                    <div class="flex mt-5 lg:flex-row flex-col">
                        <div class="flex flex-col mr-5">
                            <label for="" class="text-[15px] text-gray-600 mb-2">Tỉnh/Thành phố</label>
                            <input type="text" class="lg:w-[300px] w-[200px] input_style ">
                        </div>
                        <div class="flex flex-col mr-5">
                            <label for="" class="text-[15px] text-gray-600 mb-2">Quận/Huyện</label>
                            <input type="text" class="lg:w-[300px] w-[200px] input_style ">
                        </div>
                        <div class="flex flex-col mr-5">
                            <label for="" class="text-[15px] text-gray-600 mb-2">Xã/Phường</label>
                            <input type="text" class="lg:w-[300px] w-[200px] input_style ">
                        </div>
                    </div>
                </div>

                <!-- Nghĩa trang yên nghỉ -->
                <div class="mt-[30px]">
                    <p class="border_name_form">Nghĩa trang yên nghỉ</p>
                    <div class="flex lg:flex-row flex-col">
                        <!-- xã phường -->
                        <div class="mr-4">
                            <label for="" class="text-[15px] text-gray-600">Xã/Phường</label>
                            <select class="lg:w-[300px] w-[200px] block input_style  focus:outline-none focus:ring  focus:border-blue-600 h-[100px] mt-2">
                                <option value="">Chọn</option>
                                <option value="option1">Xã Tân An </option>
                                <option value="option2">Xã Tân Hiệp</option>
                                <option value="option3">Xã Đồng Nơ</option>
                                <option value="option3">Xã Tâm Khai</option>
                                <option value="option3">Xã Minh Đức</option>
                                <option value="option3">Xã Thanh Bình</option>
                                <option value="option3">Xã Thanh Bình</option>
                                <option value="option3">Xã Thanh Bình</option>
                                <option value="option3">Xã Thanh Bình</option>
                            </select>
                        </div>
                        <!-- nghĩa trang -->
                        <div class="mr-4">
                            <label for="" class="text-[15px] text-gray-600 ">Nghĩa trang</label>
                            <select class="lg:w-[300px] w-[200px] block input_style  focus:outline-none focus:ring  focus:border-blue-600 h-[100px] mt-2">
                                <option value="">Chọn</option>
                                <option value="option1">Xã Tân An </option>
                                <option value="option2">Xã Tân Hiệp</option>
                                <option value="option3">Xã Đồng Nơ</option>
                                <option value="option3">Xã Tâm Khai</option>
                                <option value="option3">Xã Minh Đức</option>
                                <option value="option3">Xã Thanh Bình</option>
                                <option value="option3">Xã Thanh Bình</option>
                                <option value="option3">Xã Thanh Bình</option>
                                <option value="option3">Xã Thanh Bình</option>
                            </select>
                        </div>
                        <!-- lô mộ -->
                        <div class="flex flex-col mr-4">
                            <label for="" class="text-[15px] text-gray-600 mb-2">Lô mộ</label>
                            <input type="text" class="lg:w-[300px] w-[200px] input_style ">
                        </div>
                        <!-- khu mộ -->
                        <div class="flex flex-col">
                            <label for="" class="text-[15px] text-gray-600 mb-2">Khu mộ</label>
                            <input type="text" class="lg:w-[300px] w-[200px] input_style ">
                        </div>
                    </div>
                </div>

                <button class="rounded-none bg-blue-700 pt-2 pb-2 pl-3 pr-3 mt-5 text-[17px] text-white font-semibold">Tìm kiếm liệt sĩ</button>
            </form>

            <!-- kết quả tìm kiếm -->
            <div class="ctn-1024 border border-gray-300 rounded p-4 shadow-md mt-[10px]">
                <p class="text-[20px] font-semibold">Kết quả tìm kiếm</p>
                <div class="h-[2px] bg-blue-700"></div>

                <div class="overflow-x-scroll ">
                    <table class="table-fixed border-collapse border border-gray-300 max-w-[1300px] w-full ">
                        <thead>
                            <tr class="border-spacing-0.5">
                                <th class="lg:w-[100px] w-[50px] border_table"></th>
                                <th class="lg:w-[150px] w-[70px] border_table">Họ Tên </th>
                                <th class="lg:w-[120px] w-[70px] border_table">Năm sinh</th>
                                <th class="lg:w-[150px] w-[50px] border_table">Năm hi sinh</th>
                                <th class="lg:w-[250px] w-[100px] border_table">Nguyên quán</th>
                                <th class="lg:w-[350px] w-[100px] border_table"> Nghĩa trang</th>
                                <th class="lg:w-[150px] w-[50px] border_table">Xã</th>
                                <th class="lg:w-[150px] w-[50px] border_table">Lô mộ</th>
                                <th class="lg:w-[150px] w-[50px] border_table">Khu mộ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class=" table-row-hover">
                                <th class="lg:border_table flex justify-center lg:flex-row flex-col border-t">
                                    <a href="" class="bg-green-600 px-[6px] m-1 text-center" data-bs-toggle="modal" data-bs-target="#modal1"> <i class="text-white fa-solid fa-magnifying-glass"></i></a>
                                    <a href="" class="bg-yellow-300 px-[6px] m-1 text-center" data-bs-toggle="modal" data-bs-target="#modal2"> <i class="text-red-500 fa-solid fa-location-dot"></i></a>
                                </th>
                                <td class="border_table text_item">NguyễN Văn A</td>
                                <td class="border_table text_item">1900</td>
                                <td class="border_table text_item">1950</td>
                                <td class="border_table text_item">Cẩm Mỹ, Cẩm Xuyên, Hà Tĩnh</td>
                                <td class="border_table text_item">Nghĩa trang A Lorem ipsum dolor sit amet </td>
                                <td class="border_table text_item">Xã Hớn Quản</td>
                                <td class="border_table text_item">Lô 1</td>
                                <td class="border_table text_item">Khu mộ 1</td>
                            </tr>
                            <tr class=" table-row-hover">
                                <th class="lg:border_table flex justify-center lg:flex-row flex-col border-t">
                                    <a href="" class="bg-green-600 px-[6px] m-1 text-center" data-bs-toggle="modal" data-bs-target="#modal1"> <i class="text-white fa-solid fa-magnifying-glass"></i></a>
                                    <a href="" class="bg-yellow-300 px-[6px] m-1 text-center" data-bs-toggle="modal" data-bs-target="#modal2"> <i class="text-red-500 fa-solid fa-location-dot"></i></a>
                                </th>
                                <td class="border_table text_item">NguyễN Văn A</td>
                                <td class="border_table text_item">1900</td>
                                <td class="border_table text_item">1950</td>
                                <td class="border_table text_item">Cẩm Mỹ, Cẩm Xuyên, Hà Tĩnh</td>
                                <td class="border_table text_item">Nghĩa trang A Lorem ipsum dolor sit amet </td>
                                <td class="border_table text_item">Xã Hớn Quản</td>
                                <td class="border_table text_item">Lô 1</td>
                                <td class="border_table text_item">Khu mộ 1</td>
                            </tr>
                            <tr class=" table-row-hover">
                                <th class="lg:border_table flex justify-center lg:flex-row flex-col border-t">
                                    <a href="" class="bg-green-600 px-[6px] m-1 text-center" data-bs-toggle="modal" data-bs-target="#modal1"> <i class="text-white fa-solid fa-magnifying-glass"></i></a>
                                    <a href="" class="bg-yellow-300 px-[6px] m-1 text-center" data-bs-toggle="modal" data-bs-target="#modal2"> <i class="text-red-500 fa-solid fa-location-dot"></i></a>
                                </th>
                                <td class="border_table text_item">NguyễN Văn A</td>
                                <td class="border_table text_item">1900</td>
                                <td class="border_table text_item">1950</td>
                                <td class="border_table text_item">Cẩm Mỹ, Cẩm Xuyên, Hà Tĩnh</td>
                                <td class="border_table text_item">Nghĩa trang A Lorem ipsum dolor sit amet </td>
                                <td class="border_table text_item">Xã Hớn Quản</td>
                                <td class="border_table text_item">Lô 1</td>
                                <td class="border_table text_item">Khu mộ 1</td>
                            </tr>

                        </tbody>
                    </table>
                </div>


            </div>
            <!-- Modal thông tin liệt sĩ-->
            <div id="modal1" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content  ">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Thông tin liệt sĩ</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- thông tin -->
                            <div class="flex lg:flex-row flex-col border-gray-300 rounded p-4 shadow-md mt-[10px]">
                                <div class="border p-2">
                                    <img src="../image/hoangsavietnamgiaoducnetvn.jpg" alt="" width="200px">
                                </div>
                                <div class="lg:ml-4 lg:mt-0 mt-[10px]">
                                    <div class="flex lg:text-[16px] text-[13px] font-semibold  mb-0">Liệt sĩ : <p class="text-red-600 ml-1 mb-0 "> Nguyễn Văn A</p>
                                    </div>
                                    <div class="flex lg:text-[16px] text-[13px] font-semibold  mb-0">Năm sinh : <p class="font-thin ml-1 mb-0">1900</p>
                                    </div>
                                    <div class="flex lg:text-[16px] text-[13px] font-semibold  mb-0">Năm hi sinh : <p class="font-thin ml-1 mb-0">1900</p>
                                    </div>
                                    <div class="flex lg:text-[16px] text-[13px] font-semibold  mb-0">Nguyên quán: <p class="font-thin ml-1 mb-0">Cẩm Mỹ, Cẩm Xuyên, Hà Tĩnh</p>
                                    </div>
                                    <div class="flex lg:text-[16px] text-[13px] font-semibold  mb-0">Nghĩa trang: <p class="font-thin ml-1 mb-0">Lorem ipsum dolor sit amet</p>
                                    </div>
                                    <div class="flex lg:text-[16px] text-[13px] font-semibold  mb-0">Vị trí : <p class="font-thin ml-3 mb-0">Khu A , xã Hớn Quản - lô: 1 - hàng: 2 - số mộ:12 </p>
                                    </div>
                                </div>
                            </div>
                            <!-- hình ảnh bia mộ -->
                            <div id="carouselExample" class="carousel slide px-[30px] mt-[20px] border-gray-300 rounded p-4 shadow-lg">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="../image/hoangsavietnamgiaoducnetvn.jpg" class="d-block w-100 lg:h-[500px] h-[200px]" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../image/th.jpg" class="d-block w-100 lg:h-[500px] h-[200px]" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../image/th.jpg" class="d-block w-100 lg:h-[500px] h-[200px]" alt="">
                                    </div>
                                </div>
                                <button class="carousel-control-prev " type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                    <span class="lg:carousel-control-prev-icon text-gray-900 " aria-hidden="true"><svg class="" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512">
                                            <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                                        </svg></span>
                                    <span class="visually-hidden  ">Previous</span>
                                </button>
                                <button class="carousel-control-next " type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                    <span class="lg:carousel-control-next-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512">
                                            <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                        </svg> </span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- end modal thông tin -->

            <!-- modal vị trí liệt sĩ -->
            <div id="modal2" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content  ">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 lg:text-[20px] text-[16px]" id="exampleModalLabel">Nghĩa trang A - sơ đồ mộ liệt sĩ khu B</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body ">
                            <div class="flex lg:text-[20px] text-[16px] justify-center">Vị trí mộ liệt sĩ : Hàng <p class="ml-1"> 1 </p> - Mộ số <p class="ml-1"> 3 </p>
                            </div>

                            <div class=" flex lg:flex-row flex-col">
                                <!-- hình ảnh sơ đồ -->
                                <div class="lg:w-[50%] mb-4">
                                    <p class="text-center">Vị trí bia mộ bằng sơ đồ</p>
                                    <table class="">
                                        <tbody>
                                            <tr class="">
                                                <td class="border_table_diagram bg_col"> 1 </td>
                                                <td class="border_table_diagram "></td>
                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">1</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">2</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="border_item_chose">
                                                        <p class="style_number">3</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">4</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">5</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">6</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">7</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>


                                                <td class="border_table_diagram "></td>
                                                <td class="border_table_diagram bg_col">1</td>
                                            </tr>
                                            <tr class="">
                                                <td class="border_table_diagram bg_col"> 2 </td>
                                                <td class="border_table_diagram "></td>
                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">1</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">2</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">3</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">4</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">5</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">6</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">7</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>


                                                <td class="border_table_diagram "></td>
                                                <td class="border_table_diagram bg_col">2</td>
                                            </tr>
                                            <tr class="">
                                                <td class="border_table_diagram bg_col"> 3 </td>
                                                <td class="border_table_diagram "></td>
                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">1</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">2</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">3</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">4</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">5</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">6</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">7</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>


                                                <td class="border_table_diagram "></td>
                                                <td class="border_table_diagram bg_col">3</td>
                                            </tr>
                                            <tr class="">
                                                <td class="border_table_diagram bg_col"> 4 </td>
                                                <td class="border_table_diagram "></td>
                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">1</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">2</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">3</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">4</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">5</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">6</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">7</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>


                                                <td class="border_table_diagram "></td>
                                                <td class="border_table_diagram bg_col">4</td>
                                            </tr>
                                            <tr class="">
                                                <td class="border_table_diagram bg_col"> 5 </td>
                                                <td class="border_table_diagram "></td>
                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">1</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">2</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">3</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">4</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">5</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">6</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">7</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>


                                                <td class="border_table_diagram "></td>
                                                <td class="border_table_diagram bg_col">5</td>
                                            </tr>
                                            <tr class="">
                                                <td class="border_table_diagram bg_col"> 6 </td>
                                                <td class="border_table_diagram "></td>
                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">1</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">2</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">3</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">4</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">5</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">6</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>

                                                <td class="border_table_diagram bg_item_tb">
                                                    <div class="">
                                                        <p class="style_number">7</p> <i class="text-yellow-400 fa-solid fa-star"></i>

                                                    </div>
                                                </td>


                                                <td class="border_table_diagram "></td>
                                                <td class="border_table_diagram bg_col">6</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- hình ảnh sơ đồ thực tế -->
                                <div class="lg:w-[50%]">
                                    <p class="text-center ">Vị trí bia mộ bằng hình ảnh</p>
                                    <div class="">
                                        <img src="../image/ttxvn_2307nghiatrang9.jpg" alt="">
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div> <!-- end content -->

    </div>

</body>

</html>