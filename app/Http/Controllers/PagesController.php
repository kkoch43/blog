<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Session;

use Illuminate\Support\Facades\Route;

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
	public function postContact(Request $request) {
	    $this->validate($request, [
	        'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:10',
        ]);
    $data = array(
        'email' => $request->email,
        'subject' => $request->subject,
        'bodyMessage' => $request->message
    );
	    Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('hello@kkoch.com');
            $message->subject($data['subject']);
        });

	    Session::flash('success', 'Your email has been sent!');

        return redirect()->route('home');
    }

	public function getPix() {
		return view('pix');
	}


	public function getPixcom() {
		return view('comment');
	}
}