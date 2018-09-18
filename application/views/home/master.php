<!DOCTYPE html>
<html id="ctl00_Html1" lang="vi">
  <head id="ctl00_Head1">
      <title>
    	 Chính Sách Nhân Sự - Đất Xanh Group - Tập đoàn Bất Động Sản Đất Xanh 
      </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="
    1. Đào tạo và phát triển
    Đào tạo và phát triển là phương châm của Đất Xanh nhằm giúp đội ngũ nhân sự phát huy tối đa tiềm năng và định hướng nghề nghiệp," />
    <meta name="keywords" content="Đất Xanh, Tập đoàn Đất Xanh, Bất động sản, Căn hộ đất xanh, công ty Đất Xanh, căn hộ cao cấp, dự án cao cấp, opal garden, Opal Riverside, dự án Luxcity" /><meta name="robots" content="index,follow" />
    <meta name="author" content="DXG" />
    <meta name="distribution" content="global" />
    <meta name="revisit-after" content="1 days" />
    <meta http-equiv="REFRESH" content="1800" />
    <link rel="search" type="application/opensearchdescription+xml" title="Tìm kiếm Dat Xanh Group" href="http://www.datxanh.vn/SearchEngineInfo.ashx" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
   
    <link rel='stylesheet' type='text/css' href='<?php echo base_url()?>public/css/mycss.css' />
    <link rel='stylesheet' type='text/css' href='<?php echo base_url()?>public/css/app.min.css' />
      
      <!-- <link rel='shortcut icon' href='/Data/Sites/1/skins/default/favicon.ico' /> -->
    <script src="<?php echo base_url()?>public/js/jquery.min.js" type="text/javascript" ></script>
     <!-- <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/datetimepicker-master/jquery.datetimepicker.css"/ >
      
    <script src="<?php echo base_url()?>public/datetimepicker-master/build/jquery.datetimepicker.full.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <!--  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script> -->

    <script src="<?php echo base_url()?>public/js/dist/jquery.validate.js"></script>
    <script src="<?php echo base_url()?>public/js/dist/jquery.validate.min.js"></script>
    <script src="<?php echo base_url()?>public/js/dist/validation.js"></script>
  </head>
  <body id="ctl00_Body" class="canhcam vi-vn">
    <div id="loading" style="display:none">
        <img src="<?php echo base_url() ?>public/image/loading.gif" alt="Loading..."/>
    </div>
    <script type="text/javascript">
      (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id
        js.async=true;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
      } (document, 'script', 'facebook-jssdk'));
    </script>
    <script type="text/javascript">
      !function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (!d.getElementById(id)) {
          js = d.createElement(s);
          js.id = id; js.src = "//platform.twitter.com/widgets.js";
          fjs.parentNode.insertBefore(js, fjs);
        }
      } (document, "script", "twitter-wjs");
    </script>

    <div id="wrapper" class="site-container">
      <div class="site-pusher">
        <?php echo isset($header)?$header:'' ?>
        <main class="main">
          <div class="container">
            <div id="ctl00_divAlt1" class="altcontent1 cmszone">

              <div class="breadcrumb_bg margin-break">
                <div class="container">
                  <div class='Module Module-153'>
                    <ol class='breadcrumb'>

                      <li itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><a href='http://www.datxanh.vn' class='itemcrumb' itemprop='url'><span itemprop='title'>Trang chủ</span></a></li>

                      <li itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><a href='<?php echo base_url() ?>' class='itemcrumb' itemprop='url'><span itemprop='title'>Phát triển con người</span></a></li>

                      <li itemscope itemtype='http://data-vocabulary.org/Breadcrumb'><a href='http://www.datxanh.vn/phat-trien-con-nguoi/chinh-sach-nhan-su' class='itemcrumb active' itemprop='url'><span itemprop='title'>
                      <?php if($this->uri->segment(1) != null)
                              {
                                if($this->uri->segment(1) == "handling")
                                {
                                  if($this->uri->segment(2) ==  "lichsu_apply")
                                    echo "Lịch sử ứng truyển";
                                  if($this->uri->segment(2) ==  "hoso_canhan")
                                    echo "Hồ sơ cá nhân";
                                  if($this->uri->segment(2) == "cohoi_nghe_nghiep")
                                    echo "Cơ hội nghề nghiệp";
                                  if($this->uri->segment(2) == "index")
                                    echo "Chính sách nhân sự";
                                }
                                else
                                {
                                  if($this->uri->segment(1) ==  "lichsu_apply.html")
                                    echo "Lịch sử ứng truyển";
                                  if($this->uri->segment(1) ==  "hoso_canhan.html")
                                    echo "Hồ sơ cá nhân";
                                  if($this->uri->segment(1) == "cohoi_nghe_nghiep.html")
                                    echo "Cơ hội nghề nghiệp";
                                  if($this->uri->segment(1) == "index.html")
                                    echo "Chính sách nhân sự";
                                }
                              }
                              else
                              {
                                echo "Chính sách nhân sự";
                              }


                       ; ?>
                      </span></a></li>

                
                    </ol>
                  </div>
                </div>
              </div>
              
              <div class="floatright long ">
                <?php if($this->session->has_userdata('user')) {?>
                <label class="dangnhap1"><i class="fa fa-user fa-lg orange" ></i> <?php echo $this->session->userdata('user')['operatorname']?> &nbsp|&nbsp <a data-toggle="modal" data-target="#myModalchangepass">Cài đặt</a>&nbsp |&nbsp <a href="<?php echo base_url()?>login/logout">Thoát</a></label>
                
           <?php   }else
           { ?>
            <button type="button" class="btn btn-white"  data-toggle="modal" data-target="#myModal"><i class="fa fa-user fa-lg orange" ></i>
                  <strong>Đăng Nhập</strong>
                </button>
            <?php }?>
              </div>
            
            </div>
            <div class="row">
              <div id="ctl00_divLeft" class="col-left col-lg-3 cmszone">
                <div >
                  <?php echo isset($menu)?$menu:'' ?>
                </div>
              </div>
              <div id="ctl00_divCenter" class="col-main col-lg-9">
                <div class='Module Module-168'>
                  <div class='ModuleContent'>
                    <div id="ctl00_mainContent_ctl00_ctl00_pnlInnerWrap">
                      <?php echo isset($temp)?$temp:'' ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
        <?php echo isset($footer)?$footer:'' ?>
        <div class="site-cache" id="site-cache"></div>
      </div>
    </div>
    <script type="text/javascript">
    //<![CDATA[
    var Page_Validators =  new Array(document.getElementById("ctl00_mdl141_ctl00_subscribe1_reqEmail"), document.getElementById("ctl00_mdl141_ctl00_subscribe1_regexEmail"));
    //]]>
    </script>

    <script type="text/javascript">
    //<![CDATA[
    var ctl00_mdl141_ctl00_subscribe1_reqEmail = document.all ? document.all["ctl00_mdl141_ctl00_subscribe1_reqEmail"] : document.getElementById("ctl00_mdl141_ctl00_subscribe1_reqEmail");
    ctl00_mdl141_ctl00_subscribe1_reqEmail.controltovalidate = "ctl00_mdl141_ctl00_subscribe1_txtEmail";
    ctl00_mdl141_ctl00_subscribe1_reqEmail.focusOnError = "t";
    ctl00_mdl141_ctl00_subscribe1_reqEmail.errormessage = "Vui lòng nhập email.";
    ctl00_mdl141_ctl00_subscribe1_reqEmail.display = "Dynamic";
    ctl00_mdl141_ctl00_subscribe1_reqEmail.validationGroup = "subscribe141";
    ctl00_mdl141_ctl00_subscribe1_reqEmail.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
    ctl00_mdl141_ctl00_subscribe1_reqEmail.initialvalue = "";
    var ctl00_mdl141_ctl00_subscribe1_regexEmail = document.all ? document.all["ctl00_mdl141_ctl00_subscribe1_regexEmail"] : document.getElementById("ctl00_mdl141_ctl00_subscribe1_regexEmail");
    ctl00_mdl141_ctl00_subscribe1_regexEmail.controltovalidate = "ctl00_mdl141_ctl00_subscribe1_txtEmail";
    ctl00_mdl141_ctl00_subscribe1_regexEmail.focusOnError = "t";
    ctl00_mdl141_ctl00_subscribe1_regexEmail.errormessage = "Email không hợp lệ.";
    ctl00_mdl141_ctl00_subscribe1_regexEmail.display = "Dynamic";
    ctl00_mdl141_ctl00_subscribe1_regexEmail.validationGroup = "subscribe141";
    ctl00_mdl141_ctl00_subscribe1_regexEmail.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
    ctl00_mdl141_ctl00_subscribe1_regexEmail.validationexpression = "^([0-9a-zA-Z]([\'-.\\w]*[_0-9a-zA-Z])*@(([0-9a-zA-Z])+([-\\w\']*[0-9a-zA-Z])*\\.)+[a-zA-Z]{2,9})$";
    //]]>
    </script>

    <div class="aspNetHidden">

    	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334" />
    	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAW3BYElHZ0sfdgl8mcrkLgWZkjPIrYPdaRJvrM8cboIWlGAgFKYmMryi2RTSK/hoF5vw70dfLYLE88l7kBVmHfFOY95ejk43Aa1RnVHm1hUmpbxij/dbi+Fdc544ICTMSpMiEuP" />
    </div>

    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
    <script type="text/javascript">
    //<![CDATA[

    var Page_ValidationActive = false;
    if (typeof(ValidatorOnLoad) == "function") {
      ValidatorOnLoad();
    }

    function ValidatorOnSubmit() {
      if (Page_ValidationActive) {
        return ValidatorCommonOnSubmit();
      }
      else {
        return true;
      }
    }

    document.getElementById('ctl00_mdl141_ctl00_subscribe1_reqEmail').dispose = function() {
      Array.remove(Page_Validators, document.getElementById('ctl00_mdl141_ctl00_subscribe1_reqEmail'));
    }

    document.getElementById('ctl00_mdl141_ctl00_subscribe1_regexEmail').dispose = function() {
      Array.remove(Page_Validators, document.getElementById('ctl00_mdl141_ctl00_subscribe1_regexEmail'));
    }
    //]]>
    </script>


    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-60"  role="document">
        <div class="modal-content">
          
          <div class="modal-body">
            <form  id="form-login">
            <div class="row">
              <div class="col-md-6 text-modal" >
               <h3 class="color-blue" ">Tham gia cùng chúng tôi
               </h3>
               <p>Gia nhập Talent Network của chúng tôi sẽ giúp bạn nâng cao khả năng tìm kiếm việc làm. Cho dù bạn ứng truyển một công việc nào đó hoặc đơn giản là cập nhật thông tin của mình, chúng tôi cũng luôn mong muốn được kết nối cùng bạn.
               </p> 
               <ul>
                <li>Nhận thông báo việc làm mới phù hợp với mối quan tâm của bạn</li>
                <li>Cập nhật các thông tin mới nhất vào công ty</li>
                <li>Chia sẻ cơ hội việc làm với gia đình, bạn bè thông qua mạng xã hội hoặc email</li> 
              </ul>
              <strong class="title-right">Hãy đăng ký ngay hôm nay!</strong>
              </div>
              <div class="col-md-6 padding-form-login">
               <h3 class="color-blue">Đăng Nhập</h3>
               <br>
               <div class="alert alert-danger hide" id="err-login"></div>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                 
                  <input class="kttext" type="text" name="email" placeholder="">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-8">
                  <input type="password" class="kttext" id="inputPassword" name="password" placeholder="">
                  <button type="button" class="btn btn-login"  id="btn_login">Đăng Nhập
                </button>
                <p class="margin-top17"><a data-toggle="modal" data-target="#myModal1c">
                <i class="fa fa-caret-right fa-lg"></i> Quên mật khẩu</a>
                </p>  
                <p class="margin-top-13"><a data-toggle="modal" data-target="#myModal1a">
                <i class="fa fa-caret-right fa-lg"></i> Đăng ký tài khoản</a>
              </p>
                </div>
              </div>
              
                
              </div>
            </div>
          </form>
          </div>
          
        </div>
      </div>
    </div>


    <div class="modal fade" id="myModal1a" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-70"  role="document">
        <div class="modal-content">
          
          <div class="modal-body">
            
            <div class="row">
              <div class="col-md-5 text-modal" >
               <h3 class="color-blue">Tham gia cùng chúng tôi
               </h3>
               <p>Gia nhập Talent Network của chúng tôi sẽ giúp bạn nâng cao khả năng tìm kiếm việc làm. Cho dù bạn ứng truyển một công việc nào đó hoặc đơn giản là cập nhật thông tin của mình, chúng tôi cũng luôn mong muốn được kết nối cùng bạn.
               </p> 
               <ul>
                <li>Nhận thông báo việc làm mới phù hợp với mối quan tâm của bạn</li>
                <li>Cập nhật các thông tin mới nhất vào công ty</li>
                <li>Chia sẻ cơ hội việc làm với gia đình, bạn bè thông qua mạng xã hội hoặc email</li> 
              </ul>
              <strong class="title-right" ">Hãy đăng ký ngay hôm nay!</strong>
              </div>
              <div class="col-md-7 padding-form-login">
                <form id="sign-in">
               <h3 class="color-blue">Đăng ký tài khoản</h3>
               <div class="alert alert-danger hide" id="err-sign-in"></div>
              <div class="form-group row kcform1">
                <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
               
                  <input class="kttext" type="email" placeholder="" name="email" required>
                </div>
              </div>
              <div class="form-group row kcform1">
                <label for="inputPassword" class="col-sm-4 col-form-label">Số CMND/CCCD</label>
                <div class="col-sm-8">
                  <input class="kttext" type="nunber" placeholder="" maxlength="10" name="cmnd" id="cmnd" required>
                  
                </div>
              </div>
              <div class="form-group row kcform1">
                <label for="inputPassword" class="col-sm-4 col-form-label">Mật khẩu</label>
                <div class="col-sm-8">
                  <input type="password" class="kttextl" minlength  placeholder="" name="pass" id="pass" required>
                </div>
              </div>
              <div class="form-group row kcform1">
                <label for="inputPassword" class="col-sm-4 col-form-label">Xác nhận mật khẩu</label>
                <div class="col-sm-8">
                   <input type="password" class="kttext" minlength placeholder="" name="repass" required>
                </div>
              </div>
              <div class="form-group row kcform1">
                <label for="inputPassword" class="col-sm-4 col-form-label">Tên</label>
                <div class="col-sm-8">
                  <input class="kttext" type="text" placeholder="" name="firstname" required>
                  
                </div>
              </div>
              <div class="form-group row kcform1">
                <label for="inputPassword" class="col-sm-4 col-form-label">Họ và tên đệm</label>
                <div class="col-sm-8">
                  <input class="kttext" type="text" placeholder="" name="lastname" required>
                </div>
              </div>
              <div class="form-group row kcform1">
                <label for="inputPassword" class="col-sm-4 col-form-label">Giới tính</label>
                <div class="col-sm-8">
                  <label class="radio-inline">
                    <input type="radio" name="gender" checked="true" value="M"> Nam
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="gender" value="F"> Nữ
                  </label>
                  
                </div>
              </div>
              <div class="form-group row kcform1">
                <label for="inputPassword" class="col-sm-4 col-form-label">Ngày Sinh</label>
                <div class="col-sm-8">
                  <input class="kttext" type="text" id="ngaysinh" placeholder="" name="birthday">
                  
                </div>
              </div>
              <div class="form-group row kcform1">
                <label for="inputPassword" class="col-sm-4 col-form-label">Vị trí mong muốn</label>
                <div class="col-sm-8">
                  <textarea class="form-control off-resize" rows="2" name="position"></textarea>
                  <button type="submit" class="btn btn-login" id="btn_sign_in" >Đăng Ký
                </button>
                </div>
              </div>
                </form>
              </div>
            </div>
            </div>
          </div>
      </div>
    </div>
   
    <div class="modal fade" id="myModal1c" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog width-30"  role="document">
        <div class="modal-content">
          <div class="modal-body" style="text-align: center;">
            <div class="row">
              <div class="col-md-12 padding-form-login">
                <form id="forgot_pass">
                  <h3 class="color-blue">Khôi phục tài khoản</h3>
                  <p>Khôi phục tài khoản tuyển dụng Đất Xanh</p>
                   <div class="alert alert-danger hide" id="err-forgot"></div>
                  <div class="form-group row kcform1" style="margin-top: 15px">
                    <label for="staticEmail" class="col-sm-4 col-form-label">Email xác nhận</label>
                    <div class="col-sm-6">
                      <input class="kttext" type="email" placeholder="" name="email" required>
                    </div>
                  </div>
                  
                  <div class="form-group row kcform1" style="text-align: center;">
                      <button type="submit" class="btn btn-login" id="btn_forgot" >Gửi
                    </button>
                  </div>
                </form>
              </div>
            </div>
            </div>
          </div>
      </div>
    </div>
     <div class="modal fade" id="myModalchangepass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog width-30"  role="document">
        <div class="modal-content">
          <div class="modal-body" style="text-align: center;">
            <div class="row">
              <div class="col-md-12 padding-form-login">
                <form id="changepass"> 
                  <h3 class="color-blue">Đổi mật khẩu</h3>
                <!--   <p>Khôi phục tài khoản tuyển dụng Đất Xanh</p> -->
                   <div class="alert alert-danger hide" id="err-change"></div>
                  <div class="form-group row kcform1" >
                    <label for="staticEmail" class="col-sm-4 col-form-label">Mật khẩu cũ</label>
                    <div class="col-sm-6">
                      <input class="kttext" type="password" placeholder="" name="passold" required>
                    </div>
                  </div>
                   <div class="form-group row kcform1" >
                    <label for="staticEmail" class="col-sm-4 col-form-label">Mật Khẩu mới</label>
                    <div class="col-sm-6">
                      <input class="kttext" type="password" placeholder="" minlength name="passnew" id="passnew" required>
                    </div>
                  </div>
                   <div class="form-group row kcform1" >
                    <label for="staticEmail" class="col-sm-4 col-form-label">Nhập lại mật khẩu</label>
                    <div class="col-sm-6">
                      <input class="kttext" type="password" placeholder="" minlength name="repassnew" required>
                    </div>
                  </div>
                  <div class="form-group row kcform1" style="text-align: center;">
                      <button type="submit" class="btn btn-login" id="btn-changepass">OK
                    </button>
                  </div>
                </form>
              </div>
            </div>
            </div>
          </div>
      </div>
    </div>
    <div class="modal fade" id="myModal20" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-70"  role="document">
        <div class="modal-content">
          <h3 class="title-center-complete"><strong>Đất Xanh Group chào mừng bạn đã tham gia Talent Network</strong></h3>
          <p class="padding-left-right-20">
            Xin chào <strong id="name_tb">Nam</strong>, chúc mừng bạn đã đăng ký thành công tài khoản tại hệ thống Đất Xanh Talent Network
          </p>
          <p class="justify padding-left-right-20">
            Đê tiếp tục, mới bạn <a href="<?php echo base_url()?>hoso_canhan.html" class="underline-orange">hoàn thiện hồ sơ </a>của mình, điều này giúp chúng tôi có thể đánh giá hồ sơ của bạn được thuẩn lợi hơn và sau đó bạn có thể Ứng tuyển vào các vị trí mà chúng tôi đang tìm kiếm nhân tài.
          </p>
          <img src="<?php echo base_url()?>public/image/banner-772x250.jpg" class="image-banner">
          
        </div>
      </div>
    </div>
    <div id="base" style="display: none"><?php echo base_url()?><div>
    <script type="text/javascript" src="<?php echo base_url()?>public/js/mylogin.js">
     
    </script>

  </body>
</html>