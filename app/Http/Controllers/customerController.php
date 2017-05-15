<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

use App\Customer;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function generateId($length ){
        $length = 10;
        $character = '0123456789';
        $randomString = '';

        for($i=0;$i<$length;$i++){
            $randomString .= $character[rand(0, strlen($character)-1)];
        }
        return $randomString;
    }

    // public function voucher(array $data)
    // {
    //     return Customer::create(['name'=>$data['name'], 
    //         'email'=>$data['email'],
    //         'voucherId' => $data['voucherId']
    //     ]);
    // }

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
        return view('coupon');

        // function generateId($length){
        // $length = 10;
        // $character = '0123456789';
        // $randomString = '';

        // for($i=0;$i<$length;$i++){
        //     $randomString .= $character[rand(0, strlen($character)-1)];
        // }
        // return $randomString;
    
        
        // echo $myDate;
        // echo $myDate;




        // $alpha = implode(range('A', 'Z'));
        // $numeric = implode(range(0, 9));
        // $alph = uniqid();
        // $numeric = rand(0,$numeric);
        // $name = "Talabi";
        // $head = substr($name, 0,3);
        // $tail = substr($name, -3);
        // $voucher = $head.''.$numeric.''.$tail;
        // echo $voucher;

        // foreach ($random as $val) {
        //     # code...
        //     echo $val;
        // }
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

        $name = 'Talabi';
        date_default_timezone_set('Africa/Lagos');
        $random_str_len = 10;
        $myDate = date('ymdhis');
        $orderId = $this->generateId($random_str_len);

        $voucherId = $myDate. $name . $orderId;
        $this->voucherId =bcrypt($voucherId);
        
        
        echo $this->voucherId;


        customer::create(Request::all());
        echo 'Registered..!!';
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
