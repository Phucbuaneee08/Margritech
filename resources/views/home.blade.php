<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Margritech</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo_margritech1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Green
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">margritech@gmail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> 0989 888 888
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <img src="/assets/img/logo_margritech1.png"  style="width:80px">
      <h1 class="logo me-auto"><a href="index.html">Margritech</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Về chúng tôi</a></li>
          <li><a class="nav-link scrollto" href="#team">Đội ngũ phát triển</a></li>
          <li class="dropdown"><a href="#"><span>Dịch vụ</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Chat với trợ lý ảo</a></li>
              <li><a href="#">Kết nối với sàn TMDT</a></li>
              <li><a href="#">Hướng dẫn đăng kí bán hàng</a></li>
              <li><a href="#">Đăng kí gói thành viên</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Liên hệ</a></li>
          <li><a class="getstarted scrollto" href="#about">Bắt đầu</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Chào mừng đến với <span>Margritech</span></h2>
              <p class="animate__animated animate__fadeInUp">Website hàng đầu về giải pháp cho phát triển nông nghiệp bền vững trong lĩnh vực marketing thương mại điện tử ở Việt Nam.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Đọc thêm</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown"></h2>
              <p class="animate__animated animate__fadeInUp"></p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Đọc thêm</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown"></h2>
              <p class="animate__animated animate__fadeInUp"></p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Đọc thêm</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Về chúng tôi</h2>
          <p>Margritech là website chuyên cung cấp giải pháp marketing cá nhân hóa cho đối tượng muốn kinh doanh trên nền tảng Thương mại điện tử tại Việt Nam. Bạn sẽ tiết kiệm được rất nhiều thời gian và công sức, thậm chí tiền bạc. Đồng thời, X giúp bạn tránh nghiên cứu sai hướng và quyết định sai lầm. AI này sẽ được huấn luyện riêng cho sản phẩm nông nghiệp Việt Nam, tránh phải sử dụng nền tảng không chuyên dụng như ChatGPT, Bard,...
        </p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Margritech là một website ứng dụng AI để đưa ra giải pháp Marketing cá nhân hóa trên sàn Thương mại điện tử.</h3>
          
            <ul>
              <li><i class="bi bi-check-circled"></i> Đối tượng hướng đến là doanh nghiệp, tổ chức, cá nhân có mong muốn đưa sản phẩm lên sàn Thương mại điện tử hoặc những đối tượng đã đưa lên sàn nhưng chưa có quá nhiều kiến thức Marketing trên sàn; marketing chưa hiệu quả; chưa tăng được lượng bán dựa vào xây dựng thương hiệu doanh nghiệp.</li>
            </ul>
            <p>
                Marketing này bao gồm: Chiến lược tiếp cận các sàn cụ thể; định vị thương hiệu doanh nghiệp phù hợp; cách triển khai kế hoạch tới từng nền tảng cụ thể; những lời khuyên, gợi ý trong quá trình triển khai kế hoạch marketing. Tất cả đều được cá nhân hóa để phù hợp với từng đối tượng dựa trên trí tuệ nhân tạo.
            </p>
            <p>
                Trong các chức năng của Marketing nông nghiệp nói chung, Margritech giải đáp ứng được chức năng bổ trợ: Chủ yếu là quảng bá hàng hóa, khiến cho khách hàng đi theo hành trình: biết - hiểu - tin - yêu (tiêu dùng)
