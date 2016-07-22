<?php namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Auth;
use Session;
class RegisteradminController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    
    protected $redirectPath = '/home';




    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function postRegister(UserRequest $request){

            $activo = 'active';
            $inactivo = 'inactive';
            if ($request->role == 'company') {
            $user = new User;
            $user->name = $request->name;
            $user->last_name = $request->last_name;
            $user->phone = $request->phone;
            $user->role = $request->role;
            $user->status = $inactivo;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
            
            Session::flash('save', 'Gracias por registrarse, su cuenta esta en proceso de activación, en un momento nos comunicamos con usted.');
            return redirect('auth/register');
            }
            else{
            $user = new User;
            $user->name = $request->name;
            $user->last_name = $request->last_name;
            $user->phone = $request->phone;
            $user->role = $request->role;
            $user->status = $activo;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
            
            Session::flash('save', 'Cuenta activada, inicie sesion.');
            return redirect('auth/register');
            }
            /*->with("message", "Hemos enviado un enlace de confirmación a su cuenta de correo electrónico");
            /*return view('home');*/

            
        
    }
}
