<?php 
#Danh mục
$list_product_cat = array(
    1 => array(
        'id' => 1,
        'cat_title' => "Điện thoại",
    ),
    2 => array(
        'id' => 2,
        'cat_title' => "Macbook",
    ),
    3 => array(
        'id' => 3,
        'cat_title' => "Laptop",
    ),
);
#Dữ liệu sản phẩm
$list_product = array(
    1 => array(
        'id' => 1,
        'product_title' =>  'iPhone 13 256GB',
        'price' => 19990000,
        'code' => 'UNI#1',
        'product_desc' => 'Apple thỏa mãn sự chờ đón của iFan và người dùng với sự ra mắt của iPhone 13.',
        'product_thumb' => 'https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/Products/Images/42/250258/iphone-13-starlight-1-600x600.jpg',
        'product_content' => "<p>Bộ vi xử lý Apple A15 mới gia tăng tốc độ CPU tới 50% và GPU đồ họa nhanh hơn 30% so với các đối thủ cạnh tranh trong cùng phân khúc, giúp iPhone 13 thể hiện sức mạnh khả năng xử lý ấn tượng hơn, mượt mà trên mọi tác vụ.</p><p><img src='https://cdn.tgdd.vn/Products/Images/42/250258/iphone-13-256gb-2.jpg'></p>",
        'cat_id' => 1,
    ),
    2 => array(
        'id' => 2,
        'product_title' =>  'iPhone 14 256GB',
        'price' => 22990000,
        'code' => 'UNI#2',
        'product_desc' => 'Mới đây thì tại sự kiện ra mắt sản phẩm mới thường niên đến từ nhà Apple thì chiếc điện thoại iPhone 14 256GB cũng đã chính thức lộ diện',
        'product_thumb' => 'https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/Products/Images/42/289663/iPhone-14-plus-thumb-den-600x600.jpg',
        'product_content' => "<p>Được hoàn thiện với những vật liệu cao cấp khi mặt lưng làm từ kính cùng bộ khung nhôm chắc chắn, điều này làm cho chiếc máy của bạn trở nên sang trọng và đẳng cấp hơn.</p><p><img src='https://cdn.tgdd.vn/Products/Images/42/289663/iphone-14-256gb-080922-035413.jpg'></p>",
        'cat_id' => 1,
    ),
    3 => array(
        'id' => 3,
        'product_title' =>  'OPPO A57 128GB' ,
        'price' => 4590000,
        'code' => 'UNI#3',
        'product_desc' => 'OPPO đã bổ sung thêm vào dòng sản phẩm OPPO A giá rẻ một thiết bị mới có tên OPPO A57 128GB.',
        'product_thumb' => 'https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/Products/Images/42/285082/oppo-a57-den-thumb-600x600.jpeg',
        'product_content' => "<p>Khác với mẫu A57 5G đã được ra mắt trước đó, điện thoại dòng A mới có màn hình HD+, camera chính 13 MP và pin 5000 mAh.</p><p><img src='https://cdn.tgdd.vn/Products/Images/42/282090/oppo-a57-4g-2_1280x720.jpg'></p>",
        'cat_id' => 1,
    ),
    4 => array(
        'id' => 4,
        'product_title' =>  'MacBook Pro 13',
        'price' => 30490000,
        'code' => 'UNI#4',
        'product_desc' => 'Đặc điểm nổi bật của MacBook Pro 13" 2020 Touch Bar M1 512GB',
        'product_thumb' => 'https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2022/6/7/637901935364438149_macbook-pro-m2-2022-xam-dd.jpg',
        'product_content' => "<p> MacBook Pro M1 13 inch 2020 Touch Bar mới với bộ vi xử lý Apple M1 cho bạn hiệu suất và thời lượng pin tuyệt vời nhất từ trước đến nay, mang đến hiệu năng chuyên nghiệp để hoàn thành những công việc chuyên nghiệp.</p><p><img src='https://images.fpt.shop/unsafe/filters:quality(90)/fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/macbook-pro-13-m1-1.jpg'></p>",
        'cat_id' => 2,
    ),
    5 => array(
        'id' => 5,
        'product_title' =>  'MacBook Pro 14',
        'price' => 52490000,
        'code' => 'UNI#5',
        'product_desc' => 'Đặc điểm nổi bật của MacBook Pro 14 2023 M2 Pro 10CPU 16GPU 16GB/512GB',
        'product_thumb' => 'https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/1/18/638096308244034700_macbook-pro-14-2023-m2-pro-10cpu-16gpu-bac-dd.jpg',
        'product_content' => "<p>Phiên bản chuyên nghiệp dành cho những người chuyên nghiệp, MacBook Pro 2023 14 inch với chip M2 Pro đem lại nguồn sức mạnh ấn tượng và vượt xa thế hệ cũ.</p><p><img src='https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/DuyLe/Android/Gionee/Macbook-pro-14-2023-m2-pro-3.jpg'></p>",
        'cat_id' => 2,
    ),
    6 => array(
        'id' => 6,
        'product_title' =>  'MacBook Pro 15',
        'price' => 65490000,
        'code' => 'UNI#6',
        'product_desc' => 'Đặc điểm nổi bật của MacBook Pro 16" 2021 M1 Pro Ram 32GB',
        'product_thumb' => 'https://images.fpt.shop/unsafe/fit-in/240x215/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/10/20/637703174146015116_macbook-pro-16-2021-xam-dd.jpg',
        'product_content' => "<p>MacBook Pro 16 inch 2021 chính là dòng máy tính xách tay mạnh nhất thế giới hiện nay với sức mạnh tối thượng từ bộ vi xử lý M1 Pro.</p><p><img src='https://fptshop.com.vn/Uploads/images/2015/Tin-Tuc/QuanLNH2/macbook-pro-16-real-life-2.jpg'></p>",
        'cat_id' => 2,
    ),
);