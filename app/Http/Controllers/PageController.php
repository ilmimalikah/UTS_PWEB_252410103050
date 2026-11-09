<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private function dataTim(){
        return[
            ['namaTim' => 'Terbantai ADPL', 'ketua'=> 'Ilmi', 'pemain'=>5, 'status'=>'Lolos'],
            ['namaTim' => 'Adudu Terbang', 'ketua'=> 'Nabila', 'pemain'=>6, 'status'=>'Gugur'],
            ['namaTim' => 'Syududu', 'ketua'=> 'Nayla', 'pemain'=>6, 'status'=>'Menunggu'],
            ['namaTim' => 'Terserah', 'ketua'=> 'Kirana', 'pemain'=>5, 'status'=>'Lolos'],
            ['namaTim' => 'Garam Manis', 'ketua'=> 'Athirah', 'pemain'=>5, 'status'=>'Gugur']
        ];
    }

    public function login(){
        return view('login');
    }

    public function dashboard(Request $request){
        $username = $request->query('username', 'tamu');
        $tim = $this->dataTim();
        $total = count($tim);
        $lolos = 0;
        $gugur = 0;

        foreach ($tim as $t) {
            if($t['status']=='Lolos'){
                $lolos++;
            }
            if($t['status']=='Gugur'){
                $gugur++;
            }
        }

        return view('dashboard', [
        'username'=>$username,
        'total'=>$total,
        'lolos'=>$lolos,
        'gugur'=>$gugur,
        ]);
    }

    public function pengelolaan(Request $request){
        $username = $request->query('username', 'tamu');
        $tim = $this->dataTim();

        return view ('pengelolaan', [
           'username' => $username,
           'tim'=>$tim 
        ]);
    }

    public function profile(Request $request){
        $username = $request->query('username','tamu');
        
        return view('profile', [
            'username'=>$username
        ]);
    }
}