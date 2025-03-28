<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;

// Retrieve visitors and page view data for the last 7 days
$analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));

// Retrieve visitors and page views for the last 6 months
$analyticsData = Analytics::fetchVisitorsAndPageViews(Period::months(6));

class DashboardController extends Controller
{
    public function index()
    {
        // Retrieve visitors and page view data for the last 7 days
        $analyticsData1 = Analytics::fetchTotalVisitorsAndPageViews(Period::days(7));
        $activeUsers = $analyticsData1->value('activeUsers');

        $mostVisitedPages = Analytics::fetchMostVisitedPages(Period::days(30), 10);
        $mostVisitedPage1 = $mostVisitedPages->sortByDesc('screenPageViews')->first()['pageTitle'];

        //dd($mostVisitedPage1);


        $TopCountries = Analytics::fetchTopCountries(Period::days(30), 10);

        //dd( $activeUsers);
        //dd($mostVisitedPages);
        // dd($TopCountries);

        return view('crud.dashboard.index', compact('activeUsers', 'mostVisitedPage1'));
        //return view('crud.dashboard.index', ['analyticsData1' => $analyticsData1->toArray()]);
    }


    public function get()
    {
        //retrieve visitors and page view data for the current day and the last seven days
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));

        //retrieve visitors and page views since the 6 months ago
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::months(6));
    }
}
