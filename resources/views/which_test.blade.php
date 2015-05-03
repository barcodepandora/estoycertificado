@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in!

					{!! Form::open(array('route' => 'which_person_go', 'class' => 'form')) !!}

						{!! Form::text('name', null, 
							array('required', 
								  'class'=>'form-control', 
								  'placeholder'=>'Encuentre usuarios dado un nombre')) !!}
					<div class="form-group">
						{!! Form::submit('Go', 
						  array('class'=>'btn btn-primary')) !!}
					</div>
					{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
