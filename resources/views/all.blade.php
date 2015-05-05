@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in!

					{!! Form::open(array('route' => 'new_group', 'class' => 'form')) !!}

						<?php
						
							foreach( $persons as $person )
							{ ?>
								
								<div>
									{!! Form::checkbox($person->name, $person->id, false) !!}
									<a href="<?php echo 'which_person_id/' . $person->id . '">' . $person->name; ?></a>
									<a href="<?php echo 'write_message/' . $person->id . '">Envia un mensaje'; ?></a>
								</div>
							<?php }
						?>

						{!! Form::text('group', null, 
							array('required', 
								  'class'=>'form-control', 
								  'placeholder'=>'Crea un grupo tu')) !!}
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
