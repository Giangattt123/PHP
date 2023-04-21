# What is Ajax?

AJAX viết tắt từ Asynchronous JavaScript and XML, là bộ công nghệ giúp tạo ra các web động hay các ứng dụng giàu tính Internet, cho phép tăng tốc độ ứng dụng web bằng cách cắt nhỏ dữ liệu và chỉ hiển thị những gì cần thiết, thay vì tải đi tải lại toàn bộ trang web, làm như vậy trang của bạn sẽ muợt và đẹp hơn. AJAX không phải một công nghệ đơn lẻ mà là sự kết hợp một nhóm công nghệ với nhau. Trong đó:

- HTML (hoặc XHTML) và CSS đóng vai hiển thị thông tin, dữ liệu
- DOM Js : được thực hiện thông qua JavaScript, nhằm hiển thị thông tin động và tương tác với những thông tin được hiển thị
- Đối tượng XMLHttpRequest để trao đổi dữ liệu một cách không đồng bộ với máy chủ web. (Mặc dù, việc trao đổi này có thể được thực hiện với nhiều định dạng như HTML, văn bản thường, JSON và thậm chí EBML, nhưng XML là ngôn ngữ thường được sử dụng).
- XML thường là định dạng cho dữ liệu truyền, mặc dầu bất cứ định dạng nào cũng có thể dùng, bao gồm HTML định dạng trước, văn bản thuần (plain text), JSON và ngay cả EBML.

AJAX cho phép các trang web được cập nhật không đồng bộ bằng cách trao đổi một lượng nhỏ dữ liệu với máy chủ đằng sau hậu trường. Điều này có nghĩa là có thể cập nhật các phần của trang web mà không cần tải lại toàn bộ trang. Ví dụ về các ứng dụng sử dụng AJAX: Google Maps, Gmail, Youtube và các tab Facebook.

## How AJAX Works

Các trang web cổ điển không sử dụng Ajax thì sẽ phải tải lại toàn bộ trang web nếu có nội dung thay đổi. Theo mô hình truyền thống, client sẽ gửi một HTTP Request lên Server, sau đó Server thực hiện một số khâu xử lý như lấy lại dữ liệu, tính toán, kiểm tra sự hợp lệ của thông tin, sửa đổi bộ nhớ, sau đó gửi lại một trang HTML hoàn chỉnh tới máy khách. Điều này khá bất tiện và mất thời gian, bởi khi server đang thực hiện vai trò của nó thì người dùng sẽ làm gì? Có vấn đề gì ở đây? Mỗi lần như vậy Client sẽ gửi toàn bộ nội dung website lên Server, và Server cũng trả về tương ứng. Bạn hình dung, khi xem một bài báo, hay website chia sẻ hình ảnh, bạn chỉ quan tâm nội dung bài báo, hình ảnh đó mà thôi, không cần tải hết cả trang làm gì đó. Đó là hạn chế, bạn sẽ phải tốn thời gian chờ đợi thứ không mong muốn, không cần thiết. Như vậy sẽ khá bất tiện, tốn thời gian và không hiệu quả chút nào.

Bởi vậy công nghệ Ajax ra đời giúp tạo ra một cơ chế trung gian giữa máy khách và máy chủ. Ajax cho phép tạo ra một Ajax Engine nằm giữa giao tiếp này. Điều này giống như việc tăng thêm một lớp giữa cho ứng dụng để giảm quá trình “đi lại” của thông tin và giảm thời gian tương tác. Thay vì tải lại (refresh) toàn bộ một trang, nó chỉ nạp những thông tin được thay đổi, còn giữ nguyên các phần khác, thời gian chờ có thể thay bằng thông điệp ‘loading…’, ‘đang tải dữ liệu…

![image1](https://live.staticflickr.com/65535/52834801316_ec0e1bae99_z.jpg)

> Một ví dụ về ajax
> Một mô tả về cách nhập vào mộ trường input để giao tiếp với máy chủ được thiết lập ở hai file là **example.php** và **gethint.php**
> Chúng ta sẽ giải thích một chút về các đoạn code được thực thi ở hai file này:

- Trước tiên, hãy kiểm tra xem trường nhập liệu có trống không (str.length == 0). Nếu đúng như vậy, hãy cập nhật nội dung của **placeholder** với id là txtHint thành rỗng và thoát khỏi chức năng.
- Tuy nhiên nếu trường nhập liệu không rỗng
  -Tạo một đối tượng **XMLHttpRequest** để tạo một yêu cầu AJAX đến một tập tin PHP được gọi là **gethint.php**
  -Phương thức **"onreadystatechange"** được sử dụng để gán một hàm xử lý sự kiện cho đối tượng XMLHttpRequest. Hàm xử lý sự kiện này sẽ được gọi mỗi khi trạng thái của đối tượng XMLHttpRequest thay đổi.
  -Trong trường hợp này, nếu trạng thái của đối tượng XMLHttpRequest là 4 (đã hoàn thành) và mã trạng thái là 200 (đã thành công), nghĩa là yêu cầu đã được xử lý thành công, nội dung được trả về từ tập tin PHP sẽ được hiển thị trong phần tử HTML có id là "txtHint". Điều này được thực hiện bằng cách gán nội dung được trả về từ tập tin PHP cho thuộc tính innerHTML của phần tử HTML.
  -Phương thức open() được sử dụng để mở một kết nối tới tập tin PHP. Trong trường hợp này, phương thức GET được sử dụng để lấy danh sách từ khóa gợi ý, và chuỗi tìm kiếm str được truyền vào thông qua đối số q. Tham số cuối cùng là true cho biết yêu cầu AJAX sẽ được thực hiện bất đồng bộ.
  -Khi một yêu cầu Ajax thực hiện bất đồng bộ, tức là nó sẽ được gửi đi và tiếp tục thực hiện các câu lệnh tiếp theo mà không cần chờ đợi phản hồi từ máy chủ. Khi máy chủ trả về phản hồi, sự kiện **onreadystatechange** sẽ được kích hoạt và xử lý được thực hiện.

> Nói thêm về thuộc tính **'readState'** là một thuộc tính của đối tượng XMLHttpRequest dùng để chỉ trạng thái của yêu cầu HTTP hiện tại.

**readyState** có giá trị từ 0 đến 4 và được thay đổi trong quá trình gửi yêu cầu và nhận phản hồi từ máy chủ.

Các giá trị có thể của readyState:

0: yêu cầu chưa được khởi tạo
1: yêu cầu đang được thiết lập
2: yêu cầu đã được gửi đi
3: yêu cầu đang được xử lý
4: yêu cầu đã được xử lý hoàn tất, và phản hồi sẵn sàng để được sử dụng.
