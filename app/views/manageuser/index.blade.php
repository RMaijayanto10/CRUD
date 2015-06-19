@extends("layout.home")

@section("content")
<div id="about-us" class="about-us">
	<div class="container">
		<div class="about-info">
			<h2>MANAGE USER</h2>
            <p class="border"></p>
		</div>
		<div class="contact-grids">
			<div class="col-md-6 contact-left">
                    <a href="{{URL::to("menuadmin")}}"><button class="btn btn-danger">Back</button></a>
                    <hr />
                    <h2>Master Data User</h2><hr />  
            </div>
            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nama User</th>
                                            <th>Password</th>
                                            <th>No Plat</th>
                                            <th>Alamat</th>
                                            <th>No SIM</th>
                                            <th>Jenis SIM</th>
                                            <th>Telp</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $tampil)
                                    <tr class="gradeA">
                                            <td>{{ $tampil -> nama }}</td>
                                            <td>{{ $tampil -> pass }}</td>
                                            <td>{{ $tampil -> noplat }}</td>
                                            <td>{{ $tampil -> alamat }}</td>
                                            <td>{{ $tampil -> nosim }}</td>
                                            <td>{{ $tampil -> jenissim }}</td>
                                            <td>{{ $tampil -> telp }}</td>
                                            <td>  
                                            <a href="{{URL::to("Manageuser/" .$tampil->id. "/destroy")}}"><button class="btn btn-danger">Hapus</button>
                                            <a href="{{URL::to("Manageuser/edit/".$tampil->id) }}"><button class="btn btn-warning">Edit</button></a></td>
                                        </tr>
                                    @endforeach 
                                    </tbody>
                                </table>
            </div>
		</div>
			<div class="col-md-6 contact-right">
				<h3>Create New User</h3>
                <p class="border"></p>
                <form method="post">
					<input type="text" name="nama" placeholder="Nama lengkap" />
                    <div class="alert alert-danger"> 
                    {{ $errors->first('nama') }}</div>
					<input type="text" name="pass" placeholder="Password" />
                    <div class="alert alert-danger"> 
                    {{ $errors->first('pass') }}</div>
                    <input type="text" name="noplat" placeholder="No Plat" />
                    <div class="alert alert-danger"> 
                    {{ $errors->first('noplat') }}</div>
                    <input type="text" name="telp" placeholder="Telp" />
                    <div class="alert alert-danger"> 
                    {{ $errors->first('telp') }}</div>
                    <input type="text" name="nosim" placeholder="No Sim" />
                    <div class="alert alert-danger"> 
                    {{ $errors->first('nosim') }}</div>
                    <small>Jenis SIM :</small>
                    <select name="jenissim">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                    <div class="alert alert-danger"> 
                    {{ $errors->first('jenissim') }}</div>
					<textarea class="text" placeholder="alamat" name="alamat" ></textarea>
                    <div class="alert alert-danger"> 
                    {{ $errors->first('alamat') }}</div>
					<div align="right">
                    <a href="{{URL::to("Manageuser")}}"><button class="btn btn-primary">Create User</button></a>
                    </div>
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

@stop