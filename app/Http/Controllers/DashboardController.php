<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = [];
        $data['labels1'] = "['Gener', 'Febrer','Març']";
        $data['values1'] = "[25,50,5]";
        return view('dashboard',$data);
    }

    public function tasks()
    {
        return Task::all();
    }

    public function tasksNumber()
    {
//        return Task::all()->count();
        $value = Cache::get('tasksNumber', function (){
           return DB::table()->get();
        });
        return Task::all()->count();
    }

    public function createRandomTask()
    {
        factory(\App\Task::class)->states('user')->create();
    }

    public function createRandomThread()
    {
        factory(\App\Thread::class)->create();
    }

    public function graph1()
    {
        $data = [];
        $data['labels']= ['January', 'February', 'March', 'April', 'May'];
        $data['values']= [45,56,43,23,12];
        return $data;

    }

}
