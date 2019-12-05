<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Charts;
use App\Http\Controllers\Controller;
use App\Datatable;


class ChartsController extends Controller
{
    public function index()
    {
        $bar = Charts::multi('bar', 'material')
            ->title("My Cool Chart")
            ->dimensions(0, 400) // Width x Height
            ->template("material")
            ->dataset('Element 1', [5,20,100])
            ->dataset('Element 2', [15,30,80])
            ->dataset('Element 3', [25,10,40])
//            ->responsive(true)
            // Setup what the values mean
            ->labels(['One', 'Two', 'Three']);

        $line = Charts::multi('line', 'highcharts')
            ->title("My Cool Chart")
            ->dimensions(0, 400) // Width x Height
            ->template("material")
            ->dataset('Element 1', [5,20,100])
            ->dataset('Element 2', [15,30,80])
            ->dataset('Element 3', [25,10,40])
//            ->responsive(true)
            // Setup what the values mean
            ->labels(['One', 'Two', 'Three']);

        $area = Charts::multi('area', 'google')
            ->title("My Cool Chart")
            ->dimensions(0, 400) // Width x Height
//            ->responsive(true)
            ->template("material")
            ->dataset('Element 1', [5,20,100])
            ->dataset('Element 2', [15,30,80])
            ->dataset('Element 3', [25,10,40])
            // Setup what the values mean
            ->labels(['One', 'Two', 'Three']);

        $pie = Charts::create('pie', 'highcharts')
            ->title('Pie chart')
            ->labels(['First', 'Second', 'Third'])
//            ->responsive(true)
            ->values([5,10,20])
            ->dimensions(0,400);

        return view('admin.laravel_chart', ['bar' => $bar, 'line' => $line, 'area' => $area, 'pie' => $pie]);
    }

    public function databaseCharts()
    {
        $db_chart =  Charts::database(User::all(), 'bar', 'highcharts')
            ->elementLabel("Total")
            ->dimensions(0, 300)
            ->responsive(true)
            ->groupByDay();

        $multi_db = Charts::multiDatabase('bar', 'material')
            ->dataset('Database 1', Datatable::all())
            ->dataset('Database 2', Datatable::all())
            ->dimensions(0, 300)
            ->title("Multi database")
//            ->responsive(true)
            ->groupBy('gender');

        $group_chart = Charts::database(Datatable::all(), 'pie', 'highcharts')
            ->title("Group By Country")
            ->dimensions(0, 500)
            ->responsive(true)
            ->groupBy('country');
        $area = Charts::database(Datatable::all(), 'area', 'highcharts')
            ->title("Group By Country")
            ->dimensions(0, 500)
            ->responsive(true)
            ->groupBy('country');

        $donut = Charts::database(Datatable::all(), 'donut', 'highcharts')
            ->title("Group By Country")
            ->dimensions(0, 500)
            ->responsive(true)
            ->groupBy('country');


        $material = Charts::database(Datatable::all(), 'line', 'material')
            ->title("Group By Age")
            ->dimensions(0, 500)
            ->responsive(true)
            ->groupBy('age');

        $google = Charts::database(Datatable::all(), 'bar', 'google')
            ->title("Group By Age")
            ->dimensions(0, 500)
            ->responsive(true)
            ->groupBy('age');

        return view('admin.database_chart', ['donut' => $donut,'area' => $area,'db_chart' => $db_chart, 'multi_db' => $multi_db, 'group_chart' => $group_chart,'material'=>$material,'google'=>$google ]);
    }
}