
<div class="col-xs-12">
  <div class="block-articleDetail">
    <h1 class="title-pg">Hồ sơ của tôi</h1>
    <div class="fullContent">
      
      <div class="color-gray title-right">Mức độ hoàn thiện hồ sơ: 2/7</div>
      <table class="table" >
        <tr class="none-table">

          <td  width="22%">

          </td>
          <td><strong class="size20">Nam, Do</strong></td>
          
        </tr>
        <tr class="none-table2">
        <td>
          

        </td> 
        <td>
          <div class="form-control textarea-info" >My name is Nam Do, and I'm currently looking for a job in youth services. I have 10 years of experience working with youth agencies. I have a bachelor's degree in outdoor education. I raise money, train leaders and organize units. I have raised over $1000,000 each of the six years. I consider myself a good public speaker, and I have a good sense of humor."Who do you know who works with youth?"</div>
        
      </td>
    </tr>
    <tr class="none-table2">
      <td class="table-profile">
        <i class="fa fa-info-circle orange"></i>
         Nam/ 26 Tuổi
       </td>
      <td class="table-profile">
        <i class="fa fa-dollar orange"></i>
        <span> 30,000,000 - 50,000,000 VND</span>
      </td>
    </tr>
    <tr class="none-table2">
          <td class="table-profile"><i class="fa fa-user orange"></i> 165cm/60kg</td>
        
        <td class="table-profile"><i class="fa fa-briefcase orange"></i><span> Designer, Consullant, +1...</span></td> 
        </tr> 
      </table>
 <div >
           <img src="<?php echo base_url()?>public/image/avatar.jpg" alt="" id="anh1" class="img image-avatar">
           <div class="image-edit margin-bot-21" id="anh2" onclick="edit_anh()"><i class="fa fa-camera icon-camera" ></i></div>
           
         
         </div>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="row">
        <div class="col-md-3">
          <nav class="block-leftMenu menuPage mrb30">

            <ul class="nav nav-tabs width100" >
              <li class="active">
                <a  data-toggle="tab" href="#collapseOne" ><i class="fa fa-circle size10" style="color: green;"></i> Giới thiệu bản thân</a>
              </li>
              <li class=""><a  data-toggle="tab"  href="#collapseTwo" ><i class="fa fa-circle size10" style="color: green; "></i> Thông tin cá nhân</a></li>
              <li><a  data-toggle="tab"  href="#collapseThree" ><i class="fa fa-circle size10" style="color: green;"></i> thông tin liên hệ</a>
              </li>
              <li><a  data-toggle="tab"  href="#collapseFour" ><i class="fa fa-circle size10" style="color: green;"></i> Thông tin gia đình</a></li>
              <li><a  data-toggle="tab"  href="#collapseFive" ><i class="fa fa-circle size10" style="color: orange;"></i> Kinh nghiệm làm việc</a></li>
              <li><a  data-toggle="tab"  href="#collapseSix" ><i class="fa fa-circle size10" style="color: orange;"></i> Trình độ học vấn</a></li>
              <li><a  data-toggle="tab"  href="#collapseSeven" ><i class="fa fa-circle size10" style="color: orange;"></i> Ngoại ngữ tin học</a></li>
            </ul>
          </nav>
       </div>

        <div class="col-md-9 ">
          <div class="tab-content">
        <div id="collapseOne" class="tab-pane  in active">
          <form action="#" method="post">
            <!-- <label for="staticEmail" style ="float: right;" class="col-form-label">Tóm tắt bản thân</label> -->
        
          <div class="form-group row kcform">
            <label for="staticEmail" class="col-sm-4"  >GIỚI THIỆU (INTRODUCE)</label>
            <div class="col-sm-8">
              
              <textarea class="areatext kttext off-resize" rows="4" name="gioithieu"></textarea>
            </div>
          </div>
          <div class="form-group row kcform">
            <label for="inputPassword" class="col-sm-4 col-form-label" >VỊ TRÍ MONG MUỐN (EXPECT POSOTION)</label>
            <div class="col-sm-8">
              <textarea class="areatext kttext off-resize" rows="2" name="vitri"></textarea>
              
            </div>
          </div>
          <div class="form-group row kcform">
            <label for="inputPassword" class="col-sm-4 col-form-label" name="thunhapht">THU NHẬP HIỆN TẠI (CURRENT INCOME)</label>
            <div class="col-sm-8">
             <input class="kttext" type="text" placeholder="">
            </div>
          </div>
          <div class="form-group row kcform">
            <label for="inputPassword" class="col-sm-4 col-form-label" name="thunhap_mongmuon" >THU NHẬP MONG MUỐN (EXPECTATION INCOME) (IN VND)</label>
            <div class="col-sm-8">
               <input class="kttext" type="text" placeholder="">
            </div>
          </div>
          <div class="form-group row kcform">

            <label for="inputPassword" class="col-sm-4 col-form-label" >TẢI LÊN CV</label>

            <div class="col-sm-8">

                <input class="kttext" type="text" placeholder="" name="filecvht">
                    <div class="form-group row kcform width100 margin-top12" >
                        <div class="col-sm-6">
                            <input class="kttext"  type="text" placeholder="Chọn file..." name="filecv"> </div>
                      <div class="col-sm-6">
                             <button type="button" class="btn btnlong" >Tải lên</button></div>
                  </div>
                <button type="button" class="btn btnlong margin-top12" > Lưu</button>
            </div>
          </div>
        </form>
        </div>

        <div id="collapseTwo" class="tab-pane ">
          <form action="#" method="post">
            <!-- <label for="staticEmail" style ="float: right;" class="col-form-label">Tóm tắt bản thân</label> -->
        
          <div class="form-group row kcform">
            <label for="staticEmail" class="col-sm-4">HỌ VÀ TÊN (FULL NAME)</label>
            <div class="col-sm-8">
              <div class="form-group row">
                <div class="col-sm-6">
                <input class="kttext" type="text" placeholder="Họ" name="ho"> </div>
                <div class="col-sm-6">
                <input class="kttext" type="text" placeholder="Tên" name="ten"></div>
              </div>
            </div>
          </div>
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">NGÀY SINH (DOB)</label>
            <div class="col-sm-6">
              <input class="kttext" type="text" id="ngaysinh" name="ngaysinh1"></div>
              
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
               <select class="seletext" name="noisinh">
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
               <input class="kttext" type="text" placeholder="" name="dantoc">
            </div>
          </div>
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">QUỐC TỊCH (NATIONALITY)</label>
            <div class="col-sm-6">
                <select class="seletext" name="quoctich">
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
               <input class="kttext" type="text" placeholder="" name="chieucao">
            </div>
          </div>
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">CÂN NẶNG (KG)</label>
            <div class="col-sm-6">
               <input class="kttext" type="text" placeholder="" name="cannang">
            </div>
          </div>
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">CMND (ID)</label>
            <div class="col-sm-6">
               <input class="kttext" type="text" placeholder="" name="cmnd">
            </div>
          </div>
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">NGÀY CẤP (ISSUED DATE)</label>
            <div class="col-sm-6">
               <input class="kttext" type="text" id="ngaycap" placeholder="" name="ngaycap">
            </div>
          </div>
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">NƠI CẤP (ISSUED PLACE)</label>
            <div class="col-sm-6">
               <select class="seletext" name="noicap">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
                <br>
                <button type="button" class="btn btnlong margin-top12" > Lưu</button>
            </div>
          </div>
          
         </form>
        </div>

        <div id="collapseThree" class="tab-pane">
          <form action="#" method="post">
          <div class="form-group row kcform-more">
            <label for="staticEmail" class="col-sm-4 col-form-label">EMAIL ĐĂNG KÝ</label>
            <div class="col-sm-8">
              <input class="kttext modal-70"  type="text" placeholder="" name="email">
            </div>
          </div>
          <div class="form-group row kcform">
            <label for="inputPassword" class="col-sm-4 col-form-label">ĐỊA CHỈ THƯỜNG TRÚ (PREMANENT ADDRESS)</label>
            <div class="col-sm-8">
              <textarea class="kttext areatext off-resize" rows="2" name="dctt"></textarea>
              
            </div>
          </div>
          <div class="form-group row kcform">
            <label for="inputPassword" class="col-sm-4 col-form-label">ĐỊA CHỈ LIÊN LẠC (CONTACT ADDRESS)</label>
            <div class="col-sm-8">
              <textarea class="kttext areatext off-resize"  rows="2" name="dcll" ></textarea>
              
            </div>
          </div>
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">ĐIỆN THOẠI CÁ NHÂN (PESONAL PHONE)</label>
            <div class="col-sm-8">
              <input class="kttext"  type="text" placeholder="" name="dt1">
              <br>
              <input class="kttext margin-top-8"  type="text" placeholder="" name="dt2">

              
            </div>
          </div>
          <div class="form-group row kcform">
            <label for="inputPassword" class="col-sm-4 col-form-label">ĐỊA CHỈ LIÊN LẠC (EMERGENCY CONTACT)</label>
            <div class="col-sm-8">
              <input class="kttext" type="text" placeholder="" name="dtkhancap">
              <input class="kttext margin-left-25"  type="text" placeholder="" name="tenkhancap">
               <button type="button" class="btn btnlong margin-top12" > Lưu</button>  
            </div>
          </div>
        </form>
        </div>

        <div id="collapseFour" class="tab-pane ">
         
          <button type="button" class="btn btnlong btn-them" data-toggle="modal" data-target="#myModal11"> Thêm</button>  
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
          <button type="button" class="btn btnlong"> Lưu</button>  
        
        </div>

        <div id="collapseFive" class="tab-pane ">
          
          <label>Quá trình công tác</label>
          <button type="button" class="btn btnlong btn-them"  data-toggle="modal" data-target="#myModal2"> Thêm</button>  
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
          <button type="button" class="btn btnlong btn-them" data-toggle="modal" data-target="#myModal3"> Thêm</button>
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
          <button type="button" class="btn btnlong" > Lưu</button> 
          
        </div>

        <div id="collapseSix" class="tab-pane ">

          <label>Trình độ học vấn</label>
          <button type="button" class="btn btnlong btn-them" data-toggle="modal" data-target="#myModal4"> Thêm</button>  
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
          <button type="button" class="btn btnlong btn-them"  data-toggle="modal" data-target="#myModal5"> Thêm</button>
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
          <button type="button" class="btn btnlong" > Lưu</button>  
        </div>

        <div id="collapseSeven" class="tab-pane ">
          <label>Trình độ Ngoại ngữ</label>
          <button type="button" class="btn btnlong btn-them" data-toggle="modal" data-target="#myModal6"> Thêm</button>  
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
           <button type="button" class="btn btnlong btn-them" data-toggle="modal" data-target="#myModal7"> Thêm</button>
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
          <button type="button" class="btn btnlong" > Lưu</button>  
        </div>

        </div>
      </div>

      </div>
    </div>



    </nav>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog width-30" role="document">
    <div class="modal-content">
      <form action="#" method="post">
      <h3 class="title-modal margin-bot-15">Thêm người thân</h3>
           
          
            <div class="form-group row padding-left-right-20 margin-bot-15" >
            <label for="staticEmail"  class="col-sm-4 col-form-label">Họ và tên</label>
            <div class="col-sm-8">
           
              <input class=" width100" type="text"  placeholder="" name="hoten">
            </div>
          </div>
           <div class="form-group row padding-left-right-20 margin-bot-15" >
            <label for="staticEmail" class="col-sm-4 col-form-label">Năm sinh</label>
            <div class="col-sm-8">
           
              <select class="form-control height31" name="namsinh">
                  <option>Giỏi</option>
                  <option>Khá</option>
                  <option>Trung Bình</option>
                  
                </select>
            </div>
          </div>
          <div class="form-group row padding-left-right-20 margin-bot-15" >
            <label for="staticEmail" class="col-sm-4 col-form-label">Quan hệ</label>
            <div class="col-sm-8">
           
             <select class="form-control height31" class="quanhe">
                  <option>Giỏi</option>
                  <option>Khá</option>
                  <option>Trung Bình</option>
                  
                </select>
            </div>
          </div>
          <div class="form-group row padding-left-right-20 margin-bot-15" >
            <label for="staticEmail" class="col-sm-4 col-form-label">Nghề nghiệp</label>
            <div class="col-sm-8">
           
              <input class=" width100" type="text"  placeholder="" name="nghenghiep">
              
            </div>
          </div>
          
           <button type="button" class="btn them-modal" > Thêm</button>
         </form>
      
    </div>
  </div>
