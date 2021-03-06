<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\CompanySystem;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = CompanySystem::all()->toArray();
        return view('companies.index', compact('companies'));

    }
    public function loginValidation(Request $request)
    {
        $result = CompanySystem::where('email', '=', $request->get('Email'))
        ->where('password', '=', $request->get('Password'))->get();
        //dd($result);
        if($result->isEmpty()){
            return view('companies.show') ;
        }
        else{
            $companies = CompanySystem::all()->toArray();
            return view('companies.index', compact('companies'));

        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');

    }

   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = CompanySystem::find($id);
        return view('companies.show')->with('company',$company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = CompanySystem::find($id);
        return view('companies.edit',compact('company','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        //dd($request->all());
        $id = $request->input('id');
        $company = CompanySystem::find($id);
        $company->name = $request->get('Name');
        $company->email = $request->get('Email');
        $company->password = $request->get('Password');
        $company->numOfEmp = $request->get('numOfEmp');
        $company->interest1 = $request->get('interest1');
        $company->interest2 = $request->get('interest2');
        $company->interest3 = $request->get('interest3');
        $company->interest4 = $request->get('interest4');
        $company->interest5 = $request->get('interest5');
        $company->save();
        return redirect('companies')->with('success', 'company info has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = CompanySystem::find($id);
        $company->delete();
        return redirect('companies')->with('success','Company has been  deleted');
    }
 /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exist= CompanySystem::where('email',$request->get('email'))->exists();
        $msg = "email is used";
        if($exist){
             return view('companies.create');
        }else{
        $request->validate([
            'Name' => 'required',
            'Email' => 'required|unique:usersystem',
            'Password' => 'required',
            'numOfEmp' => 'required',
            'interest1' => 'required'
        ]); 
    //dd($request->all());
        $company = new CompanySystem();
        $company->name = $request->get('Name');
        $company->email = $request->get('Email');
        $company->password = $request->get('Password');
        $company->numOfEmp = $request->get('numOfEmp');
        $company->interest1 = $request->get('interest1');
        $company->interest2 = $request->get('interest2');
        $company->interest3 = $request->get('interest3');
        $company->interest4 = $request->get('interest4');
        $company->interest5 = $request->get('interest5');
        $company->save();
        return redirect('companies')->with('success', 'company has been created');
        }
        
        }
//API Functions...
    public function getallcompanies(){
        $companies = CompanySystem::all()->toArray();
        return response()->json($companies);
    }

    public function getcompanybyid(Request $request){
        $exist= CompanySystem::where('companyID',$request->get('companyID'))->exists();
        $msg = "Company doesn't exist";
        if(!$exist){
            return[$msg,200];
        }else{  
        $id= $request->get('id');
          $company = CompanySystem::find($id);
        return response()->json($company);
        }
    }

    public function addnewcompany(Request $request)
    {
        $exist= CompanySystem::where('email',$request->get('email'))->exists();
        $msg = "email is used";
        if($exist){
            return[$msg,200];
        }else{
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:usersystem',
            'password' => 'required',
            'numOfEmp' => 'required',
            'interest1' => 'required'
        ]); 
        $company = new CompanySystem();
        $company->name = $request->get('name');
        $company->email = $request->get('email');
        $company->password = $request->get('password');
        $company->numOfEmp = $request->get('numOfEmp');
        $company->interest1 = $request->get('interest1');
        $company->interest2 = $request->get('interest2');
        $company->interest3 = $request->get('interest3');
        $company->interest4 = $request->get('interest4');
        $company->interest5 = $request->get('interest5');
        $company->save();
        return response()->json($company,200);
        }
    }

    public function deletecompany(Request $request)
    {
        $exist= CompanySystem::where('companyID',$request->get('companyID'))->exists();
        $msg = "Company doesn't exist";
        if(!$exist){
            return[$msg,200];
        }else{
        $id= $request->get('id');  
        $company = CompanySystem::find($id);
        $company->delete();
        return "Company has been  deleted";
        }
    }
    public function updatebyid(Request $request)
    {
        $exist= CompanySystem::where('companyID',$request->get('companyID'))->exists();
        $msg = "Company doesn't exist";
        if(!$exist){
            return[$msg,200];
        }else{
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:usersystem',
            'password' => 'required',
            'numOfEmp' => 'required',
            'interest1' => 'required'
        ]); 
        // dd($request->all());
        $id= $request->get('id');
        $company = CompanySystem::find($id);
        $company->name = $request->get('name');
        $company->email = $request->get('email');
        $company->password = $request->get('password');
        $company->numOfEmp = $request->get('numOfEmp');
        $company->interest1 = $request->get('interest1');
        $company->interest2 = $request->get('interest2');
        $company->interest3 = $request->get('interest3');
        $company->interest4 = $request->get('interest4');
        $company->interest5 = $request->get('interest5');
        $company->save();
        return response()->json($company);

    }
    }
}
