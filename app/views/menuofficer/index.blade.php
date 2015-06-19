@extends("layout.home")

@section("content")
<div id="services"class="services">
	<div class="container">
        <div class="service-info">
			<h2>Menu Officer</h2>
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
			<a href="{{URL::to("officer")}}"><button class="btn btn-danger">Logout</button></a>
            <hr />
			</div>
			<div class="clearfix"></div>
		</div><br />
		<div class="services-grids">
			<div class="col-md-3 service-grid">
				<div class="service-image">
					<div class="paint"></div>
					<div class="ser-info">
						<h2>View Admin</h2>
					</div>
					<div class="strip"></div>
					<div class="ser-info">
						<p>Lorem ipsum dolor sit amet tetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
					</div>
					<div class="more text-center"><a href="{{URL::to("viewadmin")}}">Read More</a></div>
				</div>
			</div>
			<div class="col-md-3 service-grid">
				<div class="service-image">
					<div class="paint"></div>
					<div class="ser-info">
						<h2>View Officer</h2>
					</div>
					<div class="strip"></div>
					<div class="ser-info">
						<p>Lorem ipsum dolor sit amet tetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
					</div>
					<div class="more text-center"><a href="{{URL::to("viewofficer")}}">Read More</a></div>
				</div>
			</div>
			<div class="col-md-3 service-grid">
				<div class="service-image">
					<div class="paint"></div>
					<div class="ser-info">
						<h2>View User</h2>
					</div>
					<div class="strip"></div>
					<div class="ser-info">
						<p>Lorem ipsum dolor sit amet tetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
					</div>
					<div class="more text-center"><a href="{{URL::to("viewuser")}}">Read More</a></div>
				</div>
			</div>
			<div class="col-md-3 service-grid">
				<div class="service-image">
					<div class="paint"></div>
					<div class="ser-info">
						<h2>Input Keuangan</h2>
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
						<h2>Help Message (Admin)</h2>
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
						<h2>Content</h2>
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