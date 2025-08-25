<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ - Công ty TNHH Khoáng Sản Việt</title>
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
    $current_page = "Liên hệ";
    include ("../includes/header_child.php");
    ?>

    <main class="pt-16">
        <section class="relative h-96 flex items-center justify-center overflow-hidden"
            style="background-image: url('https://readdy.ai/api/search-image?query=Modern%20corporate%20office%20building%20exterior%20with%20professional%20business%20environment%2C%20glass%20facade%20architecture%2C%20clean%20urban%20setting%2C%20blue%20sky%20background%2C%20professional%20corporate%20photography%20showing%20accessibility%20and%20modern%20design&width=1920&height=600&seq=contact-hero&orientation=landscape'); background-size: cover; background-position: center;">
            <div class="absolute inset-0 bg-black bg-opacity-40"></div>
            <div class="relative z-10 text-center text-white max-w-4xl mx-auto px-4">
                <h1 class="text-5xl font-bold mb-4">Liên Hệ</h1>
                <p class="text-xl opacity-90">Chúng tôi luôn sẵn sàng hỗ trợ và tư vấn cho bạn</p>
            </div>
        </section>

        <section class="py-4 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="flex items-center text-sm text-gray-600">
                    <a href="../index.php"
                        data-readdy="true" class="hover:text-primary">Trang chủ</a>
                    <div class="w-4 h-4 flex items-center justify-center mx-2">
                        <i class="ri-arrow-right-s-line"></i>
                    </div>
                    <span class="text-primary">Liên hệ</span>
                </div>
            </div>
        </section>

        <section class="py-20">
            <div class="container mx-auto px-4">
                <div class="grid lg:grid-cols-2 gap-16">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-8">Thông Tin Liên Hệ</h2>
                        <div class="space-y-8">
                            <div class="flex items-start">
                                <div
                                    class="flex-shrink-0 w-12 h-12 bg-primary rounded-lg flex items-center justify-center text-white mr-4">
                                    <i class="ri-map-pin-line text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Địa chỉ</h3>
                                    <p class="text-gray-600">Số 123, Đường Nguyễn Văn Linh, Phường Tân Phong, Quận 7,
                                        TP. Hồ Chí Minh</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div
                                    class="flex-shrink-0 w-12 h-12 bg-primary rounded-lg flex items-center justify-center text-white mr-4">
                                    <i class="ri-phone-line text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Số điện thoại</h3>
                                    <p class="text-gray-600">Hotline: <a href="tel:+84901234567"
                                            class="text-primary hover:underline">0901 234 567</a></p>
                                    <p class="text-gray-600">Văn phòng: <a href="tel:+842839876543"
                                            class="text-primary hover:underline">(028) 3987 6543</a></p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div
                                    class="flex-shrink-0 w-12 h-12 bg-primary rounded-lg flex items-center justify-center text-white mr-4">
                                    <i class="ri-mail-line text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Email</h3>
                                    <p class="text-gray-600">Tổng đài: <a href="mailto:info@khoangsan.vn"
                                            class="text-primary hover:underline">info@khoangsan.vn</a></p>
                                    <p class="text-gray-600">Kinh doanh: <a href="mailto:sales@khoangsan.vn"
                                            class="text-primary hover:underline">sales@khoangsan.vn</a></p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div
                                    class="flex-shrink-0 w-12 h-12 bg-primary rounded-lg flex items-center justify-center text-white mr-4">
                                    <i class="ri-time-line text-xl"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Giờ làm việc</h3>
                                    <p class="text-gray-600">Thứ 2 - Thứ 6: 8:00 - 17:30</p>
                                    <p class="text-gray-600">Thứ 7: 8:00 - 12:00</p>
                                    <p class="text-gray-600">Chủ nhật: Nghỉ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-8">Vị Trí Trên Bản Đồ</h2>
                        <div class="bg-gray-200 rounded-lg overflow-hidden h-96"
                            style="background-image: url('https://public.readdy.ai/gen_page/map_placeholder_1280x720.png'); background-size: cover; background-position: center;">
                            <div class="w-full h-full flex items-center justify-center">
                                <div class="bg-white bg-opacity-90 rounded-lg p-4 text-center">
                                    <div
                                        class="w-8 h-8 flex items-center justify-center bg-primary rounded-full mx-auto mb-2">
                                        <i class="ri-map-pin-fill text-white"></i>
                                    </div>
                                    <p class="text-sm font-medium text-gray-900">Công ty TNHH Khoáng Sản Việt</p>
                                    <p class="text-xs text-gray-600">Quận 7, TP. Hồ Chí Minh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Gửi Tin Nhắn Cho Chúng Tôi</h2>
                        <p class="text-gray-600 text-lg">Điền thông tin vào form bên dưới, chúng tôi sẽ liên hệ lại với
                            bạn trong thời gian sớm nhất</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <form class="space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="fullName" class="block text-sm font-medium text-gray-700 mb-2">Họ và tên
                                        *</label>
                                    <input type="text" id="fullName" name="fullName" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary text-sm">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email
                                        *</label>
                                    <input type="email" id="email" name="email" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary text-sm">
                                </div>
                            </div>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Số điện
                                        thoại *</label>
                                    <input type="tel" id="phone" name="phone" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary text-sm">
                                </div>
                                <div>
                                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Chủ đề
                                        liên hệ</label>
                                    <div class="relative">
                                        <select id="subject" name="subject"
                                            class="w-full px-4 py-3 pr-8 border border-gray-300 rounded-lg focus:outline-none focus:border-primary text-sm appearance-none bg-white">
                                            <option value="">Chọn chủ đề</option>
                                            <option value="product-inquiry">Tư vấn sản phẩm</option>
                                            <option value="quotation">Báo giá</option>
                                            <option value="partnership">Hợp tác kinh doanh</option>
                                            <option value="complaint">Khiếu nại</option>
                                            <option value="other">Khác</option>
                                        </select>
                                        <div
                                            class="absolute right-3 top-1/2 transform -translate-y-1/2 w-4 h-4 flex items-center justify-center pointer-events-none">
                                            <i class="ri-arrow-down-s-line text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Nội dung tin
                                    nhắn *</label>
                                <textarea id="message" name="message" rows="6" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary text-sm resize-none"
                                    placeholder="Vui lòng mô tả chi tiết yêu cầu của bạn..."></textarea>
                            </div>
                            <div class="flex items-start">
                                <input type="checkbox" id="agreement" name="agreement" required
                                    class="mt-1 mr-3 w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary">
                                <label for="agreement" class="text-sm text-gray-600">Tôi đồng ý với <a href="#"
                                        class="text-primary hover:underline">chính sách bảo mật</a> và cho phép công ty
                                    liên hệ lại với tôi.</label>
                            </div>
                            <div class="text-center">
                                <button type="submit"
                                    class="bg-primary hover:bg-blue-700 text-white px-8 py-3 !rounded-button font-semibold transition-colors whitespace-nowrap">
                                    Gửi tin nhắn
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Kênh Liên Hệ Khác</h2>
                    <p class="text-gray-600 text-lg">Kết nối với chúng tôi qua các kênh mạng xã hội</p>
                </div>
                <div class="flex justify-center space-x-8">
                    <a href="#" class="flex flex-col items-center group">
                        <div
                            class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white mb-3 group-hover:bg-blue-700 transition-colors">
                            <i class="ri-facebook-fill text-2xl"></i>
                        </div>
                        <span class="text-gray-700 font-medium">Facebook</span>
                    </a>
                    <a href="#" class="flex flex-col items-center group">
                        <div
                            class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center text-white mb-3 group-hover:bg-blue-600 transition-colors">
                            <i class="ri-linkedin-fill text-2xl"></i>
                        </div>
                        <span class="text-gray-700 font-medium">LinkedIn</span>
                    </a>
                    <a href="#" class="flex flex-col items-center group">
                        <div
                            class="w-16 h-16 bg-blue-400 rounded-full flex items-center justify-center text-white mb-3 group-hover:bg-blue-500 transition-colors">
                            <i class="ri-twitter-fill text-2xl"></i>
                        </div>
                        <span class="text-gray-700 font-medium">Twitter</span>
                    </a>
                    <a href="#" class="flex flex-col items-center group">
                        <div
                            class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center text-white mb-3 group-hover:bg-blue-600 transition-colors">
                            <i class="ri-message-3-fill text-2xl"></i>
                        </div>
                        <span class="text-gray-700 font-medium">Zalo</span>
                    </a>
                </div>
            </div>
        </section>
    </main>

     <?php
    include ("../includes/footer_child.php");
    include ("../includes/cta.php");
   ?>

    <script id="form-validation">
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.querySelector('form');
            const checkbox = document.getElementById('agreement');
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                if (!checkbox.checked) {
                    alert('Vui lòng đồng ý với chính sách bảo mật để tiếp tục.');
                    return;
                }
                alert('Cảm ơn bạn đã gửi tin nhắn! Chúng tôi sẽ liên hệ lại trong thời gian sớm nhất.');
                form.reset();
            });
        });
    </script>

</body>

</html>