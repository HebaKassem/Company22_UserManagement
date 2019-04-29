<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\UserSystem;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = UserSystem::all()->toArray();
        return view('users.index', compact('users'));
    }
    
    public function getAllusers(){
        $users = UserSystem::all()->toArray();
        return response()->json($users);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//store the vars from the form into the DB
    {
        /*$request->validate([
            'coinname' => 'required',
            'coinprice'=> 'numeric',
          ]); 
          */
        $user = new UserSystem();
        $user->name = $request->get('Name');
        $user->email = $request->get('Email');
        $user->password = $request->get('Password');
        $user->interest1 = $request->get('interest1');
        $user->interest2 = $request->get('interest2');
        $user->interest3 = $request->get('interest3');
        $user->interest4 = $request->get('interest4');
        $user->interest5 = $request->get('interest5');
        $user->gender = $request->get('Gender');
        $user->dob = $request->get('dob');
        $user->save();
        return redirect('users')->with('success', 'user has been added');
    }
    public function addnewuser(Request $request)
    {
        $user = new UserSystem();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->interest1 = $request->get('interest1');
        $user->interest2 = $request->get('interest2');
        $user->interest3 = $request->get('interest3');
        $user->interest4 = $request->get('interest4');
        $user->interest5 = $request->get('interest5');
        $user->gender = $request->get('gender');
        $user->dob = $request->get('dob');
        $user->save();
       //return "user has been added";
       return response()->json($user);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //the profile page of none user
    public function show($id)
    {
        $user = UserSystem::find($id);
        return view('users.show')->with('user',$user);
    }
    
    public function getuserbyid(Request $request){
        $user= UserSystem::where('id', $request->get('id'))->get();
        return response()->json($user);
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = UserSystem::find($id);
        return view('users.edit',compact('user','id'));
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
        //dd($request->all());
        $user = UserSystem::find($id);
        $user->name = $request->get('Name');
        $user->email = $request->get('Email');
        $user->password = $request->get('Password');
        $user->interest1 = $request->get('interest1');
        $user->interest2 = $request->get('interest2');
        $user->interest3 = $request->get('interest3');
        $user->interest4 = $request->get('interest4');
        $user->interest5 = $request->get('interest5');
        $user->gender = $request->get('Gender');
        $user->dob = $request->get('dob');
        $user->save();
        return redirect('users')->with('success', 'user has been updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = UserSystem::find($id);
        $user->delete();
        return redirect('users')->with('success','User has been  deleted');
    }
    public function deleteuser(Request $request)
    {
        $id= $request->get('id');
        $user = UserSystem::find($id);
        $user->delete();
        return "User has been  deleted";
    }
    public function updatebyid(Request $request)
    {
        //dd($request->all());
        $id= $request->get('id');
        $user = UserSystem::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->interest1 = $request->get('interest1');
        $user->interest2 = $request->get('interest2');
        $user->interest3 = $request->get('interest3');
        $user->interest4 = $request->get('interest4');
        $user->interest5 = $request->get('interest5');
        $user->gender = $request->get('gender');
        $user->dob = $request->get('dob');
        $user->save();
        return response()->json($user);
    }
}