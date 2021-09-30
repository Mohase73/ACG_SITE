<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Config;

class NewsletterController extends Controller
{
    public $newsletter;
    public $listId = '0e5ec5601as';
    public function __construct(\Newsletter $newsletter)
    {
        $this->newsletter = $newsletter;
    }

    public function manageMailChimp()
    {
        return view('newsletter.newsletter');
    }

    public function subscribe(Request $request)
    {
    	$this->validate($request, [
	    	'email' => 'required|email',
        ]);

        try {


            $this->newsletter
            ->lists
            ->subscribe(
                $this->listId,
                ['email' => $request->input('email')]
            );

            return redirect()->back()->with('success','Email Souscrit avec succès');

        } catch (\Newsletter_List_AlreadySubscribed $e) {
            return redirect()->back()->with('error','Email n\'est pas souscrit');
        } catch (\Newsletter_Error $e) {
            return redirect()->back()->with('error','Erreur de votre email');
        }
    }

    public function sendCompaign(Request $request)
    {
    	$this->validate($request, [
	    	'subject' => 'required',
	    	'to_email' => 'required',
	    	'from_email' => 'required',
	    	'message' => 'required',
        ]);

        try {

	        $options = [
	        'list_id'   => $this->listId,
	        'subject' => $request->input('subject'),
	        'from_name' => $request->input('from_email'),
	        'from_email' => 'medias@africconsultinggroup.com',
	        'to_name' => $request->input('to_email')
	        ];

	        $content = [
	        'html' => $request->input('message'),
	        'text' => strip_tags($request->input('message'))
	        ];

	        $campaign = $this->newsletter->campaigns->create('regular', $options, $content);
	        $this->newsletter->campaigns->send($campaign['id']);

        	return redirect()->back()->with('success','Campagne de mail envoyée avec succès');

        } catch (Exception $e) {
        	return redirect()->back()->with('error','Erreur d\'email');
        }
    }
}
