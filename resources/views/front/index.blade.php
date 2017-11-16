@extends('front.templates.front')
	@section('main')
		<div  id="main">
			<div class="inner">
					
				<section class="tiles">
					<?php $i=0; ?>
					@foreach($articles as $article)	
						@if($i<=6)
							<?php $i++;?>
						@endif	
						<article class="style{{ $i }}">
							<span class="image">
								@foreach($article->images as $image)
									<img widht="250px" height="250px" src="{{ asset('images/articles/'.$image->name) }}" alt="" />
								@endforeach
							</span>
							<a href="{{ route('front.view.article',$article->id) }}">
								<h2>{{ $article->title }}</h2>
								<p><b>{{ $article->category->name }}</b></p>
								<div class="content">
									<p maxlength="10">Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>

									<b>Creado: {{ $article->created_at->diffForHumans() }}</b>
								</div>
							</a>
						</article>
					@endforeach

								
				</section>
				
			</div>

		</div>
		<div class="container-fluid">
			<div align="center">{{ $articles->links() }}</div>
		</div>
	@endsection