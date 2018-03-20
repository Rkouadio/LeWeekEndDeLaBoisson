<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class contactUsController extends Controller
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
    public function store(Request $request)
    {

        $user_name=$request->nom;
        $user_email=$request->mail;
        $content=$request->message;
       //dd($request);
        $title='Message depuis le site';
        session(['user_name' => $user_name]);
        session(['user_mail' => $user_email]);
        session(['user_message' => $content]);
      //  dd(session('user_name'));

        try
        {
            $data = ['email'=> $user_email,'name'=> $user_name,'subject' => $title, 'content' => $content];
          // dd($data);
            Mail::send('mail/mailRemerciement', $data, function($message) use($data)
            {
                // $mail="kassieric60@gmail.com";
                $mail="web@bao-technologie.com";
                $subject=$data['subject'];
                $message->from( $mail);
                $message->to($data['email'], $data['name'])->subject($subject);
            });

            $persoMail='userpost@bao-technologie.com';
            $data1 = ['email'=>$persoMail,'name'=> 'Le Web sce Commercial','subject' => 'Mail recu depuis le site', 'content' => $content];
            Mail::send('mail/mailUser', $data1, function($message) use($data1)
            {
                // $mail="kassieric60@gmail.com";
                $mail="web@bao-technologie.com";
                $subject='Mail recu depuis le site';
                $message->from( $mail);
                $message->to($data1['email'], $data1['name'])->subject($subject);
            });

            Session::flash('MessageDelivreatedSucces',"L'operation d'envoi de message a ete un success");
            return redirect()->route('home');
        }
        catch (\Exception $e)
        {
            Session::flash('MessageDelivreatedEchec',
                "Une erreur produite lors de l'envoi du message");

            return redirect()->route('home');
          //  return redirect()->route('acceuiAdmin');
        }
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
}
