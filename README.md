# Design_pattern

### Định nghĩa

- Design pattern là các giải pháp tổng thể đã được tối ưu hóa, được tái sử dụng cho các vấn đề phổ biến trong thiết kế phần mềm mà chúng ta thường gặp phải hàng ngày.
- Design patterns là một kỹ thuật trong lập trình hướng đối tượng, không phải là ngôn ngữ cụ thể nào cả, nó là một kĩ thuật lập trình.
- Design Pattern giúp bạn giải quyết vấn đề một cách tối ưu nhất, cung cấp cho bạn các giải pháp trong lập trình OOP.
### Công dụng 
- Tăng tốc độ phát triển phần mềm.
- Code tường minh, dễ dàng cho team work.
- Tái sử dụng code.
- Hạn chế lỗi tiềm ẩn, dễ dàng nâng cấp.
### Phân loại
*Được phân loại thành 3 nhóm theo mục đích sử dụng:*

- Nhóm Creational
- Nhóm Structural
- Nhóm Behavioral
# Chi tiết
## Creational Pattern (Nhóm khởi tạo)
### Singleton
- Nó đảm bảo một class chỉ có duy nhất một instance được khởi tạo và nó cung cấp phương thức truy cập đến instance đó từ mọi nơi (global access).
  - Sử dụng Singleton khi chúng ta muốn:
    - Đảm bảo rằng chỉ có một instance của lớp.
    - Việc quản lý việc truy cập tốt hơn vì chỉ có một thể hiện duy nhất.
    - Có thể quản lý số lượng thể hiện của một lớp trong giới hạn chỉ định.
    
***Triển khai***
- Đặt constructor là private để client không thể khởi tạo object của class.
- Tạo một biến static private là instance của class đó để đảm bảo rằng nó là duy nhất và chỉ được tạo ra trong class đó thôi.
- Tạo một public static method trả về instance vừa khởi tạo bên trên, đây là cách duy nhất để các class khác có thể truy cập vào instance của class này.


### Abstract Factory
- Cung cấp một interface cho việc khởi tạo các tập hợp của những object có đặc điểm giống nhau mà không cần quan tâm object đó là gì.

  - Abstract Factory Pattern giúp đảm bảo rằng các product mà bạn nhận được từ một factory đều tương thích với nhau.
  - Abstract Factory Pattern giúp hạn chế sự phụ thuộc giữa creator và concrete products.
  - Abstract Factory Pattern giúp gom các đoạn code tạo ra product vào một nơi trong chương trình, nhờ đó giúp dễ theo dõi và thao tác.



***Triển khai***
- Đầu tiên cần khai báo rõ ràng interface cho từng product riêng biệt theo họ của product.
Yêu cầu tất cả sản phẩm phải tuân theo interface đã khai báo.
- Khai báo Abstract Facroty interface với các phương thức tạo ra product. Các phương thức này trả về các kiểu 
abstract product.
- Đối với mỗi biến thể của 1 họ product, tạo 1 class factory riêng dựa trên Abstract Factory inerface. Factory 
là 1 class trả về các sản phẩm của 1 họ cụ thể. 


### Factory Method
- Factory Method cung cấp một interface, phương thức trong việc tạo nên một đối tượng (object) trong class. Nhưng để cho class con kế thừa của nó có thể ghi đè để chỉ rõ đối tượng (object) nào sẽ được tạo. Factory method giao việc khởi tao một đối tượng (object) cụ thế cho lớp con (subclass).
  - Tạo ra một cách khởi tạo object mới thông qua một interface chung.
  - Che giấu quá trình xử lý logic của phương thức khởi tạo.
  - Giảm sự phụ thuộc, dễ dàng mở rộng.
  - Giảm khả năng gây lỗi compile.

***Triển khai***
- Đầu tiên cần cài đặt khuôn mẫu (interface) của các đối tượng mà factory method tạo ra. 
- Tạo các class implement interface vừa cài đặt (Concreteproduct). 
- Khai báo factory method, trả về kiểu đối tượng thuộc kiểu product. 
- Gọi factory method để tạo các đối tượng trả về có kiểu là product. 
- Tạo lớp để thực hiện việc ghi đè factory method để trả về instance của Concreteproduct.


### Builder 
- Cho phép bạn xây dựng các đối tượng phức tạp bằng cách sử dụng các đối tượng đơn giản và sử dụng tiếp cận từng bước. Builder Pattern còn cho phép bạn tạo ra các kiểu thể hiện khác nhau của một đối tượng bằng cách sử dụng cùng một constructor code.

***Triển khai***
- Builder interface khai báo trước các bước product construction chung cho tất cả các loại builder.
- Concrete Builder(TruckBuilder, CarBuilder): cung cấp các cách triển khai khác nhau của các bước construction cho Builder. Các concrete builder có thể tạo ra các product không tuân theo giao diện chung.
- Director: Lớp Director xác định thứ tự gọi các bước construction, vì vậy bạn có thể tạo và sử dụng lại các cấu hình cụ thể của product.


## Structual(Nhóm cấu trúc)
### Facade
- Facade Pattern cung cấp cho chúng ta một giao diện chung đơn giản thay cho một nhóm các giao diện có trong một hệ thống con (subsystem). Facade Pattern định nghĩa một giao diện ở cấp độ cao hơn để giúp cho người dùng có thể dễ dàng sử dụng hệ thống con này.
- Facade Pattern cho phép các đối tượng truy cập trực tiếp giao diện chung này để giao tiếp với các giao diện có trong hệ thống con. Mục tiêu là che giấu các hoạt động phức tạp bên trong hệ thống con, làm cho hệ thống con dễ sử dụng hơn.

***Triển khai***
- Facade: Facade nắm rõ được hệ thống con nào đảm nhiệm việc đáp ứng yêu cầu của client, nó sẽ chuyển yêu cầu của client đến các đối tượng hệ thống con tương ứng.
- Addition Facade: có thể được tạo ra để tránh việc làm phức tạp một facade. Có thể được sử dụng bởi cả client và facade.


## Behavioral(Nhóm hành vi)
### Observer
- Định nghĩa mối phụ thuộc một - nhiều giữa các đối tượng để khi mà một đối tượng có sự thay đổi trạng thái, tất cả các thành phần phụ thuộc của nó sẽ được thông báo và cập nhật một cách tự động.
- Một đối tượng có thể thông báo đến một số lượng không giới hạn các đối tượng khác.

***Triển khai***
- Publisher (EventManager) là lớp cần lắng nghe. Khi có sự kiện, Publisher sẽ thông báo cho Subscriber (EventListener).
- Khi một sự kiện mới xảy ra, publisher xem qua danh sách đăng ký và gọi phương thức thông báo được khai báo trong subsrciber interface trên từng subscriber object.
- Subscriber là interface để Publisher báo cáo mỗi khi có sự kiện.

