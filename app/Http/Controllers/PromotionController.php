<?php

namespace App\Http\Controllers;

use App\Promotion;
use App\Dealer;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class PromotionController extends Controller
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
			$promotions = Promotion::all();
			return view('promotions.index', compact('promotions'));
	}

	// Show a specific reminder
  public function show(Promotion $promotion)
  {
		$dealers = Dealer::all();

    return view('promotions.show', compact('promotion', 'dealers'));
  }

	// Edit Promotion
  // public function edit(Promotion $promotion)
  // {
  //     return view('promotions.edit', compact('promotion'));
  // }

  // Post a Promotion
  public function store(Request $request)
  {
    $this->validate($request, [
      'title' => 'required|unique:promotions'
    ]);

    $promotion = new Promotion;

    $promotion->title = $request->title;

    $promotion->save();

    return redirect("/promotions/$promotion->id");
  }
  // Delete Promotion
  public function remove($id) {

    Promotion::findOrFail($id)->delete();

    return back();
	}

	// Update task
  public function update(Request $request, Promotion $promotion)
  {
		$folder = "slides/$promotion->id";

		$file1 = request()->file('image1');
		$file2 = request()->file('image2');
		$file3 = request()->file('image3');

		if($file1) {
			$ext = $file1->extension();
			$file1->storeAs($folder, "image1.{$ext}");
		}

		if($file2) {
			$ext = $file2->extension();
			$file2->storeAs($folder, "image2.{$ext}");
		}

		if($file3) {
			$ext = $file3->extension();
			$file3->storeAs($folder, "image3.{$ext}");
		}

		if($request->active === NULL) {
				$promotion->active = 0;
		} else {
				$promotion->active = 1;
		}

		$promotion->update($request->all());

    return redirect("/promotions");
  }
}
