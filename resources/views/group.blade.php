@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in!

					{!! Form::label('Este es el grupo ') !!}
					{!! Form::label($group->name) !!}
						<?php
						
							foreach( $members as $person )
							{ ?>
								
								<div>
									<a href="<?php echo 'which_person_id/' . $person->id . '">' . $person->name; ?></a>
								</div>
							<?php }
						?>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
