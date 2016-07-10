@extends('layouts.app')

@section('content')
	<div class="container">

		<div class="row">
			<div class="col-md-8">
				<h1>Community</h1>

				<ul class="Links">
				</ul>

				@foreach ($links as $link)
					<li class="Links__link">
						<a href="{{ $link->link }}" target="_blank">
							{{ $link->title}}
						</a>

						<small>
							Contributed by {{ $link->creator->name }} {{ $link->updated_at->diffForHumans() }}
						</small>
					</li>
				@endforeach
			</div>

			<div class="col-md-4">
				<h3>Contribute a link</h3>

				<div class="panel panel-default">
					<div class="panel-body">
						<form action='/community' method='POST'>
							{{ csrf_field() }}

							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" class="form-control" id="title" name="title" placeholder="What is the title of your article?">
							</div>

							<div class="form-group">
								<label for="link">Link</label>
								<input type="text" class="form-control" id="link" name='link' placeholder="What is the URL?">
							</div>

							<div class="form-group">
								<button class="btn btn-primary">Contribute Link</button>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
@stop