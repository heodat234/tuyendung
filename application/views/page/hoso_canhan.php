
<div class="col-xs-12">
  <div class="block-articleDetail">
    <h1 class="title-pg">Hồ sơ của tôi</h1>
    <div class="fullContent">
      
      <div style="color: #c0c3c5; float: right;">Mức độ hoàn thiện hồ sơ: 2/7</div>
      <table class="table" >
        <tr style="background-color: #ccdeed;border: none;">

          <td rowspan="2" width="22%">
           <img src="<?php echo base_url()?>public/image/avatar.jpg" alt="" id="anh1" style="width: 150px;height: 150px;z-index: 0" class="img">

           <div style="height: 40px; width: 150px;background-color: black ;margin-top: -40px !important; z-index: 10;position: relative; opacity: 0.4;" id="anh2" onclick="edit_anh()"><i class="fa fa-camera" style="float: right; margin-top: 20px;margin-right: 5px"></i></div>
          </td>
          <td><strong style="font-size: 20px">Nam, Do</strong></td>
          
        </tr>
        <tr style="background-color: #f8f9fc;border: none;">
        
        <td>
          <div class="form-control textarea-info" >My name is Nam Do, and I'm currently looking for a job in youth services. I have 10 years of experience working with youth agencies. I have a bachelor's degree in outdoor education. I raise money, train leaders and organize units. I have raised over $1000,000 each of the six years. I consider myself a good public speaker, and I have a good sense of humor."Who do you know who works with youth?"</div>
        
      </td>
    </tr>
    <tr style="background-color: #f8f9fc; ">
      <td style="font-size: 12px;color: #c0c3c5;border: none;padding: 5px"><i style="color: #f5821f" class="fa fa-info-circle"></i> Nam/ 26 Tuổi</td>
      <td style="font-size: 12px;border: none;padding: 5px"><i style="color: #f5821f;" class="fa fa-dollar"></i><span style="color: #c0c3c5"> 30,000,000 - 50,000,000 VND</span></td>
    </tr>
    <tr style="background-color: #f8f9fc;">
          <td style="font-size: 12px;color: #c0c3c5;border: none;padding: 5px"><i style="color: #f5821f" class="fa fa-user"></i> 165cm/60kg</td>
        
        <td style="font-size: 12px;border: none;padding: 5px"><i style="color: #f5821f;" class="fa fa-briefcase"></i><span style="color: #c0c3c5"> Designer, Consullant, +1...</span></td> 
        </tr> 
      </table>


    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="row">
        <div class="col-md-3">
          <nav class="block-leftMenu menuPage mrb30">

            <ul class="nav navbar-nav" style="width: 100%">
              <li class="">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-circle" style="color: green;font-size: 10px"></i> Giới thiệu bản thân</a>
              </li>
              <li class=""><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-circle" style="color: green; font-size: 10px"></i> Thông tin cá nhân</a></li>
              <li><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-circle" style="color: green;font-size: 10px"></i> thông tin liên hệ</a>
              </li>
              <li><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-circle" style="color: green;font-size: 10px"></i> Thông tin gia đình</a></li>
              <li><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-circle" style="color: orange;font-size: 10px"></i> Kinh nghiệm làm việc</a></li>
              <li><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-circle" style="color: orange;font-size: 10px"></i> Trình độ học vấn</a></li>
              <li><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-circle" style="color: orange;font-size: 10px"></i> Ngoại ngữ tin học</a></li>
            </ul>
          </nav>
       </div>

        <div class="col-md-9 ">
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          
            <!-- <label for="staticEmail" style ="float: right;" class="col-form-label">Tóm tắt bản thân</label> -->
        
          <div class="form-group row kcform">
            <label for="staticEmail" class="col-sm-4"  >GIỚI THIỆU (INTRODUCE)</label>
            <div class="col-sm-8">
              
              <textarea class="areatext kttext" rows="4" style="resize: none;"></textarea>
            </div>
          </div>
          <div class="form-group row kcform">
            <label for="inputPassword" class="col-sm-4 col-form-label" >VỊ TRÍ MONG MUỐN (EXPECT POSOTION)</label>
            <div class="col-sm-8">
              <textarea class="areatext kttext" rows="2" style="resize: none;"></textarea>
              
            </div>
          </div>
          <div class="form-group row kcform">
            <label for="inputPassword" class="col-sm-4 col-form-label" >THU NHẬP HIỆN TẠI (CURRENT INCOME)</label>
            <div class="col-sm-8">
             <input class="kttext" type="text" placeholder="">
            </div>
          </div>
          <div class="form-group row kcform">
            <label for="inputPassword" class="col-sm-4 col-form-label" >THU NHẬP MONG MUỐN (EXPECTATION INCOME) (IN VND)</label>
            <div class="col-sm-8">
               <input class="kttext" type="text" placeholder="">
            </div>
          </div>
          <div class="form-group row kcform">

            <label for="inputPassword" class="col-sm-4 col-form-label" >TẢI LÊN CV</label>

            <div class="col-sm-8">

                <input class="kttext" type="text" placeholder="">
                    <div class="form-group row kcform" style="width: 100%;margin-top: 12px">
                        <div class="col-sm-6">
                            <input class="kttext"  type="text" placeholder="Chọn file..."> </div>
                      <div class="col-sm-6">
                             <button type="button" class="btn btnlong" >Tải lên</button></div>
                  </div>
                <button type="button" class="btn btnlong" style="background-color: #f58220 !important;color: white; margin-top: 15px"> Lưu</button>
            </div>
          </div>
        </div>

        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
          
            <!-- <label for="staticEmail" style ="float: right;" class="col-form-label">Tóm tắt bản thân</label> -->
        
          <div class="form-group row kcform">
            <label for="staticEmail" class="col-sm-4">HỌ VÀ TÊN (FULL NAME)</label>
            <div class="col-sm-8">
              <div class="form-group row">
                <div class="col-sm-6">
                <input class="kttext" type="text" placeholder="Họ"> </div>
                <div class="col-sm-6">
                <input class="kttext" type="text" placeholder="Tên"></div>
              </div>
            </div>
          </div>
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">NGÀY SINH (DOB)</label>
            <div class="col-sm-6">
              <input class="kttext" type="text" id="ngaysinh"></div>
              
            </div>
              
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">GIỚI TÍNH (GENDER)</label>
            <div class="col-sm-8">
             <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Nam
              </label>
              <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Nữ
              </label>
            </div>
          </div>
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">NƠI SINH (POB)</label>
            <div class="col-sm-6">
               <select class="seletext">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
            </div>
          </div>
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">DÂN TÔC (ETHNIC)</label>
            <div class="col-sm-6">
               <input class="kttext" type="text" placeholder="">
            </div>
          </div>
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">QUỐC TỊCH (NATIONALITY)</label>
            <div class="col-sm-6">
                <select class="seletext">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
            </div>
          </div>
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">CHIỀU CAO (CM)</label>
            <div class="col-sm-6">
               <input class="kttext" type="text" placeholder="">
            </div>
          </div>
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">CÂN NẶNG (KG)</label>
            <div class="col-sm-6">
               <input class="kttext" type="text" placeholder="">
            </div>
          </div>
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">CMND (ID)</label>
            <div class="col-sm-6">
               <input class="kttext" type="text" placeholder="">
            </div>
          </div>
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">NGÀY CẤP (ISSUED DATE)</label>
            <div class="col-sm-6">
               <input class="kttext" type="text" id="ngaycap" placeholder="">
            </div>
          </div>
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">NƠI CẤP (ISSUED PLACE)</label>
            <div class="col-sm-6">
               <select class="seletext">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
                <br>
                <button type="button" class="btn btnlong" style="background-color: #f58220 !important;color: white; margin-top: 15px"> Lưu</button>
            </div>
          </div>
          

        </div>

        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
          <div class="form-group row kcform-more">
            <label for="staticEmail" class="col-sm-4 col-form-label">EMAIL ĐĂNG KÝ</label>
            <div class="col-sm-8">
              <input class="kttext " style="width: 70%" type="text" placeholder="">
            </div>
          </div>
          <div class="form-group row kcform">
            <label for="inputPassword" class="col-sm-4 col-form-label">ĐỊA CHỈ THƯỜNG TRÚ (PREMANENT ADDRESS)</label>
            <div class="col-sm-8">
              <textarea class="kttext areatext" rows="2" style="resize: none;"></textarea>
              
            </div>
          </div>
          <div class="form-group row kcform">
            <label for="inputPassword" class="col-sm-4 col-form-label">ĐỊA CHỈ LIÊN LẠC (CONTACT ADDRESS)</label>
            <div class="col-sm-8">
              <textarea class="kttext areatext "  rows="2" style="resize: none;"></textarea>
              
            </div>
          </div>
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">ĐIỆN THOẠI CÁ NHÂN (PESONAL PHONE)</label>
            <div class="col-sm-8">
              <input class="kttext"  type="text" placeholder="">
              <br>
              <input class="kttext" style="margin-top: 8px" type="text" placeholder="">

              
            </div>
          </div>
          <div class="form-group row kcform">
            <label for="inputPassword" class="col-sm-4 col-form-label">ĐỊA CHỈ LIÊN LẠC (EMERGENCY CONTACT)</label>
            <div class="col-sm-8">
              <input class="kttext" type="text" placeholder="">
              <input class="kttext" style="margin-left: 25px" type="text" placeholder="">
               <button type="button" class="btn btnlong" style="background-color: #f58220 !important;color: white; margin-top: 15px"> Lưu</button>  
            </div>
          </div>
        </div>

        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
          <button type="button" class="btn btnlong" style="background-color: #f58220 !important;color: white; float: right; margin-bottom: 10px" data-toggle="modal" data-target="#myModal11"> Thêm</button>  
          <table   class="table table-striped table-bordered" > 
            <thead> 
              <tr> 
                <th id="th" width="30%">Họ và tên</th> 
                <th id="th" width="20%">Năm sinh</th> 
                <th id="th" width="20%">Quan hệ</th> 
                <th id="th" width="30%">Nghề nghiệp</th>
              </tr> 
            </thead> 
            <tbody> 
             <tr>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
             </tr>
             <tr>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
             </tr>
            </tbody> 
          </table>
          <button type="button" class="btn btnlong" style="background-color: #f58220 !important;color: white;"> Lưu</button>  
        </div>

        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
          <label>Quá trình công tác</label>
          <button type="button" class="btn btnlong" style="background-color: #f58220 !important;color: white; float: right; margin-bottom: 10px" data-toggle="modal" data-target="#myModal2"> Thêm</button>  
          <table   class="table table-striped table-bordered" > 
            <thead> 
              <tr> 
                <th id="th" width="30%">Từ - Đến</th> 
                <th id="th" width="20%">Cty/ Địa chỉ/ ĐT</th> 
                <th id="th" width="20%">Chức vụ khi nghỉ</th> 
                <th id="th" width="30%">Nhiệm vụ/ Trách nhiệm</th>
                 <th id="th" width="30%">Lý do nghỉ</th>
              </tr> 
            </thead> 
            <tbody> 
             <tr>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
               <td>asdsa</td>
             </tr>
             <tr>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
               <td>asdsa</td>
             </tr>
            </tbody> 
          </table>
           <label>Người phụ trách tham khảo</label>
          <button type="button" class="btn btnlong" style="background-color: #f58220 !important;color: white; float: right; margin-bottom: 10px" data-toggle="modal" data-target="#myModal3"> Thêm</button>
          <table   class="table table-striped table-bordered" > 
            <thead> 
              <tr> 
                <th id="th" width="30%">Họ và tên</th> 
                <th id="th" width="20%">Chức vụ</th> 
                <th id="th" width="20%">Công ty</th> 
                <th id="th" width="30%">Liên hệ</th>
                 
              </tr> 
            </thead> 
            <tbody> 
             <tr>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
              
             </tr>
             <tr>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
              
             </tr>
            </tbody> 
          </table>
          <button type="button" class="btn btnlong" style="background-color: #f58220 !important;color: white;"> Lưu</button>  
        </div>

        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
          <label>Trình độ học vấn</label>
          <button type="button" class="btn btnlong" style="background-color: #f58220 !important;color: white; float: right; margin-bottom: 10px" data-toggle="modal" data-target="#myModal4"> Thêm</button>  
          <table   class="table table-striped table-bordered" > 
            <thead> 
              <tr> 
                <th id="th" width="30%">Từ - Đến</th> 
                <th id="th" width="20%">Trường</th> 
                <th id="th" width="20%">Nơi học</th> 
                <th id="th" width="30%">Ngành học</th>
                 <th id="th" width="30%">Bằng cấp</th>
              </tr> 
            </thead> 
            <tbody> 
             <tr>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
               <td>asdsa</td>
             </tr>
             <tr>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
               <td>asdsa</td>
             </tr>
            </tbody> 
          </table>
           <label>Các khóa đào tạo</label>
          <button type="button" class="btn btnlong" style="background-color: #f58220 !important;color: white; float: right; margin-bottom: 10px" data-toggle="modal" data-target="#myModal5"> Thêm</button>
          <table   class="table table-striped table-bordered" > 
            <thead> 
              <tr> 
                <th id="th" width="30%">Từ - Đến</th> 
                <th id="th" width="20%">Cơ sở đạo tào</th> 
                <th id="th" width="20%">Thời gian học</th> 
                <th id="th" width="30%">Ngành học</th>
                 <th id="th" width="30%">Bằng cấp</th>
              </tr> 
            </thead> 
            <tbody> 
             <tr>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
             </tr>
             <tr>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>  
             </tr>
            </tbody> 
          </table>
          <button type="button" class="btn btnlong" style="background-color: #f58220 !important;color: white;"> Lưu</button>  
        </div>

        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
          <label>Trình độ Ngoại ngữ</label>
          <button type="button" class="btn btnlong" style="background-color: #f58220 !important;color: white; float: right; margin-bottom: 10px" data-toggle="modal" data-target="#myModal6"> Thêm</button>  
          <table   class="table table-striped table-bordered" > 
            <thead> 
              <tr> 
                <th id="th" >Ngoại Ngữ</th> 
                <th id="th" >Nghe</th> 
                <th id="th" >Nói</th> 
                <th id="th" >Đọc</th>
                <th id="th" >Viết</th>
              </tr> 
            </thead> 
            <tbody> 
             <tr>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
             </tr>
             <tr>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
              <td>asdsa</td>
             </tr>
            </tbody> 
          </table>
          <label>Trình độ tin học</label>
           <button type="button" class="btn btnlong" style="background-color: #f58220 !important;color: white; float: right; margin-bottom: 10px" data-toggle="modal" data-target="#myModal7"> Thêm</button>
          <table   class="table table-striped table-bordered" > 
            <thead> 
              <tr> 
                
                <th id="th" width="60%">Phần mềm</th> 
                <th id="th" width="40%">Trình độ</th>
              </tr> 
            </thead> 
            <tbody> 
             <tr>
              <td>asdsa</td>
              <td>asdsa</td>
             
             </tr>
             <tr>
              <td>asdsa</td>
              <td>asdsa</td>
              
             </tr>
            </tbody> 
          </table>
          <button type="button" class="btn btnlong" style="background-color: #f58220 !important;color: white;"> Lưu</button>  
        </div>

        </div>
      

      </div>
    </div>



    </nav>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" style="width: 40%" role="document">
    <div class="modal-content">
      <h3 style="color:blue;padding-left: 20px;padding-right: 20px;padding-top: 20px">Thêm người thân</h3>
           
          
            <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Họ và tên</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="">
            </div>
          </div>
           <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Năm sinh</label>
            <div class="col-sm-6">
           
              <select class="form-control">
                  <option>Giỏi</option>
                  <option>Khá</option>
                  <option>Trung Bình</option>
                  
                </select>
            </div>
          </div>
          <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Quan hệ</label>
            <div class="col-sm-6">
           
             <select class="form-control">
                  <option>Giỏi</option>
                  <option>Khá</option>
                  <option>Trung Bình</option>
                  
                </select>
            </div>
          </div>
          <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Nghề nghiệp</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="">
              
            </div>
          </div>
          
           <button type="button" class="btn" style="background-color: #f58220 !important;color: white; margin-bottom: 10px; margin-left: 42%"> Thêm</button>
         
      
    </div>
  </div>
