 <?php

namespace App\Http\Middleware;

use Closure;
use App\Http\User; 
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;
class isSuperAdmin
{
    
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Session::has('userId')||Session::has('userId')==null || !Session::has('roleIdentity')){
            return redirect()->route('logOut');
        }else{
            $user = User::findOrFail(currentUserId());
            app()->setLocal($user->language);
            if(!$user){
                return redirect()->route('logout');
            }else if(currentUser()!= 'superadmin'){
                return redirect()->back()->with('danger','Access Denied');
            }else{
                 return $next($request);
            }
        }
       
    }
}
