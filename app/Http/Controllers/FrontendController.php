<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;use App\Alumnae;use App\Blog;use App\Contact;
use App\Downloadapp;use App\Downloadbook;use App\Downloadinfo;use App\Downloadrule;
use App\Facility;use App\Faq;use App\Footer;use App\Gallery;use App\History;
use App\Kemenkeuvalue;use App\Notification;use App\Officer;use App\Organization;
use App\Overview;use App\Overviewbank;use App\Overviewpdms;use App\Overviewumum;use App\Overviewveraki;
use App\Search;use App\Structure;use App\Taskfunction;use App\Tutorial;
use App\Programpdms; use App\Programbank; use App\Programveraki; use App\Programsakti;
 use App\Kamuskppn;use App\Visionmission;

class FrontendController extends Controller
{
    //
    public function organisasi()
    {
      $organizations = Organization::all();
      return view('front.organization.index',['organizations'=>$organizations]);
    }
    public function nilaikemenkeu()
    {
      $kemenkeuvalues = Kemenkeuvalue::all();
      return view('front.kemenkeuvalue.index',['kemenkeuvalues'=>$kemenkeuvalues]);
    }
    public function sejarah()
    {
        $histories = History::all();
        return view('front.history.index',['histories'=>$histories]);
    }
    public function visimisi()
    {
        $visionmissions = Visionmission::all();
        return view('front.visionmission.index',['visionmissions'=>$visionmissions]);
    }
    public function tugasfungsi()
    {
        $taskfunctions = Taskfunction::all();
        return view('front.taskfunction.index',['taskfunctions'=>$taskfunctions]);
    }
    public function strukturorganisasi()
    {
        $structures = Structure::all();
        return view('front.structure.index',['structures'=>$structures]);
    }
    public function sumberdayamanusia()
    {
        $officers = Officer::all();
        return view('front.officer.index',['officers'=>$officers]);
    }
    public function alumni()
    {
        return view('front.alumnae.index');
    }
    public function layanan()
    {
        return view('front.overview.index');
    }
    public function umum()
    {
        return view('front.overview-umum.index');
    }
    public function pdms()
    {
        return view('front.overview-pdms.index');
    }
    public function bank()
    {
        return view('front.overview-bank.index');
    }
    public function veraki()
    {
        return view('front.overview-veraki.index');
    }
    public function sarpras()
    {
        return view('front.facility.index');
    }

    public function blog()
    {
        $blogs = Blog::orderBy('created_at','id')->paginate(4);
        return view('front.blog.index',['blogs'=>$blogs]);
    }

    public function singleBlog($title)
    {
      $blogs = Blog::where('slug',$title)->first();

      return view('front.blog.single')->with('blogs',$blogs);
    }
    public function kontak()
    {
        return view('front.contact.index');
    }

    public function tutorial()
    {
      $tutorials = Tutorial::orderBy('created_at','id')->paginate(3);
      return view('front.tutorial.index',['tutorials'=>$tutorials]);

    }
    public function sakti()
    {
      $programsaktis = Programsakti::orderby('created_at','id')->paginate(3);
      return view('front.program-sakti.index',['programsaktis'=>$programsaktis]);
    }
    public function faq()
    {
      $faqs = Faq::orderby('created_at','id')->paginate(3);
      return view('front.faq.index',['faqs'=>$faqs]);
    }

    public function kamuskppn()
    {
      $kamuskppns = Kamuskppn::orderby('created_at','id')->paginate(3);
      return view('front.kamus-kppn.index',['kamuskppns'=>$kamuskppns]);
    }


}
