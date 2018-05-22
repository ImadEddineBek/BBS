<?php

namespace App\Http\Controllers;
use App\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class TopicController extends Controller
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
        $topics = Topic::all();

        // load the view and pass the topics
        return View::make('topics.index')
            ->with('topics', $topics);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View::make('topics.create');
    }

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
            'title'       => 'required',
            'description'      => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('topics/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $topic = new Topic;
            $topic->title       = Input::get('title');
            $topic->description      = Input::get('description');
            $topic->time      = new \DateTime();
            $user = auth()->user();
            $topic->user_id       = $user->id;
            $topic->save();

            // redirect
            Session::flash('message', 'Successfully created topic!');
            return Redirect::to('topics');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $topic = Topic::find($id);
        // show the view and pass the topic to it
        return View::make('topics.show')
            ->with('topic', $topic);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $topic = Topic::find($id);

        if (auth()->user()->id != $topic->user_id)
            return Redirect::to('topics/'.$id);
        // show the edit form and pass the topic
        return View::make('topics.edit')
            ->with('topic', $topic);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'title'       => 'required',
            'description'      => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('topics/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $topic = topic::find($id);
            $topic->title       = Input::get('title');
            $topic->description       = Input::get('description');
            $topic->time      = new \DateTime();
            $topic->save();

            // redirect
            Session::flash('message', 'Successfully updated topic!');
            return Redirect::to('topics');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $topic = Topic::find($id);

        if (auth()->user()->id != $topic->user_id)
            return Redirect::to('topics/'.$id);
        $topic->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the topic!');
        return Redirect::to('topics');
    }
}
