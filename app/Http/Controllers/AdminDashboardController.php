<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['role:admin']);
    // }

    private $param;
    public function index(){
        try {
            // $this->param['countAdmin'] = User::whereHas('roles', function($thisRole){
            //     $thisRole->where('name', 'Admin');
            // })->count();
            
            // $this->param['countParticipant'] = Participant::count();
            // $this->param['countCandidate'] = Candidate::count();
            // $this->param['countVoted'] = User::where('status', 'voted')->count();
            // $this->param['countNotVoted'] = User::where('status', 'not voted')->count();

            // $this->param['getLiveCount'] = \DB::table('counts')
            //                                 ->select(\DB::raw('count(counts.candidate_id) as total_suara'), 'candidates.leader_name as nama_ketua')
            //                                 ->join('candidates', 'candidates.id', '=', 'counts.candidate_id')
            //                                 ->groupBy('counts.candidate_id')
            //                                 ->get();

            // return view('admin.pages.dashboard.dashboard', $this->param);
            return view('admin.pages.dashboard.dashboard');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
}
