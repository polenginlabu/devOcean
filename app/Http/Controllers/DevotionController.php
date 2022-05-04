<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devotion;
use Auth;
use Conner\Tagging\Model\Tag;

class DevotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Devotion $devotion)
    {
        //

        $data = $request->only($devotion->getFillable());
        $tags = $data['tags'];
        $data['user_id'] = Auth::id();
        unset($data['tags']);
        $devotion = Devotion::create($data);
       
    	$devotion->tag($tags);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function fetch(Request $request){

        $devotions = Devotion::with('tagged')->where('user_id', Auth::id());
        
        if($request->has('tags')) {
            if($request->input('tags') != "all") $devotions = $devotions->withAnyTag([$request->input('tags')]);
        }

        if($request->has('search')) {
            $s = $request->input('search');
            $devotions = $devotions->where(function($query) use ($s) {
                $query->where('rhema', 'LIKE', '%'.$s.'%')
                    ->orWhere('reflection', 'LIKE', '%'.$s.'%')
                    ->orWhere('motivation', 'LIKE', '%'.$s.'%');
            });
        }

        $devotions = $devotions->paginate(10, '*', 'page', $request->current_page);
        $devotions = $devotions->toArray();
        $tags = Tag::where('count', '>', 0)->get();
        $devotions['tags'] = $tags;
       
         return response()->json(collect($devotions));
    }
}
