@extends("layout.home")

@section("content")
<div id="about-us" class="about-us">
	<div class="container">
		<div class="about-info">
			<h2>MANAGE ADMIN</h2>
            <p class="border"></p>
		</div>
		<div class="contact-grids">
			<div class="col-md-6 contact-right">
				<h3>Create New Admin</h3>
                <p class="border"></p>
                {{ Form::model($manageadminsbyid, array('route' => array('Manageadmin.update', $manageadminsbyid->id))) }}
                            <div class="form-group">
                                {{ Form::label('nama', 'Nama Lengkap :') }}<br />
                                {{ Form::text('nama', null, array('class' => 'text','placeholder'=>'Nama Lengkap')) }}
                                {{ '<div>'.$errors->first('nama').'</div>' }}
                                
                                {{ Form::label('pass', 'Password :') }}<br />
                                {{ Form::text('pass', null, array('class' => 'text','placeholder'=>'Password')) }}
                                {{ '<div>'.$errors->first('pass').'</div>' }}
                                
                                {{ Form::label('telp', 'Telp :') }}<br />
                                {{ Form::text('telp', null, array('class' => 'text','placeholder'=>'Telp')) }}
                                {{ '<div>'.$errors->first('telp').'</div>' }}
                                
                                {{ Form::label('alamat', 'Alamat :') }}<br />
                                {{ Form::text('alamat', null, array('class' => 'text','placeholder'=>'Alamat')) }}
                                {{ '<div>'.$errors->first('alamat').'</div>' }}
                                
                            </div>
                            <div align="right">
                            {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
                            </div>
                        {{ Form::close() }}
			</div>
		</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
@stop