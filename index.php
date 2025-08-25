<?php
include __DIR__ . '../config/db_connection.php';

// Lấy danh sách sản phẩm nổi bật
$sql = "SELECT p.product_id, p.product_name, p.product_description, p.product_price, p.product_img
        FROM products p
        WHERE p.outstanding_products = 'true'
        ORDER BY p.create_at DESC
        LIMIT 8";

$resultproducts = $conn->query($sql);

$sql= "SELECT `news_id`,`news_name`,`new_summary`,`news_img`,`create_time` FROM `news` limit 3";

$resultnew = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bột Đá Chất Lượng Cao - Công ty Cổ phần khoáng sản miền Bắc</title>
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
    $current_page = "Trang Chủ";
    include ("./includes/header.php");
    ?>
    <main class="pt-16">
        <section class="relative h-screen flex items-center justify-center overflow-hidden"
            style="background-image: url('https://readdy.ai/api/search-image?query=Industrial%20stone%20powder%20manufacturing%20facility%20with%20white%20limestone%20powder%20in%20modern%20processing%20plant%2C%20clean%20bright%20environment%20with%20professional%20equipment%2C%20soft%20natural%20lighting%2C%20minimal%20background%2C%20high%20quality%20industrial%20photography&width=1920&height=1080&seq=hero001&orientation=landscape'); background-size: cover; background-position: center;">
            <div class="absolute inset-0 bg-black bg-opacity-30"></div>
            <div class="relative z-10 text-center text-white max-w-4xl mx-auto px-4">
                <h1 class="text-5xl lg:text-6xl font-bold mb-6">Bột Đá Chất Lượng Cao</h1>
                <p class="text-xl lg:text-2xl mb-8 opacity-90">Chuyên sản xuất và cung cấp bột đá TALC, CaCO3 với độ
                    tinh khiết cao cho các ngành công nghiệp</p>
                <button
                    class="bg-primary hover:bg-blue-700 text-white px-8 py-4 text-lg font-semibold !rounded-button transition-colors whitespace-nowrap">
                    Xem sản phẩm
                </button>
            </div>
        </section>
        <section class="py-20 bg-gradient-to-br from-amber-50 via-orange-50 to-white">
            <div class="container mx-auto px-4">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <img src="https://readdy.ai/api/search-image?query=Modern%20stone%20powder%20processing%20factory%20interior%20with%20advanced%20machinery%20and%20equipment%2C%20clean%20industrial%20environment%2C%20workers%20in%20safety%20gear%2C%20bright%20lighting%2C%20professional%20industrial%20photography%20showing%20quality%20control%20and%20production%20process&width=600&height=400&seq=about001&orientation=landscape"
                            alt="Nhà máy sản xuất" class="rounded-lg shadow-lg w-full object-cover object-top">
                    </div>
                    <div>
                        <h2 class="text-4xl font-bold text-gray-900 mb-6">Về Chúng Tôi</h2>
                        <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                            Với hơn 15 năm kinh nghiệm trong lĩnh vực khai thác và chế biến khoáng sản, chúng tôi tự hào
                            là nhà cung cấp hàng đầu các sản phẩm bột đá chất lượng cao tại Việt Nam.
                        </p>
                        <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                            Sản phẩm của chúng tôi được sản xuất trên dây chuyền công nghệ hiện đại, đảm bảo độ tinh
                            khiết và chất lượng ổn định, phục vụ cho các ngành sơn, nhựa, giấy, mỹ phẩm và dược phẩm.
                        </p>
                        <button
                            class="bg-primary hover:bg-blue-700 text-white px-6 py-3 !rounded-button transition-colors whitespace-nowrap">
                            Xem thêm
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-20 bg-gradient-to-b from-blue-50 to-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Sản Phẩm Nổi Bật</h2>
                    <p class="text-gray-600 text-lg max-w-2xl mx-auto">Khám phá dòng sản phẩm bột đá chất lượng cao với
                        độ tinh khiết vượt trội</p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <?php while($row = $resultproducts->fetch_assoc()){ ?>
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                        <img src="https://readdy.ai/api/search-image?query=High%20quality%20white%20TALC%20powder%20in%20professional%20packaging%20container%2C%20pure%20white%20fine%20powder%20texture%2C%20clean%20minimal%20background%2C%20product%20photography%20with%20soft%20lighting%2C%20industrial%20grade%20mineral%20powder&width=300&height=200&seq=prod001&orientation=landscape"
                            alt="Bột TALC A" class="w-full h-48 object-cover object-top">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2"><?php echo $row['product_name'] ?> </h3>
                            <p class="text-gray-600 mb-4"><?php echo $row['product_description'] ?></p>
                            <button
                                class="bg-primary hover:bg-blue-700 text-white px-4 py-2 !rounded-button transition-colors whitespace-nowrap">
                               <a href="./san-pham/index.php?id=<?php echo $row['product_id']?>"> Chi tiết </a>
                            </button>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="text-center mt-12">
                    <button
                        class="bg-secondary hover:bg-gray-600 text-white px-8 py-3 !rounded-button transition-colors whitespace-nowrap">
                        Xem tất cả sản phẩm
                    </button>
                </div>
            </div>
        </section>
        <section class="py-20 bg-gradient-to-b from-emerald-50 to-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Tin Tức & Cập Nhật</h2>
                    <p class="text-gray-600 text-lg max-w-2xl mx-auto">Cập nhật những thông tin mới nhất về sản phẩm và
                        ngành công nghiệp</p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php
                    while ($row = $resultnew->fetch_assoc()):
                    ?>
                    <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                        <img src="<?php echo $row['news_img']; ?>"
                            alt="<?php echo $row['news_name'];?>" class="w-full h-48 object-cover object-top">
                        <div class="p-6">
                            <div class="text-sm text-gray-500 mb-2"><?php echo $row['create_time'];?></div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-3"><?php echo $row['news_name'];?></h3>
                            <p class="text-gray-600 mb-4"><?php echo $row['new_summary'];?></p>
                            <a href="./tin-tuc/chi-tiet-tin-tuc.php?id=<?php echo $row['news_id'];?>" class="text-primary hover:text-blue-700 font-medium">Đọc thêm →</a>
                        </div>
                    </article>
                    <?php 
                    endwhile;
                    ?>
                </div>
            </div>
        </section>
        <section class="py-20 bg-gradient-to-r from-primary via-blue-600 to-blue-700 text-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-4xl font-bold mb-4">Sẵn sàng hợp tác cùng chúng tôi?</h2>
                <p class="text-xl mb-8 opacity-90">Liên hệ ngay để được tư vấn và báo giá tốt nhất</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button
                        class="bg-white text-primary hover:bg-gray-100 px-8 py-3 !rounded-button font-semibold transition-colors whitespace-nowrap">
                         <a href="./lien-he/index.php">Liên hệ ngay</a>
                    </button>
                    <button
                        class="border-2 border-white text-white hover:bg-white hover:text-primary px-8 py-3 !rounded-button font-semibold transition-colors whitespace-nowrap">
                        Tải catalog
                    </button>
                </div>
            </div>
        </section>
        <section class="py-20 bg-gradient-to-b from-purple-50 to-white">
            <div class="container mx-auto px-4">
                <div class="grid lg:grid-cols-2 gap-12">
                    <div class="bg-white shadow-lg p-8 rounded-lg">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Gửi thông tin liên hệ</h3>
                        <form id="contactForm" method="POST" id="contactForm" class="space-y-4">
                            <div>
                                <input type="text" name="name" placeholder="Họ và tên" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-primary">
                            </div>
                            <div>
                                <input type="email" name="email" placeholder="Email" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-primary">
                            </div>
                            <div>
                                <input type="tel" name="phone" placeholder="Số điện thoại" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-primary">
                            </div>
                            <div>
                                <textarea name="message" placeholder="Nội dung" rows="4" maxlength="500" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-primary"></textarea>
                            </div>
                            <button type="submit"
                                class="w-full bg-primary hover:bg-blue-700 text-white px-6 py-3 !rounded-button font-semibold transition-colors whitespace-nowrap">
                                Gửi thông tin
                            </button>
                        </form>
                    </div>
                    <div class="space-y-8">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Thông tin liên hệ</h3>
                            <div class="space-y-4">
                                <div class="flex items-start space-x-4">
                                    <div class="w-6 h-6 flex items-center justify-center text-primary mt-1">
                                        <i class="ri-map-pin-2-line"></i>
                                    </div>
                                    <p class="text-gray-600">Địa chỉ: Tầng 4, Tòa 2B Vinata Tower, Số 289 Khuất Duy
                                        Tiến, P.Đại Mỗ, TP.Hà Nội</p>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="w-6 h-6 flex items-center justify-center text-primary">
                                        <i class="ri-phone-line"></i>
                                    </div>
                                    <p class="text-gray-600">Hotline: <a href="tel:0522317888"
                                            class="hover:text-primary">0522317888</a></p>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="w-6 h-6 flex items-center justify-center text-primary">
                                        <i class="ri-mail-line"></i>
                                    </div>
                                    <p class="text-gray-600">Email: <a href="mailto:khoangsanmienbackt@gmail.com"
                                            class="hover:text-primary">khoangsanmienbackt@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <img src="https://readdy.ai/api/search-image?query=modern%20office%20building%20exterior%20with%20glass%20facade%2C%20professional%20corporate%20architecture%2C%20clean%20design%2C%20daytime%20photography%20with%20blue%20sky&width=600&height=400&seq=office001&orientation=landscape"
                                alt="Văn phòng công ty"
                                class="w-full h-64 object-cover object-top rounded-lg shadow-lg">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
   <?php
    include ("./includes/footer.php");
    include ("./includes/cta.php");
   ?>
    <!-- <script id="contact-form">
        document.addEventListener('DOMContentLoaded', function () {
            const contactForm = document.getElementById('contactForm');
            if (contactForm) {
                contactForm.addEventListener('submit', function (e) {
                    e.preventDefault();
                    const formData = new FormData(contactForm);
                    const submitButton = contactForm.querySelector('button[type="submit"]');
                    const originalText = submitButton.innerHTML;
                    submitButton.innerHTML = 'Đang gửi...';
                    submitButton.disabled = true;
                    setTimeout(() => {
                        submitButton.innerHTML = 'Gửi thành công!';
                        submitButton.classList.add('bg-green-600');
                        contactForm.reset();
                        setTimeout(() => {
                            submitButton.innerHTML = originalText;
                            submitButton.classList.remove('bg-green-600');
                            submitButton.disabled = false;
                        }, 2000);
                    }, 1000);
                });
            }
        });
    </script> -->
    <script id="smooth-scroll">
        document.addEventListener('DOMContentLoaded', function () {
            const links = document.querySelectorAll('a[href^="#"]');
            const scrollToTopBtn = document.getElementById('scrollToTop');
            links.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
            window.addEventListener('scroll', function () {
                if (window.pageYOffset > 500) {
                    scrollToTopBtn.classList.remove('opacity-0', 'invisible');
                    scrollToTopBtn.classList.add('opacity-100', 'visible');
                } else {
                    scrollToTopBtn.classList.remove('opacity-100', 'visible');
                    scrollToTopBtn.classList.add('opacity-0', 'invisible');
                }
            });
            scrollToTopBtn.addEventListener('click', function () {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>
    <script>
document.getElementById("contactForm").addEventListener("submit", async function(e){
    e.preventDefault(); // chặn reload

    const form = e.target;
    const formData = new FormData(form);

    try {
        let res = await fetch("../modules/save_contact.php", { // gọi trực tiếp file PHP
            method: "POST",
            body: formData
        });

        let text = await res.text(); // PHP trả "OK" hoặc "ERROR"

        if(text.trim() === "OK"){
            document.getElementById("responseMsg").innerHTML =
                `<p class="text-green-600 font-semibold">✅ Gửi thành công! Cảm ơn bạn đã liên hệ.</p>`;
            form.reset();
        } else {
            document.getElementById("responseMsg").innerHTML =
                `<p class="text-red-600 font-semibold">❌ Gửi thất bại, vui lòng thử lại!</p>`;
        }
    } catch (err) {
        document.getElementById("responseMsg").innerHTML =
            `<p class="text-red-600 font-semibold">⚠️ Không thể kết nối tới server!</p>`;
    }
});
</script>
</body>

</html>