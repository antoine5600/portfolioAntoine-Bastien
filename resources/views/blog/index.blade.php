@extends('layout.main')
@section('title')
    Blog
@endsection
<body>

<!-- Navigation -->
@include( 'layout.navbar' )

<!-- Page Content -->
<div class="container">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Veille technologique
                <small>Framework PHP</small>
            </h1>
            <a href="{{ route( 'blog.create') }}" class="btn btn-primary hide"><i class="fa fa-plus"></i> Article</a>
        </div>
    </div>
    <!-- /.row -->
<div class="row">
    <?php $i = 1; ?>
    @foreach ($blog as $post)
        <div class="row">
            <div class="col-md-6">
                <a href="#">
                    <img class="img-responsive" src="{{$post->image}}" alt="">
                </a>
            </div>
            <div class="col-md-3">
                <h3 class="post-title">{{$post->title}}</h3>
                <p class="post-date">{{$post->date}}</p>
                <p>{!!$post->description!!}</p>
                <a class="btn btn-primary" href="{{ route( 'blog.show', $post->id ) }}">Voir l'article <span class="glyphicon glyphicon-chevron-right"></span></a>
                <a href="{{ route( 'blog.edit', $post->id ) }}" class="hide"><i class="fa fa-pencil"></i></a>
                {!! Form::model($post, array('route' => array('blog.destroy', $post->id), 'method' => 'DELETE')) !!}
                    <a href ="{{ route( 'blog.destroy', $post->id ) }}"><button class="btn btn-danger btn-xs hide"><span class="glyphicon  glyphicon-trash"></span>Supprimer</button></a>
                </form>
            </div>
            @if ($i == 1)
                <div class="col-md-3 pull-right article-recent">
                    <div class="recent">Article récent</div>
                    <hr>
                    <?php $key = 0; ?>
                    @foreach ($blog as $post)
                        @if ($key <3)
                            <div class="title-recent">
                                <a class="title-recent" href="{{ route( 'blog.show', $post->id ) }}">{{$post->title}} </a>
                                <br>
                                <span class="date-recent">{{$post->date}}</span>
                            </div>
                        @endif
                        <?php $key++; ?>
                    @endforeach
                </div>
            @endif
            <?php $i++; ?>
        </div>
        <hr>
    @endforeach
</div>
<hr>
<!-- Footer -->
<footer>
</footer>
</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>
