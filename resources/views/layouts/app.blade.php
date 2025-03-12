<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EGEAR - Mua thiết bị giáo dục trực tuyến</title>
    
    <script src="https://www.google.com/recaptcha/api.js"></script>
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('public/images/ebook-logo.ico') }}">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap.min.css') }}">
    
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/slick-theme.css') }}">
    
    <!-- Nouislider -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/nouislider.min.css') }}">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/font-awesome.min.css') }}">
    
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}">
    <style>
    .pagination .page-link {
        border: 1px solid #ccc;
        padding: 8px 12px;
        margin: 0 2px;
        color: #000;
    }
    .pagination .page-item.active .page-link {
        background-color: #d0021b;
        border-color: #d0021b;
        color: #fff;
    }
    .pagination .page-link:hover {
        background-color: #d0021b;
        color: #fff;
    }
    </style>
    
</head>

<body>

    @include('inc.header')

    <main>
        @yield('content')
    </main>

    @include('inc.footer')

    <!-- jQuery Plugins -->
    <script src="{{ asset('public/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/main.js') }}"></script>

    <script>
        // Sticky Header
        window.onscroll = function () {
            var header = document.getElementById("header");
            if (window.pageYOffset > header.offsetTop) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        };


        // Xử lý tìm kiếm
        $('#frmSearch').on('submit', function (e) {
            e.preventDefault(); // Ngăn chặn hành vi submit mặc định

            let query = $('#contentSearch').val();
            
            $.ajax({
                url: "{{ route('products.search') }}",
                type: "GET",
                data: { q: query },
                success: function (response) {
                    $('#product-list').html($(response).find('#product-list').html());
                    $('#pagination').html($(response).find('#pagination').html());
                },
                error: function () {
                    alert('Đã xảy ra lỗi khi tìm kiếm.');
                }
            });
        });


        $(document).ready(function() {
            // Hàm filter sản phẩm
            function filterProducts(page = 1, categoryId = null) {
                const selectedCategories = categoryId 
                    ? [categoryId] 
                    : $('.category-filter:checked').map(function() {
                        return $(this).val();
                    }).get();

                const selectedPublishers = $('.publisher-filter:checked').map(function() {
                    return $(this).val();
                }).get();

                $.ajax({
                    url: '{{ route("products.filter") }}',
                    method: 'GET',
                    data: {
                        categories: selectedCategories,
                        publishers: selectedPublishers,
                        page: page,
                    },
                    success: function(response) {
                        const productList = $('#product-list');
                        productList.empty();

                        if (response.products.length > 0) {
                            response.products.forEach(product => {
                                productList.append(`
                                    <div class="col-md-4">
                                        <div class="product">
                                            <div class="product-img">
                                            <a href="{{ url('/products') }}/${product.Product_Id}"><img src="${product.Avatar}" alt="${product.Name}"></a>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">${product.Category_Name}</p>
                                                <h3 class="product-name">
                                                    <a href="{{ url('/products') }}/${product.Product_Id}">${product.Name}</a>
                                                </h3>
                                                <h4 class="product-price">${product.Price}₫</h4>
                                            </div>
                                        </div>
                                    </div>
                                `);
                            });
                            $('#pagination').html(response.pagination);
                        } else {
                            productList.append('<p>Không tìm thấy sản phẩm phù hợp.</p>');
                            $('#pagination').empty();
                        }
                    },
                    error: function(xhr) {
                        console.error('Lỗi:', xhr.responseText);
                    }
                });
            }

            // Click vào danh mục trong header để filter
            $(document).on('click', '.category-link', function(e) {
                e.preventDefault();
                const categoryId = $(this).data('id');
                filterProducts(1, categoryId);
            });

            // Lọc qua checkbox
            $('.category-filter, .publisher-filter').on('change', function() {
                filterProducts();
            });

            // Xử lý phân trang
            $(document).on('click', '#pagination a', function(e) {
                e.preventDefault();
                const page = $(this).attr('href').split('page=')[1];
                filterProducts(page);
            });

            // Load sản phẩm lần đầu
            filterProducts();
        });


        // Kiểm tra mật khẩu có trùng nhau không
        $('#password, #confirm-password').on('keyup', function () {
            var password = $('#password').val();
            var confirm_password = $('#confirm-password').val();
            $('#confirm-password').css('border-color', password !== confirm_password ? "red" : "green");
        });

        // Kiểm tra input đăng nhập
        $('#username, #passwordLogin').on('keyup', function () {
            $('#username').css('border-color', $('#username').val() === "" ? "red" : "");
            $('#passwordLogin').css('border-color', $('#passwordLogin').val() === "" ? "red" : "");
        });
    </script>

</body>
</html>
