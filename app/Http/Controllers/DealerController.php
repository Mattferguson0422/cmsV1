<?php

namespace App\Http\Controllers;

use App\Dealer;
use App\Promotion;
use Illuminate\Http\Request;

class DealerController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
			$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
			$dealers = Dealer::all();
			return view('dealers.index', compact('dealers'));
	}

	// Show a specific reminder
  public function show(Dealer $dealer)
  {
    return view('dealers.show', compact('dealer'));
  }

	// Edit Dealer
	public function edit(Dealer $dealer)
	{
			return view('dealers.edit', compact('promotion'));
	}

	// Post a Dealer
	public function store(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|unique:dealers'
		]);

		$dealer = new Dealer;

		$dealer->name = $request->name;
		// $dealer->street = $request->street;
		// $dealer->city = $request->city;
		// $dealer->state = $request->state;
		// $dealer->zip = $request->zip;
		// $dealer->phone = $request->phone;
		// $dealer->website = $request->website;
		// $dealer->facebook = $request->facebook;
		// $dealer->twitter = $request->twitter;
		// $dealer->logo = $request->logo;
		// $dealer->promotion_id = $request->promotion_id;

		$dealer->save();

		return redirect("/dealers/$dealer->id");
	}
	// Delete Dealer
	public function remove($id) {

		Dealer::findOrFail($id)->delete();

		return back();
	}

	// Update task
	public function update(Request $request, Dealer $dealer)
	{

		//$dealer->update($request->all());
		$dealer->name = $request->name;

		return redirect("/dealers");
	}
}
