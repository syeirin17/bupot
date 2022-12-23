<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\Http;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        // dd(bcrypt(123456));
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('npwp',$request->email)->select('email')->first();
        $credentials = [
            'email' => $user->email,
            'password' => $request->password
        ];
        // dd($credentials);
        if (Auth::attempt($credentials)) {
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        return view('dashboard',$data);
            // return redirect()->intended('dashboard')
            //             ->withSuccess('Signed in');
                        
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }
    public function pengaturan()
    {
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        return view('pengaturan',$data);
    } 

    public function registration()
    {
        
        
        return view('auth.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'npwp' => 'required',
            'nik'=> 'required'
        ]);
        $response = Http::post('http://localhost:8000/api/register',$request->all());

         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => bcrypt($data['password']),
        'npwp' => $data['npwp'],
        'nik' => $data['nik']
      ]);
    }    
    public function form(){
        $data = [
            'npwp' => auth()->user()->npwp,
            'nama' => auth()->user()->name
        ];
        return view('index',$data);
    }
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}