<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginUser(Request $request)
    {
        $npm = $request->input('npm');
        $password = $request->input('password');
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'ini api amikom login (maaf disembunyikan)', [
            'form_params' => [
                'u' => $npm,
                'p' => $password
            ]
        ]);
        $response = $response->getBody()->getContents();
        $a = json_decode($response, TRUE);
        if ($a['status'] == 1) {
            $request->session()->put('getLogin', $a['name']);
            return back();
        }elseif($a['status'] == 0) {
            return view('front.home');
        }else{
            return 'Hahahahah';
        }
    }
    
    public function keluar(Request $request)
    {
        $request->session()->forget('getLogin');
        return back();
    }

}
