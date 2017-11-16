@extends('front.templates.front')
	@section('main')
		<div  id="main">
			<div class="container">
				<h2>{{$article->title}}</h2>
				
				<div class="row">
					
					<div class="col-md-10"><hr>
						<img  width="100%" src="/images/articles/{{ $article->images[0]->name }}" class="img-responsive">{{!!$article->content!!}
					</div>
					
				<br><br>
					
				</div>
				<hr>
				<div class="row">
					<div class="col-md-10">
							<b>Creado por:</b> {{$article->user->name}}&nbsp; <br>
						<b>Categoria:</b> {{$article->category->name}}<br>
						<b>Etiquetas:</b> 
						@foreach($article->tags as $tag)
							{{$tag->name}}&nbsp;
						@endforeach
					</div>
				</div>
				<div>
					<h2>Comentarios</h2>
					<div id="disqus_thread"></div>
						<script>

						/**
						*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
						*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
						/*
						var disqus_config = function () {
						this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
						this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
						};
						*/
						(function() { // DON'T EDIT BELOW THIS LINE
						var d = document, s = d.createElement('script');
						s.src = 'https://blog-primero.disqus.com/embed.js';
						s.setAttribute('data-timestamp', +new Date());
						(d.head || d.body).appendChild(s);
						})();
						</script>
						<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
						                            
										</div>
									</div>
		</div>
		
	@endsection