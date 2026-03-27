<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Park;
use App\Models\Island;
use App\Models\Jungle;
use App\Models\City;
use App\Models\Planet;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        return view ('index');
    }

    public function index_farm(Request $request)
    {
        $get_farm = Animal::where('status_animal', '!=', 0)->get();
        $ret['data'] = $get_farm;
        // dd($animal_code); exit;

        return view ('hompim_farm.index_animal', $ret);
    }

    public function detail_farm($animal_code)
    {
        $get_animal = Animal::where('animal_code', $animal_code)->firstOrFail();
        $ret['data'] = $get_animal;
        // dd($get_animal); exit;

        if($get_animal->id_animal == 1){
            $prev_id = Animal::where('status_animal', '!=', 0)->latest()->value('id_animal');
        }else{
            $prev_id = $get_animal->id_animal - 1;
        }
        $ret['prev'] = Animal::where('id_animal', $prev_id)->first();
        
        $next_id = $get_animal->id_animal + 1;
        $ret['next'] = Animal::where('status_animal', '!=', 0)->where('id_animal', $next_id)->first();

        if($ret['next'] == null){
            $ret['next'] = Animal::where('id_animal', 1)->first();
        }

        $currentId = $get_animal->id_animal;

        $ret['random'] = Animal::where('status_animal', '!=', 0)->where('id_animal', '!=', $currentId)
            ->inRandomOrder()
            ->limit(4)
            ->get();

        return view ('hompim_farm.detail_animal', $ret);
    }

    public function index_park(Request $request)
    {
        $get_park = Park::where('status_park', '!=', 0)->get();
        $ret['data'] = $get_park;
        // dd($get_park); exit;

        return view ('hompim_park.index_park', $ret);
    }

    public function detail_park($park_code)
    {
        $get_park = Park::where('park_code', $park_code)->firstOrFail();
        $ret['data'] = $get_park;
        // dd($get_park); exit;

        if($get_park->id_park == 1){
            $prev_id = Park::where('status_park', '!=', 0)->latest()->value('id_park');
        }else{
            $prev_id = $get_park->id_park - 1;
        }
        $ret['prev'] = Park::where('id_park', $prev_id)->first();
        
        $next_id = $get_park->id_park + 1;
        $ret['next'] = Park::where('status_park', '!=', 0)->where('id_park', $next_id)->first();

        if($ret['next'] == null){
            $ret['next'] = Park::where('id_park', 1)->first();
        }

        $currentId = $get_park->id_park;

        $ret['random'] = Park::where('status_park', '!=', 0)->where('id_park', '!=', $currentId)
            ->inRandomOrder()
            ->limit(4)
            ->get();

        return view ('hompim_park.detail_park', $ret);
    }

    public function index_island(Request $request)
    {
        $get_island = Island::where('status_island', '!=', 0)->get();
        $ret['data'] = $get_island;
        // dd($get_island); exit;

        return view ('hompim_island.index_island', $ret);
    }

    public function detail_island($island_code)
    {
        $get_island = Island::where('island_code', $island_code)->firstOrFail();
        $ret['data'] = $get_island;
        // dd($get_island); exit;

        if($get_island->id_island == 1){
            $prev_id = Island::where('status_island', '!=', 0)->latest()->value('id_island');
        }else{
            $prev_id = $get_island->id_island - 1;
        }
        $ret['prev'] = Island::where('id_island', $prev_id)->first();
        
        $next_id = $get_island->id_island + 1;
        $ret['next'] = Island::where('status_island', '!=', 0)->where('id_island', $next_id)->first();

        if($ret['next'] == null){
            $ret['next'] = Island::where('id_island', 1)->first();
        }

        $currentId = $get_island->id_island;

        $ret['random'] = Island::where('status_island', '!=', 0)->where('id_island', '!=', $currentId)
            ->inRandomOrder()
            ->limit(4)
            ->get();

        // return view ('hompim_island.detail_island', $ret);
        return view ('coming_soon');
    }

    public function index_jungle(Request $request)
    {
        $get_jungle = Jungle::where('status_jungle', '!=', 0)->get();
        $ret['data'] = $get_jungle;
        // dd($get_jungle); exit;

        return view ('hompim_jungle.index_jungle', $ret);
    }

    public function detail_jungle($jungle_code)
    {
        $get_jungle = Jungle::where('jungle_code', $jungle_code)->firstOrFail();
        $ret['data'] = $get_jungle;
        // dd($get_jungle); exit;

        if($get_jungle->id_jungle == 1){
            $prev_id = Jungle::where('status_jungle', '!=', 0)->latest()->value('id_jungle');
        }else{
            $prev_id = $get_jungle->id_jungle - 1;
        }
        $ret['prev'] = Jungle::where('id_jungle', $prev_id)->first();
        
        $next_id = $get_jungle->id_jungle + 1;
        $ret['next'] = Jungle::where('status_jungle', '!=', 0)->where('id_jungle', $next_id)->first();

        if($ret['next'] == null){
            $ret['next'] = Jungle::where('id_jungle', 1)->first();
        }

        $currentId = $get_jungle->id_jungle;

        $ret['random'] = Jungle::where('status_jungle', '!=', 0)->where('id_jungle', '!=', $currentId)
            ->inRandomOrder()
            ->limit(4)
            ->get();

        return view ('hompim_jungle.detail_jungle', $ret);
    }

    public function index_city(Request $request)
    {
        $get_city = City::where('status_city', '!=', 0)->get();
        $ret['data'] = $get_city;
        // dd($get_city); exit;

        return view ('hompim_city.index_city', $ret);
    }

    public function detail_city($city_code)
    {
        $get_city = City::where('city_code', $city_code)->firstOrFail();
        $ret['data'] = $get_city;
        // dd($get_city); exit;

        if($get_city->id_city == 1){
            $prev_id = City::where('status_city', '!=', 0)->latest()->value('id_city');
        }else{
            $prev_id = $get_city->id_city - 1;
        }
        $ret['prev'] = City::where('id_city', $prev_id)->first();
        
        $next_id = $get_city->id_city + 1;
        $ret['next'] = City::where('status_city', '!=', 0)->where('id_city', $next_id)->first();

        if($ret['next'] == null){
            $ret['next'] = City::where('id_city', 1)->first();
        }

        $currentId = $get_city->id_city;

        $ret['random'] = City::where('status_city', '!=', 0)->where('id_city', '!=', $currentId)
            ->inRandomOrder()
            ->limit(2)
            ->get();

        // return view ('hompim_city.detail_city', $ret);
        return view ('coming_soon');
    }

    public function index_planet(Request $request)
    {
        $get_planet = Planet::where('status_planet', '!=', 0)->get();
        $ret['data'] = $get_planet;
        // dd($get_planet); exit;

        return view ('hompim_planet.index_planet', $ret);
    }

    public function detail_planet($planet_code)
    {
        $get_planet = Planet::where('planet_code', $planet_code)->firstOrFail();
        $ret['data'] = $get_planet;
        // dd($get_planet); exit;

        if($get_planet->id_planet == 1){
            $prev_id = Planet::where('status_planet', '!=', 0)->latest()->value('id_planet');
        }else{
            $prev_id = $get_planet->id_planet - 1;
        }
        $ret['prev'] = Planet::where('id_planet', $prev_id)->first();
        
        $next_id = $get_planet->id_planet + 1;
        $ret['next'] = Planet::where('status_planet', '!=', 0)->where('id_planet', $next_id)->first();

        if($ret['next'] == null){
            $ret['next'] = Planet::where('id_planet', 1)->first();
        }

        $currentId = $get_planet->id_planet;

        $ret['random'] = Planet::where('status_planet', '!=', 0)->where('id_planet', '!=', $currentId)
            ->inRandomOrder()
            ->limit(2)
            ->get();

        // return view ('hompim_planet.detail_planet', $ret);
        return view ('coming_soon');
    }

    public function index_contact(Request $request)
    {
        return view ('contact_us');
    }

    public function index_resto(Request $request)
    {
        return view ('restaurant.index_resto');
    }

    public function detail_resto($resto_code)
    {
        return view ('coming_soon');
    }

    public function index_ticket(Request $request)
    {
        return view ('coming_soon');
    }

    public function index_bukit_strawberry(Request $request)
    {
        return view ('coming_soon');
    }

    public function index_store(Request $request)
    {
        return view ('coming_soon');
    }

    public function index_mart(Request $request)
    {
        return view ('coming_soon');
    }

    public function index_blog(Request $request)
    {
        return view ('coming_soon');
    }

    public function index_login(Request $request)
    {
        return view ('coming_soon');
    }
}
