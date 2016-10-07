@extends('main.layout')

@section('content')

	<div class = "col-xs-6 col-xs-offset-3">
			 <form method="POST" action="{{ url('groups/add') }}" >

				<div class="form-group">
					<label for="exampleInputName2">Group Name</label>
					<input id="username" type="text" name="name" class="form-control" placeholder="Group name" required="required">
				</div>


									@if ($errors->has('name'))
                        <span class="help-block">
                       	 <strong>{{ $errors->first('name') }}</strong>
                        </span>
                     @endif


			<div class="form-group">
				<input id="submit_button" value="Create a new Group" type="submit" class="btn btn-default" >
			</div>

			{{ csrf_field() }}

	</form>

	</div>

@stop