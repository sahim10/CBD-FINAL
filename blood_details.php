<?php
include('header.php'); // Include the header.php file
?>
<style>
	.grid-blood{
		display: grid;
    grid-template-columns: 70% 30%;
	}
	.grid-blood2{
		display: grid;
    grid-template-columns: 70% 30%;
	}
	.grid-blood1{
		display: grid;
    grid-template-columns: auto auto;
	}



/* CSS */
.button-18 {
  align-items: center;
  background-color: #164476;
  border: 0;
  border-radius: 100px;
  box-sizing: border-box;
  color: #ffffff;
  cursor: pointer;
  display: inline-flex;
  font-family: -apple-system, system-ui, system-ui, "Segoe UI", Roboto, "Helvetica Neue", "Fira Sans", Ubuntu, Oxygen, "Oxygen Sans", Cantarell, "Droid Sans", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Lucida Grande", Helvetica, Arial, sans-serif;
  font-size: 16px;
  font-weight: 600;
  justify-content: center;
  line-height: 20px;
  max-width: 480px;
  min-height: 40px;
  min-width: 0px;
  overflow: hidden;
  padding: 0px;
  padding-left: 20px;
  padding-right: 20px;
  text-align: center;
  touch-action: manipulation;
  transition: background-color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, box-shadow 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s;
  user-select: none;
  -webkit-user-select: none;
  vertical-align: middle;
}

.button-18:hover,
.button-18:focus { 
  background-color: #16437E;
  color: #ffffff;
}

.button-18:active {
  background: #09223b;
  color: rgb(255, 255, 255, .7);
}

.button-18:disabled { 
  cursor: not-allowed;
  background: rgba(0, 0, 0, .08);
  color: rgba(0, 0, 0, .3);
}
.head-blood-img{
	height: 77px;
    width: 77px;
}
.d-flex-head{display: flex;
    justify-content: center;
    align-items: center;}
	</style>

	<div class="container  mt-150">
		<h2 class="text-center d-flex-head"><img src="images/left - blood.png"class="head-blood-img" alt="">Blood and Blood Types<img src="images/right-blood.png" class="head-blood-img" alt=""></h2>
		<h5 class="text-danger text-center">What You Need to Know About The Different Blood Types</h5>
		<br>
		<h4 class="bold">Every person needs a healthy supply of blood. But, not every person’s blood is exactly the same.</h4>
	   <p>Human blood falls into four different blood groups: A, B, AB and O. Your blood also has what is known as an Rh factor: It either contains a certain protein or it doesn’t. (This is the positive [+] or negative [-] after your blood type.) The possible combinations create eight different blood types: A+, A-, B+, B-, AB+, AB-, O+ and O-.</p>
	<p>You don’t need to know your blood type to donate blood. Donating blood is a great way to find out your blood type - we’ll tell you after you donate. And, whatever your type, every donor is needed and every donation transforms lives—including your own!</p>
	 <p>Click or tap on each blood type below to learn the blood types with which it’s compatible, and the type of donation that is recommended for people with each blood type.</p>
</div>
<div class="container mt-50">
    <div class="grid-blood">
        <div class="left grid-blood1">
            <div class="left-blood">
			<h2>A+</h2>

<p><small><strong>32%</strong> of the population have this blood type.</small></p>

<ul class="checkmarks">
	<li><small>Blood types compatible with red blood cell donation: A+ AB+</small></li>
	<li><small>Plasma donation compatible with blood types: O+ O- A+ A-</small></li>
	<li><small>Recommended donation types: whole blood, platelets</small></li>
</ul>

<p><a class="button-18" role="button">ReadMore</a></p>

            </div>
            <div class="right-blood-img">
			<h2>A-</h2>

<p><small><strong>6%</strong> of the population have this blood type.</small></p>

<ul class="checkmarks">
	<li><small>Blood types compatible with red blood cell donation: A+ AB- AB+ AB-</small></li>
	<li><small>Plasma donation compatible with blood types: O+ O-&nbsp; A+ A-</small></li>
	<li><small>Recommended donation types: whole blood, Power Red</small></li>
