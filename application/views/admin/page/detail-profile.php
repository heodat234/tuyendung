
<div style="background-color: white">
	<div class="row rowedit">
		<div class="col-md-6 col-xs-6">
			<label class="margin-t5 margin-b0" >
				<i class="fa fa-bell icon-detail"></i>
				<i class="fa fa-user icon-detail2"></i>
				<i class="fa fa-clock-o icon-detail3"></i>
			</label>
		</div>
		<div class="col-md-6 col-xs-6 hov-btn-ad">
			<button type="button" class="btn-icon-header" ><i class="fa fa-print color-ccc" ></i></button>
				<button type="button" class="btn-icon-header margin-r7" ><i class="fa fa-envelope-o color-ccc" ></i></button>
				<button type="button" class="btn-icon-header margin-r7" ><i class="fa fa-star color-ccc"></i></button>
				<button type="button" class="btn-icon-header margin-r7" > <i class="fa fa-check-circle-o color-ccc"></i>
				</button>
		</div>
	</div>
	<div class="margin-t4 dash-horizontal"  ></div>
	<img src="<?php echo base_url()?>public/image/<?php echo $candidate['imagelink'] ?>" class="image-avatar-ad" width="130px" height="130px">
	<div class="row rowcontent">
		<div class="col-md-6 col-xs-6">
			<label style="font-size: 23px; font-weight: 600; width: 100%;margin-bottom: 5px;margin-top: 2px"><?php echo $candidate['name']?></label>
			<label style="font-size: 14px;margin-bottom: 4px;font-weight: 450;margin-top: -5px; width: 100%">Chuyên viên tuyển dụng - VP BANK</label>
			<label style="font-size: 13px;margin-bottom: 4px;font-weight: 350;color: #5fade0; width: 100%">Tuyển dụng, đào tạo</label>
			<span style="font-size: 13px;color: #5fade0; width: 100%">#HighR</span>
		</div>
		<div class="col-md-6 col-xs-6" style="text-align: right; padding-right: 30px">
			<label style="font-size: 23px;font-weight: 600;margin-bottom: 0px; color: #005AA6; padding-top: 3px; width: 100%">80 điểm</label>
			<label style="font-size: 12px;font-weight: 400;margin-bottom: 0px; color: #5fade0;padding-top: 1px;width: 100%">3 mẩu thư</label>
			<br><br>
			<span style=" margin-bottom: 0px;font-size: 14px;color: #5fade0">Web portal</span>							
		</div>
	</div>
	<div style="height: 20px"></div>
	<!-- ket thuc phan thong tin chung -->

