<?php
include '../config/db_connection.php';
$id=$_GET['id'];
// var_dump($id);
// die;
$sql= "SELECT `news_id`,`news_name`,`news_content`,`news_img`,`news_author`,`create_time` FROM `news` WHERE news_id = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$sqlLatestNews = 'SELECT `news_id`,`news_name`,`news_img`,`create_time` FROM `news` ORDER BY news_id DESC';
$resultLatestNews = $conn->query($sqlLatestNews);

$sqlOutstanding = "SELECT `news_id`,`news_name`,`new_summary`,`news_img`,`news_author`,`create_time` FROM `news` WHERE outstanding = true";
$resultOutstanding = $conn->query($sqlOutstanding);
$rowOutstanding = $resultOutstanding->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['news_name']; ?></title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>tailwind.config = { theme: { extend: { colors: { primary: '#3b82f6', secondary: '#1e40af' }, borderRadius: { 'none': '0px', 'sm': '4px', DEFAULT: '8px', 'md': '12px', 'lg': '16px', 'xl': '20px', '2xl': '24px', '3xl': '32px', 'full': '9999px', 'button': '8px' } } } }</script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" rel="stylesheet">
    <style>
        :where([class^="ri-"])::before {
            content: "\f3c2";
        }

        .progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(90deg, #3b82f6, #1e40af);
            z-index: 1000;
            transition: width 0.3s ease;
        }

        .back-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            display: none;
            z-index: 100;
        }

        .back-to-top.visible {
            display: block;
        }

        .article-content h2 {
            font-size: 1.5rem;
            font-weight: 600;
            margin: 2rem 0 1rem 0;
            color: #1f2937;
        }

        .article-content h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin: 1.5rem 0 0.75rem 0;
            color: #374151;
        }

        .article-content p {
            margin-bottom: 1rem;
            line-height: 1.7;
        }

        .article-content blockquote {
            border-left: 4px solid #3b82f6;
            padding-left: 1rem;
            margin: 1.5rem 0;
            font-style: italic;
            background: #f8fafc;
            padding: 1rem;
            border-radius: 8px;
        }

        .dark-mode {
            background: #1f2937;
            color: #f9fafb;
        }

        .dark-mode .bg-white {
            background: #374151 !important;
        }

        .dark-mode .text-gray-900 {
            color: #f9fafb !important;
        }

        .dark-mode .text-gray-700 {
            color: #d1d5db !important;
        }

        .dark-mode .text-gray-600 {
            color: #9ca3af !important;
        }

        .dark-mode .border-gray-200 {
            border-color: #4b5563 !important;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900">
    <?php   
    $current_page = "Tin tức";
    include ("../includes/header_child.php");
    ?>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <nav class="flex flex-wrap items-center gap-2 text-sm text-gray-600 mb-8">
            <a href="#" class="hover:text-primary">Trang chủ</a>
            <i class="ri-arrow-right-s-line flex-shrink-0"></i>
            <a href="#" class="hover:text-primary">Tin tức</a>
            <i class="ri-arrow-right-s-line flex-shrink-0"></i>
            <span class="text-gray-900 break-words"><?php echo $row['news_name']; ?></span>
        </nav> 
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 pt-4">
            <main class="lg:col-span-2">
                <article class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="p-8">
                        <div class="mb-6">
                            <h1 class="text-3xl font-bold text-gray-900 mb-4 leading-tight">
                                <?php echo $row['news_name']; ?>
                            </h1>
                            <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600 mb-4">
                                <div class="flex items-center gap-2">
                                    <i class="ri-calendar-line w-4 h-4 flex items-center justify-center"></i>
                                    <span><?php echo $row['create_time']; ?></span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i class="ri-user-line w-4 h-4 flex items-center justify-center"></i>
                                    <span><?php echo $row['news_author']; ?></span>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <span class="text-sm text-gray-600">Chia sẻ:</span>
                                <div class="flex gap-2">
                                    <button
                                        class="w-8 h-8 flex items-center justify-center bg-blue-600 text-white rounded-full hover:bg-blue-700 transition-colors">
                                        <i class="ri-facebook-fill text-sm"></i>
                                    </button>
                                    <button
                                        class="w-8 h-8 flex items-center justify-center bg-sky-500 text-white rounded-full hover:bg-sky-600 transition-colors">
                                        <i class="ri-twitter-x-fill text-sm"></i>
                                    </button>
                                    <button
                                        class="w-8 h-8 flex items-center justify-center bg-blue-700 text-white rounded-full hover:bg-blue-800 transition-colors">
                                        <i class="ri-linkedin-fill text-sm"></i>
                                    </button>
                                    <button
                                        class="w-8 h-8 flex items-center justify-center bg-gray-600 text-white rounded-full hover:bg-gray-700 transition-colors">
                                        <i class="ri-link text-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="mb-8">
                            <img src="<?php echo $row['news_img']; ?>"
                                alt="Chuyển đổi số trong doanh nghiệp"
                                class="w-full h-96 object-cover object-top rounded-lg">
                            <p class="text-sm text-gray-600 mt-2 italic"><?php echo $row['news_name']; ?></p>
                        </div>
                        <div class="article-content text-gray-700 leading-relaxed">
                            <p><?php echo $row['news_content']; ?></p>
                        </div>
                        
                    </div>
                </article>
            </main>
            <aside class="lg:col-span-1">
                <div class="sticky top-24 space-y-6">
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h3 class="text-lg font-semibold mb-4">Bài viết mới cập nhật</h3>
                        <div class="space-y-4">
                    <?php
                    while ($rowLatestNews = $resultLatestNews->fetch_assoc()):
                    ?>
                        <article class="flex gap-4">
                                <img src="https://readdy.ai/api/search-image?query=Vietnamese%20startup%20office%20with%20young%20entrepreneurs%20working%20on%20laptops%2C%20modern%20coworking%20space%20with%20creative%20atmosphere%2C%20innovative%20technology%20workspace%20with%20bright%20lighting%20and%20contemporary%20furniture&width=100&height=80&seq=related001&orientation=landscape"
                                    alt="Startup Việt Nam"
                                    class="w-20 h-16 object-cover object-top rounded-lg flex-shrink-0">
                                <div>
                                    <h4 class="font-medium text-sm leading-tight mb-1">
                                        <a href="../tin-tuc/chi-tiet-tin-tuc.php?id=<?php echo $rowLatestNews['news_id']; ?>" class="hover:text-primary"><?php echo $rowLatestNews['news_name'];?></a>
                                    </h4>
                                    <p class="text-xs text-gray-600"><?php echo $rowLatestNews['create_time']; ?></p>
                                </div>
                            </article>
                    <?php
                    endwhile;
                    ?>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h3 class="text-lg font-semibold mb-4">Bài viết nổi bật</h3>
                        <div class="space-y-4">
                            <article>
                                <img src="<?php echo $rowOutstanding['news_img'];?>"
                                    alt="Thành phố thông minh"
                                    class="w-full h-32 object-cover object-top rounded-lg mb-3">
                                <h4 class="font-medium mb-2">
                                    <a href="#" class="hover:text-primary"><?php echo $rowOutstanding['news_name'];?></a>
                                </h4>
                                <p class="text-sm text-gray-600 mb-2"><?php echo $rowOutstanding['new_summary'];?></p>
                                <div class="flex items-center gap-2 text-xs text-gray-500">
                                    <i class="ri-user-line w-4 h-4 flex items-center justify-center"></i>
                                    <span><?php echo $rowOutstanding['news_author'];?></span>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
        <section class="mt-16 bg-white rounded-lg shadow-sm p-8">
            <h2 class="text-2xl font-bold mb-8">Bài viết cùng chuyên mục</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <article>
                    <img src="https://readdy.ai/api/search-image?query=Vietnamese%20blockchain%20technology%20office%20with%20developers%20working%20on%20cryptocurrency%20and%20digital%20finance%20solutions%2C%20modern%20tech%20workspace%20with%20multiple%20monitors%20showing%20blockchain%20networks%20and%20crypto%20trading%20platforms&width=400&height=250&seq=category001&orientation=landscape"
                        alt="Blockchain Việt Nam" class="w-full h-48 object-cover object-top rounded-lg mb-4">
                    <h3 class="font-semibold mb-2">
                        <a href="#">Blockchain và tiền điện tử: Cơ hội mới cho thị trường tài chính Việt Nam</a>
                    </h3>
                    <p class="text-gray-600 text-sm mb-3">Tìm hiểu về tiềm năng của công nghệ blockchain trong việc thay
                        đổi hệ thống tài chính truyền thống...</p>
                    <div class="flex items-center justify-between text-xs text-gray-500">
                        <span>5 tháng 12, 2024</span>
                        <div class="flex items-center gap-1">
                            <i class="ri-eye-line w-3 h-3 flex items-center justify-center"></i>
                            <span>892 lượt xem</span>
                        </div>
                    </div>
                </article>
                <article class="group">
                    <img src="https://readdy.ai/api/search-image?query=Vietnamese%20IoT%20smart%20factory%20with%20industrial%20automation%20equipment%2C%20modern%20manufacturing%20facility%20with%20connected%20sensors%20and%20robotic%20systems%2C%20Industry%204.0%20implementation%20with%20clean%20industrial%20design&width=400&height=250&seq=category002&orientation=landscape"
                        alt="IoT trong sản xuất"
                        class="w-full h-48 object-cover object-top rounded-lg mb-4 group-hover:scale-105 transition-transform duration-300">
                    <h3 class="font-semibold mb-2 group-hover:text-primary transition-colors">
                        <a href="#">IoT trong sản xuất: Cách mạng công nghiệp 4.0 tại Việt Nam</a>
                    </h3>
                    <p class="text-gray-600 text-sm mb-3">Khám phá cách Internet of Things đang biến đổi ngành sản xuất
                        và mang lại hiệu quả kinh tế...</p>
                    <div class="flex items-center justify-between text-xs text-gray-500">
                        <span>3 tháng 12, 2024</span>
                        <div class="flex items-center gap-1">
                            <i class="ri-eye-line w-3 h-3 flex items-center justify-center"></i>
                            <span>1,234 lượt xem</span>
                        </div>
                    </div>
                </article>
                <article class="group">
                    <img src="https://readdy.ai/api/search-image?query=Vietnamese%20cybersecurity%20operations%20center%20with%20security%20analysts%20monitoring%20network%20threats%2C%20modern%20SOC%20facility%20with%20multiple%20screens%20displaying%20security%20dashboards%20and%20threat%20intelligence%20data&width=400&height=250&seq=category003&orientation=landscape"
                        alt="An ninh mạng"
                        class="w-full h-48 object-cover object-top rounded-lg mb-4 group-hover:scale-105 transition-transform duration-300">
                    <h3 class="font-semibold mb-2 group-hover:text-primary transition-colors">
                        <a href="#">An ninh mạng: Thách thức và giải pháp cho doanh nghiệp Việt</a>
                    </h3>
                    <p class="text-gray-600 text-sm mb-3">Tầm quan trọng của an ninh mạng trong thời đại số hóa và các
                        biện pháp bảo vệ hiệu quả...</p>
                    <div class="flex items-center justify-between text-xs text-gray-500">
                        <span>1 tháng 12, 2024</span>
                        <div class="flex items-center gap-1">
                            <i class="ri-eye-line w-3 h-3 flex items-center justify-center"></i>
                            <span>756 lượt xem</span>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </div>
    <?php
    include ("../includes/footer_child.php");
    include ("../includes/cta.php");
   ?>
    <button
        class="back-to-top w-12 h-12 bg-primary text-white rounded-full shadow-lg hover:bg-blue-600 transition-all duration-300">
        <i class="ri-arrow-up-line"></i>
    </button>
    <script id="backToTop">
        document.addEventListener('DOMContentLoaded', function () {
            const backToTopBtn = document.querySelector('.back-to-top');
            function toggleBackToTop() {
                if (window.pageYOffset > 300) {
                    backToTopBtn.classList.add('visible');
                } else {
                    backToTopBtn.classList.remove('visible');
                }
            }
            window.addEventListener('scroll', toggleBackToTop);
            backToTopBtn.addEventListener('click', function () {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>
    <script id="socialShare">
        document.addEventListener('DOMContentLoaded', function () {
            const shareButtons = document.querySelectorAll('[class*="bg-blue-"], [class*="bg-sky-"], [class*="bg-gray-"]');
            const currentUrl = encodeURIComponent(window.location.href);
            const title = encodeURIComponent(document.title);
            shareButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const icon = this.querySelector('i');
                    let shareUrl = '';
                    if (icon.classList.contains('ri-facebook-fill')) {
                        shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${currentUrl}`;
                    } else if (icon.classList.contains('ri-twitter-x-fill')) {
                        shareUrl = `https://twitter.com/intent/tweet?url=${currentUrl}&text=${title}`;
                    } else if (icon.classList.contains('ri-linkedin-fill')) {
                        shareUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${currentUrl}`;
                    } else if (icon.classList.contains('ri-link')) {
                        navigator.clipboard.writeText(window.location.href);
                        alert('Đã sao chép liên kết!');
                        return;
                    }
                    if (shareUrl) {
                        window.open(shareUrl, '_blank', 'width=600,height=400');
                    }
                });
            });
        });
    </script>
</body>

</html>