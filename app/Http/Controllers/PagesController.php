<?php

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller {

	public function getIndex() {

		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout() {

		$first = 'Kevin';
		$last = 'Koch';

		$full = $first. " ". $last;
		$email = 'kkk@gmail.com';
		$data['email'] = $email;
		$data['fullname'] = $full;
		return view('pages.about')->withData($data);
	}

	public function getContact() {
		return view('pages.contact');

	}

	public function getPix() {
		return view('pix');
	}


	public function getPixcom() {
		return view('comment');
	}
}