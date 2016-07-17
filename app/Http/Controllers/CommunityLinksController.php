<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommunityLinkForm;
use App\CommunityLink;
use App\Channel;
use App\Exceptions\CommunityLinkAlreadySubmitted;

class CommunityLinksController extends Controller
{
	public function index(Channel $channel = null)
	{
		$links = CommunityLink::forChannel($channel)
			->where('approved', 1)
			->latest('updated_at')
			->paginate(25);

		$channels = Channel::orderBy('title', 'asc')->get();

		return view('community.index', compact('links', 'channels', 'channel'));
	}

	public function store(CommunityLinkForm $form)
	{
        try {
			$form->persist();
    
            if (auth()->user()->isTrusted()) {
                flash('Thanks for the contribution', 'success');
            } else {
                flash()->overlay('This contribution will be approved shortly.', 'Thanks!');
            }
        } catch (CommunityLinkAlreadySubmitted $exception) {
            flash()->overlay("We'll instead bump the timestamps", 'Link already submitted!');
        }

		return back();
	}
}