<div class="panel-group" id="accordion">
  <div class="panel panel-default" style="border-radius: 0px;border: 0px;">
    <div class="panel-heading blue" style="border-radius: 0px; padding: 0px; background-color: #5fade0">    
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="float: right; font-size: 23;color: white; padding-right: 15px; padding-top: 8px">
       <i class="fa fa-angle-right"></i></a>
	    <ul class="nav nav-tabs" style="padding-top: 10px; padding-left: 10px;border: 0px">
	        <li class="active"><a data-toggle="tab" href="#total" class="nemu-info-pf">Tổng quát</a></li>
	        <li ><a data-toggle="tab" href="#personal" class="nemu-info-pf" >Cá nhân</a></li>
	        <li ><a data-toggle="tab" href="#contact" class="nemu-info-pf" >Liên hệ</a></li>
	        <li ><a data-toggle="tab" href="#family" class="nemu-info-pf" >Gia đình</a></li>
	        <li ><a data-toggle="tab" href="#experience" class="nemu-info-pf" >Kinh nghiệm</a></li>
	        <li ><a data-toggle="tab" href="#knowledge" class="nemu-info-pf" >Học vấn</a></li>
	        <li ><a data-toggle="tab" href="#language" class="nemu-info-pf" >Ngoại ngữ</a></li>
	        <li ><a data-toggle="tab" href="#software" class="nemu-info-pf" >Tin học</a></li>
	    </ul>
    </div>
    <!-- ket thuc phan heading cua tab 1 thong tin ung vien -->

    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body" style="padding-left: 0px;padding-right: 0px; padding-top: 7px;padding-bottom: 0px">
      	 <div class="tab-content">
        	<div id="total" class="tab-pane in active">
        		<div class="panel-group" style="border: 0px; margin-bottom: 0px">
				  <div class="panel panel-default" style="border-radius: 0px;border: 0px">
				    <div class="panel-heading" style="border-radius: 0px; padding: 0px; background-color: #EFF5FB">
				     	<div style="text-align: right;">
				        <span class="">Hồ sơ cá nhân &nbsp;</span>
				        <a data-toggle="collapse" href="#collapsetotal1" style="font-size: 17;font-weight: 600;color: #999999; padding-right: 17px; padding-top: 8px;padding-left: 10px">
      						 <i class="fa fa-angle-right"></i></a>
				     	</div>
				    </div>
				    <!-- heading ho so ca nhan -->
				    <div id="collapsetotal1" class="panel-collapse collapse in">
				      <div class="panel-body" style="border: 0px">
			     	 	 <div class="width100 row rowedit h-auto">
				            <label for="text" class="width20 col-xs-3 label-profile ">Giới thiệu</label>
				            <div class="width80 col-xs-9 padding-lr0">
				             <label class="fontArial colorgray labelcontent"><?php echo $candidate['introduction']?> </label>
				             
				            </div>
				         </div>
				     	 <div class="width100 row rowedit h-auto">
				            <label for="text" class="width20 col-xs-3 label-profile ">Vị trí mong muốn</label>
				            <div class="width80 col-xs-9 padding-lr0">
				             <label class="fontArial colorcyan labelcontent" >Tuyển dụng </label>
				             
				            </div>
				         </div>
				          <div class="width100 row rowedit h-auto">
				             <label for="text" class="width20 col-xs-3 label-profile">Thu nhập hiện tại</label>
				             <label class="width20 col-xs-3 fontArial colorgray labelcontent" ><?php echo number_format($candidate['currentbenefit'])?> </label>
				             <label for="text" class="width30 col-xs-3 label-profile" >Thu nhập mong muốn</label>
				             <label class="width30 col-xs-3 fontArial colorgray labelcontent"><?php echo number_format($candidate['desirebenefit'])?> </label>
				         </div>
				          <div class="width100 row rowedit h-auto">
				            <label for="text" class="width20 col-xs-3 label-profile">Hồ sơ tải lên</label>
				            <div class="width80 col-xs-9 padding-lr0"">
				             <label class="fontArial colorcyan labelcontent" ><a id="label1"  class="fontstyle"  href="<?php echo base_url().'public/document/'.$candidate['profilesrc']?>"><?php echo $candidate['profilesrc'] ?> </a>   </label>
				             
				            </div>
				         </div>
				  	  </div>
				    </div>
				    <!-- body ho so ca nhan -->
				  </div>
				<!--   ket thuc ho so ca nhan -->
				  <div class="panel panel-default" style="border-radius: 0px;border: 0px">
				    <div class="panel-heading" style="border-radius: 0px; padding: 0px; background-color: #EFF5FB">
				     	<div style="text-align: right;">
				        Hồ sơ nội bộ &nbsp;
				        <a data-toggle="collapse" href="#collapsetotal2" style="font-size: 17;font-weight: 600;color: #999999; padding-right: 17px; padding-top: 8px;padding-left: 10px">
      						 <i class="fa fa-angle-right"></i></a>
				     	</div>
				    </div>
				    <!-- heading ho so noi bo -->
				    <div id="collapsetotal2" class="panel-collapse collapse in">
				      <div class="panel-body" style="border: 0px">
				          <div class="width100">
				             <label for="text" class="width20 col-xs-3 label-profile">Họ tên</label>
				             <div class="col-xs-3 width30 padding-lr0">
				             	<input type="text" name="" class="textbox">
				             </div>
				             <label for="text" class="col-xs-3 width20 col-xs-3 label-profile">Email</label>
				             <div class="col-xs-3 width30 padding-lr0">
				             	<input type="text" name="" class="textbox">
				             </div>   
				         </div>
				         <br><br>
				         <div class="width100">
				             <label for="text" class="width20 col-xs-3 label-profile"></label>
				             <div class="col-xs-3 width30 padding-lr0">
				             	<input type="text" name="" class="textbox">
				             </div>
				             <label for="text" class="col-xs-3 width20 col-xs-3 label-profile">CMND/ ID</label>
				             <div class="col-xs-3 width30 padding-lr0">
				             	<input type="text" name="" class="textbox">
				             </div>   
				         </div>
				         <br><br>
				         <div class="width100">
				             <label for="text" class="width20 col-xs-3 label-profile">Nguồn hồ sơ</label>
				             <div class="col-xs-3 width30 padding-lr0">
				             	<select class="textbox">
				             		<option>Chọn nguồn hồ sơ...</option>
				             	</select>
				             </div>
				         </div>
				         <br><br>
				         <div class="width100">
				             <label for="text" class="width20 col-xs-3 label-profile">Vị trí phù hợp</label>
				             <div class="col-xs-9 width80 padding-lr0">
				             	<input type="text" name="" class="textbox2">
				             </div>
				         </div>
				         <br><br>
				         <div class="width100">
				             <label for="text" class="width20 col-xs-3 label-profile">Tag</label>
				             <div class="col-xs-9 width80 padding-lr0">
				             	<input type="text" name="" class="textbox2">
				             </div>
				         </div>
				         <br><br>
				         <div class="width100">
				            <label for="text" class="width20 col-xs-3 label-profile">Hồ sơ tải lên</label>
				            <div class="width80 col-xs-9 padding-lr0"">
				             <label class="fontArial colorcyan labelcontent" ><i class="fa fa-upload"></i> Tải lên hồ sơ</label>
				             
				            </div>
				         </div>
				         <button type="button" class="btn-luu-nav floatright"> Lưu</button>
				  	  </div>
				    </div>
				    <!-- body ho so noi bo -->
				  </div>
				  <!-- ket thuc ho so noi bo -->
				</div>
       		 </div>
       		 <!-- ket thuc id tab tong quat -->

       		 <div id="personal" class="tab-pane">
        		<div class="panel-group" style="border: 0px; margin-bottom: 0px">
				  <div class="panel panel-default" style="border-radius: 0px;border: 0px">
				    <div class="panel-heading" style="border-radius: 0px; padding: 0px; background-color: #EFF5FB">
				     	<div style="text-align: right;">
				        Hồ sơ cá nhân &nbsp;
				        <a data-toggle="collapse" href="#collapsetotal21" style="font-size: 17;font-weight: 600;color: #999999; padding-right: 17px; padding-top: 8px;padding-left: 10px">
      						 <i class="fa fa-angle-right"></i></a>
				     	</div>
				    </div>
				    <!-- heading ho so ca nhan 2-->
				    <div id="collapsetotal21" class="panel-collapse collapse in">
				      <div class="panel-body" style="border: 0px">
			     	 	 <div class="width100 row rowedit h-auto">
				            <label for="text" class="width20 col-xs-3 label-profile">Họ tên</label>
				            <div class="width80 col-xs-9 padding-lr0">
				             <label class="fontArial colorgray labelcontent"><?php echo $candidate['name']?></label>
				             
				            </div>
				         </div>

				     	 <div class="width100 row rowedit h-auto">
				            <label for="text" class="width20 col-xs-3 label-profile">Ngày sinh</label>
				            <div class="width20 col-xs-3 padding-lr0">
				             <label class="fontArial colorgray labelcontent" ><?php echo $candidate['dateofbirth']?></label>
				            </div>
				            <div class="width20 col-xs-6 padding-lr0">
				             <label class="fontArial colorgray labelcontent" ><?php echo getAge($candidate['dateofbirth'])." tuổi"?></label>
				            </div>
				            <label for="text" class="width20 col-xs-3 label-profile">Giới tính</label>
				            <div class="width20 col-xs-3 padding-lr0">
				             <label class="fontArial colorgray labelcontent" ><?php echo ($candidate['gender'] == "M")? "Nam": "Nữ";?></label>
				            </div>
				         </div>
				          <div class="width100 row rowedit h-auto">
				             <label for="text" class="width20 col-xs-3 label-profile">Nơi Sinh</label>
				            <div class="width80 col-xs-9 padding-lr0">
				             <label class="fontArial colorgray labelcontent" ><?php echo $candidate['placeofbirth']?></label>
				            </div>
				            
				         </div>
				          <div class="width100 row rowedit h-auto">
				            <label for="text" class="width20 col-xs-3 label-profile">Dân Tộc</label>
				            <div class="width20 col-xs-3 padding-lr0">
				             <label class="fontArial colorgray labelcontent" ><?php echo $candidate['ethnic']?></label>
				            </div>
				            <label for="text" class="width20 col-xs-3 label-profile">Quốc tịch</label>
				            <div class="width30 col-xs-3 padding-lr0">
				             <label class="fontArial colorgray labelcontent" ><?php echo $candidate['nationality']?></label>
				            </div>
				         </div>
				         <div class="width100 row rowedit h-auto">
				            <label for="text" class="width20 col-xs-3 label-profile">Chiều cao</label>
				            <div class="width20 col-xs-3 padding-lr0">
				             <label class="fontArial colorgray labelcontent" ><?php echo $candidate['height']?></label>
				            </div>
				            <label for="text" class="width20 col-xs-3 label-profile">Cân nặng</label>
				            <div class="width30 col-xs-3 padding-lr0">
				             <label class="fontArial colorgray labelcontent" ><?php echo $candidate['weight']?></label>
				            </div>
				         </div>
				         <div class="width100 row rowedit h-auto">
				            <label for="text" class="width20 col-xs-3 label-profile">CMND/ ID</label>
				            <div class="width20 col-xs-3 padding-lr0">
				             <label class="fontArial colorgray labelcontent" ><?php echo $candidate['idcard']?></label>
				            </div>
				            <label for="text" class="width20 col-xs-3 label-profile">Ngày cấp/ Nơi cấp</label>
				            <div class="width20 col-xs-3 padding-lr0">
				             <label class="fontArial colorgray labelcontent" ><?php echo $candidate['dateofissue']?></label>
				            </div>
				            <div class="width20 col-xs-3 padding-lr0">
				             <label class="fontArial colorgray labelcontent" ><?php echo $candidate['placeofissue']?></label>
				            </div>
				         </div>
				        
				  	  </div>
				    </div>
				    <!-- body ho so ca nhan 2-->
				  </div>
				<!--   ket thuc ho so ca nhan 2-->
				  <div class="panel panel-default" style="border-radius: 0px;border: 0px">
				    <div class="panel-heading" style="border-radius: 0px; padding: 0px; background-color: #EFF5FB">
				     	<div style="text-align: right;">
				        Hồ sơ nội bộ &nbsp;
				        <a data-toggle="collapse" href="#collapsetotal22" style="font-size: 17;font-weight: 600;color: #999999; padding-right: 17px; padding-top: 8px;padding-left: 10px">
      						 <i class="fa fa-angle-right"></i></a>
				     	</div>
				    </div>
				    <!-- heading ho so noi bo 2-->
				    <div id="collapsetotal22" class="panel-collapse collapse in">
				      <div class="panel-body" style="border: 0px">
				          <div class="width100">
				             <label for="text" class="width20 col-xs-3 label-profile">Ngày sinh/ Giới tính</label>
				             <div class="col-xs-3 width30 padding-lr0">
				             	<input type="text" name="ngaysinh11" id="ngaysinh123" class="textbox2">
				             </div>
				             <div class="col-xs-1 width5 padding-lr0"></div>
				             <label class="radio-inline">
			                    <input type="radio" name="gender" checked="true" value="M"> Nam
			                  </label>
			                  <label class="radio-inline">
			                    <input type="radio" name="gender" value="F"> Nữ
			                  </label>
				         </div>
				         <br>
				         <div class="width100">
				             <label for="text" class="width20 col-xs-3 label-profile">Nơi sinh</label>
				             <div class="col-xs-3 width30 padding-lr0">
				             	<select class="textbox2 js-example-basic-single" name="noisinh" style="width: 195px">
					                 <option value="0" style="width: 195px" >Chọn tỉnh thành</option>
					                <?php foreach ($city as $key ) {

					                ?>
					                  <option value="<?php echo $key['name'] ?>"><?php echo $key['name'] ?></option>
					                  <?php } ?>
				                </select>
				             </div> 
				         </div>
				         <br><br>
				         <div class="width100">
				             <label for="text" class="width20 col-xs-3 label-profile">Dân tộc</label>
				             <div class="col-xs-3 width30 padding-lr0">
				             	<input type="text" name="" class="textbox2">
				             </div>
				         </div>
				         <br><br>
				         <div class="width100">
				             <label for="text" class="width20 col-xs-3 label-profile">Quốc tịch</label>
				             <div class="col-xs-3 width30 padding-lr0">
				             	<select class="textbox2">
				             		<option>Việt Nam</option>
				             		<option>Khác</option>
				             	</select>
				             </div>
				         </div>
				         <br><br>
				         <div class="width100">
				             <label for="text" class="width20 col-xs-3 label-profile">Chiều cao (Cm)</label>
				             <div class="col-xs-3 width30 padding-lr0">
				             	<input type="text" name="" class="textbox2">
				             </div>
				         </div>
				         <br><br>
				         <div class="width100">
				             <label for="text" class="width20 col-xs-3 label-profile">Cân nặng (Kg)</label>
				             <div class="col-xs-3 width30 padding-lr0">
				             	<input type="text" name="" class="textbox2">
				             </div>
				         </div>
				         <br><br>
				         <div class="width100">
				             <label for="text" class="width20 col-xs-3 label-profile">Ngày cấp/ Nơi cấp</label>
				             <div class="col-xs-3 width30 padding-lr0">
				             	<input type="text" name="ngaycap" id="ngaycap1" class="textbox2">
				             </div>
				             <div class="col-xs-1 width5 padding-lr0"></div>
				             <div class="col-xs-3 width30 padding-lr0">
				             	<select class="textbox2 js-example-basic-single" name="noicap" style="width: 195px">
					                 <option value="0" style="width: 195px" >Chọn tỉnh thành</option>
					                <?php foreach ($city as $key ) {

					                ?>
					                  <option value="<?php echo $key['name'] ?>"><?php echo $key['name'] ?></option>
					                  <?php } ?>
				                </select>
				             </div> 
				         </div>
				         <button type="button" class="btn-luu-nav floatright margin-t35"> Lưu</button>
				  	  </div>
				    </div>
				    <!-- body ho so noi bo 2-->
				  </div>
				  <!-- ket thuc ho so noi bo 2-->
				</div>
       		 </div>
       		 <!-- ket thuc id tab ca nhan -->

       		  <div id="contact" class="tab-pane">
        		<div class="panel-group" style="border: 0px; margin-bottom: 0px">
				  <div class="panel panel-default" style="border-radius: 0px;border: 0px">
				    <div class="panel-heading" style="border-radius: 0px; padding: 0px; background-color: #EFF5FB">
				     	<div style="text-align: right;">
				        Hồ sơ cá nhân &nbsp;
				        <a data-toggle="collapse" href="#collapsetotal31" style="font-size: 17;font-weight: 600;color: #999999; padding-right: 17px; padding-top: 8px;padding-left: 10px">
      						 <i class="fa fa-angle-right"></i></a>
				     	</div>
				    </div>
				    <!-- heading ho so ca nhan 3-->
				    <div id="collapsetotal31" class="panel-collapse collapse in">
				      <div class="panel-body" style="border: 0px">
			     	 	 <div class="width100 row rowedit h-auto">
				            <label for="text" class="width20 col-xs-3 label-profile">Email</label>
				            <div class="width80 col-xs-9 padding-lr0">
				             <label class="fontArial colorgray labelcontent"><?php echo $candidate['email']?></label>
				             
				            </div>
				         </div>

				     	 <div class="width100 row rowedit h-auto">
				             <label for="text" class="width20 col-xs-3 label-profile">Địa chỉ thường trú</label>
				            <div class="width80 col-xs-9 padding-lr0">
				             <label class="fontArial colorgray labelcontent"><?php 
				                  if($address != null)
				                  { 
				                      foreach ($address as $key ) {
				                        if($key['addtype'] == "PREMANENT")
				                        {
				                          echo $key['address']; break;
				                        }
				                      }
				                  }
				              ?></label>
				             
				            </div>
				         </div>
				          <div class="width100 row rowedit h-auto">
				             <label for="text" class="width20 col-xs-3 label-profile">Địa chỉ liên hệ</label>
				            <div class="width80 col-xs-9 padding-lr0">
				             <label class="fontArial colorgray labelcontent" >
				             	<?php 
				                  if($address != null)
				                  {
				                      foreach ($address as $key ) {
				                        if($key['addtype'] == "CONTACT")
				                        {
				                          echo $key['address']; break;
				                        }
				                      }
				                  }
				              ?></label>
				            </div>
				            
				         </div>
				          <div class="width100 row rowedit h-auto">
				            <label for="text" class="width20 col-xs-3 label-profile">Điện thoại</label>
				            <div class="width80 col-xs-9 padding-lr0">
				             <label class="fontArial colorgray labelcontent" ><?php echo $candidate['telephone'];?></label>
				            </div>
				        </div>
				         <div class="width100 row rowedit h-auto">
				            <label for="text" class="width20 col-xs-3 label-profile">Liên lạc khẩn cấp</label>
				            <div class="width30 col-xs-3 padding-lr0">
				             <label class="fontArial colorgray labelcontent" ><?php echo $candidate['emergencycontact'];?></label>
				            </div>
				         </div>
				         
				  	  </div>
				    </div>
				    <!-- body ho so ca nhan 3-->
				  </div>
				<!--   ket thuc ho so ca nhan 3-->
				  <div class="panel panel-default" style="border-radius: 0px;border: 0px">
				    <div class="panel-heading" style="border-radius: 0px; padding: 0px; background-color: #EFF5FB">
				     	<div style="text-align: right;">
				        Hồ sơ nội bộ &nbsp;
				        <a data-toggle="collapse" href="#collapsetotal32" style="font-size: 17;font-weight: 600;color: #999999; padding-right: 17px; padding-top: 8px;padding-left: 10px">
      						 <i class="fa fa-angle-right"></i></a>
				     	</div>
				    </div>
				    <!-- heading ho so noi bo 3-->
				    <div id="collapsetotal32" class="panel-collapse collapse in">
				      <div class="panel-body" style="border: 0px">
				          <div class="width100">
				             <label for="text" class="width20 col-xs-3 label-profile">Địa chỉ thường trú</label>
				             <div class="col-xs-3 width30 padding-lr0">
				             	<select class="textbox2" >
				             		<option>Việt Nam</option>
				             		<option>Khác</option>
				             	</select>
				             	<div style="height: 10px; width: auto"></div>
				             	<select class="textbox2 js-example-basic-single" onchange="comb_admin(this.value)" name="noisinh-ad" style="width: 195px;">
					                 <option value="0" style="width: 195px" >Chọn tỉnh thành</option>
					                <?php foreach ($city as $key ) {

					                ?>
					                  <option value="<?php echo $key['id_city'] ?>"><?php echo $key['name'] ?></option>
					                  <?php } ?>
				                </select>
				                <div style="height: 10px; width: auto"></div>

				                <select class="seletext js-example-basic-single" name="quanhuyen" id="quanhuyen8-ad" style="width: 100%" required onchange="comb_admin_qhpx(this.value)">
				                 	<option value="0" id="chonqh-ad1" >Chọn quận huyện</option>
				                </select>

				                <div style="height: 10px; width: auto"></div>

				                 <select class="textbox2 js-example-basic-single" name="phuongxa" id="phuongxa8-ad" style="width: 100%" required>
				                 	<option value="0" id="chonpx-ad1" >Chọn phường xã</option>				                
				                </select>
				                <div style="height: 10px; width: auto"></div>

				                 <textarea class="form-control off-resize fontstyle" rows="2" name="duong" id="duong8" required></textarea>
				                 <div style="height: 10px; width: auto"></div>
				                   <textarea class="form-control off-resize fontstyle" rows="2" name="toanha" id="toanha8"></textarea>
				             </div>
				            
				             <label for="text" class="width20 col-xs-3 label-profile" style="padding-left: 15px">Địa chỉ liên hệ</label>
				             <div class="col-xs-3 width30 padding-lr0">
				             	<select class="textbox2">
				             		<option>Việt Nam</option>
				             		<option>Khác</option>
				             	</select>
				             	<div style="height: 10px; width: auto"></div>
				             	<select class="textbox2 js-example-basic-single" name="noisinh-ad2" style="width: 195px" onchange="comb_admin2(this.value)">
					                 <option value="0" style="width: 195px" >Chọn tỉnh thành</option>
					                <?php foreach ($city as $key ) {

					                ?>
					                  <option value="<?php echo $key['id_city'] ?>"><?php echo $key['name'] ?></option>
					                  <?php } ?>
				                </select>
				                <div style="height: 10px; width: auto"></div>
				                <select class="seletext js-example-basic-single" name="quanhuyen" id="quanhuyen-ad2" style="width: 100%" required onchange="comb_admin_qhpx2(this.value)">
				                 <option value="0" id="chonqh-ad2" >Chọn quận huyện</option>
				                </select>
				                <div style="height: 10px; width: auto"></div>
				                 <select class="seletext js-example-basic-single" name="phuongxa" id="phuongxa8" style="width: 100%" required>
				                 	<option value="0" id="chonpx-ad2" >Chọn phường xã</option>
				                </select>
				                <div style="height: 10px; width: auto"></div>
				                 <textarea class="form-control off-resize fontstyle" rows="2" name="duong" id="duong8" required></textarea>
				                 <div style="height: 10px; width: auto"></div>
				                   <textarea class="form-control off-resize fontstyle" rows="2" name="toanha" id="toanha8"></textarea>
				             </div>
				         </div>

				         <div class="width100">
				             <label for="text" class="width20 col-xs-3 label-profile" style="margin-top: 10px;">Số điện thoại</label>
				             <div class="col-xs-3 width30 padding-lr0">
				             	<input type="text" name="" class="textbox2" style="margin-top: 10px">
				             </div>
				             <div class="col-xs-3 width40 padding-lr0" style="margin-left: 20px;margin-top: 10px; margin-right: 40px">
				             	<input type="text" name="" class="textbox2">
				             </div>
				         </div>
				         
				        
				         <div class="width100">
				             <label for="text" class="width20 col-xs-3 label-profile" style="margin-top: 10px">Liên lạc khẩn cấp</label>
				             <div class="col-xs-3 width30 padding-lr0">
				             	<input type="text" name="" class="textbox2" style="margin-top: 10px"> 
				             </div>
				         </div>
				         <button type="button" class="btn-luu-nav floatright margin-t35"> Lưu</button>
				  	  </div>
				    </div>
				    <!-- body ho so noi bo 3-->
				  </div>
				  <!-- ket thuc ho so noi bo 3-->
				</div>
       		 </div>
       		 <!-- ket thuc id tab lien he -->

       		 <div id="family" class="tab-pane">
        		<div class="panel-group" style="border: 0px; margin-bottom: 0px">
				  <div class="panel panel-default" style="border-radius: 0px;border: 0px">
				    <div class="panel-heading" style="border-radius: 0px; padding: 0px; background-color: #EFF5FB">
				     	<div style="text-align: right;">
				        Hồ sơ cá nhân &nbsp;
				        <a data-toggle="collapse" href="#collapsetotal41" style="font-size: 17;font-weight: 600;color: #999999; padding-right: 17px; padding-top: 8px;padding-left: 10px">
      						 <i class="fa fa-angle-right"></i></a>
				     	</div>
				    </div>
				    <!-- heading ho so ca nhan 4-->
				    <div id="collapsetotal41" class="panel-collapse collapse in">
				    	 <div class="panel-body" style="border: 0px">
						      <table class="table table-striped table-bordered"> 
						            <thead> 
						              <tr class="fontstyle"> 
						                <th id="th" width="30%">Họ và tên</th> 
						                <th id="th" width="20%">Năm sinh</th> 
						                <th id="th" width="20%">Quan hệ</th> 
						                <th id="th" width="20%">Nghề nghiệp</th>
						              </tr> 
						            </thead> 
						            <tbody class="fontstyle text-center"> 
						              <?php if($family != null) {
						                $i = 0;
						              foreach ($family as $key) { ?>
						             <tr>
						              <td><?php echo $key['name']?></td>
						              <td><?php echo ($key['yob'] !== 0) ? $key['yob'] : ""; ?></td>
						              <td><?php echo ($key['type'] !== '0') ? $key['type'] : ""; ?></td>
						              <td><?php echo $key['career']?></td>
						             </tr>
						             <?php $i++;} } ?>
						            </tbody> 
					          </table>
			      		</div>
				    </div>
				    <!-- body ho so ca nhan 4-->
				  </div>
				<!--   ket thuc ho so ca nhan 4-->
				  <div class="panel panel-default" style="border-radius: 0px;border: 0px">
				    <div class="panel-heading" style="border-radius: 0px; padding: 0px; background-color: #EFF5FB">
				     	<div style="text-align: right;">
				        Hồ sơ nội bộ &nbsp;
				        <a data-toggle="collapse" href="#collapsetotal42" style="font-size: 17;font-weight: 600;color: #999999; padding-right: 17px; padding-top: 8px;padding-left: 10px">
      						 <i class="fa fa-angle-right"></i></a>
				     	</div>
				    </div>
				    <!-- heading ho so noi bo 4-->
				    <div id="collapsetotal42" class="panel-collapse collapse in">
				      <div class="panel-body" style="border: 0px">				         
				         <table   class="table table-striped table-bordered"> 
				            <thead> 
				              <tr class="fontstyle"> 
				                <th id="th" width="30%">Họ và tên</th> 
				                <th id="th" width="20%">Năm sinh</th> 
				                <th id="th" width="20%">Quan hệ</th> 
				                <th id="th" width="20%">Nghề nghiệp</th>
				                <th id="th" width="10%"></th>
				              </tr> 
				            </thead> 
				            <tbody class="fontstyle text-center"> 
				            	<tr>
				            		<td style="height: 37px;"></td>
				            		<td></td>
				            		<td></td>
				            		<td></td>
				            		<td></td>
				            	</tr>
				            </tbody> 
				          </table>
				          <label class="floatright">Thêm quan hệ <i class="fa fa-plus-circle color-blue" aria-hidden="true"></i></label>
				  	  </div>
				    </div>
				    <!-- body ho so noi bo 4-->
				  </div>
				  <!-- ket thuc ho so noi bo 4-->
				</div>
       		 </div>
       		 <!-- ket thuc id tab gia dinh -->
       		 
       		  <div id="experience" class="tab-pane">
        		<div class="panel-group" style="border: 0px; margin-bottom: 0px">
				  <div class="panel panel-default" style="border-radius: 0px;border: 0px">
				    <div class="panel-heading" style="border-radius: 0px; padding: 0px; background-color: #EFF5FB">
				     	<div style="text-align: right;">
				        Hồ sơ cá nhân &nbsp;
				        <a data-toggle="collapse" href="#collapsetotal51" style="font-size: 17;font-weight: 600;color: #999999; padding-right: 17px; padding-top: 8px;padding-left: 10px">
      						 <i class="fa fa-angle-right"></i></a>
				     	</div>
				    </div>
				    <!-- heading ho so ca nhan 5-->
				    <div id="collapsetotal51" class="panel-collapse collapse in">
				    	 <div class="panel-body" style="border: 0px">
						      <table   class="table table-striped table-bordered" > 
					            <thead class="fontstyle"> 
					              <tr > 
					                <th id="th" class="middle2" width="20%">Từ - Đến</th> 
					                <th id="th" class="middle2" width="20%">Cty/ Địa chỉ/ ĐT</th> 
					                <th id="th" width="13%">CV khi nghỉ</th> 
					                <th id="th" width="17%">NV/ Trách nhiệm</th>
					                 <th id="th" class="middle2" width="20%">Lý do nghỉ</th>
					              </tr> 
					            </thead> 
					            <tbody class="fontstyle text-center"> 
					             <?php if($experience != null) { 
					              $i = 0;
					              foreach ($experience as $key) { ?>
					             <tr>
					              
					              <td><?php echo date("d-m-Y", strtotime($key['datefrom'])).' - '.date("d-m-Y", strtotime($key['dateto']))?></td>
					              <td><?php echo $key['company']." / ".$key['address']." / ".$key['phone']?></td>
					              <td><?php echo $key['position']?></td>
					              <td><?php echo $key['responsibility']?></td>
					              <td><?php echo $key['quitreason']?></td>
					             </tr>
					             <?php $i++; } } ?>
					            </tbody> 
					          </table>

					          <table   class="table table-striped table-bordered" > 
					            <thead> 
					              <tr class="fontstyle"> 
					                <th id="th" width="30%">Họ và tên</th> 
					                <th id="th" width="15%">Chức vụ</th> 
					                <th id="th" width="20%">Công ty</th> 
					                <th id="th" width="25%">Liên hệ</th>				                  
					              </tr> 
					            </thead> 
					            <tbody class="fontstyle text-center"> 
					             <?php if($reference != null) {
					              $i = 0;
					              foreach ($reference as $key) { ?>
					             <tr>					               
					              <td><?php echo $key['name']?></td>
					              <td><?php echo $key['position']?></td>
					              <td><?php echo $key['company']?></td>
					              <td><?php echo $key['contactno']?></td>
					             </tr>
					             <?php $i++; } } ?>
					            </tbody> 
					          </table>
			      		</div>
				    </div>
				    <!-- body ho so ca nhan 5-->
				  </div>
				<!--   ket thuc ho so ca nhan 5-->
				  <div class="panel panel-default" style="border-radius: 0px;border: 0px">
				    <div class="panel-heading" style="border-radius: 0px; padding: 0px; background-color: #EFF5FB">
				     	<div style="text-align: right;">
				        Hồ sơ nội bộ &nbsp;
				        <a data-toggle="collapse" href="#collapsetotal52" style="font-size: 17;font-weight: 600;color: #999999; padding-right: 17px; padding-top: 8px;padding-left: 10px">
      						 <i class="fa fa-angle-right"></i></a>
				     	</div>
				    </div>
				    <!-- heading ho so noi bo 5-->
				    <div id="collapsetotal52" class="panel-collapse collapse in">
				      <div class="panel-body" style="border: 0px">				         
				          <table   class="table table-striped table-bordered" > 
					            <thead class="fontstyle"> 
					              <tr > 
					                <th id="th" class="middle2" width="20%">Từ - Đến</th> 
					                <th id="th" class="middle2" width="20%">Cty/ Địa chỉ/ ĐT</th> 
					                <th id="th" width="13%">CV khi nghỉ</th> 
					                <th id="th" width="17%">NV/ Trách nhiệm</th>
					                 <th id="th" class="middle2" width="20%">Lý do nghỉ</th>
					                 <th id="th" width="10%"></th>
					              </tr> 
					            </thead> 
					            <tbody class="fontstyle text-center"> 
					             <tr>
				            		<td style="height: 37px;"></td>
				            		<td></td>
				            		<td></td>
				            		<td></td>
				            		<td></td>
				            		<td></td>
				            	</tr>
					            </tbody> 
					          </table>
					         <label class="floatright">Thêm kinh nghiệm <i class="fa fa-plus-circle color-blue" aria-hidden="true"></i></label>
					          <table   class="table table-striped table-bordered" > 
					            <thead> 
					              <tr class="fontstyle"> 
					                <th id="th" width="30%">Họ và tên</th> 
					                <th id="th" width="15%">Chức vụ</th> 
					                <th id="th" width="20%">Công ty</th> 
					                <th id="th" width="25%">Liên hệ</th>
					                <th id="th" width="10%"></th>				                  
					              </tr> 
					            </thead> 
					            <tbody class="fontstyle text-center"> 
								<tr>
				            		<td style="height: 37px;"></td>
				            		<td></td>
				            		<td></td>
				            		<td></td>
				            		<td></td>

				            	</tr>
					            </tbody> 
					          </table>
				          <label class="floatright">Thêm người tham chiếu <i class="fa fa-plus-circle color-blue" aria-hidden="true"></i></label>
				  	  </div>
				    </div>
				    <!-- body ho so noi bo 5-->
				  </div>
				  <!-- ket thuc ho so noi bo 5-->
				</div>
       		 </div>
       		 <!-- ket thuc id tab kinh nghiệm -->

       		 <div id="knowledge" class="tab-pane">
        		<div class="panel-group" style="border: 0px; margin-bottom: 0px">
				  <div class="panel panel-default" style="border-radius: 0px;border: 0px">
				    <div class="panel-heading" style="border-radius: 0px; padding: 0px; background-color: #EFF5FB">
				     	<div style="text-align: right;">
				        Hồ sơ cá nhân &nbsp;
				        <a data-toggle="collapse" href="#collapsetotal61" style="font-size: 17;font-weight: 600;color: #999999; padding-right: 17px; padding-top: 8px;padding-left: 10px">
      						 <i class="fa fa-angle-right"></i></a>
				     	</div>
				    </div>
				    <!-- heading ho so ca nhan 6-->
				    <div id="collapsetotal61" class="panel-collapse collapse in">
				    	 <div class="panel-body" style="border: 0px">
						      <table   class="table table-striped table-bordered" > 
					            <thead class="fontstyle"> 
					              <tr > 
					                <th id="th" width="20%">Từ - Đến</th> 
					                <th id="th" width="20%">Trường</th> 
					                <th id="th" width="15%">Nơi học</th> 
					                <th id="th" width="20%">Ngành học</th>
					                 <th id="th" width="15%">Bằng cấp</th>
					                 
					              </tr> 
					            </thead> 
					            <tbody class="fontstyle text-center"> 
					              <?php if($knowledge != null) {
					                $i = 0;
					              foreach ($knowledge as $key) { 
					                if($key['traintimetype'] != null)
					                  { continue; } else {?>
					             <tr>
					              <td><?php echo date("d-m-Y", strtotime($key['datefrom'])).' - '.date("d-m-Y", strtotime($key['dateto']))?></td>
					              <td><?php echo $key['trainingcenter']?></td>
					              <td><?php echo $key['trainingplace']?></td>
					              <td><?php echo $key['trainingcourse']?></td>
					              <td><?php echo $key['certificate']; if($key['highestcer'] == "Y") echo "(*)"; ?></td>
					             </tr>
					             <?php $i++; } } }?>
					            </tbody> 
					          </table>

					          <table   class="table table-striped table-bordered" > 
					            <thead class="fontstyle"> 
					              <tr> 
					                <th id="th" width="20%">Từ - Đến</th> 
					                <th id="th" width="25%">Cơ sở đạo tào</th> 
					                <th id="th" width="13%">TG học</th> 
					                <th id="th" width="17%">Ngành học</th>
					                 <th id="th" width="15%">Bằng cấp</th>
					                
					              </tr> 
					            </thead> 
					            <tbody class="fontstyle text-center"> 
					             <?php if($knowledge != null) {
					               $i = 0;
					              foreach ($knowledge as $key) { 
					                if($key['traintimetype'] == null)
					                  { continue; } else {?>
					             <tr>
					              <td><?php echo date("d-m-Y", strtotime($key['datefrom'])).' - '.date("d-m-Y", strtotime($key['dateto']))?></td>
					              <td><?php echo $key['trainingcenter']?></td>
					              <td><?php echo $key['traintime'].' '.$key['traintimetype']?></td>
					              <td><?php echo $key['trainingcourse']?></td>
					              <td><?php echo $key['certificate']?></td>
					             </tr>
					             <?php $i++; } } } ?>
					            </tbody> 
					          </table>
			      		</div>
				    </div>
				    <!-- body ho so ca nhan 6-->
				  </div>
				<!--   ket thuc ho so ca nhan 6-->
				  <div class="panel panel-default" style="border-radius: 0px;border: 0px">
				    <div class="panel-heading" style="border-radius: 0px; padding: 0px; background-color: #EFF5FB">
				     	<div style="text-align: right;">
				        Hồ sơ nội bộ &nbsp;
				        <a data-toggle="collapse" href="#collapsetotal62" style="font-size: 17;font-weight: 600;color: #999999; padding-right: 17px; padding-top: 8px;padding-left: 10px">
      						 <i class="fa fa-angle-right"></i></a>
				     	</div>
				    </div>
				    <!-- heading ho so noi bo 6-->
				    <div id="collapsetotal62" class="panel-collapse collapse in">
				      <div class="panel-body" style="border: 0px">				         
				          <table   class="table table-striped table-bordered" > 
					            <thead class="fontstyle"> 
					              <tr > 
					                <th id="th" width="20%">Từ - Đến</th> 
					                <th id="th" width="20%">Trường</th> 
					                <th id="th" width="15%">Nơi học</th> 
					                <th id="th" width="20%">Ngành học</th>
					                 <th id="th" width="15%">Bằng cấp</th>
					                 <th id="th" width="10%"></th>
					                 
					              </tr> 
					            </thead> 
					            <tbody class="fontstyle text-center"> 
					              <tr>
				            		<td style="height: 37px;"></td>
				            		<td></td>
				            		<td></td>
				            		<td></td>
				            		<td></td>
				            		<td></td>
				            	</tr>
					            </tbody> 
					          </table>
					         <label class="floatright">Thêm học vấn <i class="fa fa-plus-circle color-blue" aria-hidden="true"></i></label>
					          <table   class="table table-striped table-bordered" > 
					            <thead class="fontstyle"> 
					              <tr> 
					                <th id="th" width="20%">Từ - Đến</th> 
					                <th id="th" width="25%">Cơ sở đạo tào</th> 
					                <th id="th" width="13%">TG học</th> 
					                <th id="th" width="17%">Ngành học</th>
					                 <th id="th" width="15%">Bằng cấp</th>
					                 <th id="th" width="10%"></th>
					              </tr> 
					            </thead> 
					          	 <tr>
				            		<td style="height: 37px;"></td>
				            		<td></td>
				            		<td></td>
				            		<td></td>
				            		<td></td>
				            		<td></td>
				            	</tr>
					            </tbody> 
					          </table>
				          <label class="floatright">Thêm khoá đào tạo <i class="fa fa-plus-circle color-blue" aria-hidden="true"></i></label>
				  	  </div>
				    </div>
				    <!-- body ho so noi bo 6-->
				  </div>
				  <!-- ket thuc ho so noi bo 6-->
				</div>
       		 </div>
       		 <!-- ket thuc id tab hoc van-->
       		 
       		 <div id="language" class="tab-pane">
        		<div class="panel-group" style="border: 0px; margin-bottom: 0px">
				  <div class="panel panel-default" style="border-radius: 0px;border: 0px">
				    <div class="panel-heading" style="border-radius: 0px; padding: 0px; background-color: #EFF5FB">
				     	<div style="text-align: right;">
				        Hồ sơ cá nhân &nbsp;
				        <a data-toggle="collapse" href="#collapsetotal71" style="font-size: 17;font-weight: 600;color: #999999; padding-right: 17px; padding-top: 8px;padding-left: 10px">
      						 <i class="fa fa-angle-right"></i></a>
				     	</div>
				    </div>
				    <!-- heading ho so ca nhan 7-->
				    <div id="collapsetotal71" class="panel-collapse collapse in">
				    	 <div class="panel-body" style="border: 0px">
						      <table class="table table-striped table-bordered" > 
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
					              $i = 0;
					              foreach ($language as $key) { 
					              
					                ?>
					             <tr>
					              <td><?php echo $key['language']?></td>
					              <td><?php echo ($key['rate1'] !== "0") ? $key['rate1'] : ""; ?></td>
					              <td><?php echo ($key['rate2'] !== "0")? $key['rate2'] : ""; ?></td>
					              <td><?php echo ($key['rate3'] !== "0")? $key['rate3']: ""; ?></td>
					              <td><?php echo ($key['rate4'] !== "0")? $key['rate4']: ""; ?></td>
					             </tr>
					             <?php $i++; } } ?>
					            </tbody> 
					          </table>
			      		</div>
				    </div>
				    <!-- body ho so ca nhan 7-->
				  </div>
				<!--   ket thuc ho so ca nhan 7-->
				  <div class="panel panel-default" style="border-radius: 0px;border: 0px">
				    <div class="panel-heading" style="border-radius: 0px; padding: 0px; background-color: #EFF5FB">
				     	<div style="text-align: right;">
				        Hồ sơ nội bộ &nbsp;
				        <a data-toggle="collapse" href="#collapsetotal72" style="font-size: 17;font-weight: 600;color: #999999; padding-right: 17px; padding-top: 8px;padding-left: 10px">
      						 <i class="fa fa-angle-right"></i></a>
				     	</div>
				    </div>
				    <!-- heading ho so noi bo 7-->
				    <div id="collapsetotal72" class="panel-collapse collapse in">
				      <div class="panel-body" style="border: 0px">				         
				          <table   class="table table-striped table-bordered" > 
					            <thead class="fontstyle"> 
					              <tr> 
					                <th id="th" >Ngoại Ngữ</th> 
					                <th id="th" >Nghe</th> 
					                <th id="th" >Nói</th> 
					                <th id="th" >Đọc</th>
					                <th id="th" >Viết</th>
					                <th id="th" ></th>
					              </tr> 
					            </thead> 
					            <tbody class="fontstyle text-center"> 
					             <tr>
				            		<td style="height: 37px;"></td>
				            		<td></td>
				            		<td></td>
				            		<td></td>
				            		<td></td>
				            		<td></td>
				            	</tr>
					            </tbody> 
					          </table>
				          <label class="floatright">Thêm ngoại ngữ <i class="fa fa-plus-circle color-blue" aria-hidden="true"></i></label>
				  	  </div>
				    </div>
				    <!-- body ho so noi bo 7-->
				  </div>
				  <!-- ket thuc ho so noi bo 7-->
				</div>
       		 </div>
       		 <!-- ket thuc id tab ngoai ngu-->

       		  <div id="software" class="tab-pane">
        		<div class="panel-group" style="border: 0px; margin-bottom: 0px">
				  <div class="panel panel-default" style="border-radius: 0px;border: 0px">
				    <div class="panel-heading" style="border-radius: 0px; padding: 0px; background-color: #EFF5FB">
				     	<div style="text-align: right;">
				        Hồ sơ cá nhân &nbsp;
				        <a data-toggle="collapse" href="#collapsetotal81" style="font-size: 17;font-weight: 600;color: #999999; padding-right: 17px; padding-top: 8px;padding-left: 10px">
      						 <i class="fa fa-angle-right"></i></a>
				     	</div>
				    </div>
				    <!-- heading ho so ca nhan 8-->
				    <div id="collapsetotal81" class="panel-collapse collapse in">
				    	 <div class="panel-body" style="border: 0px">
						     <table   class="table table-striped table-bordered" > 
					            <thead class="fontstyle"> 
					              <tr> 
					                <th id="th" width="60%">Phần mềm</th> 
					                <th id="th" width="30%">Trình độ</th>
					              </tr> 
					            </thead> 
					            <tbody class="fontstyle text-center"> 
					             <?php if($software != null) {
					              $i = 0;
					              foreach ($software as $key) { 
					                ?>
					             <tr>
					              <td><?php echo $key['software']?></td>
					              <td><?php echo ($key['rate1'] !== "0")? $key['rate1'] : ""; ?></td>
					             </tr>
					             <?php $i++; } } ?>
					            </tbody> 
					          </table>
			      		</div>
				    </div>
				    <!-- body ho so ca nhan 8-->
				  </div>
				<!--   ket thuc ho so ca nhan 8-->
				  <div class="panel panel-default" style="border-radius: 0px;border: 0px">
				    <div class="panel-heading" style="border-radius: 0px; padding: 0px; background-color: #EFF5FB">
				     	<div style="text-align: right;">
				        Hồ sơ nội bộ &nbsp;
				        <a data-toggle="collapse" href="#collapsetotal82" style="font-size: 17;font-weight: 600;color: #999999; padding-right: 17px; padding-top: 8px;padding-left: 10px">
      						 <i class="fa fa-angle-right"></i></a>
				     	</div>
				    </div>
				    <!-- heading ho so noi bo 8-->
				    <div id="collapsetotal82" class="panel-collapse collapse in">
				      <div class="panel-body" style="border: 0px">				         
				          <table   class="table table-striped table-bordered" > 
					            <thead class="fontstyle"> 
					              <tr> 
					                <th id="th" width="60%">Phần mềm</th> 
					                <th id="th" width="30%">Trình độ</th>
					                <th id="th" width="10%"></th>
					              </tr> 
					            </thead> 
					            <tbody class="fontstyle text-center"> 
					             <tr>
					             	<td style="height: 37px"></td>
					             	<td></td>
					             	<td></td>
					         	</tr>
					            </tbody> 
					          </table>
				          <label class="floatright">Thêm Tin học <i class="fa fa-plus-circle color-blue" aria-hidden="true"></i></label>
				  	  </div>
				    </div>
				    <!-- body ho so noi bo 8-->
				  </div>
				  <!-- ket thuc ho so noi bo 8-->
				</div>
       		 </div>
       		 <!-- ket thuc id tab tin hoc-->
    	</div>
      </div>
    </div>
    <!-- ket thuc body cua tab 1 thong tin ung vien -->
  </div>
  
  	<!-- ket thuc tat ca tab 1 thong tin ung vien -->

  <div class="panel panel-default" style="border-radius: 0px;border: 0px">
    <div class="panel-heading" style="border-radius: 0px; padding: 0px; background-color: #5fade0"> 
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="float: right; font-size: 23;color: white; padding-right: 15px; padding-top: 8px">
       <i class="fa fa-angle-right"></i></a>
       <div style="padding-top: 10px; padding-left: 10px;border: 0px">
       	<label style="height: 25px;border-radius: 0px;font-size: 14px;padding-left: 6px; padding-right: 6px;padding-top: 6px; color: white; font-weight: 450">
       		Lịch sử hồ sơ
       	</label>
       </div>
      	
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body pad0">
      	<table style="width: 100%">
      		<tr >
      			<td class="table-history" style="width: 4%"><i class="fa fa-comment-o" ></i></td>
      			<td class="table-his-cont" style="width: 96%">
      				<img src="<?php echo base_url()?>public/image/2.jpg"  width="32px" height="32px" style="float:left; margin-right: 4px">
      				<div class="col-xs-11" style="padding-left: 0px;margin-top: -3px">
      					<label class="text-his fontArial" style="margin-bottom: 2px"><span style="font-weight: 600">Mai phương - Recruiter</span><span class="colorgray"> thêm Nhận xét/ Đánh giá 12 giờ trước</span></label>
      					<br>
      					<label class="colorgray fontArial" style="font-weight: 400; font-size: 13px;margin-bottom: 3px;">Hiện thị với tất cả mọi người</label>
      				</div>
      					<label class="fontArial text-his" >Hồ sơ tốt - 80 điểm</label>
      			</td>
      		</tr>
      		<tr >
      			<td class="table-history" style="width: 4%"><i class="fa fa-calendar"></i></td>
      			<td class="table-his-cont" style="width: 96%">
      				<div class="col-xs-11" style="padding-left: 0px;margin-top: -3px">
      					<label class="text-his fontArial" style="margin-bottom: 2px"><span style="font-weight: 600">Mai phương - Recruiter</span><span class="colorgray"> thêm Nhận xét/ Đánh giá 12 giờ trước</span></label>
      					<br>
      					<label class="colorgray fontArial" style="font-weight: 400; font-size: 13px;margin-bottom: 3px;">Hiện thị với tất cả mọi người</label>
      				</div>
      					
      			</td>
      		</tr>
      	</table>
      </div>
    </div>
  </div>
  <div class="panel panel-default" style="border-radius: 0px;border: 0px">
    <div class="panel-heading" style="border-radius: 0px; padding: 0px; background-color: #5fade0">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="float: right; font-size: 23;color: white; padding-right: 15px; padding-top: 8px">
       <i class="fa fa-angle-right"></i></a>
        <div style="padding-top: 10px; padding-left: 10px;border: 0px">
       <label style="height: 25px;border-radius: 0px;font-size: 14px;padding-left: 6px; padding-right: 6px;padding-top: 6px; color: white; font-weight: 450">
       		Nhân xét/  Đánh giá
       	</label>
       </div>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
      	<img src="<?php echo base_url()?>public/image/2.jpg" class="col-xs-1" style="padding-left: 9px;" width="32px" height="32px">
      	<div class="col-xs-11 width80 padding-lr0">
	     	<select class="text-cmt width30" style="margin-bottom: 9px;" >
	     		<option>Nhận xét/ Đánh giá...</option>
	     	</select>
	     	<textarea style="resize: none; width:100%; padding-left: 4px; padding-right: 4px;margin-bottom: 9px; border: 1px solid #E4E4E4;" rows="3" placeholder="Nhận xét" ></textarea>
	     	
	     	<input type="text" name="" class="text-cmt width30">
	     </div>
	     	
	     <div style="border: 0.5px solid #ccc; width: 100%;margin-top: 
	     150px;" class="padding-lr0"></div>
	     <input type="checkbox" name="" style="margin-top: 10px; margin-left: 10px"> Chia sẽ nhật ký/ Đánh giá này
	     <button type="submit" style="float: right;border: 0px;height: 30px; width: 70px; color: white;background-color: #5fade0;margin-top: 10px">Lưu</button>
	     
      </div>
    </div>
  </div>
