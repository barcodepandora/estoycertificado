@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in!

					{!! Form::open(array('route' => 'which_age_go', 'class' => 'form')) !!}

						{!! Form::text('age', null, 
							array('required', 
								  'class'=>'form-control', 
								  'placeholder'=>'Encuentre personas dada su edad')) !!}
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
