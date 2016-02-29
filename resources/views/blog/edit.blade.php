<head>
    <title>Blog</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="{{ asset( 'css/1-col-portfolio.css' ) }}" rel="stylesheet">    
    <link href="{{ asset( 'css/bootstrap.css' ) }}" rel="stylesheet">    
    <link href="{{ asset( 'css/bootstrap.min.css' ) }}" rel="stylesheet">
    <link href="{{ asset( 'css/antoine.css' ) }}" rel="stylesheet"> 

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>   

</head>
<body>
	<!-- Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
		        <a class="navbar-brand" href="#">Antoine Le Falher</a>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		        <ul class="nav navbar-nav">
		            <li>
		                <a href="{{ route( 'blog.index' ) }}">Blog</a>
		            </li>
		            <li>
		                <a href="#">Contact</a>
		            </li>
		        </ul>
		    </div>
		    <!-- /.navbar-collapse -->
		</div>
	<!-- /.container -->
	</nav>
	<div class="edit-post">
	{!! Form::model($blog, array('route' => array('blog.update', $blog->id), 'method' => 'PUT')) !!}
		<div class="form-horizontal">
			<div class="form-group">
				{!! Form::label('Titre') !!}
				<div class="col-md-8 input-group">
					{!! Form::text( 'title', null, [ 'class' => 'form-control' , 'required' ] ) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('Description') !!}
				<div class="col-md-8 input-group">
					{!! Form::textarea( 'description', null, [ 'class' => 'form-control', 'required'] ) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('URL de l'."'".'image de description') !!}
				<div class="col-md-8 input-group">
					{!! Form::text( 'image', null, [ 'class' => 'form-control' , 'required' ]) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('Date') !!}
				<div class="col-md-8 input-group">
					{!! Form::date( 'date', null, [ 'class' => 'form-control' , 'required'] ) !!}
				</div>
			</div>
			<div class="form-group">
				{!! Form::label('Contenu') !!}
				<div class="col-md-8 input-group">
					{!! Form::textarea( 'content', null, [ 'class' => 'form-control', 'id' => 'summernote' , 'required'] ) !!}
				</div>
			</div>

			<div class="hr-line-dashed"></div>

			<div class="form-group">
		        <div class="col-md-8 col-sm-offset-4">
		            <button class="btn btn-primary" type="submit">Editer</button>
		        </div>
		    </div>
		</div>
	{!! Form::close() !!}
</div>
	<script>
    $(document).ready(function() {
        $('#summernote').summernote({
			height: 200,                 // set editor height
			minHeight: null,             // set minimum height of editor
			maxHeight: null,             // set maximum height of editor
		});
    });
  </script>
</body>