</div>


<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" style="width: 40%" role="document">
    <div class="modal-content">
      <h3 style="color:blue;padding-left: 20px;padding-right: 20px;padding-top: 20px">Thêm quá trình công tác</h3>
           
          <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Từ đến</label>
            <div class="col-sm-8">
              <div class="form-group row">
                <div class="col-sm-6">
                <input class="form-control" type="text" id="tuden5" placeholder=""></div>
                <div class="col-sm-6">
                <input class="form-control" type="text" id="tuden6" placeholder=""></div>
              </div>
            </div>
          </div>
            <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Tên công ty</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="">
            </div>
          </div>
           <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Địa chỉ</label>
            <div class="col-sm-6">
           
              <textarea class="form-control" rows="2" style="resize: none;""></textarea>
            </div>
          </div>
          <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Chức vụ khi nghỉ</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="">
            </div>
          </div>
          <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Nhiễm vụ/ trách nhiễm</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="">
              
            </div>
          </div>
          <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Lý do nghỉ</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="">
              
            </div>
          </div>
           <button type="button" class="btn" style="background-color: #f58220 !important;color: white; margin-bottom: 10px; margin-left: 42%"> Thêm</button>
         
      
    </div>
  </div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" style="width: 40%" role="document">
    <div class="modal-content">
      <h3 style="color:blue;padding-left: 20px;padding-right: 20px;padding-top: 20px">Thêm người tham khảo</h3>
           
          
            <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Họ và tên</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="">
            </div>
          </div>
           <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Chức vụ</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="">
            </div>
          </div>
          <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Công ty</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="">
            </div>
          </div>
          <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Liên hệ</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="">
              
            </div>
          </div>
           <button type="button" class="btn" style="background-color: #f58220 !important;color: white; margin-bottom: 10px; margin-left: 42%"> Thêm</button>
         
      
    </div>
  </div>
