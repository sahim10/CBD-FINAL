
<?php
include('header.php'); // Include the header.php file
?>
		
		<!-- 
		=============================================
				Theme Main Menu
		============================================== 
		--><div class="contact-us-section pt-150 lg-pt-80">
			<div class="container">
               

                    <div class="bg-wrapper light-bg mt-80 lg-mt-40">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="d-flex flex-column flex-lg-column-reverse">
									<div class="row">
										<!-- <div class="col-md-8 col-6 me-auto ms-auto"><img src="images/lazy.svg" data-src="images/assets/ils_07.svg" alt="" class="lazy-img me-auto ms-auto"></div> -->
                              
									</div>
									

									<!-- /.title-one -->
								</div>
                            </div>


<div class=" text-center">


                            <h2 class="d-flex justify-content-center"><img src="images/left.png" height="50px"> REPLACEMENT BLOOD<img src="images/right.png" height="50px"> </h2>
<p  style="color:red">மாற்று இரத்த தேவைக்கு</p>
<p>அட்டவணை நிரப்பவும்</p>
</div>
		                                <div class="form-style-one ps-xl-5">
                                    <form method="post">
                                        <div class="messages"></div>
                                        <div class="row controls">
                                            <div class="col-12">
                                                <div class="input-group-meta form-group mb-30">
                                                    <label >Name*</label>
                                                    <input type="text" name="fname" placeholder="பெயர்" required="required" data-error="Name is required." id='name'>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group-meta form-group mb-40">
                                                    <label >Blood Group</label>
                                                    <input type="text"  name="group" placeholder="இரத்தக் குழு தேவை" required="required" id="bloodgroup">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group-meta form-group mb-40">
                                                    <label >How Much Unit Need Blood?</label>
                                                    <input type="text"  name="unit" placeholder="எவ்வளவு யூனிட் ரத்தம் தேவை" required="required" id="unit">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="col-12">
                                                <div class="input-group-meta form-group mb-40">
                                                    <label >which hospital?</label>
                                                    <input type="text"  name="hos" placeholder="எந்த மருத்துவமனை" required="required" id="hospital">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="col-12">
                                                <div class="input-group-meta form-group mb-40">
                                                    <label >Which Blood Bank?</label>
                                                    <input type="text"  name="bank"  id="bank" placeholder="எந்த இரத்த வங்கி" required="required" >
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="col-12">
                                                <div class="input-group-meta form-group mb-40">
                                                    <label >Patient/Attender</label>
                                                    <input type="text"  name="phone" id="phone" placeholder="தொலைபேசி எண்" required="required" >
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                           
                                            </div>
                                            <div class="col-12"><button class="btn-four tran3s w-100 d-block" id="submit" value="submit" name="submit">Submit</button></div>
                                        </div>
                                    </form>
                                </div> <!-- /.form-style-one -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
		</div>
		<!-- ./contact-us-section -->






      












		<!-- Optional JavaScript _____________________________  -->

		<!-- jQuery first, then Bootstrap JS -->
		<!-- jQuery -->
		<script src="vendor/jquery.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- WOW js -->
		<script src="vendor/wow/wow.min.js"></script>
		<!-- Slick Slider -->
		<script src="vendor/slick/slick.min.js"></script>
		<!-- Fancybox -->
		<script src="vendor/fancybox/dist/jquery.fancybox.min.js"></script>
		<!-- Lazy -->
		<script src="vendor/jquery.lazy.min.js"></script>
		<!-- js Counter -->
		<script src="vendor/jquery.counterup.min.js"></script>
		<script src="vendor/jquery.waypoints.min.js"></script>
		
		<!-- validator js -->
		<script src="vendor/validator.js"></script>

		<!-- Theme js -->
		<script src="js/theme.js"></script>
	</div> <!-- /.main-page-wrapper -->
</body>
</html>
<?php

if(isset($_POST['submit'])){
          $ins=mysqli_query($conn,"INSERT INTO r_form(name,blood_group,unit_blood,hospital,blood_bank,phone) values('".$_POST['fname']."','".$_POST['group']."','".$_POST['unit']."','".$_POST['hos']."','".$_POST['bank']."','".$_POST['phone']."')");  
          if($ins){
            ?>
            <script>alert("Thank You For submission")</script>
            <?php
          }
      }  
?>

<?php
include('footer.php'); // Include the header.php file
?>
