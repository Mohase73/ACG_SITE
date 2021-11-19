<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailchimpController extends Controller
{
    public function index(Request $request)
    {
        $listId = env('MAILCHIMP_LIST_ID');

        $mailchimp = new \Mailchimp(env('MAILCHIMP_KEY'));

        $campaign = $mailchimp->campaigns->create('regular', [
            'list_id' => $listId,
            'subject' => 'mail de teste',
            'from_email' => 'alain.guigma@africconsultinggroup.com',
            'from_name' => 'Alain',
            'to_name' => 'Alain Souscrition'

        ], [
            'html' => $request->input('content'),
            'text' => strip_tags($request->input('content'))
        ]);

        //Send campaign
        $mailchimp->campaigns->send($campaign['id']);

        dd('Campaign send successfully.');
    }
}