</div>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" style="width: 40%" role="document">
    <div class="modal-content">
      <h3 style="color:blue;padding-left: 20px;padding-right: 20px;padding-top: 20px">Thêm trình độ học vấn</h3>
           
          <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Từ đến</label>
            <div class="col-sm-8">
              <div class="form-group row">
                <div class="col-sm-6">
                <input class="form-control" type="text" id="tuden1" placeholder=""></div>
                <div class="col-sm-6">
                <input class="form-control" type="text" id="tuden2" placeholder=""></div>
              </div>
            </div>
          </div>
            <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Tên trường</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="">
            </div>
          </div>
           <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Nơi học</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="">
            </div>
          </div>
          <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Ngành học</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="">
            </div>
          </div>
          <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Bằng cấp/ trình độ</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="">
              <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Bằng cao nhất của bạn (*)
              </label>
            </div>
          </div>
           <button type="button" class="btn" style="background-color: #f58220 !important;color: white; margin-bottom: 10px; margin-left: 42%"> Thêm</button>
         
      
    </div>
  </div>
</div>

<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" style="width: 40%" role="document">
    <div class="modal-content">
      <h3 style="color:blue;padding-left: 20px;padding-right: 20px;padding-top: 20px">Thêm khóa huấn luyện/ đào tạo</h3>
           
          <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Từ đến</label>
            <div class="col-sm-8">
              <div class="form-group row">
                <div class="col-sm-6">
                <input class="form-control" type="text" id="tuden3" placeholder=""></div>
                <div class="col-sm-6">
                <input class="form-control" type="text" id="tuden4" placeholder=""></div>
              </div>
            </div>
          </div>
            <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Tên cơ sở đào tạo</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="">
            </div>
          </div>
          <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Thời gian học</label>
            <div class="col-sm-8">
              <div class="form-group row">
                <div class="col-sm-6">
                <input class="form-control" type="text"  placeholder=""></div>
                <div class="col-sm-6">
                <select class="form-control" style="height: 39px">
                  <option>Năm</option>
                  <option>Tháng</option>
                  <option>Ngày</option>
                  
                </select></div>
              </div>
            </div>
          </div>
          <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Ngành học</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="">
            </div>
          </div>
          <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Bằng cấp/ chứng chỉ</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="">
            </div>
          </div>
           <button type="button" class="btn" style="background-color: #f58220 !important;color: white; margin-bottom: 10px; margin-left: 42%"> Thêm</button>
         
      
    </div>
  </div>
