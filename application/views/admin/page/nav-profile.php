 <div style="background-color: white; min-height: 932px">
 	
 			<label class="np-header">
 				<span style="color: #5fade0"><a href="<?php echo base_url()?>admin"><i class="fa fa-angle-left font-16"></i> Quay Lại</a></span>
 				&nbsp; &nbsp; &nbsp;
 				<span class="color-ccc">Chọn: </span>
 				<span class="color-blue">Tất cả | Bỏ chọn</span> 
 				<div class="floatright"> 
	 				<span class="color-ccc">Sắp xếp:</span>
	 				<span class="color-blue"> Tiềm năng <i class="fa fa-angle-right font-16"></i></span>
 				</div>
 			</label>
 		
 	<div class="margin-t5 dash-horizontal"></div>
 	<div class="row rowedit">
 		<div class="col-md-6">	
 			<label class="demhs">10 Hồ sơ</label>
 		</div>
 		<div class="col-md-6 hovbtn">
 			<button type="button" class="np-icon" ><i class="fa fa-print color-ccc" ></i></button>
 			<button type="button" class="np-icon margin-r7"><i class="fa fa-envelope-o color-ccc" ></i></button>
 			<button type="button" class="np-icon margin-r7" ><i class="fa fa-star color-ccc" ></i></button>
 			<button type="button" class="np-icon margin-r7" > <i class="fa fa-check-circle-o color-ccc" ></i></button>
 		</div>
 	</div>
 	<!-- 	<div class="row rowedit" style="padding-top: 5px"> -->
 		<?php

				 for($i = 0; $i < count($candidate); $i++)
				{
					?>
					<a onclick="loadiframe('<?php echo $candidate[$i]['candidateid']?>')" href="#" class="hov-a-if">
					<div class=" profile dash-horizontal pad-l0 pad-r5 hov-a-if" >

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
									<div class="row" >
										<div class="col-md-7">
											<label class="label-name color-black"><?php echo $candidate[$i]['name'] ?></label>
										</div>
										<div class="col-md-5">
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
<script type="text/javascript">
	function loadiframe(id)
	{

		document.getElementById('idf_profile').src = "<?php echo base_url()?>admin/handling/hosochitiet/"+id;
	}
</script>
