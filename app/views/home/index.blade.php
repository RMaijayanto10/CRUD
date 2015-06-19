@extends("layout.home")

@section("content")
<div class="banner">
	<div class="container">
		<div class="header">
			<div class="logo">
				<a href="{{URL::to("/")}}"><h1><strong>Parking</strong>School <h3>My Apps</h3></h1></a>
			</div>
			<div class="navigation">
				<span class="menu"><img src="images/icon.png" alt="" /></span>
				<ul class="nav1">
					<li><a class="scroll" href="{{URL::to("/")}}">Home</a></li>
					<li><a class="scroll" href="#about-us">About</a></li>
					<li><a class="scroll" href="#portfolio">Fasilities</a></li>
					<li><a href="{{URL::to("parking")}}">Login</a></li>
					<li><a class="scroll" href="#contact-us">Register</a></li>
				</ul>
				<!-- script for menu -->
				<script> 
					$( "span.menu" ).click(function() {
					$( "ul.nav1" ).slideToggle( 300, function() {
					 // Animation complete.
					});
					});
				</script>
				<!-- //script for menu -->
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="banner-info">
			<h1>YOUR MAKE FUN AND HAPPY WITH MY APPLICATION</h1>
		</div>
	</div>
</div>
<!-- //banner -->
<!-- about-us -->
<div id="about-us" class="about-us">
	<div class="container">
		<div class="about-info">
			<h2>ABOUT US</h2>
			<p>Jl. H. Sulaiman RT.011/02 No.42 Kel.Cipinang Melayu, Kec.Makasar Jakarta Timur, Telp.(021)85858585 kode pos : 13620</p>
		</div>
		<div class="about-grids">
			<div class="col-md-6 about-left">
				<img src="images/1.png" alt=" "/>
			</div>
			<div class="col-md-6 about-right">
				<h2>Biografi</h2>
				<div class="border"></div>
				<p>Nama&nbsp;: Muhammad rifai<br />kelas&nbsp;: 11 RPL SMK Negeri 10 Jakarta<br />TTL&nbsp;:Kasur,29-Februari-2015</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //about-us -->
<!-- portfolio -->
<div id="portfolio" class="portfolio">
	<div class="container">
		<div class="portfolio-info">
			<h2>Fasilitas</h2>
			<p>Fasilities of Parkir that is :</p>
		</div>
		<div class="portfolio-grids">
			<div class="col-md-4 portfolio-grid">
				<div class="portfolio-image">
					<div class="port-img">
							<img src="images/2.jpg" alt=" " />
					</div>
					<div class="desc">
						<a href="#small-dialog" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">Read More</a>
					</div>
					<div class="caption">
						<ul>
							<li>Fasilitas</li>
							<li><span class="right"><i>Toilet</i></span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 portfolio-grid">
				<div class="portfolio-image">
					<div class="port-img">
						<img src="images/3.jpg" alt=" " />
					</div>
					<div class="desc">
						<a href="#small-dialog1" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">Read More</a>
					</div>
					<div class="caption">
						<ul>
							<li>Fasilitas</li>
							<li><span class="left"><i>Parkiran</i></span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 portfolio-grid">
				<div class="portfolio-image">
					<div class="port-img">
						<img src="images/4.jpg" alt=" " />
					</div>
					<div class="desc">
						<a href="#small-dialog2" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">Read More</a>
					</div>
					<div class="caption">
						<ul>
							<li>Fasilitas</li>
							<li><span class="left"><i>Loby</i></span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="portfolio-grids">
			<div class="col-md-4 portfolio-grid">
				<div class="portfolio-image">
					<div class="port-img">
						<img src="images/5.jpg" alt=" " />
					</div>
					<div class="desc">
						<a href="#small-dialog3" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">Read More</a>
					</div>
					<div class="caption">
						<ul>
							<li>Fasilitas</li>
							<li><span class="right"><i>Taman</i></span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 portfolio-grid">
				<div class="portfolio-image">
					<div class="port-img">
						<img src="images/6.jpg" alt=" " />
					</div>
					<div class="desc">
						<a href="#small-dialog4" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">Read More</a>
					</div>
					<div class="caption">
						<ul>
							<li>PROJECT ONE</li>
							<li><span class="right"><i>Web Design</i></span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 portfolio-grid">
				<div class="portfolio-image">
					<div class="port-img">
						<img src="images/8.jpg" alt=" " />
					</div>
					<div class="desc">
						<a href="#small-dialog5" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">Read More</a>
					</div>
					<div class="caption">
						<ul>
							<li>PROJECT ONE</li>
							<li><span class="right"><i>Web Design</i></span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- pop-up-box -->
					<!-- script for pop-up-box -->
					<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!-- //script for pop-up-box -->
					<div id="small-dialog" class="mfp-hide">
						<div class="image-top">
							<img src="images/2.jpg" alt="" />
							<p>Toilet</p>
						</div>
					</div>
					<div id="small-dialog1" class="mfp-hide">
						<div class="image-top">
							<img src="images/3.jpg" alt="" />
							<p>Parkiran</p>
						</div>
					</div>
					<div id="small-dialog2" class="mfp-hide">
						<div class="image-top">
							<img src="images/4.jpg" alt="" />
							<p>Loby</p>
						</div>
					</div>
					<div id="small-dialog3" class="mfp-hide">
						<div class="image-top">
							<img src="images/5.jpg" alt="" />
							<p>Taman</p>
						</div>
					</div>
					<div id="small-dialog4" class="mfp-hide">
						<div class="image-top">
							<img src="images/6.jpg" alt="" />
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to book.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. </p>
						</div>
					</div>
					<div id="small-dialog5" class="mfp-hide">
						<div class="image-top">
							<img src="images/8.jpg" alt="" />
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to book.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. </p>
						</div>
					</div>
			<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
			</script>
		<!-- //pop-up-box -->
	</div>
