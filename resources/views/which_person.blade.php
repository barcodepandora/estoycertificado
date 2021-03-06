
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">

<!-- 
SEO
-->	
	<title>Marketing Publico | De la idea a la acción</title>    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="content-language" content="es" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="Somos una agencia con una fuerte orientación de ejecución al Marketing de contenidos." />
	<meta name="keywords" content="marketing,publico,mktp,estrategia,campañas,publicitarias,diseño,branding,digital,btl" />

<!--    
    <link rel="alternate" href="http://www.undertrail.com/en" hreflang="x-default" />
    <link rel="alternate" href="http://www.undertrail.com/en" hreflang="en" />
    <link rel="alternate" href="http://www.undertrail.com/es" hreflang="es" />
    <meta property='og:title' content="Undertrail - La forma más fácil de viajar, compara pasajes de bus y avión en Colombia y Latinoamérica" />
    <meta property='og:description' content="Undertrail ofrece a los viajeros interesados en viajar por Colombia la posibilidad de buscar, comparar y comprar pasajes de bus y avión con una sola búsqueda" />
    <meta property='og:image' content="http://cdn.undertrail.com/img/facebook.png" />
    <meta property='og:type' content='website' />
    <meta property='og:url' content='http://www.undertrail.com' />
	<meta property="og:site_name" content="Laspartes.com: Todo para tu vehículo">    

-->	

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<style type="text/css">





.intro {
    height: 100%;
    padding-top: 180px;
    padding-bottom: 250px;
    text-align: center;
    background: #fff;
}





.contento {
    height: 100%;
    padding-top: 12px;
    text-align: center;
    background: #fff;
}





.texto {
    height: 100%;
    padding-top: 60px;
    text-align: center;
    background: #fff;
    font-family: 'Questrial', sans-serif, bold;
    font-size: 19px;
}





.nav.pull-right {
     float: right;
  }



.item{
    background: #333;    
    text-align: center;
    max-width: 100%;
    height: 750px !important;
}
.carousel{
    margin-top: 7px;
}
.bs-example{
	margin: 7px;
}  
</style>
</head>
<body>





<!-- 
BOOTSTRAP
-->	
	<link rel="stylesheet" href="http://www.projectrevista.com/api/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="http://www.projectrevista.com/api/bootstrap/css/bootstrap-responsive.css">
	<link rel="stylesheet" href="http://www.projectrevista.com/api/bootstrap/css/docs.css">
	<link rel="stylesheet" href="http://www.projectrevista.com/api/bootstrap/css/prettify.css">





<!-- 
JQUERY
-->	
    <script src="api/jquery/jquery.easing.min.js"></script>
    <script src="api/jquery/scrolling-nav.js"></script>







<!-- 
MENU
-->	
<?php include('template/menu.html'); ?>
    
    
    
    
    
    

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
						{!! Form::label('Escoja el idioma') !!}
	
						<select name='wendy'>
							<?php
							
								foreach( $languages as $language )
								{ ?>
									
									<option value="<?php echo $language->name; ?>"><?php echo $language->name; ?></option>
								<?php }
							?>
						</select><br/>

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




</body>
</html>                                		