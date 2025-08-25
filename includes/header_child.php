<?php
// Đảm bảo $current_page được khai báo trước khi include header.php
$current_page = isset($current_page) ? $current_page : '';

// Mảng ánh xạ tên trang với các liên kết
$pages = [
    'Trang Chủ' => '../index.php',
    'Giới thiệu' => '../gioi-thieu/index.php',
    'Sản phẩm' => 'san-pham.php',
    'Tin tức' => '../tin-tuc/index.php',
    'Liên hệ' => 'lien-he.php'
];
?>

<header class="fixed top-0 left-0 right-0 bg-white shadow-sm z-50">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-20">
            <div class="flex items-center">
                <img src="https://static.readdy.ai/image/1f4438e38b74ed87371441e676e628ff/03fab2af4240621cd4dc7a01ab0d6c62.png"
                    alt="TALC Logo" class="h-16">
            </div>
            <nav class="hidden lg:flex items-center space-x-8">
                <a href="../index.php" class="text-lg <?php echo ($current_page == 'Trang Chủ') ? 'text-primary font-bold' : 'text-gray-700 hover:text-primary transition-colors'; ?>">Trang chủ</a>
                <a href="../gioi-thieu/index.php" class="text-lg <?php echo ($current_page == 'Giới thiệu') ? 'text-primary font-bold' : 'text-gray-700 hover:text-primary transition-colors'; ?>">Giới thiệu</a>
                <div class="relative" id="productDropdown">
                    <button class="flex items-center text-lg <?php echo ($current_page == 'Sản phẩm') ? 'text-primary font-bold' : 'text-gray-700 hover:text-primary transition-colors'; ?>" id="productDropdownBtn">
                        Sản phẩm
                        <div class="w-5 h-5 flex items-center justify-center ml-1">
                            <i class="ri-arrow-down-s-line"></i>
                        </div>
                    </button>
                    <div class="absolute top-full left-0 mt-2 w-64 bg-white shadow-lg rounded opacity-0 invisible transition-all duration-200"
                        id="productDropdownMenu">
                        <div class="py-2">
                            <div class="px-4 py-2 text-sm font-semibold text-gray-900 border-b">Bột TALC</div>
                            <a href="../san-pham/index.php" class="block px-6 py-2 text-sm text-gray-700 hover:bg-gray-50">Bột TALC A</a>
                            <a href="../san-pham/index.php" class="block px-6 py-2 text-sm text-gray-700 hover:bg-gray-50">Bột TALC C</a>
                            <a href="../san-pham/index.php" class="block px-6 py-2 text-sm text-gray-700 hover:bg-gray-50">Bột TALC A</a>
                            <div class="px-4 py-2 text-sm font-semibold text-gray-900 border-b border-t mt-2">Bột đá CaCO3</div>
                            <a href="../san-pham/index.php" class="block px-6 py-2 text-sm text-gray-700 hover:bg-gray-50">Bột đá 8 Micron</a>
                            <a href="../san-pham/index.php" class="block px-6 py-2 text-sm text-gray-700 hover:bg-gray-50">Bột đá 10 Micron</a>
                            <a href="../san-pham/index.php" class="block px-6 py-2 text-sm text-gray-700 hover:bg-gray-50">Bột đá 15 Micron</a>
                        </div>
                    </div>
                </div>
                <a href="../tin-tuc/index.php" class="text-lg <?php echo ($current_page == 'Tin tức') ? 'text-primary font-bold' : 'text-gray-700 hover:text-primary transition-colors'; ?>">Tin tức</a>
                <a href="../lien-he/index.php" class="text-lg <?php echo ($current_page == 'Liên hệ') ? 'text-primary font-bold' : 'text-gray-700 hover:text-primary transition-colors'; ?>">Liên hệ</a>
            </nav>
            <div class="flex items-center space-x-4">
                <button class="w-8 h-8 flex items-center justify-center text-gray-600 hover:text-primary transition-colors"
                    id="searchToggle">
                    <i class="ri-search-line"></i>
                </button>
                <button class="lg:hidden w-8 h-8 flex items-center justify-center text-gray-600"
                    id="mobileMenuToggle">
                    <i class="ri-menu-line"></i>
                </button>
            </div>
        </div>
        <div class="hidden overflow-hidden transition-all duration-300" id="searchBar">
            <div class="py-4 border-t">
                <div class="relative">
                    <input type="text" placeholder="Tìm kiếm sản phẩm..."
                        class="w-full px-4 py-2 pr-10 border rounded-lg focus:outline-none focus:border-primary">
                    <div
                        class="absolute right-3 top-1/2 transform -translate-y-1/2 w-4 h-4 flex items-center justify-center">
                        <i class="ri-search-line text-gray-400"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:hidden hidden" id="mobileMenu">
            <div class="py-4 space-y-2 border-t">
                <a href="../index.php" class="block px-4 py-2 <?php echo ($current_page == 'Trang Chủ') ? 'text-primary font-bold' : 'text-gray-700 hover:bg-gray-50'; ?>">Trang chủ</a>
                <a href="../gioi-thieu/index.php" class="block px-4 py-2 <?php echo ($current_page == 'Giới thiệu') ? 'text-primary font-bold' : 'text-gray-700 hover:bg-gray-50'; ?>">Giới thiệu</a>
                <div class="px-4 py-2">
                    <button class="flex items-center w-full text-left <?php echo ($current_page == 'Sản phẩm') ? 'text-primary font-bold' : 'text-gray-700'; ?>" id="mobileProductToggle">
                        Sản phẩm
                        <div class="w-4 h-4 flex items-center justify-center ml-1">
                            <i class="ri-arrow-down-s-line"></i>
                        </div>
                    </button>
                    <div class="hidden mt-2 ml-4 space-y-1" id="mobileProductMenu">
                        <div class="text-sm font-semibold text-gray-900 py-1">Bột TALC</div>
                        <a href="../san-pham/index.php" class="block py-1 text-sm text-gray-600 ml-4">Bột TALC A</a>
                        <a href="../san-pham/index.php" class="block py-1 text-sm text-gray-600 ml-4">Bột TALC C</a>
                        <a href="../san-pham/index.php" class="block py-1 text-sm text-gray-600 ml-4">Bột TALC A</a>
                        <div class="text-sm font-semibold text-gray-900 py-1 mt-2">Bột đá CaCO3</div>
                        <a href="../san-pham/index.php" class="block py-1 text-sm text-gray-600 ml-4">Bột đá 8 Micron</a>
                        <a href="../san-pham/index.php" class="block py-1 text-sm text-gray-600 ml-4">Bột đá 10 Micron</a>
                        <a href="../san-pham/index.php" class="block py-1 text-sm text-gray-600 ml-4">Bột đá 15 Micron</a>
                    </div>
                </div>
                <a href="../tin-tuc/index.php" class="block px-4 py-2 <?php echo ($current_page == 'Tin tức') ? 'text-primary font-bold' : 'text-gray-700 hover:bg-gray-50'; ?>">Tin tức</a>
                <a href="lien-he.php" class="block px-4 py-2 <?php echo ($current_page == 'Liên hệ') ? 'text-primary font-bold' : 'text-gray-700 hover:bg-gray-50'; ?>">Liên hệ</a>
            </div>
        </div>
    </div>
