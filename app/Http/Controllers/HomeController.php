<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $messages = Message::paginate(5);
        return view('home',[
            'messages'=> $messages
        ]);
    }
    public function create(Request $request)
    {
        $path = $request->file('image')->store('images','public');
       
        $message = new Message();
        $message -> name = $request -> name;
        $message -> desc = $request -> description;
        $key = 'name';
        $message -> image = $path;
        $message -> category = $request -> category;
        
        $message -> save();

        return redirect('/home');
    }

    public function backgrounds(Request $request)
    {
        $path = $request->file('image')->storeAs(
            'bg-img', '1.JPG','public'
        );
        return redirect('/home');
    }
    public function backgrounds2(Request $request)
    {
        $path = $request->file('image')->storeAs(
            'bg-img', '2.JPG','public'
        );
        return redirect('home');
    }

    public function edit($id)
    {
        $message = Message::find($id);

        return view('edit',[
            'message'=>$message
        ]);
    }

    public function update($id, Request $request)
    {
        $message = Message::find($id);
        $message -> name =  $request -> name;
        $message -> desc = $request -> description;
        $message -> image = $request -> image;
        $message -> category = $request -> category;
        
        $message -> save();

        return redirect('/post/'.$id);
    }
    
    public function show($id)
    {
        $message = Message::find($id);
        return view('show',[
            'message'=>$message
        ]);
    }
    
    public function delete($id)
    {
        $message = Message::find($id);
        $message->delete();

        return redirect('/home');
    }
}
