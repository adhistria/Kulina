<?php

namespace App\Http\Controllers;

use App\user_review;
//use Dotenv\Validator;
//use Illuminate\Validation\Validator;
//
use \Validator;

//use Illuminate\Http\Request;
use Request;

class UserReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $all_user_review = user_review::all();
        return response()->json(['status'=>'SUCCESS','message'=>"Get All Data",'content'=>$all_user_review],200);
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
    public function store()
    {
        $rules = [
            'order_id' => 'required',
            'product_id' => 'required',
            'user_id' => 'required',
            'rating' => 'required|numeric|between:1,5',
            'review' => 'required|string'
        ];
        $params = Request::all();
        $validator = Validator::make($params,$rules);
        if ($validator->fails()) {
            return response()->json(['status'=>'FAIL','message'=>"couldn't store data",'content'=>$validator->errors()],400);
        }
        $user_review = new user_review();
        $user_review->order_id =  $params['order_id'];
        $user_review->product_id= $params['product_id'];
        $user_review->user_id=$params['user_id'];
        $user_review->rating=$params['rating'];
        $user_review->review=$params['review'];
        $user_review->save();
        return response()->json(['status'=>'SUCCESS','message'=>"Create Data Success",'content'=>$user_review],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\user_review  $user_review
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user_review = user_review::find($id);
        return $user_review;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user_review  $user_review
     * @return \Illuminate\Http\Response
     */
    public function edit(user_review $user_review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user_review  $user_review
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {

        $rules = [
            'rating' => 'required|numeric|between:1,5',
            'review' => 'required|string'
        ];
        $params = Request::all();
        $validator = Validator::make($params,$rules);
        if ($validator->fails()) {
            return response()->json(['status'=>'FAIL','message'=>"couldn't store data",'content'=>$validator->errors()],400);
        }
        $user_review = user_review::find($id);
        $user_review->rating = $params['rating'];
        $user_review->review= $params['review'];
        $user_review->save();
        return response()->json(['status'=>'SUCCESS','message'=>"Update Data Success",'content'=>$user_review],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user_review  $user_review
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user_review = user_review::find($id);
        $user_review->delete();
        return response()->json(['status'=>'SUCCESS','message'=>"Delete Data Success",'content'=>$user_review],200);
    }
}
