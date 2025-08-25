<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin Tức & Cập Nhật - Công ty TNHH Khoáng Sản Việt</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" rel="stylesheet">
    <style>
        :where([class^="ri-"])::before {
            content: "\f3c2";
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2563eb',
                        secondary: '#64748b'
                    },
                    borderRadius: {
                        'none': '0px',
                        'sm': '4px',
                        DEFAULT: '8px',
                        'md': '12px',
                        'lg': '16px',
                        'xl': '20px',
                        '2xl': '24px',
                        '3xl': '32px',
                        'full': '9999px',
                        'button': '8px'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-white">
    <?php   
    $current_page = "Tin tức";
    include ("../includes/header_child.php");
    ?>
    <main class="pt-16">
        <section class="relative h-96 flex items-center justify-center overflow-hidden"
            style="background-image: url('https://readdy.ai/api/search-image?query=Modern%20industrial%20news%20and%20communication%20concept%20with%20digital%20screens%20displaying%20mining%20industry%20updates%2C%20professional%20corporate%20environment%2C%20clean%20bright%20background%2C%20technology%20and%20information%20flow%2C%20mineral%20processing%20industry%20news&width=1920&height=600&seq=newshero001&orientation=landscape'); background-size: cover; background-position: center;">
            <div class="absolute inset-0 bg-black bg-opacity-40"></div>
            <div class="relative z-10 text-center text-white max-w-4xl mx-auto px-4">
                <h1 class="text-4xl lg:text-5xl font-bold mb-4">Tin Tức & Cập Nhật</h1>
                <p class="text-lg lg:text-xl opacity-90">Cập nhật những thông tin mới nhất về sản phẩm và ngành công
                    nghiệp khoáng sản</p>
            </div>
        </section>
        <section class="py-12 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
                    <div class="flex flex-col lg:flex-row gap-6 items-center">
                        <div class="flex-1">
                            <div class="relative">
                                <input type="text" placeholder="Tìm kiếm tin tức..."
                                    class="w-full px-4 py-3 pr-12 border border-gray-300 rounded-lg focus:outline-none focus:border-primary text-sm">
                                <div
                                    class="absolute right-4 top-1/2 transform -translate-y-1/2 w-5 h-5 flex items-center justify-center">
                                    <i class="ri-search-line text-gray-400"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <button
                                class="px-4 py-2 bg-primary text-white rounded-full text-sm font-medium !rounded-button whitespace-nowrap"
                                data-category="all">Tất cả</button>
                            <button
                                class="px-4 py-2 bg-gray-100 text-gray-700 hover:bg-gray-200 rounded-full text-sm font-medium !rounded-button whitespace-nowrap"
                                data-category="product">Sản phẩm</button>
                            <button
                                class="px-4 py-2 bg-gray-100 text-gray-700 hover:bg-gray-200 rounded-full text-sm font-medium !rounded-button whitespace-nowrap"
                                data-category="technology">Công nghệ</button>
                            <button
                                class="px-4 py-2 bg-gray-100 text-gray-700 hover:bg-gray-200 rounded-full text-sm font-medium !rounded-button whitespace-nowrap"
                                data-category="environment">Môi trường</button>
                        </div>
                        <div class="relative">
                            <button
                                class="flex items-center px-4 py-2 border border-gray-300 rounded-lg text-sm hover:border-primary transition-colors whitespace-nowrap"
                                id="sortDropdownBtn">
                                Mới nhất
                                <div class="w-4 h-4 flex items-center justify-center ml-2">
                                    <i class="ri-arrow-down-s-line"></i>
                                </div>
                            </button>
                            <div class="absolute top-full right-0 mt-2 w-40 bg-white shadow-lg rounded-lg opacity-0 invisible transition-all duration-200 z-10"
                                id="sortDropdownMenu">
                                <div class="py-2">
                                    <button
                                        class="block w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-50"
                                        data-sort="newest">Mới nhất</button>
                                    <button
                                        class="block w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-50"
                                        data-sort="oldest">Cũ nhất</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-12">
            <div class="container mx-auto px-4">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="newsGrid">
                    <article class="bg-white rounded-lg shadow-lg overflow-hidd en hover:shadow-xl transition-shadow"
                        data-category="technology" data-date="2024-12-20">
                        <img src="https://readdy.ai/api/search-image?query=Advanced%20mineral%20processing%20technology%20with%20modern%20machinery%20and%20automation%20systems%2C%20clean%20industrial%20environment%2C%20high-tech%20equipment%20for%20stone%20powder%20production%2C%20professional%20factory%20setting%20with%20quality%20control%20systems&width=400&height=250&seq=news001&orientation=landscape"
                            alt="Công nghệ mới trong sản xuất bột đá" class="w-full h-48 object-cover object-top">
                        <div class="p-6">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded">Công
                                    nghệ</span>
                                <span class="text-sm text-gray-500">20 Tháng 12, 2024</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Công nghệ mới trong sản xuất bột đá
                                CaCO3 siêu mịn</h3>
                            <p class="text-gray-600 mb-4 line-clamp-3">Ứng dụng công nghệ xử lý tiên tiến giúp nâng cao
                                chất lượng và độ tinh khiết của sản phẩm bột đá CaCO3, đạt độ mịn dưới 5 micron với hiệu
                                suất cao...</p>
                            <a href="./chi-tiet-tin-tuc.php"
                                data-readdy="true" class="text-primary hover:text-blue-700 font-medium">Đọc thêm →</a>
                        </div>
                    </article>
                </div>

                <div class="flex justify-center items-center mt-12 space-x-2">
                    <button
                        class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded hover:border-primary hover:text-primary transition-colors"
                        id="prevPage">
                        <i class="ri-arrow-left-s-line"></i>
                    </button>
                    <button class="w-10 h-10 flex items-center justify-center bg-primary text-white rounded"
                        data-page="1">1</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded hover:border-primary hover:text-primary transition-colors"
                        data-page="2">2</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded hover:border-primary hover:text-primary transition-colors"
                        data-page="3">3</button>
                    <span class="px-2">...</span>
                    <button
                        class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded hover:border-primary hover:text-primary transition-colors"
                        data-page="8">8</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded hover:border-primary hover:text-primary transition-colors"
                        id="nextPage">
                        <i class="ri-arrow-right-s-line"></i>
                    </button>
                </div>
            </div>
        </section>
    </main>
    <?php
    include ("../includes/footer_child.php");
    include ("../includes/cta.php");
   ?>
    <script id="sort-dropdown">
        document.addEventListener('DOMContentLoaded', function () {
            const sortDropdownBtn = document.getElementById('sortDropdownBtn');
            const sortDropdownMenu = document.getElementById('sortDropdownMenu');
            let isSortDropdownOpen = false;
            function toggleSortDropdown() {
                isSortDropdownOpen = !isSortDropdownOpen;
                if (isSortDropdownOpen) {
                    sortDropdownMenu.classList.remove('opacity-0', 'invisible');
                    sortDropdownMenu.classList.add('opacity-100', 'visible');
                } else {
                    sortDropdownMenu.classList.remove('opacity-100', 'visible');
                    sortDropdownMenu.classList.add('opacity-0', 'invisible');
                }
            }
            function closeSortDropdown() {
                isSortDropdownOpen = false;
                sortDropdownMenu.classList.remove('opacity-100', 'visible');
                sortDropdownMenu.classList.add('opacity-0', 'invisible');
            }
            sortDropdownBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                toggleSortDropdown();
            });
            document.addEventListener('click', function (e) {
                if (!sortDropdownBtn.contains(e.target) && !sortDropdownMenu.contains(e.target)) {
                    closeSortDropdown();
                }
            });
            const sortButtons = sortDropdownMenu.querySelectorAll('[data-sort]');
            sortButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const sortType = this.getAttribute('data-sort');
                    sortDropdownBtn.firstChild.textContent = this.textContent;
                    closeSortDropdown();
                    sortNews(sortType);
                });
            });
        });
    </script>
    <script id="news-filter">
        document.addEventListener('DOMContentLoaded', function () {
            const categoryButtons = document.querySelectorAll('[data-category]');
            const newsArticles = document.querySelectorAll('#newsGrid article');
            const searchInput = document.querySelector('input[placeholder="Tìm kiếm tin tức..."]');
            let currentCategory = 'all';
            let currentSort = 'newest';
            categoryButtons.forEach(button => {
                button.addEventListener('click', function () {
                    categoryButtons.forEach(btn => {
                        btn.classList.remove('bg-primary', 'text-white');
                        btn.classList.add('bg-gray-100', 'text-gray-700', 'hover:bg-gray-200');
                    });
                    this.classList.remove('bg-gray-100', 'text-gray-700', 'hover:bg-gray-200');
                    this.classList.add('bg-primary', 'text-white');
                    currentCategory = this.getAttribute('data-category');
                    filterNews();
                });
            });
            searchInput.addEventListener('input', function () {
                filterNews();
            });
            function filterNews() {
                const searchTerm = searchInput.value.toLowerCase();
                newsArticles.forEach(article => {
                    const category = article.getAttribute('data-category');
                    const title = article.querySelector('h3').textContent.toLowerCase();
                    const content = article.querySelector('p').textContent.toLowerCase();
                    const categoryMatch = currentCategory === 'all' || category === currentCategory;
                    const searchMatch = searchTerm === '' || title.includes(searchTerm) || content.includes(searchTerm);
                    if (categoryMatch && searchMatch) {
                        article.style.display = 'block';
                    } else {
                        article.style.display = 'none';
                    }
                });
            }
            window.sortNews = function (sortType) {
                currentSort = sortType;
                const newsGrid = document.getElementById('newsGrid');
                const articles = Array.from(newsArticles);
                articles.sort((a, b) => {
                    const dateA = new Date(a.getAttribute('data-date'));
                    const dateB = new Date(b.getAttribute('data-date'));
                    if (sortType === 'newest') {
                        return dateB - dateA;
                    } else {
                        return dateA - dateB;
                    }
                });
                articles.forEach(article => {
                    newsGrid.appendChild(article);
                });
            };
        });
    </script>
    <script id="pagination">
        document.addEventListener('DOMContentLoaded', function () {
            const pageButtons = document.querySelectorAll('[data-page]');
            const prevButton = document.getElementById('prevPage');
            const nextButton = document.getElementById('nextPage');
            let currentPage = 1;
            pageButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const page = parseInt(this.getAttribute('data-page'));
                    setCurrentPage(page);
                });
            });
            prevButton.addEventListener('click', function () {
                if (currentPage > 1) {
                    setCurrentPage(currentPage - 1);
                }
            });
            nextButton.addEventListener('click', function () {
                if (currentPage < 8) {
                    setCurrentPage(currentPage + 1);
                }
            });
            function setCurrentPage(page) {
                pageButtons.forEach(btn => {
                    btn.classList.remove('bg-primary', 'text-white');
                    btn.classList.add('border', 'border-gray-300', 'hover:border-primary', 'hover:text-primary');
                });
                const targetButton = document.querySelector(`[data-page="${page}"]`);
                if (targetButton) {
                    targetButton.classList.remove('border', 'border-gray-300', 'hover:border-primary', 'hover:text-primary');
                    targetButton.classList.add('bg-primary', 'text-white');
                }
                currentPage = page;
            }
        });
    </script>
</body>

</html>