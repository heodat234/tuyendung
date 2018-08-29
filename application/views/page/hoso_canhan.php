
<div class="col-xs-12">
  <div class="block-articleDetail">
    <h1 class="title-pg">Hồ sơ của tôi</h1>
    <div class="fullContent">
      
      <div class="color-gray title-right">Mức độ hoàn thiện hồ sơ: 2/7</div>
      <table class="table" >
        <tr class="none-table">

          <td  width="22%">

          </td>
          <td><strong class="size20"><?php echo $candidate['firstname']?>, <?php echo $candidate['lastname']?></strong></td>
          
        </tr>
        <tr class="none-table2">
        <td>
          

        </td> 
        <td>
          <div class="form-control textarea-info" ><?php echo $candidate['introduction']?></div>
        
      </td>
    </tr>
    <tr class="none-table2">
      <td class="table-profile">
        <i class="fa fa-info-circle orange"></i>
         <?php if($candidate['gender'] == "M") echo "Nam"; 
              else if($candidate['gender'] == "F") echo "Nữ";
              ?>/ <?php echo getAge($candidate['dateofbirth']);
               ?> tuổi
       </td>
      <td class="table-profile">
        <i class="fa fa-dollar orange"></i>
        <span> <?php echo $candidate['desirebenefit']?> VND</span>
      </td>
    </tr>
    <tr class="none-table2">
          <td class="table-profile"><i class="fa fa-user orange"></i> 165cm/60kg</td>
        
        <td class="table-profile"><i class="fa fa-briefcase orange"></i><span> Designer, Consullant, +1...</span></td> 
        </tr> 
      </table>
 <div >
          <?php if($candidate['imagelink'] == null) {?>
           <img src="<?php echo base_url()?>public/image/avatar.jpg" alt="" id="anh1" class="img image-avatar">
           <?php }
           else { ?>
           <img src="<?php echo base_url()?>public/image/<?php echo $candidate['imagelink'] ?>" alt="" id="anh1" class="img image-avatar">
           <?php } ?>
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
              <li><a  data-toggle="tab"  href="#collapseThree" ><i class="fa fa-circle size10" style="color: green;"></i> Thông tin liên hệ</a>
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
          <form action="<?php echo base_url()?>handling/update_introduce" method="post" enctype="multipart/form-data">
            <!-- <label for="staticEmail" style ="float: right;" class="col-form-label">Tóm tắt bản thân</label> -->
        
          <div class="form-group row kcform">
            <label for="staticEmail" class="col-sm-4"  >GIỚI THIỆU (INTRODUCE)</label>
            <div class="col-sm-8">
              
              <textarea class="areatext kttext off-resize" rows="4" name="introduction"><?php echo $candidate['introduction'] ?></textarea>
            </div>
          </div>
          <div class="form-group row kcform">
            <label for="inputPassword" class="col-sm-4 col-form-label" >VỊ TRÍ MONG MUỐN (EXPECT POSOTION)</label>
            <div class="col-sm-8">
              <textarea class="areatext kttext off-resize" rows="2" name="position"></textarea>
              
            </div>
          </div>
          <div class="form-group row kcform">
            <label for="inputPassword" class="col-sm-4 col-form-label" >THU NHẬP HIỆN TẠI (CURRENT INCOME)</label>
            <div class="col-sm-8">
             <input class="kttext" type="text" placeholder="" name="cur_benefit" value="<?php echo $candidate['currentbenefit'] ?>">
            </div>
          </div>
          <div class="form-group row kcform">
            <label for="inputPassword" class="col-sm-4 col-form-label"  >THU NHẬP MONG MUỐN (EXPECTATION INCOME) (IN VND)</label>
            <div class="col-sm-8">
               <input class="kttext" type="text" placeholder="" name="desirebenefit"  value="<?php echo $candidate['desirebenefit'] ?>">
            </div>
          </div>
          <div class="form-group row kcform">

            <label for="inputPassword" class="col-sm-4 col-form-label" >TẢI LÊN CV</label>

            <div class="col-sm-8">

                <input class="kttext" type="text" placeholder=""  value="<?php echo $candidate['profilesrc'] ?>">
                    <div class="form-group row kcform width100 margin-top12" >
                        <!-- <div class="col-sm-6">
                            <input class="kttext"  type="text" placeholder="Chọn file..." name="filecv"> </div>
                      <div class="col-sm-6">
                             <input type="file" class="btn btnlong" name="profilesrc"></div> -->
                    <div class="col-sm-6"> <input id="label1" type="text" class="form-control" readonly="">        
                    </div>
                    <div class="col-sm-6">
                    <label id="browsebutton1" class="btn btn-default input-group-addon btn-tailen" for="my-file-selector1" style="background-color:white">
                        <input id="my-file-selector1" name="profilesrc" type="file" style="display:none;">
                        Tải lên
                    </label>
                    </div>

                  </div>
                <button type="submit" class="btn btnlong margin-top12" > Lưu</button>
            </div>
          </div>
        </form>
        </div>

        <div id="collapseTwo" class="tab-pane ">
          <form action="<?php echo base_url()?>handling/update_profile" method="post">
            <!-- <label for="staticEmail" style ="float: right;" class="col-form-label">Tóm tắt bản thân</label> -->
        
          <div class="form-group row kcform">
            <label for="staticEmail" class="col-sm-4">HỌ VÀ TÊN (FULL NAME)</label>
            <div class="col-sm-8">
              <div class="form-group row">
                <div class="col-sm-6">
                <input class="kttext" type="text" placeholder="Họ" name="ho" value="<?php echo $candidate['lastname'] ?>"> </div>
                <div class="col-sm-6">
                <input class="kttext" type="text" placeholder="Tên" name="ten" value="<?php echo $candidate['firstname'] ?>"></div>
              </div>
            </div>
          </div>
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">NGÀY SINH (DOB)</label>
            <div class="col-sm-6">
              <input class="kttext" type="text" id="ngaysinh" name="ngaysinh1" value="<?php echo $candidate['dateofbirth'] ?>"></div>
              
            </div>
              
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">GIỚI TÍNH (GENDER)</label>
            <div class="col-sm-8">
             <label class="radio-inline">
                <input type="radio" name="gender" id="inlineRadio1" value="M" <?php if($candidate['gender'] == 'M') echo 'checked';?>> Nam
              </label>
              <label class="radio-inline">
                <input type="radio" name="gender" id="inlineRadio2" value="F" <?php if($candidate['gender'] == 'F') echo 'checked'; ?>> Nữ
              </label>
            </div>
          </div>
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">NƠI SINH (POB)</label>
            <div class="col-sm-6">
               <select class="seletext js-example-basic-single" name="noisinh">
                 <option value="0" >Chọn tỉnh thành</option>
                <?php foreach ($city as $key ) {

                ?>
                  <option value="<?php echo $key['name'] ?>" <?php if($key['name'] == $candidate['placeofbirth']) echo "selected";?> ><?php echo $key['name'] ?></option>
                  <?php } ?>
                </select>
            </div>
          </div>
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">DÂN TÔC (ETHNIC)</label>
            <div class="col-sm-6">
               <input class="kttext" type="text" placeholder="" name="ethnic" value="<?php echo $candidate['ethnic'] ?>">
            </div>
          </div>
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">QUỐC TỊCH (NATIONALITY)</label>
            <div class="col-sm-6">
                <select class="seletext" name="quoctich">
                  <option value="Việt Nam">Việt Nam</option>
                  <option value="Khác" <?php if($candidate['nationality'] != "Việt Nam") echo "selected"?>>Khác</option>
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
               <input class="kttext" type="text" placeholder="" name="cmnd" value="<?php echo $candidate['idcard'] ?>">
            </div>
          </div>
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">NGÀY CẤP (ISSUED DATE)</label>
            <div class="col-sm-6">
               <input class="kttext" type="text" id="ngaycap" placeholder="" name="dateofissue" value="<?php echo $candidate['dateofissue'] ?>">
            </div>
          </div>
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">NƠI CẤP (ISSUED PLACE)</label>
            <div class="col-sm-6">
               <select class="seletext js-example-basic-single" name="placeofissue">
                 <option value="0" >Chọn tỉnh thành</option>
                <?php foreach ($city as $key ) {

                ?>
                  <option value="<?php echo $key['name'] ?>" <?php if($candidate['placeofissue'] == $key['name']) echo 'selected'; ?> ><?php echo $key['name'] ?></option>
                  <?php } ?>
                
                </select>
                <br>
                <button type="submit" class="btn btnlong margin-top12" > Lưu</button>
            </div>
          </div>
          
         </form>
        </div>

        <div id="collapseThree" class="tab-pane">
          <form action="<?php echo base_url()?>handling/ins_upd_address" method="post">
          <div class="form-group row kcform-more">
            <label for="staticEmail" class="col-sm-4 col-form-label">EMAIL ĐĂNG KÝ</label>
            <div class="col-sm-8">
              <input class="kttext modal-70"  type="text" placeholder="" name="email" value="<?php echo $candidate['email'] ?>">
            </div>
          </div>
          <div class="form-group row kcform">
            <label for="inputPassword" class="col-sm-4 col-form-label">ĐỊA CHỈ THƯỜNG TRÚ (PREMANENT ADDRESS)</label>
            <div class="col-sm-8">
              <textarea class="kttext areatext off-resize" rows="2" name="dctt" ><?php 
                  if($address != null)
                  { 
                      foreach ($address as $key ) {
                        if($key['addtype'] == "PREMANENT")
                        {
                          echo $key['address']; break;
                        }
                      }
                  }
              ?></textarea>
               <input type="hidden" name="checkPREMANENT" value="<?php if($address != null){
                  foreach ($address as $key ) {
                    if($key['addtype'] == "PREMANENT"){
                      echo "1"; break;
                    } } } ?>">
            </div>
          </div>
          <div class="form-group row kcform">
            <label for="inputPassword" class="col-sm-4 col-form-label">ĐỊA CHỈ LIÊN LẠC (CONTACT ADDRESS)</label>
            <div class="col-sm-8">
              <textarea class="kttext areatext off-resize"  rows="2" name="dcll" ><?php 
                  if($address != null)
                  {
                      foreach ($address as $key ) {
                        if($key['addtype'] == "CONTACT")
                        {
                          echo $key['address']; break;
                        }
                      }
                  }
              ?></textarea>
              <input type="hidden" name="checkCONTACT" value="<?php if($address != null){
                  foreach ($address as $key ) {
                    if($key['addtype'] == "CONTACT"){
                      echo "1"; break;
                    } } } ?>">
            </div>
          </div>
          <div class="form-group row kcform-more">
            <label for="inputPassword" class="col-sm-4 col-form-label">ĐIỆN THOẠI CÁ NHÂN (PESONAL PHONE)</label>
            <div class="col-sm-8">
              <input class="kttext"  type="text" placeholder="" name="dt1" value="<?php echo $candidate['telephone'] ?>">
              <br>
              <input class="kttext margin-top-8"  type="text" placeholder="" name="dt2" >

              
            </div>
          </div>
          <div class="form-group row kcform">
            <label for="inputPassword" class="col-sm-4 col-form-label">ĐỊA CHỈ LIÊN LẠC (EMERGENCY CONTACT)</label>
            <div class="col-sm-8">
              <input class="kttext" type="text" placeholder="" name="dtkhancap">
              <input class="kttext margin-left-25"  type="text" placeholder="" name="tenkhancap">
               <button type="submit" class="btn btnlong margin-top12" > Lưu</button>  
            </div>
          </div>
        </form>
        </div>

        <div id="collapseFour" class="tab-pane ">
         
          <button type="button" class="btn btnlong btn-them" onclick="showmodel11()"> Thêm</button>  
          
          <table   class="table table-striped table-bordered" > 
            <thead> 
              <tr class="fontstyle"> 
                <th id="th" width="30%">Họ và tên</th> 
                <th id="th" width="20%">Năm sinh</th> 
                <th id="th" width="20%">Quan hệ</th> 
                <th id="th" width="30%">Nghề nghiệp</th>
                <th id="th" width="30%"></th>
              </tr> 
            </thead> 
            <tbody class="fontstyle text-center"> 
              <?php if($family != null) {
                $i = 0;
              foreach ($family as $key) { ?>

             <tr>
              <form id="<?php echo 'click'.$i ?>">
                <input type="hidden" name="hoten" value="<?php echo $key['name']?>">
                <input type="hidden" name="namsinh" value="<?php echo $key['yob']?>">
                <input type="hidden" name="quanhe" value="<?php echo $key['type']?>">
                <input type="hidden" name="nghenghiep" value="<?php echo $key['career']?>">
                <input type="hidden" name="recordid" value="<?php echo $key['recordid']?>">
              </form>
              <td><?php echo $key['name']?></td>
              <td><?php echo $key['yob']?></td>
              <td><?php echo $key['type']?></td>
              <td><?php echo $key['career']?></td>
              <td><i class="fa fa-edit" onclick="editmodal('<?php echo 'click'.$i ?>')"></i> <i class="f fa-trash-alt" onclick="delmodal('<?php echo 'click'.$i ?>')"></i></td>
             </tr>
             <?php $i++;} } ?>
            </tbody> 
          </table>
        
         <!--  <button type="button" class="btn btnlong"> Lưu</button>  
         -->
        </div>

        <div id="collapseFive" class="tab-pane ">
          
          <label>Quá trình công tác</label>
          <button type="button" class="btn btnlong btn-them"  data-toggle="modal" data-target="#myModal2"> Thêm</button>  
          <table   class="table table-striped table-bordered" > 
            <thead class="fontstyle"> 
              <tr > 
                <th id="th" class="middle2" width="20%">Từ - Đến</th> 
                <th id="th" class="middle2" width="22%">Cty/ Địa chỉ/ ĐT</th> 
                <th id="th" width="15%">Chức vụ khi nghỉ</th> 
                <th id="th" width="20%">Nhiệm vụ/ Trách nhiệm</th>
                 <th id="th" class="middle2" width="25%">Lý do nghỉ</th>
              </tr> 
            </thead> 
            <tbody class="fontstyle text-center"> 
             <?php if($experience != null) {
              foreach ($experience as $key) { ?>
             <tr>
              <td><?php echo $key['datefrom'].' - '.$key['dateto']?></td>
              <td><?php echo $key['company']?></td>
              <td><?php echo $key['position']?></td>
              <td><?php echo $key['responsibility']?></td>
              <td><?php echo $key['quitreason']?></td>
             </tr>
             <?php } } ?>
            </tbody> 
          </table>
           <label>Người phụ trách tham khảo</label>
          <button type="button" class="btn btnlong btn-them" data-toggle="modal" data-target="#myModal3"> Thêm</button>
          <table   class="table table-striped table-bordered" > 
            <thead> 
              <tr class="fontstyle"> 
                <th id="th" width="30%">Họ và tên</th> 
                <th id="th" width="20%">Chức vụ</th> 
                <th id="th" width="20%">Công ty</th> 
                <th id="th" width="30%">Liên hệ</th>
                 
              </tr> 
            </thead> 
            <tbody class="fontstyle text-center"> 
             <?php if($reference != null) {
              foreach ($reference as $key) { ?>
             <tr>
              <td><?php echo $key['name']?></td>
              <td><?php echo $key['position']?></td>
              <td><?php echo $key['company']?></td>
              <td><?php echo $key['contactno']?></td>
              
             </tr>
             <?php } } ?>
              
             </tr>
            </tbody> 
          </table>
         <!--  <button type="button" class="btn btnlong" > Lưu</button> 
          --> 
        </div>

        <div id="collapseSix" class="tab-pane ">

          <label>Trình độ học vấn</label>
          <button type="button" class="btn btnlong btn-them" data-toggle="modal" data-target="#myModal4"> Thêm</button>  
          <table   class="table table-striped table-bordered" > 
            <thead class="fontstyle"> 
              <tr > 
                <th id="th" width="22%">Từ - Đến</th> 
                <th id="th" width="23%">Trường</th> 
                <th id="th" width="15%">Nơi học</th> 
                <th id="th" width="20%">Ngành học</th>
                 <th id="th" width="20%">Bằng cấp</th>
              </tr> 
            </thead> 
            <tbody> 
              <?php if($knowledge != null) {
              foreach ($knowledge as $key) { 
                if($key['traintimetype'] != null)
                  { continue; } else {?>
             <tr>
              <td><?php echo $key['datefrom'].' - '.$key['dateto']?></td>
              <td><?php echo $key['trainingcenter']?></td>
              <td><?php echo $key['trainingplace']?></td>
              <td><?php echo $key['trainingcourse']?></td>
              <td><?php echo $key['certificate']?></td>
             </tr>
             <?php } } }?>
            </tbody> 
          </table>
           <label>Các khóa đào tạo</label>
          <button type="button" class="btn btnlong btn-them"  data-toggle="modal" data-target="#myModal5"> Thêm</button>
          <table   class="table table-striped table-bordered" > 
            <thead class="fontstyle"> 
              <tr> 
                <th id="th" width="20%">Từ - Đến</th> 
                <th id="th" width="23%">Cơ sở đạo tào</th> 
                <th id="th" width="21%">Thời gian học</th> 
                <th id="th" width="18%">Ngành học</th>
                 <th id="th" width="18%">Bằng cấp</th>
              </tr> 
            </thead> 
            <tbody class="fontstyle text-center"> 
             <?php if($knowledge != null) {
              foreach ($knowledge as $key) { 
                if($key['traintimetype'] == null)
                  { continue; } else {?>
             <tr>
              <td><?php echo $key['datefrom'].' - '.$key['dateto']?></td>
              <td><?php echo $key['trainingcenter']?></td>
              <td><?php echo $key['traintime'].' '.$key['traintimetype']?></td>
              <td><?php echo $key['trainingcourse']?></td>
              <td><?php echo $key['certificate']?></td>
             </tr>
             <?php } } } ?>
            </tbody> 
          </table>
          <!-- <button type="button" class="btn btnlong" > Lưu</button>   -->
        </div>

        <div id="collapseSeven" class="tab-pane ">
          <label>Trình độ Ngoại ngữ</label>
          <button type="button" class="btn btnlong btn-them" data-toggle="modal" data-target="#myModal6"> Thêm</button>  
          <table   class="table table-striped table-bordered" > 
            <thead class="fontstyle"> 
              <tr> 
                <th id="th" >Ngoại Ngữ</th> 
                <th id="th" >Nghe</th> 
                <th id="th" >Nói</th> 
                <th id="th" >Đọc</th>
                <th id="th" >Viết</th>
              </tr> 
            </thead> 
            <tbody class="fontstyle text-center"> 
            <?php if($language != null) {
              foreach ($language as $key) { 
                ?>
             <tr>
              <td><?php echo $key['language']?></td>
              <td><?php echo $key['rate1']?></td>
              <td><?php echo $key['rate2']?></td>
              <td><?php echo $key['rate3']?></td>
              <td><?php echo $key['rate4']?></td>
             </tr>
             <?php } } ?>
            </tbody> 
          </table>
          <label>Trình độ tin học</label>
           <button type="button" class="btn btnlong btn-them" data-toggle="modal" data-target="#myModal7"> Thêm</button>
          <table   class="table table-striped table-bordered" > 
            <thead class="fontstyle"> 
              <tr> 
                
                <th id="th" width="60%">Phần mềm</th> 
                <th id="th" width="40%">Trình độ</th>
              </tr> 
            </thead> 
            <tbody class="fontstyle text-center"> 
             <?php if($software != null) {
              foreach ($software as $key) { 
                ?>
             <tr>
              <td><?php echo $key['software']?></td>
              <td><?php echo $key['rate1']?></td>
              
             </tr>
             <?php } } ?>
            </tbody> 
          </table>
          
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
      <form action="<?php echo base_url()?>handling/ins_upd_relationship" method="post">
      <h3 class="title-modal margin-bot-15">Thêm người thân</h3>
           
          <input type="hidden" name="checkup" id="checkup" value="0">
            <div class="form-group row padding-left-right-20 margin-bot-15" >
            <label for="staticEmail"  class="col-sm-4 col-form-label fontstyle">Họ và tên</label>
            <div class="col-sm-8">
           
              <input class="fontstyle width100" type="text"  placeholder="" name="hoten" id="hoten11">
            </div>
          </div>
           <div class="form-group row padding-left-right-20 margin-bot-15" >
            <label for="staticEmail" class="col-sm-4 col-form-label fontstyle">Năm sinh</label>
            <div class="col-sm-8">
           
              <select class="form-control height31" style="font-size: 14px" name="namsinh" id="namsinh11">
                 <option value="0" >Chọn năm sinh</option>
                <?php
                   $date = getdate(); 

                 for($i = ($date['year'] - 10); $i > 1940; $i--) { ?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>  
                </select>
            </div>
          </div>
          <div class="form-group row padding-left-right-20 margin-bot-15" >
            <label for="staticEmail" class="col-sm-4 col-form-label fontstyle">Quan hệ</label>
            <div class="col-sm-8">
           
             <select class="form-control height31" style="font-size: 14px" name="quanhe" id="quanhe11">
                  <option value="0" >Chọn quan hệ</option>
                  <option value="Cha">Cha</option>
                  <option value="Mẹ">Mẹ</option>
                  <option value="Anh">Anh</option>
                  <option value="Chị">Chị</option>
                  <option value="Em">Em</option>
                  <option value="Cháu">Cháu</option>
                  <option value="Vợ">Vợ</option>
                  <option value="Chồng">Chồng</option>
                  <option value="Con">Con</option>
                  <option value="Ông">Ông</option>
                  <option value="Bà">Bà</option>
                  <option value="Khác">Khác</option>
                </select>
            </div>
          </div>
          <div class="form-group row padding-left-right-20 margin-bot-15" >
            <label for="staticEmail" class="col-sm-4 col-form-label fontstyle">Nghề nghiệp</label>
            <div class="col-sm-8">
           
              <input class="width100 fontstyle" type="text"  placeholder="" name="nghenghiep" id="nn11">
              
            </div>
          </div>
          
           <button type="submit" class="btn them-modal" id="them11"> Thêm</button>
         </form>
      
    </div>
  </div>
</div>


<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog width-30" role="document">
    <div class="modal-content">
      <form action="<?php echo base_url()?>handling/ins_upd_experience" method="post">
      <h3 class="title-modal margin-bot-15">Thêm quá trình công tác</h3>
            <input type="hidden" name="checkup" value="0">
          <div class="form-group row padding-left-right-20 margin-bot-2" >
            <label for="staticEmail" class="col-sm-4 col-form-label fontstyle">Từ đến</label>
            <div class="col-sm-8">
              <div class="form-group row">
                <div class="col-sm-6">
                <input class="form-control fontstyle" type="text" id="tuden5" placeholder="" name="tu"></div>
                <div class="col-sm-6">
                <input class="form-control fontstyle" type="text" id="tuden6" placeholder="" name="den"></div>
              </div>
            </div>
          </div>
            <div class="form-group row padding-left-right-20 margin-bot-15" >
            <label for="staticEmail" class="col-sm-4 col-form-label fontstyle">Tên công ty</label>
            <div class="col-sm-6">
           
              <input class="form-control fontstyle" type="text"  placeholder="" name="tencty">
            </div>
          </div>
           <div class="form-group row padding-left-right-20 margin-bot-20" >
            <label for="staticEmail" class="col-sm-4 col-form-label fontstyle">Địa chỉ</label>
            <div class="col-sm-8">
           
              <textarea class="form-control off-resize fontstyle" rows="2" name="diachi"></textarea>
            </div>
          </div>
          <div class="form-group row padding-left-right-20 margin-bot-15" >
            <label for="staticEmail" class="col-sm-4 col-form-label fontstyle">Chức vụ khi nghỉ</label>
            <div class="col-sm-6">
           
              <input class="form-control fontstyle" type="text"  placeholder="" name="chucvukhinghi">
            </div>
          </div>
          <div class="form-group row padding-left-right-20 margin-bot-15" >
            <label for="staticEmail" class="col-sm-4 col-form-label fontstyle">Nhiễm vụ/ trách nhiễm</label>
            <div class="col-sm-6">
           
              <input class="form-control fontstyle" type="text"  placeholder="" name="nhiemvu">
              
            </div>
          </div>
          <div class="form-group row padding-left-right-20 margin-bot-15" >
            <label for="staticEmail" class="col-sm-4 col-form-label fontstyle">Lý do nghỉ</label>
            <div class="col-sm-6">
           
              <input class="form-control fontstyle" type="text"  placeholder="" name="lydonghi">
              
            </div>
          </div>
           <button type="submit" class="btn them-modal"> Thêm</button>
         
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog width-30" role="document">
    <div class="modal-content">
      <form action="<?php echo base_url()?>handling/ins_upd_reference" method="post">
      <h3 class="title-modal margin-bot-15">Thêm người tham khảo</h3>
           
          <input type="hidden" name="checkup" value="0">
            <div class="form-group row padding-left-right-20" >
            <label for="staticEmail" class="col-sm-4 col-form-label fontstyle">Họ và tên</label>
            <div class="col-sm-8">
           
              <input class="form-control fontstyle" type="text"  placeholder="" name="hoten">
            </div>
          </div>
           <div class="form-group row padding-left-right-20" >
            <label for="staticEmail" class="col-sm-4 col-form-label fontstyle">Chức vụ</label>
            <div class="col-sm-8">
           
              <input class="form-control fontstyle" type="text"  placeholder="" name="chucvu">
            </div>
          </div>
          <div class="form-group row padding-left-right-20" >
            <label for="staticEmail" class="col-sm-4 col-form-label fontstyle">Công ty</label>
            <div class="col-sm-8">
           
              <input class="form-control fontstyle" type="text"  placeholder="" name="congty">
            </div>
          </div>
          <div class="form-group row padding-left-right-20" >
            <label for="staticEmail" class="col-sm-4 col-form-label fontstyle">Liên hệ</label>
            <div class="col-sm-8">
           
              <input class="form-control fontstyle" type="text"  placeholder="" name="lienhe">
              
            </div>
          </div>
           <button type="submit" class="btn them-modal" > Thêm</button>
         
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog width-30" role="document">
    <div class="modal-content">
      <form action="<?php echo base_url()?>handling/ins_upd_knowledge" method="post">
      <h3 class="title-modal margin-bot-15">Thêm trình độ học vấn</h3>
           <input type="hidden" name="checkup" value="0">
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
                <input type="radio" name="caonhat" id="inlineRadio2" value="Y"> Bằng cao nhất của bạn (*)
              </label>
            </div>
          </div>
           <button type="submit" class="btn them-modal" > Thêm</button>
         </form>
      
    </div>
  </div>
</div>

<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog width-30" role="document">
    <div class="modal-content">
      <form action="<?php echo base_url()?>handling/ins_upd_knowledge_v2" method="post">
      <h3 class="title-modal margin-bot-15">Thêm khóa huấn luyện/ đào tạo</h3>
           <input type="hidden" name="checkup" value="0">
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
                  <option value="Năm">Năm</option>
                  <option value="Tháng">Tháng</option>
                  <option value="Ngày">Ngày</option>
                  
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
           <button type="submit" class="btn them-modal" > Thêm</button>
         
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog width-30" role="document">
    <div class="modal-content">
      <form action="<?php echo base_url()?>handling/ins_upd_language" method="post">
      <h3 class="title-modal margin-bot-15">Thêm ngoại ngữ</h3>
           <input type="hidden" name="checkup" value="0">
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
          
           <button type="submit" class="btn them-modal" > Thêm</button>
         
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog width-30"  role="document">
    <div class="modal-content">
      <form action="<?php echo base_url()?>handling/ins_upd_software" method="post">
      <h3 class="title-modal margin-bot-15">Thêm trình độ tin học</h3>
           <input type="hidden" name="checkup" value="0">
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
          
           <button type="submit" class="btn them-modal" > Thêm</button>
         
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="edit_anh_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?php echo base_url()?>handling/upload_image" method="POST" enctype="multipart/form-data">

      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h4 class="modal-title" id="myModalLabel">Cập nhật ảnh đại diện</h4>
      </div>
      <div class="modal-body">
         <strong class="title-anhdaidien">Đổi ảnh đại diện</strong>
      <br>
           <!-- <button type="file"  class="btn btnlong padding-anhdaidien"  >Chọn file</button>
           <label>Không có ảnh...</label> -->
              
       <!-- <input type="file" class="btn btnlong padding-anhdaidien" name="image" id="image">   -->
       <div class="input-group btn-load1">
        <label id="browsebutton" class="btn btn-default input-group-addon btn-load2" for="my-file-selector" style="background-color:white">
            <input id="my-file-selector" name="image" type="file" style="display:none;">
            Browse...
        </label>
        <input id="label" type="text" class="form-control btn-load3" readonly="">
    </div>
           
      </div>

      

      <div class="modal-footer">
        <button type="button" class="btn btnlong btn88"  data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btnlong btn99"> Lưu</button> -->
        <input type="submit" class="btn btnlong btn99" value="Lưu">  
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade" id="myModaldel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?php echo base_url()?>handling/del_relationship" method="POST" enctype="multipart/form-data">

      
      <input type="hidden" name="checkup" value="0">
         <strong class="title-anhdaidien">Thông báo</strong>
      <br>
          <label for="staticEmail" class="col-sm-4 col-form-label fontstyle">Bạn có muốn xóa thông tin này không?</label>
       
           <button type="submit" class="btn them-modal" id="them11"> Xóa</button>
            <button type="button" class="btn them-modal" data-dismiss="modal"> Hủy</button>

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



 $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
 
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
   function editmodal(idform){
      var data = ""; 
      data = $("#"+idform+"").serialize();
      var data2 = parseQuery(data);
      
      $('#them11').text("Lưu");
      $('#myModal11').modal('show');
      $('#hoten11').val(data2.hoten);
      $('#nn11').val(data2.nghenghiep);
      $('#checkup').val(data2.recordid);
      $('#namsinh11').val(data2.namsinh);
      $('#quanhe11').val(data2.quanhe);
   }
     function showmodel11(){
  
      $('#them11').text("Thêm");
     
      $('#myModal11').modal('show');
      $('#hoten11').val("");
      $('#nn11').val("");
      $('#checkup').val("0");
      $('#namsinh11').val("0");
      $('#quanhe11').val("0");
   }
    function delmodal(idform){
      var data = ""; 
      data = $("#"+idform+"").serialize();
      var data2 = parseQuery(data);
      $('#myModaldel').modal('show');
      $('#checkup').val(data2.recordid);
      
   }
        
function parseQuery(queryString) {
    var query = {};
    var pairs = (queryString[0] === '?' ? queryString.substr(1) : queryString).split('&');
    for (var i = 0; i < pairs.length; i++) {
        var pair = pairs[i].split('=');
        query[decodeURIComponent(pair[0])] = decodeURIComponent(pair[1] || '');
    }
    return query;
}
</script>
