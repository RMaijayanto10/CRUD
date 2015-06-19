@extends("layout.home")

@section("content")
<div id="services"class="services">
	<div class="container">
        <div class="service-info">
			<h2>Menu Admin</h2>
 		<p class="border"></p>
		</div>
              <div class="services-grids">
			<div class="col-md-3 service-grid">
			
			</div>
			<div class="col-md-3 service-grid">
			
			</div>
			<div class="col-md-3 service-grid">
				
			</div>
			<div class="col-md-3 service-grid">
			<a href="{{URL::to("admin")}}"><button class="btn btn-danger">Logout</button></a>
            <hr />
			</div>
			<div class="clearfix"></div>
		</div><br />
		<div class="services-grids">
			<div class="col-md-3 service-grid">
				<div class="service-image">
					<div class="paint"></div>
					<div class="ser-info">
						<h2>Manage Admin</h2>
					</div>
					<div class="strip"></div>
					<div class="ser-info">
						<p>Lorem ipsum dolor sit amet tetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
					</div>
					<div class="more text-center"><a href="{{URL::to("manageadmin")}}">Read More</a></div>
				</div>
			</div>
			<div class="col-md-3 service-grid">
				<div class="service-image">
					<div class="paint"></div>
					<div class="ser-info">
						<h2>Manage Officer</h2>
					</div>
					<div class="strip"></div>
					<div class="ser-info">
						<p>Lorem ipsum dolor sit amet tetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
					</div>
					<div class="more text-center"><a href="{{URL::to("manageofficer")}}">Read More</a></div>
				</div>
			</div>
			<div class="col-md-3 service-grid">
				<div class="service-image">
					<div class="paint"></div>
					<div class="ser-info">
						<h2>Manage User</h2>
					</div>
					<div class="strip"></div>
					<div class="ser-info">
						<p>Lorem ipsum dolor sit amet tetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
					</div>
					<div class="more text-center"><a href="{{URL::to("manageuser")}}">Read More</a></div>
				</div>
			</div>
			<div class="col-md-3 service-grid">
				<div class="service-image">
					<div class="paint"></div>
					<div class="ser-info">
						<h2>Manage Keuangan</h2>
					</div>
					<div class="strip"></div>
					<div class="ser-info">
						<p>Lorem ipsum dolor sit amet tetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
					</div>
					<div class="more text-center"><a href="#">Read More</a></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div><br />
        <div class="services-grids">
			<div class="col-md-3 service-grid">
				<div class="service-image">
					<div class="paint"></div>
					<div class="ser-info">
						<h2>Manage Application</h2>
					</div>
					<div class="strip"></div>
					<div class="ser-info">
						<p>Lorem ipsum dolor sit amet tetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
					</div>
					<div class="more text-center"><a href="#">Read More</a></div>
				</div>
			</div>
			<div class="col-md-3 service-grid">
				<div class="service-image">
					<div class="paint"></div>
					<div class="ser-info">
						<h2>Parkir Masuk</h2>
					</div>
					<div class="strip"></div>
					<div class="ser-info">
						<p>Lorem ipsum dolor sit amet tetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
					</div>
					<div class="more text-center"><a href="#">Read More</a></div>
				</div>
			</div>
			<div class="col-md-3 service-grid">
				<div class="service-image">
					<div class="paint"></div>
					<div class="ser-info">
						<h2>Parkir Keluar</h2>
					</div>
					<div class="strip"></div>
					<div class="ser-info">
						<p>Lorem ipsum dolor sit amet tetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
					</div>
					<div class="more text-center"><a href="#">Read More</a></div>
				</div>
			</div>
			<div class="col-md-3 service-grid">
				<div class="service-image">
					<div class="paint"></div>
					<div class="ser-info">
						<h2>Manage Message</h2>
					</div>
					<div class="strip"></div>
					<div class="ser-info">
						<p>Lorem ipsum dolor sit amet tetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
					</div>
					<div class="more text-center"><a href="#">Read More</a></div>
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