</div>


<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog width-30" role="document">
    <div class="modal-content">
      <form action="#" method="post">
      <h3 class="title-modal margin-bot-15">Thêm quá trình công tác</h3>
           
          <div class="form-group row padding-left-right-20 margin-bot-2" >
            <label for="staticEmail" class="col-sm-4 col-form-label">Từ đến</label>
            <div class="col-sm-8">
              <div class="form-group row">
                <div class="col-sm-6">
                <input class="form-control" type="text" id="tuden5" placeholder="" name="tu"></div>
                <div class="col-sm-6">
                <input class="form-control" type="text" id="tuden6" placeholder="" name="den"></div>
              </div>
            </div>
          </div>
            <div class="form-group row padding-left-right-20 margin-bot-15" >
            <label for="staticEmail" class="col-sm-4 col-form-label">Tên công ty</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="" name="tencty">
            </div>
          </div>
           <div class="form-group row padding-left-right-20 margin-bot-20" >
            <label for="staticEmail" class="col-sm-4 col-form-label">Địa chỉ</label>
            <div class="col-sm-8">
           
              <textarea class="form-control off-resize" rows="2" name="diachi"></textarea>
            </div>
          </div>
          <div class="form-group row padding-left-right-20 margin-bot-15" >
            <label for="staticEmail" class="col-sm-4 col-form-label">Chức vụ khi nghỉ</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="" name="chucvukhinghi">
            </div>
          </div>
          <div class="form-group row padding-left-right-20 margin-bot-15" >
            <label for="staticEmail" class="col-sm-4 col-form-label">Nhiễm vụ/ trách nhiễm</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="" name="nhiemvu">
              
            </div>
          </div>
          <div class="form-group row padding-left-right-20 margin-bot-15" >
            <label for="staticEmail" class="col-sm-4 col-form-label">Lý do nghỉ</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="" name="lydonghi">
              
            </div>
          </div>
           <button type="button" class="btn them-modal"> Thêm</button>
         
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog width-30" role="document">
    <div class="modal-content">
      <form action="#" method="post">
      <h3 class="title-modal margin-bot-15">Thêm người tham khảo</h3>
           
          
            <div class="form-group row padding-left-right-20" >
            <label for="staticEmail" class="col-sm-4 col-form-label">Họ và tên</label>
            <div class="col-sm-8">
           
              <input class="form-control" type="text"  placeholder="" name="hoten">
            </div>
          </div>
           <div class="form-group row padding-left-right-20" >
            <label for="staticEmail" class="col-sm-4 col-form-label">Chức vụ</label>
            <div class="col-sm-8">
           
              <input class="form-control" type="text"  placeholder="" name="chucvu">
            </div>
          </div>
          <div class="form-group row padding-left-right-20" >
            <label for="staticEmail" class="col-sm-4 col-form-label">Công ty</label>
            <div class="col-sm-8">
           
              <input class="form-control" type="text"  placeholder="" name="congty">
            </div>
          </div>
          <div class="form-group row padding-left-right-20" >
            <label for="staticEmail" class="col-sm-4 col-form-label">Liên hệ</label>
            <div class="col-sm-8">
           
              <input class="form-control" type="text"  placeholder="" name="lienhe">
              
            </div>
          </div>
           <button type="button" class="btn them-modal" > Thêm</button>
         
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog width-30" role="document">
    <div class="modal-content">
      <form action="#" method="post">
      <h3 class="title-modal margin-bot-15">Thêm trình độ học vấn</h3>
           
          <div class="form-group row padding-left-right-20 margin-bot-2" >
            <label for="staticEmail" class="col-sm-4 col-form-label">Từ đến</label>
            <div class="col-sm-8">
              <div class="form-group row">
                <div class="col-sm-6">
                <input class="form-control" type="text" id="tuden1" placeholder="" name="tu"></div>
                <div class="col-sm-6">
                <input class="form-control" type="text" id="tuden2" placeholder="" name="den"></div>
              </div>
            </div>
          </div>
            <div class="form-group row padding-left-right-20" >
            <label for="staticEmail" class="col-sm-4 col-form-label">Tên trường</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="" name="tentruong">
            </div>
          </div>
           <div class="form-group row padding-left-right-20" >
            <label for="staticEmail" class="col-sm-4 col-form-label">Nơi học</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="" name="noihoc">
            </div>
          </div>
          <div class="form-group row padding-left-right-20" >
            <label for="staticEmail" class="col-sm-4 col-form-label">Ngành học</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="" name="nganhhoc">
            </div>
          </div>
          <div class="form-group row padding-left-right-20" >
            <label for="staticEmail" class="col-sm-4 col-form-label">Bằng cấp/ trình độ</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="" name="trinhdo">
              <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Bằng cao nhất của bạn (*)
              </label>
            </div>
          </div>
           <button type="button" class="btn them-modal" > Thêm</button>
         </form>
      
    </div>
  </div>
