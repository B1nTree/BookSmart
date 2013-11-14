<?php

// app/controllers/OfferController

class OfferController extends BaseController
{
	public function index()
	{
		// displays a listing of offers

		$offers = Offer::all();
		return View::make('index', compact('offers'));
	}

	public function detail(Offer $offer)
	{
		// displays the details of an offer
		return View::make('detail', compact('offer'));
	}

	public function create()
	{
		// show the create Offer form
		return View::make('create');
	}

	public function handleCreate()
	{
		// handle the POST data from the create Offer form
		$offer = new Offer;
		$offer->status 	             = "Pending";
		$offer->offeredDate			 = Input::get('offeredDate');
		$offer->guarantee 			 = Input::get('guarantee');
		$offer->bonus 				 = Input::get('bonus');
		$offer->technical 			 = Input::get('technical');
		$offer->mediaSupport		 = Input::get('mediaSupport');
		$offer->sellableCap 		 = Input::get('sellableCap');
		$offer->ageLimit 			 = Input::get('ageLimit');
		$offer->gaTicket1			 = Input::get('gaTicket1');
		$offer->gaTicket2			 = Input::get('gaTicket2');
		$offer->loadIn 				 = Input::get('loadIn');
		$offer->doors 				 = Input::get('doors');
		$offer->setTime 			 = Input::get('setTime');
		$offer->setLength 			 = Input::get('setLength');
		$offer->curfew 				 = Input::get('curfew');
		$offer->note 				 = Input::get('note');
		$offer->additionalTerms 	 = Input::get('additionalTerms');
		$offer->save();

		return Redirect::action('OfferController@index');
	}

	public function edit(Offer $offer)
	{
		// Show the edit Offer form
		//return dd($offer);
		return View::make('edit', compact('offer'));

	}

	public function handleEdit()
	{
		//Handle edit form submission
		$offer = Offer::findOrFail(get('id'));
		$offer->offeredDate = Input::get('offeredDate');
		$offer->guarantee = Input::get('guarantee');
		$offer->bonus = Input::get('bonus');
		$offer->technical = Input::get('technical');
		$offer->mediaSupport = Input::get('mediaSupport');
		$offer->sellableCap = Input::get('sellableCap');
		$offer->ageLimit = Input::get('ageLimit');
		$offer->gaTicket1 = Input::get('gaTicket1');
		$offer->gaTicket2 = Input::get('gaTicket2');
		$offer->loadIn = Input::get('loadIn');
		$offer->doors = Input::get('doors');
		$offer->setTime = Input::get('setTime');
		$offer->setLength = Input::get('setLength');
		$offer->curfew = Input::get('curfew');
		$offer->note = Input::get('note');
		$offer->additionalTerms = Input::get('additionalTerms');
		$offer->save();

		return Redirect::action('OfferController@index');


	}

	public function delete(Offer $offer)
	{
		// Show delete confirmation page
		return View::make('delete', compact('offer'));

	}

	public function handleDelete()
	{
		// Handle POST data for an Offer delete
		$id = Input::get('id');
		$offer = Offer::findOrFail($id);
		return View::make('delete', compact('offer'));
	}
}

?>