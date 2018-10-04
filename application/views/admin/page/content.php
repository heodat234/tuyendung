<div class="content-wrapper">
    <section class="content">
      <div class="row">
<section class="col-lg-3 connectedSortable" >
     	<?php 
   			 echo isset($nav)? $nav : "";
   		 ?>
</section>
<section class="col-lg-9 connectedSortable padding-lr0">
    <div style="background-color: white; min-height: 932px">
			<div class="row rowedit">
				<div class="col-md-6">	
					<label class="header-content"><span class="color-ccc">Chọn: </span><span class="color-blue">Tất cả | Bỏ chọn</span> &nbsp; &nbsp; &nbsp; &nbsp;   <span class="color-ccc">Sắp xếp:</span><span class="color-blue"> Tiềm năng ></span></label>
				</div>
				<div class="col-md-6 hovbtn">
					<button type="button" class="btn-icon-header" ><i class="fa fa-print color-ccc" ></i></button>
					<button type="button" class="btn-icon-header margin-r7" ><i class="fa fa-envelope-o color-ccc" ></i></button>
					<button type="button" class="btn-icon-header margin-r7" ><i class="fa fa-star color-ccc"></i></button>
					<button type="button" class="btn-icon-header margin-r7" > <i class="fa fa-check-circle-o color-ccc"></i>
					</button>
				</div>
			</div>
			<div class="dash-horizontal"></div>
				<label class="demhs">10 Hồ sơ</label>

			<div class="row rowedit pad-t5" >
				<?php

				 for($i = 0; $i < count($candidate); $i++)
				{
					?>
					<a href="<?php echo base_url()?>admin/handling/profile/<?php echo $candidate[$i]['candidateid']?>" class="hover-profile">
					<div class="col-md-6 profile dash-horizontal pad-l0 pad-r5 min-h152">

						<table class="margin-t5 margin-b5">
							<tr>
								<td class="td-cot1">
									<input type="checkbox">
								</td>
								<td class="td-cot2">
									<img src="<?php echo base_url()?>public/image/<?php echo $candidate[$i]['imagelink']?>" class="frameimage" width="70px" height="70px">
									<label class="label-td pad-t3" >80 điểm</label>
									<label class="label-td pad-t1" >3 mẩu thư</label>
									<label class="margin-t-3">
										<i class="fa fa-bell icon-label" style="padding-left: 2px;"></i>
										<i class="fa fa-user icon-label"></i>
										<i class="fa fa-clock-o" style="font-size: 14px;color: #ccc"></i>
									</label>
								</td>
								<td class="td-cot3">
									<div class="row width100 margin-l0" >
										<div class="col-md-7 padding-lr0">
											<label class="label-name color-black"><?php echo $candidate[$i]['name'] ?></label>
										</div>
										<div class="col-md-5 padding-lr0 ">
											<span class="webportal">Web portal <i class="fa fa-star color-orange"></i></span>
										</div>
									</div>
									<label class="tuyendung-label1 color-black">Chuyên viên tuyển dụng - VP BANK</label>
									<label class="tuyendung-label2">Tuyển dụng, đào tạo</label>
									<label class="tuyendung-label3">
										<?php echo ($candidate[$i]['gender'] == "M")? "Nam" : "Nữ"?>, <?php echo getAge($candidate[$i]['dateofbirth']);?> tuổi, <?php echo ($candidate[$i]['height'] == 0)? "" : $candidate[$i]['height']."cm, ";?><?php echo ($candidate[$i]['weight'] == 0)? "" : $candidate[$i]['weight']."kg, ";?><?php if($candidate[$i]['dateto'] != null && $candidate[$i]['datefrom'] != null){    
							                  $secs = strtotime($candidate[$i]['dateto']) - strtotime($candidate[$i]['datefrom']);
							                  $days = $secs / 86400;
							                  $month = $days/30;
							                  echo ($month < 1)? "1 tháng kinh nghiệm, " : round($month)." tháng kinh nghiệm, ";
							              }              
							              ?><?php echo ($candidate[$i]['desirebenefit'] == 0)? "" : number_format($candidate[$i]['desirebenefit'])." VND, "?><?php echo ($candidate[$i]['certificate'] == "")? "" :$candidate[$i]['certificate'].", ";?><?php 
							              	  if($candidate[$i]['countlanguage'] == 0) echo "";
							              	  else if($candidate[$i]['countlanguage'] == 1) echo $candidate[$i]['language'].", ";
							              	  else echo $candidate[$i]['language']."+".($candidate[$i]['countlanguage']-1).", ";
							              	  ?><?php
							              	  if($candidate[$i]['countsoftware'] == 0) echo "";
							              	  else if($candidate[$i]['countsoftware'] == 1) echo $candidate[$i]['software'].", ";
							              	  else echo $candidate[$i]['software']."+".($candidate[$i]['countsoftware']-1).", ";
							                  ?>...
									</label>

									<span class="highr">#HighR</span>
								</td>
							</tr>
						</table>

					</div>
				</a>
				<?php } ?>
			
			</div>
			<button type="button" class="btn-themhoso" > Thêm Hồ Sơ</button>
		</div>    	
</section>	

  </div>
    </section>
  </div>

 