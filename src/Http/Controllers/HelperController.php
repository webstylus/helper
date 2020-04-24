<?php

namespace Lojazone\Helper\Http\Controllers;

use App\Http\Controllers\Controller;
use Lojazone\Helper\Http\Request\FormTestRequest;
use Lojazone\Helper\Support\Helper;

class HelperController extends Controller
{

    public function index()
    {
//        Helper::messages('Welcome', "Last login in " . now()->format('d M Y H:i'), 'success', 2000);
//        Helper::messages('Welcome', "Last login in " . now()->format('d M Y H:i'), 'primary', 2000);
//        Helper::messages('Welcome', "Last login in " . now()->format('d M Y H:i'), 'info', 2000);
//        Helper::messages('Welcome', "Last login in " . now()->format('d M Y H:i'), 'warning', 2000);
//        Helper::messages('Welcome', "Last login in " . now()->format('d M Y H:i'), 'danger', 2000);

        return view('helper::index', []);
    }

    public function formTest(FormTestRequest $request)
    {
        if (!$request->last_name){
            Helper::messages('Oopss!!!', "Only first name informed", 'warning', 6000);
        } else {
            Helper::messages('All right!!!', "Hi {$request->first_name} {$request->last_name}!", 'info', 10000);
        }
        return redirect()->route('lojazone_helper')->withInput();
    }
}