Ở đây, quảng bá hiểu chi tiết hơn là quảng bá hàng hóa trên các nền tảng Internet để hỗ trợ cho TMĐT và trên chính nền tảng TMĐT
.
            </p>


          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
    <section id="featured-services" class="featured-services section-bg">
        <div class="container">
          <div class="section-title">
              <h2>Giá trị cốt lõi</h2>
          </div>
          <div class="row no-gutters">
            <div class="col-lg-4 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-laptop"></i></div>
                <h4 class="title"><a href="">Mindset First</a></h4>
                <p class="description">Tạo ra một tư duy Marketing nông nghiệp đúng ngay từ đầu, định hình được cho tương lai gần.
              </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-briefcase"></i></div>
                <h4 class="title"><a href="">Sustainability </a></h4>
                <p class="description">  Tạo ra sự phát triển bền vững bằng thương hiệu doanh nghiệp, không phải đu trend nhất thời, không cần “giải cứu”,...
              </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                <h4 class="title"><a href="">Flexibility </a></h4>
                <p class="description">Linh hoạt trong thế giới biến động không ngừng, luôn cập nhật được cách thức marketing hiện đại nhất để sánh bước cùng thời đại.</p>
              </div>
            </div>
          </div>
  
        </div>
      </section><!-- End Featured Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">
        <div class="section-title">
            <h2>Chức năng</h2>
          </p>
        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 content-item">
            <span>01</span>
            <h4>Thông tin cơ bản</h4>
            <p>Tạo một hồ sơ khách hàng tổng quát hoặc chi tiết (Độ tuổi, nơi sinh sống, nghề nghiệp,...)
            </p>
            <p>Xác định vị thế hiện tại của doanh nghiệp nông nghiệp trên thị trường
            </p>
            <p>Tối ưu định vị: Nên đặt mình là người đi đầu, người theo sau,...</p>

          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>02</span>
            <h4>Marketing trực tiếp trên sàn Thương mại điện tử</h4>
            <p>Lựa chọn kênh bán phù hợp (Shopee, Tiki, website TMĐT, Facebook, TikTok Shop,...)
                ,Chiến lược giá ,
                Chiến lược khuyến mãi (Mức khuyến mãi, thời gian,...), 
                Tiêu đề và mô tả sản phẩm mẫu (1 đến 2 sản phẩm mẫu), 
                Cách thiết kế ảnh trên nền tảng TMĐT
                </p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>03</span>
            <h4> Marketing “mềm”: kéo traffic về nền tảng TMĐT thông qua các nền tảng khác như website, TikTok,...
            </h4>
            <p>Xây dựng câu chuyện doanh nghiệp hấp dẫn, 
                Xây dựng kế hoạch nội dung thu hút khách hàng tiềm năng (Thời gian triển khai
                ,Nguồn lực cần chuẩn bị: điện thoại quay phim, nhân vật chính,...
                ,Nội dung cốt lõi: Nội dung chính của kênh
                )
                </p>
          </div>
          <div class="col-lg-4 col-md-6 content-item">
            <span>04</span>
            <h4>AI cá nhân hóa cho nông nghiệp</h4>
            <p>Hiện nay công cụ cho Marketing rất nhiều nhưng để chuyên dụng cho marketing nông nghiệp thì chưa có. X ra đời nhằm giúp cho người dùng tối ưu thời gian và công sức tạo câu lệnh phức tạp trên AI khác như Chat GPT, Bard,... 
                Với X, chỉ cần nhập vào những thông tin theo yêu cầu, chọn đầu ra mong muốn, bạn sẽ có cả thế giới Marketing dành riêng cho sản phẩm của bạn trong tầm tay.
                </p>
          </div>
          <div class="col-lg-4 col-md-6 content-item">
            <span>05</span>
            <h4>Chuyên dụng tại Việt Nam</h4>
            <p>Margritech được huấn luyện với kiến thức nông nghiệp tại Việt Nam nên sẽ là nền tảng phù hợp nhất cho những gợi ý về nông nghiệp.
            </p>
          </div>
          <div class="col-lg-4 col-md-6 content-item">
            <span>06</span>
            <h4>Lời nhắc Marketing khác
            </h4>
            <p>Luật nền tảng,
                Tần suất đăng bài,
                Lưu ý triển khai nội dung với sản phẩm nông nghiệp (tiêu chuẩn chất lượng lên hàng đầu, tính chất mùa vụ,...)
                </p>
          </div>

          

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Nền tảng hỗ trợ </h2>
        </div>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Our Clients Section -->

   
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Đăng kí trải nghiệm </h3>
            <p> Bạn đã sẵn sàng trải nghiệm bTaskee chưa? Bắt đầu ngay với việc đặt lịch đầu tiên của bạn.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Trải nghiệm dịch vụ >></a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Đội ngũ phát triển</h2>
        
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" alt="" >
            <div class="member">
              <img src="assets/img/team/thuha.jpg" alt="" style = "height : 200px; width : 300px;">
              <h4>Thu Hà</h4>
              <span>Leader</span>
              <p>
             
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/phamngoc.png" alt="" alt="" style = "height : 200px; width : 300px;">
              <h4>Phạm Ngọc</h4>
              <span>Co-Founder</span>
              <p>
             
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/khacduoc.png" alt="" style = "height : 200px; width : 300px;">
              <h4>Khắc Được</h4>
              <span>Product Manager</span>
              <p>
              
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" >
            <div class="member">
              <img src="assets/img/team/baophuc.png" alt="" style = "height : 200px; width : 300px;">
              <h4>Bảo Phúc</h4>
              <span>Web developer</span>
              <p>
              
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Liên hệ</h2>
          <p>Hãy liên hệ cho chúng tôi để được hỗ trợ tốt nhất trên tất cả các dịch vụ mà chúng tôi cung cấp.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Vị trí:</h4>
                <p>Hai Ba  Trung, Ha Noi, Viet Nam</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>magritech@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Điện thoại:</h4>
                <p>0898 888 888</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Tên của bạn</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Tiêu đề</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Nội dung</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Gửi thư</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>MargriTech</h3>
      <p>Website hàng đầu về giải pháp cho phát triển nông nghiệp bền vững trong lĩnh vực marketing thương mại điện tử ở Việt Nam.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>MargriTech</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/green-free-one-page-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">MargriTech Team</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>