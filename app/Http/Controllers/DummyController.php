<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// Hash Function 
use Illuminate\Support\Facades\Hash;
// linked Model 
use App\Models\Device;

class DummyController extends Controller
{
    // get static string 
    public function getdata(){
        return ["Name"=>"Test","Email"=>"test@gmail.com","Address"=>"Lucknow","Mobile Number"=>"7687675645"];}

    // post data 
    public function postdata(Request $request){
        $newFood = new Device;
        $newFood->name = $request->name;
        $newFood->number = $request->number;
        $newFood->password = Hash::make($request->password);
        if($newFood->save()){return ["Result"=>"Data has been Saved !"];}else{return ["Result"=>"Data has been not Saved !"];}}

    // get data from the db 
    public function fetchdata(){
        return Device::all();}

    // get data with specfic id from the db 
    public function idfetchdata($id){
        return Device::find($id);}

    // updatedata data from the db 
    public function updatedata(Request $request){
        $newFood = Device::find($request->id);
        if(!$newFood){return ["Result"=>"Data not Found !"];}else{
        $newFood->name = $request->name;
        $newFood->number = $request->number;
        if($newFood->save()){return ["Result"=>"Data has been Updated !"];}else{return ["Result"=>"Data has been not Updated !"];}}}   
 
    // delete data with specfic id from the db 
    public function deletedata($id){
        $newFood = Device::find($id);
        if($newFood->delete()){return ["Result"=>"Data has been Deleted !"];}else{return ["Result"=>"Data has been not Deleted !"];}}
}
