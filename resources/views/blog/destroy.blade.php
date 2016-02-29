<head>
    <title>{{$blog->title}}</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="{{ asset( 'css/1-col-portfolio.css' ) }}" rel="stylesheet">    
    <link href="{{ asset( 'css/bootstrap.css' ) }}" rel="stylesheet">    
    <link href="{{ asset( 'css/bootstrap.min.css' ) }}" rel="stylesheet">   
    <link href="{{ asset( 'css/antoine.css' ) }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">    
 

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
	{!! Form::model($blog, array( 'route' => array( 'blog.delete', $blog->id, 'true' ), 'method' => 'GET' ) ) !!}
		<h4> Etes vous sûr de vouloir supprimer ? </h4>

		<button class="btn btn-danger btn-xs"><span class="glyphicon  glyphicon-trash"></span>Supprimer</button>
		<a href="{{ ( route( 'blog.index') ) }}"class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Annuler</a>
	</form>
</body>