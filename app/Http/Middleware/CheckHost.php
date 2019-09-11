<?php

namespace App\Http\Middleware;

use App\Accounts;
use App\User;
use Closure;
use App\Hosts;
class CheckHost
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
        $host = new Hosts();
        $account = new Accounts();
        $hostName = $request->getHttpHost();

        //Si la session no tiene un host asignado
        if ($this->sessionHost($request)==FALSE) {
            $existHost = $this->existHost($request,$host);

            //si existe ya un host en la base de datos
            if ($existHost != null){
                $request->getSession()->put('host', $existHost);
            }
            //si no existe en la base de datos se crea junto con la cuenta principal del host
            else{
                $host->host = $hostName;
                $host->title_page = $hostName;
                $host->landing_page = 'default';
                $host->accounts_id = $account->createAccount()->id;
                $host->save();

                $user = new User();

                $user->id = null;
                $user->name = $hostName;
                $user->email = $hostName.'@'.$hostName.'.com';
                $user->password =  bcrypt($hostName);
                $user->accounts_id = $host->accounts_id;
                $user->save();

                $saved = $this->existHost($request,$host);
                $request->getSession()->put('host', $saved);
            }
            $request->getSession()->save();
        }

        return $next($request);

    }

    public function sessionHost($request) {
        return $request->getSession()->get('host',FALSE);
    }

    public function existHost($request,Hosts $host) {
        $exist = $host->where('host',$request->getHttpHost())->first();
        return $exist;
    }

}