</header>

<script id="search-toggle">
    document.addEventListener('DOMContentLoaded', function () {
        const searchToggle = document.getElementById('searchToggle');
        const searchBar = document.getElementById('searchBar');
        searchToggle.addEventListener('click', function () {
            searchBar.classList.toggle('hidden');
        });
    });
</script>
<script id="mobile-menu">
    document.addEventListener('DOMContentLoaded', function () {
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        const mobileProductToggle = document.getElementById('mobileProductToggle');
        const mobileProductMenu = document.getElementById('mobileProductMenu');
        mobileMenuToggle.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
        });
        mobileProductToggle.addEventListener('click', function () {
            mobileProductMenu.classList.toggle('hidden');
        });
    });
</script>
<script id="product-dropdown">
    document.addEventListener('DOMContentLoaded', function () {
        const productDropdownBtn = document.getElementById('productDropdownBtn');
        const productDropdownMenu = document.getElementById('productDropdownMenu');
        let isDropdownOpen = false;
        function toggleDropdown() {
            isDropdownOpen = !isDropdownOpen;
            if (isDropdownOpen) {
                productDropdownMenu.classList.remove('opacity-0', 'invisible');
                productDropdownMenu.classList.add('opacity-100', 'visible');
                productDropdownBtn.classList.add('text-primary');
            } else {
                productDropdownMenu.classList.remove('opacity-100', 'visible');
                productDropdownMenu.classList.add('opacity-0', 'invisible');
                productDropdownBtn.classList.remove('text-primary');
            }
        }
        function closeDropdown() {
            isDropdownOpen = false;
            productDropdownMenu.classList.remove('opacity-100', 'visible');
            productDropdownMenu.classList.add('opacity-0', 'invisible');
            productDropdownBtn.classList.remove('text-primary');
        }
        productDropdownBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            toggleDropdown();
        });
        document.addEventListener('click', function (e) {
            const productDropdown = document.getElementById('productDropdown');
            if (!productDropdown.contains(e.target)) {
                closeDropdown();
            }
        });
    });
</script>