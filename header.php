<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> <?php wp_title('&laquo;', true, 'right'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="description" content="Học viện TALK cung cấp nhiều chương trình Anh ngữ dành cho sinh viên muốn nâng cao kỹ năng Anh ngữ của mình và chuẩn bị cho kỳ thi, xin việc và định cư sang các nước khác." />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <style type="text/css">
      html {
        margin: 0 !important;
      }
    </style>

    <script type="text/javascript" src="<?php echo THEME_URI ?>/js/jquery.min.js"></script>
    <script type="text/javascript">
      var adminajax = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
    </script>

</head>
	<body>

    <div id="floating-menu" class="hidden hidden-xs hidden-sm">
      <div class="container">
              <div class="col-xs-12 col-sm-12 col-md-8">
                <a id="logo" class="navbar-brand" href="<?php echo HOME_PAGE; ?>"><img src="<?php echo THEME_URI; ?>/img/talk-logo.png" style="width:48px !important; height:48px !important;position:absolute; top: 1px;left:1px"></a>
                <ul class="nav navbar-nav">
                  <li class="dropdown-submenu">
                    <a href="http://talk-academy.vn/about-us/">About TALK</a>
                    <ul class="dropdown-menu">
                      <li><a href="http://talk-academy.vn/about-us/">About TALK</a></li>
                      <li><a href="http://talk-academy.vn/greetings/">Greetings</a></li>
                      <li><a href="http://talk-academy.vn/strengths/">Strengths</a></li>
                      <li><a href="http://talk-academy.vn/location/">Location</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="/procedure/">Process</a>
                    <ul class="dropdown-menu">
                      <li><a href="http://talk-academy.vn/procedure/">Process</a></li>
                      <li><a href="http://talk-academy.vn/about-preparation/">About Preparation</a></li>
                      <li><a href="http://talk-academy.vn/faq/">FAQ</a></li>
                      <li><a href="http://talk-academy.vn/medical-and-insurance/">Medical and Insurance</a></li>
                      <li><a href="http://talk-academy.vn/way-to-baguio/">Way to Baguio</a></li>
                      <li><a href="http://talk-academy.vn/campaigns/">Campaign</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="/tuition-fee/">Tuition Fee</a>
                    <ul class="dropdown-menu">
                      <li><a href="http://talk-academy.vn/tuition-fee/">Tuition Fee</a></li>
                      <li><a href="http://talk-academy.vn/dormitory-type/">Dormitory</a></li>
                      <li><a href="http://talk-academy.vn/miscellaneous-fee/">Miscellaneous Fee</a></li>
                      <li><a href="http://talk-academy.vn/ielts-official-test-dates/">IELTS Test Dates</a></li>
                      <li><a href="http://talk-academy.vn/toeic-official-test-dates/">TOEIC Test Dates</a></li>
                      <li><a href="http://talk-academy.vn/philippine-holiday/">Phlippines Holiday</a></li>
                      <li><a href="http://talk-academy.vn/official-pickup-dates/">Official Pickup Dates</a></li>
                      <li><a href="http://talk-academy.vn/refund-policy/">Refund Policy</a></li>
                      <li><a href="http://talk-academy.vn/online-registration/">Online Registration</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="/more-about-talk">More About TALK</a>
                    <ul class="dropdown-menu">
                      <li><a href="http://talk-academy.vn/yangco-esl/">ESL 421, 521, 611</a></li>
                      <li><a href="http://talk-academy.vn/ielts/">IELTS</a></li>
                      <li><a href="http://talk-academy.vn/toiec/">TOEIC</a></li>
                      <li><a href="http://talk-academy.vn/power-speaking/">Power Speaking</a></li>
                      <li><a href="http://talk-academy.vn/job-ready-en/">Working Holiday</a></li>
                      <li><a href="http://talk-academy.vn/family-esl-en/">Family ESL</a></li>
                      <li><a href="http://talk-academy.vn/online-consultation/">Online Registration</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="/philippine-language-study-plan">Plans</a>
                    <ul class="dropdown-menu">
                      <li><a href="http://talk-academy.vn/toeic-test-en/">TOEIC Test</a></li>
                      <li><a href="http://talk-academy.vn/ielts-test/">IELTS Test</a></li>
                      <li><a href="http://talk-academy.vn/intensive-speaking-en/">Intensive Speaking</a></li>
                      <li><a href="http://talk-academy.vn/short-term-study/">Short Term Study</a></li>
                      <li><a href="http://talk-academy.vn/long-term-study/">Long Term Study</a></li>
                      <li><a href="http://talk-academy.vn/best-price/">Best Price</a></li>
                      <li><a href="http://talk-academy.vn/philippines-and-other-countries/">Philippines and Other Countries</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="/notice/">Community</a>
                    <ul class="dropdown-menu">
                      <li><a href="http://talk-academy.vn/notice/">News</a></li>
                      <li><a href="http://talk-academy.vn/experiences/">Experiences</a></li>
                      <li><a href="http://talk-academy.vn/meals/">Meals</a></li>
                      <li><a href="http://talk-academy.vn/inside-philippine/">Inside Philippines</a></li>
                      <li><a href="http://talk-academy.vn/best-students-and-teachers/">Best Students and Teachers</a></li>
                      <li><a href="http://talk-academy.vn/travels/">Travels</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="row">
                  <div class="search-lens">
                    <span class="fa fa-search"></span>
                    <div class="floating-search-tb hidden">
                      <div id="desktop-search" class="input-group">
                        <form action="/" method="get" role="search">
                          <input name="s" type="text" class="form-control" style="width: 210px !important; float: left;" />
                          <span class="input-group-addon" style="width: 40px; height: 34px; float: left;" onclick="javascript:$(this).closest('form').submit();">
                              <i class="fa fa-search"></i>
                          </span>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      </div>
    </div>
		<div class="container-fluid">
	
      <header>
        
          <div id="weblinks">
            <div class="container">
              <a href="http://talkonline.cafe24.com/2013/" style="border: 1px solid #fff; padding: 3px 5px; font-size: 12px; border-radius: 3px">AGENCY</a>&nbsp;&nbsp;
              <a href="http://talk-academy.com">ENG</a>
              <a href="http://talk-academy.kr">KR</a>
              <a href="http://talk-academy.jp">JPN</a>
              <a href="http://talk-academy.cn">CN</a>
              <a href="http://talk-academy.tw">TW</a>
            </div>
          </div>
        
          <div class="container">
              <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                 <a id="logo" class="navbar-brand visible-xs" href="<?php echo HOME_PAGE; ?>"><img src="<?php echo THEME_URI; ?>/img/talk-logo.png" style="width:48px !important; height:48px !important; margin-bottom: 25px;"></a>
                  <div class="hidden-xs row" style="position: absolute; top: 15px;">
                    <div class="container">
                      <div class="col-xs-12 col-md-8">
                        <div id="login-box" class="hidden">
                          
                          <hr style="margin-top: 5px;">
           			</div>
                      </div>
                    <div class="col-xs-12 col-md-4">
                      <div id="quick-links">
                        <a href="http://talk-academy.com/wp-content/uploads/2017/08/Brochure-1700519KR.pdf">E-Brochure</a> | <a href="http://talk-academy.com/wp-content/uploads/2017/08/KOREA-TALK-OT-170329.pdf">Hướng dẫn</a> | <a href="http://talk-academy.com/online-consultation/">Liên hệ</a>
                      </div>
                    </div>
                    </div>
                  </div>


                      <div class="visible-xs" style="padding-top: 20px;">
                        <form action="/" method="get" role="search">
                            <input name="s" type="text" class="form-control" style="float: left;" />
                            <span class="input-group-addon" style="width: 40px; height: 34px; float: left;" onclick="javascript:$(this).closest('form').submit();">
                                <i class="fa fa-search"></i>
                            </span>
                          </form>
                      </div>



                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse-xs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    		<v class="navbar navbar-default" role="navigation"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
                  </button>
        
                </div>


		


	<div class="collapse navbar-collapse" id="example-navbar-collapse-xs">
	      <ul class="nav navbar-nav">
		<li class="mobile-dropdown">
		<span data-toggle="collapse" data-target="#first-mobile-menu">About TALK</span>
		  <ul id="first-mobile-menu" class="collapse">
		    <li><a href="http://talk-academy.vn/about-us/">About TALK</a></li>
		    <li><a href="http://talk-academy.vn/about-us/">About TALK</a></li>
                            <li><a href="http://talk-academy.vn/greetings/">Greetings</a></li>
                            <li><a href="http://talk-academy.vn/strengths/">Strengths</a></li>
                            <li><a href="http://talk-academy.vn/location/">Location</a></li>
                          </ul>
                        </li>
                        <li class="mobile-dropdown">
                            <span data-toggle="collapse" data-target="#second-mobile-menu">Process</span>
                            <ul id="second-mobile-menu" class="collapse">
                              <li><a href="http://talk-academy.vn/procedure/">Process</a></li>
                              <li><a href="http://talk-academy.vn/about-preparation/">About Preparation</a></li>
                              <li><a href="http://talk-academy.vn/faqs/">FAQ</a></li>
                              <li><a href="http://talk-academy.vn/medical-and-insurance/">Medical and Insurance</a></li>
                              <li><a href="http://talk-academy.vn/way-to-baguio/">Way to Baguio</a></li>
                              <li><a href="http://talk-academy.vn/campaigns/">캠페인</a></li>
                            </ul>
                          </li>
                          <li class="mobile-dropdown">
                            <span data-toggle="collapse" data-target="#third-mobile-menu">Registration</span>
                            <ul id="third-mobile-menu" class="collapse">
                              <li><a href="http://talk-academy.vn/tuition-fee/">Registration</a></li>
                              <li><a href="http://talk-academy.vn/dormitory-type/">Dormitory</a></li>
                              <li><a href="http://talk-academy.vn/miscellaneous-fee/">Misc Fee</a></li>
                              <li><a href="http://talk-academy.vn/ielts-official-test-dates/">IELTS Official Test Schedules</a></li>
                              <li><a href="http://talk-academy.vn/toeic-official-test-dates/">TOEIC Official Test Schedules</a></li>
                              <li><a href="http://talk-academy.vn/philippine-holiday/">Philippines Holiday</a></li>
                              <li><a href="http://talk-academy.vn/official-pickup-dates/">Official Pickup Dates</a></li>
                              <li><a href="http://talk-academy.vn/refund-policy/">Refund Policy</a></li>
                              <li><a href="http://talk-academy.vn/online-registration/">Online Registration</a></li>
                            </ul>
                          </li>
                          <li class="mobile-dropdown">
                            <span data-toggle="collapse" data-target="#fourth-mobile-menu">Talk's Know-how</span>
                            <ul id="fourth-mobile-menu" class="collapse">
                              <li><a href="http://talk-academy.vn/yangco-esl/">ESL 421, 521, 611</a></li>
                              <li><a href="http://talk-academy.vn/ielts/">IELTS</a></li>
                              <li><a href="http://talk-academy.vn/toiec/">TOEIC</a></li>
                              <li><a href="http://talk-academy.vn/power-speaking/">Power Speaking</a></li>
                              <li><a href="http://talk-academy.vn/job-ready-en/">Working Holiday</a></li>
                              <li><a href="http://talk-academy.vn/family-esl-en/">Family ESL</a></li>
                              <li><a href="http://talk-academy.vn/online-consultation/">Online Consultation</a></li>
                            </ul>
                          </li>
                          <li class="mobile-dropdown">
                            <span data-toggle="collapse" data-target="#fifth-mobile-menu">Study Plans</span>
			<ul id="fifth-mobile-menu" class="collapse">
		      <li><a href="http://talk-academy.vn/toeic-test-en/">TOEIC Exam</a></li>
		      <li><a href="http://talk-academy.vn/ielts-test/">IELTS Exam</a></li>
		      <li><a href="http://talk-academy.vn/intensive-speaking-en/">Intensive Speaking</a></li>
		      <li><a href="http://talk-academy.vn/short-term-study/">Short Term Study</a></li>
		      <li><a href="http://talk-academy.vn/long-term-study/">Long Term Study</a></li>
		      <li><a href="http://talk-academy.vn/best-price/">Best Price</a></li>
		      <li><a href="http://talk-academy.vn/philippines-and-other-countries/">Philippines and Other Countries</a></li>
		    </ul>
		  </li>
		<li class="mobile-dropdown">
		  <span data-toggle="collapse" data-target="#sixth-mobile-menu">Community</span>
		  <ul id="sixth-mobile-menu" class="collapse">
		    <li><a href="http://talk-academy.vn/notice/">News</a></li>
                            <li><a href="http://talk-academy.vn/experiences/">Experiences</a></li>
                            <li><a href="http://talk-academy.vn/meals/">Meals</a></li>
                            <li><a href="http://talk-academy.vn/inside-philippine/">Inside Philippines</a></li>
                            <li><a href="http://talk-academy.vn/best-students-and-teachers/">Best Students and Teachers</a></li>
                            <li><a href="http://talk-academy.vn/travels/">Travels</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>


                <div class="collapse navbar-collapse" id="example-navbar-collapse">
                  <div class="col-xs-12 col-sm-12 col-md-8">
            	                      <a id="logo" class="navbar-brand" style="position:absolute;top: -55px; left: -40px;" href="<?php echo HOME_PAGE; ?>"><img src="<?php echo THEME_URI; ?>/img/talk-logo.png"></a>
                   <ul class="nav navbar-nav">
		<li class="dropdown-submenu">
			<a href="/about-us/">Giới thiệu</a>
		  <ul class="dropdown-menu">
                      <li><a href="http://talk-academy.vn/about-us/">Về chúng tôi</a></li>
                            <li><a href="http://talk-academy.vn/greetings/">LỜI CHÀO</a></li>
                            <li><a href="http://talk-academy.vn/strengths/">CÁC THẾ MẠNH</a></li>
                            <li><a href="http://talk-academy.vn/location/">VỊ TRÍ</a></li>
                          </ul>
                        </li>

                        <li class="dropdown-submenu">
                            <a href="/procedure/">Nhập học</a>
                            <ul class="dropdown-menu">
                              <li><a href="http://talk-academy.vn/procedure/">Hướng dẫn nhập học</a></li>
                              <li><a href="http://talk-academy.vn/about-preparation/">Các bước chuẩn bị</a></li>
                              <li><a href="http://talk-academy.vn/faqs/">FAQ</a></li>
                              <li><a href="http://talk-academy.vn/medical-and-insurance/">Thuốc và bảo hiểm</a></li>
                              <li><a href="http://talk-academy.vn/way-to-baguio/">Cách đi đến Baguio</a></li>
                              <li><a href="http://talk-academy.vn/campaigns/">Tin tức</a></li>
                            </ul>
                          </li>

			 <li class="dropdown-submenu">
                            <a href="/tuition-fee/">Đăng kí nhập học</span>
                            <ul class="dropdown-menu">
                              <li><a href="http://talk-academy.vn/tuition-fee/">Học phí</a></li>
                              <li><a href="http://talk-academy.vn/dormitory-type/">Ký túc xá</a></li>
                              <li><a href="http://talk-academy.vn/miscellaneous-fee/">Chi phí địa phương</a></li>
                              <li><a href="http://talk-academy.vn/ielts-official-test-dates/">Lịch thi IELTS chính thức</a></li>
                              <li><a href="http://talk-academy.vn/toeic-official-test-dates/">Lịch thi TOEIC chính thức</a></li>
                              <li><a href="http://talk-academy.vn/philippine-holiday/">Các ngày lễ ở Philippines</a></li>
                              <li><a href="http://talk-academy.vn/official-pickup-dates/">Lịch đón học viên</a></li>
                              <li><a href="http://talk-academy.vn/refund-policy/">Chính sách hoàn tiền</a></li>
                              <li><a href="http://talk-academy.vn/online-registration/">Nhận thư mời nhập học</a></li>
                            </ul>
                          </li>

                        <li class="dropdown-submenu">
                           <a href="/more-about-talk">Khóa học</a>
			   <ul class="dropdown-menu">
				<li><a href="http://talk-academy.vn/yangco-esl/">ESL 421, 521, 611</a></li>
				<li><a href="http://talk-academy.vn/ielts/">Intensive IELTS</a></li>
				<li><a href="http://talk-academy.vn/toeic/">Intensive TOEIC</a></li>
				<li><a href="http://talk-academy.vn/power-speaking/">Power Speaking</a></li>
				<li><a href="http://talk-academy.vn/job-ready">Working Holiday</a></li>
				<li><a href="http://talk-academy.vn/family-esl/">Family ESL</a></li>
				<li><a href="http://talk-academy.vn/online-consultation/">Liên hệ</a></li>
			   </ul>
			</li>

                      <li class="dropdown-submenu">
			 <a href="/philippine-language-study-plan/">Kế hoạch học tập</a>
			 <ul class="dropdown-menu">
				<li><a href="http://talk-academy.vn/toeic-test/">Bài kiểm tra TOEIC</a></li>
				<li><a href="http://talk-academy.vn/ielts-test/">Bài thi IELTS</a></li>
				<li><a href="http://talk-academy.vn/intensive-speaking/">Power speaking </a></li>
				<li><a href="http://talk-academy.vn/short-term-study/">Học ngắn hạn  (1 – 3 tuần)</a></li>
				<li><a href="http://talk-academy.vn/long-term-study/">Học dài hạn</a></li>
				<li><a href="http://talk-academy.vn/best-price/">Giá tốt nhất</a></li>
				<li><a href="http://talk-academy.vn/philippines-and-other-countries/">Philippines và quốc gia khác</a></li>
			 </ul>
		      </li>

                        <li class="dropdown-submenu">
                          <a href="/notice/">Cộng đồng</a>
			  <ul class="dropdown-menu">
				<li><a href="http://talk-academy.vn/news/">Thông báo</a></li>
				<li><a href="http://talk-academy.vn/experiences/">Trải nghiệm của học viên</a></li>
				<li><a href="http://talk-academy.vn/meals/">Bửa ăn tại TALK</a></li>
				<li><a href="http://talk-academy.vn/inside-philippine/">Khám quá Philippines</a></li>
				<li><a href="http://talk-academy.vn/best-students-and-teachers/">Best Student &amp; Teacher</a></li>
			  </ul>
			</li>
                    </ul>
                  </div>

                      <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="row">
                          <div class="search-lens">
                            <span class="fa fa-search"></span>
                            <div class="floating-search-tb hidden">
                              <div class="input-group">
                                <form action="/" method="get" role="search">
                                    <input name="s" type="text" class="form-control" style="width: 210px !important; float: left;" />
                                    <span class="input-group-addon" style="width: 40px; height: 34px; float: left;" onclick="javascript:$(this).closest('form').submit();">
                                        <i class="fa fa-search"></i>
                                    </span>
                                  </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </nav>
              </div>
      
