<?php

namespace App\Http\Controllers;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $this->middleware('auth');
        $messages = Message::all();

        // load the view and pass the messages
        return View::make('messages.index')
            ->with('messages', $messages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        //
//        return View::make('messages.create');
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->middleware('auth');

        $rules = array(
            'description'       => 'required',
            'topic_id'       => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('messages/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $message = new Message;
            $message->description      = Input::get('description');
            $message->time      = new \DateTime();
            $user = auth()->user();
            $message->user_id       = $user->id;
            $message->topic_id       = Input::get('topic_id');
            $message->save();

            // redirect
            Session::flash('message', 'Successfully created message!');
            return Redirect::to('topics/'.Input::get('topic_id'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\message  $message
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $message = Message::findorfail($id);

        // show the view and pass the message to it
        return View::make('messages.show')
            ->with('message', $message);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $message = Message::findorfail($id);

        if (auth()->user()->id != $message->user_id)
            return Redirect::to('topics/'.$message->topic->id);
        // show the edit form and pass the message
        return View::make('messages.edit')
            ->with('message', $message);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\message  $message
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'description'      => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('messages/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $message = Message::find($id);
            $message->description       = Input::get('description');
            $message->save();

            // redirect
            Session::flash('message', 'Successfully updated message!');
            return Redirect::to('messages');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $message = Message::findorfail($id);

        if (auth()->user()->id != $message->user_id)
            return Redirect::to('topics/'.$message->topic->id);
        $message->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the message!');
        return Redirect::to('messages');
    }
}
