<div class="col-md-4">
	<h3>Contribute a link</h3>

	<div class="panel panel-default">
		<div class="panel-body">
			<form action='/community' method='POST'>
				{{ csrf_field() }}

				<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}" >
					<label for="title">Title</label>
					<input type="text" class="form-control" id="title" name="title" placeholder="What is the title of your article?" required>
					{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
				</div>

				<div class="form-group {{ $errors->has('link') ? 'has-error' : ''}}" >
					<label for="link">Link</label>
					<input type="text" class="form-control" id="link" name='link' placeholder="What is the URL?" required>
					{!! $errors->first('link', '<span class="help-block">:message</span>') !!}
				</div>

				<div class="form-group">
					<button class="btn btn-primary">Contribute Link</button>
				</div>
			</form>
		</div>
	</div>
</div>