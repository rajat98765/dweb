<?php

namespace App\Http\Controllers;

use App\personalinfo;
use Illuminate\Http\Request;
use Auth;
use DB;

class PersonalinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  

        if(Auth::check())   { 

            if((Auth()->user()->pidone)==1 ){
                $userdatas = personalinfo::where('email',auth()->user()->email)->get();            
                 //$userdatas = personalinfo::all();


                return view('profile')->with('userdatas',$userdatas);

                // return view('profile' , compact(['userdatas']));                

            }
            else
                return redirect('/home');


        }
        else

            return redirect('/login');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check())   {

            if( (Auth()->user()->pidone)==0 ){

                return view('personal-info');
            }
            else
                return redirect('/profile');
            
        }
        else
            return redirect('/login');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(Auth::check())   {

        $this->validate(request(),[
            'fname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'email' => 'required| email| unique:personalinfos',
            'bday' => 'required',
            'wdlive' => 'required',
            'pno' => 'required | numeric | unique:personalinfos',
            'profession' => 'required',
            'education' => 'required',
            'marriage' => 'required',
            'marriedb' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'hear' => 'required',
            'beforeworked' => 'required',
            'challenge' => 'required',
            'passion' => 'required',
            'religion' => 'required'

        ]);


       personalinfo::create([

            'fname' => request('fname'),
            'lname' => request('lname'),
            'gender' => request('gender'),
            'email' => request('email'),
            'bday' => request('bday'),
            'wdlive' => request('wdlive'),
            'pno' => request('pno'),
            'profession' => request('profession'),
            'education' => request('education'),
            'marriage' => request('marriage'),
            'marriedb' => request('marriedb'),
            'height' => request('height'),
            'weight' => request('weight'),
            'hear' => request('hear'),
            'beforeworked' => request('beforeworked'),
            'ytell' => request('ytell'),
            'challenge' => request('challenge'),
            'passion' => request('passion'),
            'religion' => request('religion'),
            'fb' => request('fb'),
            'linkedin' => request('linkedin')


        ]);

       $data = array();
       $data['pidone'] = 1;
       $emailofuser = Auth()->user()->email ;
       DB::table('users')->where('email',$emailofuser)->update($data);   


       return redirect('/profile');

}
        
        else
            return redirect('/login');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\personalinfo  $personalinfo
     * @return \Illuminate\Http\Response
     */
    public function show(personalinfo $personalinfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\personalinfo  $personalinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(personalinfo $personalinfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\personalinfo  $personalinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, personalinfo $personalinfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\personalinfo  $personalinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(personalinfo $personalinfo)
    {
        //
    }
}
