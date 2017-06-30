<?php

Route::get('posts', function () {
	$posts = App\Models\Post::all();
	return view('posts.index', compact('posts'));
});

Route::get('videos', function () {
	return App\Models\Video::all();
});

Route::get('tags', function () {
	return App\Models\Tag::all();
});