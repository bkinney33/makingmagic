<?php
namespace App\Http\Controllers;
use App\CustomCard;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Session\Store;
class CustomCardController extends Controller
{
    public function getIndex()
    {
        $cards = CustomCard::orderBy('created_at','desc')->first();
    }
    public function getCard($id){
      $card = Card::where('id',$id);
      return view('Cards.displaycard',['card'=>$card]);
    }
    public function getCreateCard()
    {
        return view('Cards.create');
    }
    public function postCreateCard( Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:5',
            'abilities' => 'required|min:10'
        ]);
        $card = new CustomCard();
        $card->addCard($session, $request->input('name'), $request->input('manacost'), $request->input('supertype'), $request->input('type'), $request->input('power'), $request->input('toughness'), $request->input('abilities'));

        return redirect()->route('Cards.displaycard');
    }


    // public function postAdminUpdate(Store $session, Request $request)
    // {
    //     $this->validate($request, [
    //         'title' => 'required|min:5',
    //         'content' => 'required|min:10'
    //     ]);
    //     $post = new Post();
    //     $post->editPost($session, $request->input('id'), $request->input('title'), $request->input('content'));
    //     return redirect()->route('admin.index')->with('info', 'Post edited, new Title is: ' . $request->input('title'));
    // }
}