</div>

<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog width-30" role="document">
    <div class="modal-content">
      <form action="#" method="post">
      <h3 class="title-modal margin-bot-15">Thêm khóa huấn luyện/ đào tạo</h3>
           
          <div class="form-group row padding-left-right-20 margin-bot-2" >
            <label for="staticEmail" class="col-sm-4 col-form-label">Từ đến</label>
            <div class="col-sm-8">
              <div class="form-group row">
                <div class="col-sm-6">
                <input class="form-control" type="text" id="tuden3" placeholder="" name="tu"></div>
                <div class="col-sm-6">
                <input class="form-control" type="text" id="tuden4" placeholder="" name="den"></div>
              </div>
            </div>
          </div>
            <div class="form-group row padding-left-right-20">
            <label for="staticEmail" class="col-sm-4 col-form-label">Tên cơ sở đào tạo</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="" name="cs_daotao">
            </div>
          </div>
          <div class="form-group row padding-left-right-20 margin-bot-2">
            <label for="staticEmail" class="col-sm-4 col-form-label">Thời gian học</label>
            <div class="col-sm-8">
              <div class="form-group row">
                <div class="col-sm-6">
                <input class="form-control" type="text"  placeholder="" name="tghoc"></div>
                <div class="col-sm-6">
                <select class="form-control height31" name="donvi">
                  <option>Năm</option>
                  <option>Tháng</option>
                  <option>Ngày</option>
                  
                </select></div>
              </div>
            </div>
          </div>
          <div class="form-group row padding-left-right-20">
            <label for="staticEmail" class="col-sm-4 col-form-label">Ngành học</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="" name="nganhhoc">
            </div>
          </div>
          <div class="form-group row padding-left-right-20">
            <label for="staticEmail" class="col-sm-4 col-form-label">Bằng cấp/ chứng chỉ</label>
            <div class="col-sm-6">
           
              <input class="form-control" type="text"  placeholder="" name="bangcap">
            </div>
          </div>
           <button type="button" class="btn them-modal" > Thêm</button>
         
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog width-30" role="document">
    <div class="modal-content">
      <form action="#" method="post">
      <h3 class="title-modal margin-bot-15">Thêm ngoại ngữ</h3>
           
          <div class="form-group row padding-left-right-20">
            <label for="staticEmail" class="col-sm-4 col-form-label">Ngoại ngữ</label>
            <div class="col-sm-8">
           
              <input class="form-control" type="text"  placeholder="Name of University/ Colleges" name="tentruong">
            </div>
          </div>
            <div class="form-group row padding-left-right-20">
            <label for="staticEmail" class="col-sm-4 col-form-label">Nghe</label>
            <div class="col-sm-6">
           
              <select class="form-control height31" name="nghe">
                  <option>Giỏi</option>
                  <option>Khá</option>
                  <option>Trung Bình</option>
                  
                </select>
            </div>
          </div>
          <div class="form-group row padding-left-right-20">
            <label for="staticEmail" class="col-sm-4 col-form-label">Nói</label>
            <div class="col-sm-6">
           
              <select class="form-control height31" name="noi">
                  <option>Giỏi</option>
                  <option>Khá</option>
                  <option>Trung Bình</option>
                  
                </select>
            </div>
          </div>
          <div class="form-group row padding-left-right-20">
            <label for="staticEmail" class="col-sm-4 col-form-label">Đọc</label>
            <div class="col-sm-6">
           
              <select class="form-control height31" name="doc">
                  <option>Giỏi</option>
                  <option>Khá</option>
                  <option>Trung Bình</option>
                  
                </select>
            </div>
          </div>
          <div class="form-group row padding-left-right-20">
            <label for="staticEmail" class="col-sm-4 col-form-label">Viết</label>
            <div class="col-sm-6">
           
              <select class="form-control height31" name="viet">
                  <option>Giỏi</option>
                  <option>Khá</option>
                  <option>Trung Bình</option>
                  
                </select>
            </div>
          </div>
          
           <button type="button" class="btn them-modal" > Thêm</button>
         
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog width-30"  role="document">
    <div class="modal-content">
      <form action="#" method="post">
      <h3 class="title-modal margin-bot-15">Thêm trình độ tin học</h3>
           
          <div class="form-group row padding-left-right-20">
            <label for="staticEmail" class="col-sm-4 col-form-label">Kiến thức/ Phần mềm</label>
            <div class="col-sm-8">
           
              <textarea class="form-control off-resize" rows="2" name="phanmem"></textarea>
            </div>
          </div>
            <div class="form-group row padding-left-right-20">
            <label for="staticEmail" class="col-sm-4 col-form-label">Trình độ</label>
            <div class="col-sm-6">
           
              <select class="form-control height31" name="trinhdo">
                  <option>Giỏi</option>
                  <option>Khá</option>
                  <option>Trung Bình</option>
                  
                </select>
            </div>
          </div>
          
           <button type="button" class="btn them-modal" > Thêm</button>
         
      </form>
    </div>
  </div>
</div>



<div class="modal fade" id="edit_anh_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="#" method="post">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h4 class="modal-title" id="myModalLabel">Cập nhật ảnh đại diện</h4>
      </div>
      <div class="modal-body">
         <strong class="title-anhdaidien">Đổi ảnh đại diện</strong>
      <br>
           <button type="button"  class="btn btnlong padding-anhdaidien" >Chọn file</button>
           <label>Không có ảnh...</label>
                  
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btnlong btn88"  data-dismiss="modal">Close</button>
        <button type="button" class="btn btnlong btn99"> Lưu</button>
      </div>
    </form>
    </div>
  </div>
</div>





<script type="text/javascript">
$('#ngaysinh').datetimepicker();
$('#ngaycap').datetimepicker();
$('#tuden1').datetimepicker();
$('#tuden2').datetimepicker();
$('#tuden3').datetimepicker();
$('#tuden4').datetimepicker();
$('#tuden5').datetimepicker();
$('#tuden6').datetimepicker();

 
 
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