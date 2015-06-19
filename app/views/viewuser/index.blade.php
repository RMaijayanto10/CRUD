@extends("layout.home")

@section("content")
<div id="about-us" class="about-us">
	<div class="container">
		<div class="about-info">
			<h2>VIEW USER</h2>
            <p class="border"></p>
		</div>
		<div class="contact-grids">
			<div class="col-md-6 contact-left">
                    <a href="{{URL::to("menuofficer")}}"><button class="btn btn-danger">Back</button></a>
                    <hr />
                    <h2>View Data User</h2><hr />  
            </div>
   <div class="row">
            <div class="panel-body">
                    <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nama User</th>
                                            <th>Telp</th>
                                            <th>Alamat</th>
                                            <th>No SIM</th>
                                            <th>Jenis SIM</th>
                                            <th>No Plat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $tampil)
                                    <tr class="gradeA">
                                            <td>{{ $tampil -> nama }}</td>
                                            <td>{{ $tampil -> telp }}</td>
                                            <td>{{ $tampil -> alamat }}</td>
                                            <td>{{ $tampil -> nosim }}</td>
                                            <td>{{ $tampil -> jenissim }}</td>
                                            <td>{{ $tampil -> noplat }}</td>
                                        </tr>
                                    @endforeach 
                                    </tbody>
                                </table>
            </div>
   </div>
  </div>
		</div>
<div class="clearfix"></div>
		</div>
	</div>
</div>
@stop