</ul>

<p><a class="button-18" role="button">ReadMore</a></p>
            </div>
        </div>
        <div class="right-blood-img">
		<img src="images/a.png" alt="">
        </div>
    </div>

<br><br>
	<div class="grid-blood1">
	<div class="right-blood-img">
		<img src="images/b.png" alt="">
        </div>
        <div class="left grid-blood1">
            <div class="left-blood">
			<h2>B+</h2>

<p><small><strong>11%</strong> of the population have this blood type.</small></p>

<ul class="checkmarks">
	<li><small>Blood types compatible with red blood cell donation: B+ AB+</small></li>
	<li><small>Plasma donation compatible with blood types: O+ O- B+ B-</small></li>
	<li><small>Recommended donation types: whole blood, platelets</small></li>
</ul>

<p><a class="button-18" role="button">ReadMore</a></p>


            </div>
            <div class="right-blood-img">
			<h2>B-</h2>

<p><small><strong>2%</strong> of the population have this blood type.</small></p>

<ul class="checkmarks">
	<li><small>Blood types compatible with red blood cell donation: B+ B- AB+ AB-</small></li>
	<li><small>Plasma donation compatible with blood types: O+ O- B+ B-</small></li>
	<li><small>Recommended donation types: whole blood, Power Red</small></li>
</ul>

<p><a class="button-18" role="button">ReadMore</a></p>

            </div>
        </div>
      
    </div>
	<br><br>
	<div class="grid-blood">
        <div class="left grid-blood1">
            <div class="left-blood">
			<h2>AB+</h2>

<p><small><strong>4%</strong> of the population have this blood type.</small></p>

<ul class="checkmarks">
	<li><small>Blood types compatible with red blood cell donation: AB+</small></li>
	<li><small>Plasma donation compatible with blood types: all blood types</small></li>
	<li><small>Recommended donation types: whole blood, platelets, plasma</small></li>
</ul>

<p><a class="button-18" role="button">ReadMore</a></p>


            </div>
            <div class="right-blood-img">
			<h2>AB-</h2>

<p><small><strong>1%</strong> of the population have this blood type.</small></p>

<ul class="checkmarks">
	<li><small>Blood types compatible with red blood cell donation: AB+ AB-</small></li>
	<li><small>Plasma donation compatible with blood types: all blood types</small></li>
	<li><small>Recommended donation types: whole blood, platelets, plasma</small></li>
</ul>

<p><a class="button-18" role="button">ReadMore</a></p>

            </div>
        </div>
        <div class="right-blood-img">
		<img src="images/ab.png" alt="">
        </div>
    </div>
	<br><br>
	<div class="grid-blood1">
	<div class="right-blood-img">
		<img src="images/o.png" alt="">
        </div>
        <div class="left grid-blood1">
            <div class="left-blood">
			<h2>O+</h2>

<p><small><strong>39%</strong> of the population have this blood type.</small></p>

<ul class="checkmarks">
	<li><small>Blood types compatible with red blood cell donation: O+ A+ B+ AB+</small></li>
	<li><small>Plasma donation compatible with blood types: O+ O-</small></li>
	<li><small>Recommended donation types: whole blood, Power Red</small></li>
</ul>

<p><a class="button-18" role="button">ReadMore</a></p>

            </div>
			
            <div class="right-blood-img">
			<h2>O-</h2>

<p><small><strong>7%</strong> of the population have this blood type.</small></p>

<ul class="checkmarks">
	<li><small>Blood types compatible with red blood cell donation: all blood types</small></li>
	<li><small>Plasma donation compatible with blood types: O+ O-</small></li>
	<li><small>Recommended donation types: whole blood, Power Red</small></li>
</ul>

<p><a class="button-18" role="button">ReadMore</a></p>
            </div>
        </div>
       
    </div>
</div>
<br>
<div class="container text-center d-flex justify-content-center">
<!-- <img src="images/ban.png"  alt=""> -->
</div>




<?php
include('footer.php'); // Include the header.php file
?>





	<!--
		=====================================================
			Footer Three
		=====================================================
		-->
	

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