@extends("layout.home")

@section("content")
<div id="about-us" class="about-us">
	<div class="container">
		<div class="about-info">
			<h2>MANAGE ADMIN</h2>
            <p class="border"></p>
		</div>
		<div class="contact-grids">
			<div class="col-md-6 contact-left">
                    <a href="{{URL::to("menuadmin")}}"><button class="btn btn-danger">Back</button></a>
                    <hr />
                    <h2>Master Data Admin</h2><hr />  
            </div>
   <div class="row">
            <div class="panel-body">
                    <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nama Admin</th>
                                            <th>Password</th>
                                            <th>Telp</th>
                                            <th>Alamat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $tampil)
                                    <tr class="gradeA">
                                            <td>{{ $tampil -> nama }}</td>
                                            <td>{{ $tampil -> pass }}</td>
                                            <td>{{ $tampil -> telp }}</td>
                                            <td>{{ $tampil -> alamat }}</td>
                                            <td>  
                                            <a href="{{URL::to("Manageadmin/" .$tampil->id. "/destroy")}}"><button class="btn btn-danger">Hapus</button>
                                            <a href="{{URL::to("Manageadmin/edit/".$tampil->id) }}"><button class="btn btn-warning">Edit</button></a></td>
                                        </tr>
                                    @endforeach 
                                    </tbody>
                                </table>
            </div>
   </div>
  </div>
		</div>
			<div class="col-md-6 contact-right">
				<h3>Create New Admin</h3>
                <p class="border"></p>
                <form method="post">
					<input type="text" name="nama" placeholder="Nama lengkap" />
                    <div class="alert alert-danger"> 
                    {{ $errors->first('nama') }}</div>
					<input type="text" name="pass" placeholder="Password" />
                    <div class="alert alert-danger"> 
                    {{ $errors->first('pass') }}</div>
					<textarea placeholder="telp" name="telp" ></textarea>
                    <div class="alert alert-danger"> 
                    {{ $errors->first('telp') }}</div>
					<textarea class="text" placeholder="alamat" name="alamat" ></textarea>
                    <div class="alert alert-danger"> 
                    {{ $errors->first('alamat') }}</div>
					<div align="right">
                    <a href="{{URL::to("Manageadmin")}}"><button class="btn btn-primary">Create Admin</button></a>
                    </div>
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
@stop