</div>


<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" style="width: 40%" role="document">
    <div class="modal-content">
      <h3 style="color:blue;padding-left: 20px;padding-right: 20px;padding-top: 20px">Thêm ngoại ngữ</h3>
           
          <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Ngoại ngữ</label>
            <div class="col-sm-8">
           
              <input class="form-control" type="text"  placeholder="Name of University/ Colleges">
            </div>
          </div>
            <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Nghe</label>
            <div class="col-sm-6">
           
              <select class="form-control">
                  <option>Giỏi</option>
                  <option>Khá</option>
                  <option>Trung Bình</option>
                  
                </select>
            </div>
          </div>
          <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Nói</label>
            <div class="col-sm-6">
           
              <select class="form-control">
                  <option>Giỏi</option>
                  <option>Khá</option>
                  <option>Trung Bình</option>
                  
                </select>
            </div>
          </div>
          <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Đọc</label>
            <div class="col-sm-6">
           
              <select class="form-control">
                  <option>Giỏi</option>
                  <option>Khá</option>
                  <option>Trung Bình</option>
                  
                </select>
            </div>
          </div>
          <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Viết</label>
            <div class="col-sm-6">
           
              <select class="form-control">
                  <option>Giỏi</option>
                  <option>Khá</option>
                  <option>Trung Bình</option>
                  
                </select>
            </div>
          </div>
          
           <button type="button" class="btn" style="background-color: #f58220 !important;color: white; margin-bottom: 10px; margin-left: 42%"> Thêm</button>
         
      
    </div>
  </div>