</div>
	<!-- ket thuc 3 tab -->
</div>




<script type="text/javascript">
	$(document).ready(function(){
	
		$('#ngaysinh123').datetimepicker({
		   timepicker:false,
		   format:'d-m-Y',
		   defaultDate:'+1960/01/01',
		   maxDate:'+1960/01/01'
		});

		$('#ngaycap1').datetimepicker({
		  timepicker:false,
		  maxDate:'+1970/01/01',
		  format:'d-m-Y'
		});
	
		$('.js-example-basic-single').select2();
	});
	function comb_admin(obj){
	    var $id = obj;

	    $('.gicungdc').remove();
	    $('.gicungdc2').remove();
	      $.ajax({
	        url: '<?php echo base_url()?>admin/handling/selectCity',
	        type: 'POST',
	        dataType: 'JSON',
	        data: {id_city : $id},
	      })
	      .done(function(data) {
             for(var i in data)
             {   
                $('#chonqh-ad1').after('<option class="gicungdc" value="'+data[i].id_district+'">'+data[i].name+'</option>');
              }
          })
	      .fail(function() {
	        alert('thatbai');
	        console.log("error");
	      })
	  }
	  function comb_admin_qhpx(obj){
	    var $id = obj;
	    alert($id);
	    $('.gicungdc2').remove();
	      $.ajax({
	        url: '<?php echo base_url()?>admin/handling/selectDistrict',
	        type: 'POST',
	        dataType: 'JSON',
	        data: {id_district : $id},
	      })
	      .done(function(data) {
             for(var i in data)
             {   
                $('#chonpx-ad1').after('<option class="gicungdc2" value="'+data[i].id_ward+'">'+data[i].name+'</option>');
              }
          })
	      .fail(function() {
	        alert('thatbai');
	        console.log("error");
	      })
	  }
	  function comb_admin2(obj){
	    var $id = obj;

	    $('.gicungdc3').remove();
	    $('.gicungdc4').remove();
	      $.ajax({
	        url: '<?php echo base_url()?>admin/handling/selectCity',
	        type: 'POST',
	        dataType: 'JSON',
	        data: {id_city : $id},
	      })
	      .done(function(data) {
             for(var i in data)
             {   
                $('#chonqh-ad2').after('<option class="gicungdc3" value="'+data[i].id_district+'">'+data[i].name+'</option>');
              }
          })
	      .fail(function() {
	        alert('thatbai');
	        console.log("error");
	      })
	  }
	  function comb_admin_qhpx2(obj){
	    var $id = obj;
	    alert($id);
	    $('.gicungdc4').remove();
	      $.ajax({
	        url: '<?php echo base_url()?>admin/handling/selectDistrict',
	        type: 'POST',
	        dataType: 'JSON',
	        data: {id_district : $id},
	      })
	      .done(function(data) {
             for(var i in data)
             {   
                $('#chonpx-ad2').after('<option class="gicungdc4" value="'+data[i].id_ward+'">'+data[i].name+'</option>');
              }
          })
	      .fail(function() {
	        alert('thatbai');
	        console.log("error");
	      })
	  }
</script>