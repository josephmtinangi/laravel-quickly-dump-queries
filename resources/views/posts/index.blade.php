<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Posts</title>
</head>
<body>
	<h1>Posts</h1>

	<ul>
		@foreach($posts as $post)
			<li>{{ $post->name }}</li>
		@endforeach
	</ul>
</body>
</html>