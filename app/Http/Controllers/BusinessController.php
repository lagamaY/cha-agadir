<?php

namespace App\Http\Controllers;

use App\Models\Tabpage;
use App\Models\Business;
use App\Models\Pagevideo;
use App\Models\Downloadpage;
use Illuminate\Http\Request;
use Jorenvh\Share\ShareFacade;
use Illuminate\Support\Facades\App;

class BusinessController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $datas=Business::latest('id')->limit(1)->get();
        $shareFacebook=ShareFacade::currentPage()->facebook()->getRawLinks();
        $shareWhatsapp=ShareFacade::currentPage()->whatsapp()->getRawLinks();
        $shareLinkedin=ShareFacade::currentPage()->linkedin()->getRawLinks();
        $downloads=Downloadpage::where('pagename','agri-business')->get()->map(function ($item){         
            if (App::isLocale('en')) {
                $item->filename=$item->filename_en;
            }
            return $item;
           });
        $pagevideos=Pagevideo::where('pagename','agri-business')->get()->map(function ($item){         
            if (App::isLocale('en')) {
                $item->title=$item->title_en;
            }
            return $item;
        });
        $tabs=Tabpage::where('pagename','agri-business')->get()->map(function ($item){         
            if (App::isLocale('en')) {
                $item->title=$item->title_en;
                $item->content=$item->content_en;
            }
            return $item;
        });
           
        return view('static.business')->with(['datas'=>$datas,'shareFacebook'=>$shareFacebook,'shareWhatsapp'=>$shareWhatsapp,'shareLinkedin'=>$shareLinkedin,'downloads'=>$downloads,'pagevideos'=>$pagevideos,'tabs'=>$tabs]);
    }
}