</div>
<!-- //portfolio -->
<!-- contact-us -->
<div id="contact-us" class="contact-us">
	<div class="container">
		<div class="contact-info">
			<h2>Registration</h2>
			<p>create new account user, If you have account user, you can login anytime.</p>
		</div>
		<div class="contact-grids">
			<div class="col-md-6 contact-left">
				<h2>Parking</h2>
				<div class="border"></div>
				<p>Terima kasih telah menggunakan aplikasi kami, semoga aplikasi ini bermanfaat :)</p>
			</div>
			<div class="col-md-6 contact-right">
				<form method="post">
                    <br />
					<input type="text" placeholder="nama lengkap" name="nama"/>
                    <div class="alert alert-danger"> 
                    {{ $errors->first('nama') }}</div>
                    <input type="text" placeholder="password" name="pass"/>
                    <div class="alert alert-danger"> 
                    {{ $errors->first('pass') }}</div>
                    <input type="text" placeholder="no plat" name="noplat"/>
                    <div class="alert alert-danger"> 
                    {{ $errors->first('noplat') }}</div>
                    <input type="text" placeholder="alamat" name="alamat"/>
                    <div class="alert alert-danger"> 
                    {{ $errors->first('alamat') }}</div>
                    <input type="text" placeholder="no sim" name="nosim"/>
                    <div class="alert alert-danger"> 
                    {{ $errors->first('nosim') }}</div>
                    <small>Jenis SIM :</small>
                    <select name="jenissim">
                        <option value=""></option>
                        <option value="A">A
                        <option value="B">B
                        <option value="C">C     
                    </select>
                    <div class="alert alert-danger"> 
                    {{ $errors->first('jenissim') }}</div>
                    <textarea placeholder="telp" name="telp" ></textarea>
                    <div class="alert alert-danger"> 
                    {{ $errors->first('telp') }}</div><br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{{URL::to("Manageuser")}}"><button class="btn btn-primary">Registration</button></a>
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //contact-us -->
<!-- footer -->
<div class="footer">
	<p><strong>&copy;Copyright 2015</strong> <small> Muhammad Rifa'i</small></p>
</div>
@stop