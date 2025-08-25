<?php
    include('../config/db_connection.php');
    include('../truongthanhwebkit/webkit.php');

    $result = getDataNews($conn);
    if ($result && $result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            // Format date as "d Tháng m, Y"
            $date = date('d', strtotime($row['create_time'])) . ' Tháng ' . date('m, Y', strtotime($row['create_time']));
            // Choose category color and label (example: technology)
            $category = 'Công nghệ'; // You can map this from a field if available
            $categoryClass = 'bg-blue-100 text-blue-800';
            // Output article
            echo '
    <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow"
        data-category="technology" data-date="' . date('Y-m-d', strtotime($row['create_time'])) . '">
        <img src="' . htmlspecialchars($row['news_img']) . '" alt="' . htmlspecialchars($row['news_name']) . '" class="w-full h-48 object-cover object-top">
        <div class="p-6">
            <div class="flex items-center gap-2 mb-3">
                <span class="px-2 py-1 ' . $categoryClass . ' text-xs font-medium rounded">' . $category . '</span>
                <span class="text-sm text-gray-500">' . $date . '</span>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-3">' . htmlspecialchars($row['news_name']) . '</h3>
            <p class="text-gray-600 mb-4 line-clamp-3">' . htmlspecialchars($row['new_summary']) . '</p>
            <a href="./chi-tiet-tin-tuc.php?slug=' . urlencode($row['slug']) . '" data-readdy="true" class="text-primary hover:text-blue-700 font-medium">Đọc thêm →</a>
        </div>
    </article>
            ';
        }
    } else {
        echo '<p class="text-center text-gray-500">Chưa có bài viết nào.</p>';
    }
?>