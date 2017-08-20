<?php

namespace App\Http\Controllers;

use App\Role;
use App\Download;
use function App\can;
use App\Jobs\NotificationQueue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function news()
    {
        if (Auth::check())
            Auth::user()->notificationAdd(['news' => false]);
        return view('news');
    }

    public function contact()
    {
        $leads = Role::where('slug', 'awokenlead')->first()->users;
        $staffs = Role::where('slug', 'staff')->first()->users;
        $devs = Role::where('slug', 'awokendev')->first()->users;
        $communitymanagers = Role::where('slug', 'communitymanager')->first()->users;
        return view('contact', compact('staffs', 'leads', 'devs', 'communitymanagers'));
    }

    public function team()
    {
        $leads = Role::where('slug', 'awokenlead')->first()->users;
        $staffs = Role::where('slug', 'staff')->first()->users;
        $devs = Role::where('slug', 'awokendev')->first()->users;
        return view('team', compact('staffs', 'leads', 'devs'));
    }

    public function doLogout()
    {
        Auth::logout();

        return redirect()->back();
    }

    public function download()
    {
        return view('download');
    }

    public function downloadClient(string $client)
    {
        Download::create(['user_id' => Auth::id()]);
        switch($client) {
            case "client":
                return redirect()->away('https://dl.heroesawaken.com/setup.exe');
                break;
            case "client-archive":
                return redirect()->away('https://dl.heroesawaken.com/client.zip');
                break;
            case "tutorial":
                return redirect()->away('https://dl.heroesawaken.com/HeroesAwakenTutorial.zip');
                break;
            default:
                return redirect()->away('https://dl.heroesawaken.com/HeroesAwakenTutorial.zip');
                break;
        }
        return redirect()->away('https://dl.heroesawaken.com/HeroesAwakenTutorial.zip');
    }

    public function setLanguage()
    {
        if (! Session::has('locale'))
        {
            Session::put('locale', Input::get('language'));
        } else {
            Session::put('locale', Input::get('language'));
        }
        return redirect()->back();
    }
}