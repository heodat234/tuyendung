 <div style="background-color: white; min-height: 932px">
 	<div class="row rowedit">
 		<div class="col-md-6">	
 			<label style="font-size: 13px;font-weight: 400; margin-left: 5px; padding-top: 15px;"><span style="color: #ccc">Chọn: </span><span style=" color: #5fade0">Tất cả | Bỏ chọn</span> &nbsp; &nbsp; &nbsp; &nbsp;   <span style="color: #ccc">Sắp xếp:</span><span style="color: #5fade0"> Tiềm năng ></span></label>
 		</div>
 		<div class="col-md-6 hovbtn">
 			<button type="button" style="float: right;height: 27px; width: 27px; font-size: 12px;margin-top: 7px;border: 0px;background-color: #f6f6f6;" ><i class="fa fa-print" style="color: #ccc"></i></button>
 			<button type="button" style="float: right;margin-right: 7px;height: 27px; width: 27px;margin-top: 7px; font-size: 12px;border: 0px;background-color: #f6f6f6;" ><i class="fa fa-envelope-o" style="color: #ccc"></i></button>
 			<button type="button" style="float: right;margin-right: 7px; height: 27px; width: 27px;margin-top: 7px; font-size: 12px;border: 0px;background-color: #f6f6f6;" ><i class="fa fa-star" style="color: #ccc"></i></button>
 			<button type="button" style="float: right;margin-right: 7px; height: 27px; width: 27px;margin-top: 7px; font-size: 12px;border: 0px;background-color: #f6f6f6;" > <i class="fa fa-check-circle-o" style="color: #ccc"></i></button>
 		</div>
 	</div>
 	<div style="border: 0.5px solid #ececec;margin-top: 5px;"></div>
 	<label style="font-size: 14px;font-weight: 400; color: #ccc;margin-left: 15px;padding-top: 8px">10 Hồ sơ</label>

 	<!-- 	<div class="row rowedit" style="padding-top: 5px"> -->
 		<?php for($i=0; $i <10;$i++)
 		{
 			?>
 			<div style="border: 0.5px solid #ececec; padding-left: 0px; padding-right: 5px">

 				<table style="margin-top: 5px; margin-bottom: 5px">
 					<tr>
 						<td style="vertical-align: top;padding: 2px">
 							<input type="checkbox">
 						</td>
 						<td style="vertical-align: top;padding: 2px">
 							<img src="<?php echo base_url()?>public/admin/images/2.jpg" style="border: 1.5px solid #ececec;" width="65px" height="65px">
 							<label style="font-size: 12px;font-weight: 400;margin-bottom: 0px; color: #5fade0; padding-top: 3px">80 điểm</label>
 							<label style="font-size: 12px;font-weight: 400;margin-bottom: 0px; color: #5fade0;padding-top: 1px">3 mẩu thư</label>
 							<label style="margin-top: -3px">
 								<i class="fa fa-bell" style="padding-right: 7px;font-size: 12px;padding-left: 2px;color: #ccc"></i>
 								<i class="fa fa-user" style="padding-right: 8px;font-size: 12px;color: #ccc"></i>
 								<i class="fa fa-clock-o" style="font-size: 14px;color: #ccc"></i>
 							</label>
 						</td>
 						<td style="vertical-align: top;padding: 2px">
 							<div class="row" >
 								<div class="col-md-7">
 									<label style="font-size: 15px; font-weight: 600;margin-bottom: 0px;">Nguyễn Huy Hoàng</label>
 								</div>
 								<div class="col-md-5">
 									<span style="float: right; margin-bottom: 0px;font-size: 14px;color: #5fade0">Web portal <i class="fa fa-star" style="color: orange"></i></span>
 								</div>
 							</div>
 							<label style="font-size: 14px;margin-bottom: 0px;font-weight: 400;margin-top: -5px; width: 100%">Chuyên viên tuyển dụng - VP BANK</label>
 							<label style="font-size: 13px;margin-bottom: 0px;font-weight: 350;color: #5fade0">Tuyển dụng, đào tạo</label>
 							<label style="font-size: 13px;margin-bottom: 0px;font-weight: 350;color: #ccc">Nam, 27 tuổi, 1m75, 70kg, 8 năm kinh nghiệm, mức lương 30 - 50 tr(VND), Cử nhân hành chính Nhân sự +3..., Tiếng Anh +2, MS OFfice +3,...</label>
 							<span style="font-size: 13px;color: #5fade0">#HighR</span>
 						</td>
 					</tr>
 				</table>

			</div>
		<?php } ?>

</div>

