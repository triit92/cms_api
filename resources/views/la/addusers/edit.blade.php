@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/addusers') }}">Adduser</a> :
@endsection
@section("contentheader_description", $adduser->$view_col)
@section("section", "Addusers")
@section("section_url", url(config('laraadmin.adminRoute') . '/addusers'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Addusers Edit : ".$adduser->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($adduser, ['route' => [config('laraadmin.adminRoute') . '.addusers.update', $adduser->id ], 'method'=>'PUT', 'id' => 'adduser-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'userID')
					@la_input($module, 'birthday')
					@la_input($module, 'gender')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/addusers') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#adduser-edit-form").validate({
		
	});
});
</script>
@endpush
