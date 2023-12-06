
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="view/css/gioithieu.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>

<body>
  <!--all tất cả-->
  <div class="all">
    <!--Hedear and menu-->
    <div class="Hedear">
      <div class="logo">
        <img src="view/img/logo1.jpg" alt="">
      </div>
      <div class="menu">
        <li><a href="index.php"></i>Trang chủ</a></li>
        <li><a href="index.php?act=gioithieu" style="color:#fff ; background:#8CC63F; border-radius:5px" ;>Giới thiệu</a></li>
        <li><a href="index.php?act=cuahang">Cửa hàng</a></li>
        <li><a href="index.php?act=danhbanhanong">Danh bạ nhà nông</a></li>
        <li><a href="index.php?act=lienhe">Liên hệ</a></li>
        <li><a href="index.php?act=addtocart" ><i class="fa-solid fa-cart-shopping"style="font-size:19px"></i></a></li>
        
      </div>
      <?php
       if(isset($_SESSION['user'])){
        extract($_SESSION['user']);//sủ dụng nhập các biến từ 1 mảng vào trong bảng
      ?> 
      <div class="row logout1" style="padding-top: 20px; display:inline;">
      <a href="#" class="tenuser1"><i class="fa-solid fa-user" style="font-size: 15px;color:black" >   <?=$user?></i></a>   
      
    </div>
    
    <?php } ?>
    </div>

        <div class="banner">
            <h1>GIỚI THIỆU</h1>
            <nav>
                <li><a href="index.php">TRANG CHỦ</a></li> /
                <li><a style="color: #8CC63F;" href="index.php?act=gioithieu">GIỚI THIỆU</a></li>
            </nav>
        </div>

        <div class="mona">
            <h1>MONA SHOP</h1>
            <p>Siêu thị cung cấp thực phẩm đảm bảo-chất lượng-uy tín</p>
        </div>
        <!--AE CODE TIẾP VỀ PHẦN CUỐI CHỜ FOOTER NHÉ-->
        <div class="about">
            <div class="about_content">
                <h1>Welcome To Mona!</h1> <br>
                <p> Mona là cửa hàng thực phẩm sạch, chuyên cung cấp các mặt hàng rau củ quả, trái cây tươi, thực phẩm
                    tươi sống cùng các loại gia vị phụ gia cho các hộ gia đình, nhà hàng, khách sạn, bệnh viện, trường
                    học, bếp ăn.</p>
                <br>
                <p>Mona sẽ là nơi đáp ứng đầy đủ mọi nhu cầu của khách hàng về đa dạng sản phẩm, chất lượng và giá cả
                    hợp lý. Mona sẽ luôn cố gắng nổ lực sáng tạo để không ngừng nâng cao chất lượng sản phẩm để đáp lại
                    sự tin cậy của Quý khách hàng. Nhằm nâng cao chất lượng sản phẩm và chất lượng phục vụ ngày càng tốt
                    hơn, Mona rất mong được sự ủng hộ và nhận ý kiến đóng góp từ phía Quý khách hàng.</p>
            </div>

            <div class="about_img">
                <img src="./img/mona.jpg" alt="">
            </div>
        </div>

        <div class="container">
            <div class="trai">
                <div class="trai_img">
                    <img src="view/img/icon.png" alt="">
                </div>
                <div class="trai_info">
                    <h3>Đơn giản & Tiết kiệm</h3>
                    <p>Giờ đây Quý khách có thể đặt hàng nhanh chóng qua Zalo hoặc Email. Chúng tôi mang đến người dùng mức giá ưu đãi tốt nhất!
                        </p>
                </div>

                <div class="trai_img two">
                    <img src="view/img/icon2.png" alt="">
                </div>
                <div class="trai_info">
                    <h3>Giao Hàng Nhanh</h3>
                    <p>Nhận hàng nhanh trong ngày được áp dụng với các khu vực trong trung tâm thành phố HN.</p>
                </div>
            </div>

            <div class="giua">
                <img src="view/img/icon5.png" alt="">
            </div>

            <div class="phai">
                <div class="phai_img">
                    <img src="view/img/icon3.png" alt="">
                </div>
                <div class="phai_info">
                    <h3>Chất Lượng Ổn Định</h3>
                    <p>Chúng tôi luôn ưu tiên lựa chọn các sản phẩm có thương hiệu uy tín đi kèm với chính xác hoàn đổi sản phẩm phù hợp với mọi khách hàng.</p>
                </div>

                <div class="phai_img two">
                    <img src="view/img/icon4.png" alt="">
                </div>
                <div class="phai_info">
                    <h3>Thanh Toán Linh Hoạt</h3>
                    <p>Quý khách có thể lựa chọn phương thức nhận hàng trước và thanh toán cuối kỳ. Liên hệ với BP.CSKH để biết thêm chi tiết!</p>
                </div>
            </div>
        </div>
        <!--footer-->
        <footer>
            <div class="exitone">
                <div class="ketthucc">
                    <img src="view/img/logo2.jpg" alt="">
                    <p><i class="fa-solid fa-location-dot"></i> Quỳnh Tam - Quỳnh Lưu - Nghệ An</p>
                    <p><i class="fa-solid fa-phone"> </i> 0373 484 535</p>
                    <p><i class="fa-regular fa-envelope"> </i>tuanflextech@gmail.com</p>
                    <p><i class="fa-brands fa-facebook-f"> </i>Lý Anh Tuấn</p>
                </div>
                <div class="ketthuc">
                    <h2>Sản Phẩm</h2>
                    <p>Rau củ</p>
                    <p>Hải sản</p>
                    <p>Trái cây</p>
                    <p>Thịt trứng</p>
                    <p>Đồ uống</p>
                </div>
                <div class="ketthuc">
                    <h2>Danh Mục</h2>
                    <p>Trang chủ</p>
                    <p>Giới thiệu</p>
                    <p>Cửa hàng</p>
                    <p>Danh bạ nhà nông</p>
                    <p>Liên hệ</p>
                </div>
                <div class="ketthuc">
                    <h2>Dịch vụ</h2>
                    <p>Rau củ</p>
                    <p>Hải sản</p>
                    <p>Trái cây</p>
                    <p>Thịt trứng</p>
                    <p>Đồ uống</p>
                </div>
            </div>
            <div class="lienheicon">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-telegram"></i>
                <i class="fa-brands fa-instagram"></i>
            </div>
        </footer>
    </div>
</body>

</html>


