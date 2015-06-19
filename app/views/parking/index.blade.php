@extends("layout.home")

@section("content")
<div id="services"class="services">
	<div class="container">
		<div class="service-info">
			<h2>Welcome Admin, Officer, and User</h2>
            <p class="border"></p>
			<p>If you have account admin or officer, you can login anytime.</p>
		</div>
		<div class="services-grids">
			<div class="col-md-3 service-grid">
            <a href="{{URL::to("home")}}"><button class="btn btn-danger">Home</button></a>
			</div>
			<div class="col-md-3 service-grid">
				<div class="service-image">
					<div class="paint"></div>
					<div class="ser-info">
						<h2>ADMIN</h2>
					</div>
					<div class="strip"></div>
					<div class="ser-info">
						<p>Login with account admin, don't use be side account admin, please use account admin.</p>
					</div>
					<div class="more text-center"><a href="{{URL::to("/admin")}}">Login</a></div>
				</div>
    		</div>
			<div class="col-md-3 service-grid">
				<div class="service-image">
					<div class="paint"></div>
					<div class="ser-info">
						<h2>OFFICER</h2>
					</div>
					<div class="strip"></div>
					<div class="ser-info">
						<p>Login with account officer, don't use be side account officer, please use account officer.</p>
					</div>
					<div class="more text-center"><a href="{{URL::to("officer")}}">Login</a></div>
				</div>
			</div>
			<div class="col-md-3 service-grid">
                    <div class="service-image">
					<div class="paint"></div>
					<div class="ser-info">
						<h2>USER</h2>
					</div>
					<div class="strip"></div>
					<div class="ser-info">
						<p>Login with account user, don't use be side account user, please use account user.</p>
					</div>
					<div class="more text-center"><a href="{{URL::to("user")}}">Login</a></div>
				</div>
            </div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="footer">
	<p><strong>&copy;Copyright 2015</strong> <small> Muhammad Rifa'i</small></p>
</div>
@stop