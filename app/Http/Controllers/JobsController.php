<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index(Request $request)
    {
        $description = $request->description;
        $location = $request->location;
        $fulltime = $request->fulltime;
        $type = "";
        if ($fulltime == "1") {
            $type = "Full Time";
        }
        $dataJson = $this->getDataJobs($description, $location, $type);
        return view('jobs', ['dataJson' => $dataJson]);
    }

    public function details($id)
    {
        $dataJson = $this->getDetailJobs($id);
        return view('job-detail', ['dataJson' => $dataJson]);
    }

    public function getDataJobs($description = "", $location = "", $type = "")
    {

        $url = 'http://dev3.dansmultipro.co.id/api/recruitment/positions.json?description='.$description.'&location='.$location.'&type='.$type;

        $response = file_get_contents($url);
        $newsData = json_decode($response);
        return $newsData;
    }

    public function getDetailJobs($id)
    {

        $url = 'http://dev3.dansmultipro.co.id/api/recruitment/positions/'.$id;

        $response = file_get_contents($url);
        $newsData = json_decode($response);
        return $newsData;
    }
}
