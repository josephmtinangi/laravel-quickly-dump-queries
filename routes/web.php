<?php

Route::get('posts', function () {
	return App\Models\Post::all();
});

Route::get('videos', function () {
	return App\Models\Video::all();
});

Route::get('tags', function () {
	return App\Models\Tag::all();
});