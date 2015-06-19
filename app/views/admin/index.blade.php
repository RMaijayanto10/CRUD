@extends("layout.home")

@section("content")
<div id="services"class="services">
	<div class="container">
		<div class="service-info">
			<h2>Welcome Admin</h2>
            <p class="border"></p>
			<p>If you have account admin, you can login anytime.</p>
		</div>
		<div class="services-grids">
			<div class="col-md-3 service-grid">
            <a href="{{URL::to("parking")}}"><button class="btn btn-danger">Back</button></a>
			</div>
			<div class="col-md-3 service-grid">
    		<input type="text" name="nama" placeholder="nama lengkap"/>
            </div>
			<div class="col-md-3 service-grid">
			<input type="password" name="nama" placeholder="password"/>
            </div>
			<div class="col-md-3 service-grid">
            <a href="{{URL::to("menuadmin")}}"><button class="btn btn-primary">Login</button></a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="footer">
	<p><strong>&copy;Copyright 2015</strong> <small> Muhammad Rifa'i</small></p>
</div>
@stop