</div>

<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" style="width: 40%" role="document">
    <div class="modal-content">
      <h3 style="color:blue;padding-left: 20px;padding-right: 20px;padding-top: 20px">Thêm trình độ tin học</h3>
           
          <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Kiến thức/ Phần mềm</label>
            <div class="col-sm-8">
           
              <textarea class="form-control" rows="2" style="resize: none;""></textarea>
            </div>
          </div>
            <div class="form-group row" style="padding-left: 20px;padding-right: 20px">
            <label for="staticEmail" class="col-sm-4 col-form-label">Trình độ</label>
            <div class="col-sm-6">
           
              <select class="form-control">
                  <option>Giỏi</option>
                  <option>Khá</option>
                  <option>Trung Bình</option>
                  
                </select>
            </div>
          </div>
          
           <button type="button" class="btn" style="background-color: #f58220 !important;color: white; margin-bottom: 10px; margin-left: 42%"> Thêm</button>
         
      
    </div>
  </div>
</div>



<div class="modal fade" id="edit_anh_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h4 class="modal-title" id="myModalLabel">Cập nhật ảnh đại diện</h4>
      </div>
      <div class="modal-body">
         <strong style="color:blue;padding-left: 40px;padding-right: 20px;padding-bottom: 20px;">Đổi ảnh đại diện</strong>
      <br>
           <button type="button" style="margin-left: 40px;padding-left: 10px" class="btn btnlong" >Chọn file</button>
           <label>Không có ảnh...</label>
                  
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btnlong" style="background-color: #a6a6b1 !important;color: white; margin-bottom: 10px; margin-left: 32%" data-dismiss="modal">Close</button>
        <button type="button" class="btn btnlong" style="background-color: #f58220 !important;color: white; margin-bottom: 10px; float: right;"> Lưu</button>
      </div>
    </div>
  </div>
