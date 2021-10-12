<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite ;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;
  //  use Socialite;


    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
       /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()

    {
       // return Socialite::driver('facebook')->stateless()->user();
                return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    
    {

      
     




      


      
        $userSocial = Socialite::driver('facebook')->user();
       $findUser = User::where('email',$userSocial->email)->first()   ;
        if ($findUser) {
          Auth::login($findUser); 
          return redirect('/home') ;


        }
        else {
          $user= new User() ;
        $user->name = $userSocial->name ; 
        $user->email = $userSocial->email ; 
        $user->password = bcrypt(1234) ;
        


        $user->save() ;
        Auth::login($user); 
 
        return redirect('/home') ;

        }
        
        

    } 


    public function redirectToProviderGoogle()

    {
       // return Socialite::driver('facebook')->stateless()->user();
                return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallbackGoogle()
    
    {

      
        $userSocial = Socialite::driver('google')->user();
       $findUser = User::where('email',$userSocial->email)->first()   ;
        if ($findUser) {
          Auth::login($findUser); 
          return redirect('/home') ;


        }
        else {
          $user= new User() ;
        $user->name = $userSocial->name ; 
        $user->email = $userSocial->email ; 
        $user->password = bcrypt(1234) ;
      
        


        $user->save() ;
        Auth::login($user); 
 
        return redirect('/home') ;

        }
        
        

    } 
    
}