</div>

<!-- <div class="modal fade" id="edit_anh_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" style="width: 40%" role="document">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
    <div class="modal-content">
      <strong style="color:blue;padding-left: 20px;padding-right: 20px;padding-top: 60px;">Đổi ảnh đại diện</strong>
      <br>
           <button type="button" style="margin-left: 40px" class="btn btnlong" >Chọn file</button>
           <label>Không có ảnh...</label>
                  <br>
           <button type="button" class="btn btnlong" style="background-color: #f58220 !important;color: white; margin-bottom: 10px; margin-left: 42%"> Lưu</button>
         
      
    </div>
  </div>
</div> -->



<script type="text/javascript">
$('#ngaysinh').datetimepicker();
$('#ngaycap').datetimepicker();
$('#tuden1').datetimepicker();
$('#tuden2').datetimepicker();
$('#tuden3').datetimepicker();
$('#tuden4').datetimepicker();
$('#tuden5').datetimepicker();
$('#tuden6').datetimepicker();

 $('#collapseOne').on('shown.bs.collapse', function (event) {
        $('#collapseTwo').collapse('hide');
        $('#collapseThree').collapse('hide');
        $('#collapseFour').collapse('hide');
        $('#collapseFive').collapse('hide');
        $('#collapseSix').collapse('hide');
        $('#collapseSeven').collapse('hide');
    });
 $('#collapseTwo').on('shown.bs.collapse', function (event) {
        $('#collapseOne').collapse('hide');
        $('#collapseThree').collapse('hide');
        $('#collapseFour').collapse('hide');
        $('#collapseFive').collapse('hide');
        $('#collapseSix').collapse('hide');
        $('#collapseSeven').collapse('hide');
    });
 $('#collapseThree').on('shown.bs.collapse', function (event) {
        $('#collapseTwo').collapse('hide');
        $('#collapseOne').collapse('hide');
        $('#collapseFour').collapse('hide');
        $('#collapseFive').collapse('hide');
        $('#collapseSix').collapse('hide');
        $('#collapseSeven').collapse('hide');
    });
 $('#collapseFour').on('shown.bs.collapse', function (event) {
        $('#collapseTwo').collapse('hide');
        $('#collapseThree').collapse('hide');
        $('#collapseOne').collapse('hide');
        $('#collapseFive').collapse('hide');
        $('#collapseSix').collapse('hide');
        $('#collapseSeven').collapse('hide');
    });
 $('#collapseFive').on('shown.bs.collapse', function (event) {
        $('#collapseTwo').collapse('hide');
        $('#collapseThree').collapse('hide');
        $('#collapseFour').collapse('hide');
        $('#collapseOne').collapse('hide');
        
        $('#collapseSix').collapse('hide');
        $('#collapseSeven').collapse('hide');
    });
 $('#collapseSix').on('shown.bs.collapse', function (event) {
        $('#collapseTwo').collapse('hide');
        $('#collapseThree').collapse('hide');
        $('#collapseFour').collapse('hide');
        $('#collapseFive').collapse('hide');
        $('#collapseOne').collapse('hide');
        $('#collapseSeven').collapse('hide');
    });
 $('#collapseSeven').on('shown.bs.collapse', function (event) {
        $('#collapseTwo').collapse('hide');
        $('#collapseThree').collapse('hide');
        $('#collapseFour').collapse('hide');
        $('#collapseFive').collapse('hide');
        $('#collapseSix').collapse('hide');
        $('#collapseOne').collapse('hide');
    });
 // $('#collapseSeven').on('hidden.bs.collapse', function (event) {
 //        $('#collapseSeven').collapse('show');
        
 //    });
 $('#anh2').hide();
 $('#anh1').mouseenter(function()
 {
    $('#anh2').show();
    $('#anh2').mouseenter(function()
    {
      $('#anh2').show();
    });
});
 

 $('#anh1').mouseleave(function()
 {
    $('#anh2').hide();
    $('#anh2 ').mouseleave(function()
   {
     $('#anh2').hide();
    });
});
 function edit_anh()
 {
  //alert("asd");
    $('#edit_anh_modal').modal('show');
 }
    
</script>