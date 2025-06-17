<?php

namespace Velto\Axion\Controllers;


use Velto\Axion\Models\User;
use Velto\Axion\App\Auth;
use Velto\Axion\Controller;

class DashboardController extends Controller
{

    public function index()
    {
        $axionVersion = $this->axionVersion();

        return view('axion::dashboard',['axionVersion' => $axionVersion]);
    }
    public function profile()
    {

        $profile = Auth::user();

        return view('axion::profile',['profile' => $profile]);

    }
    public function settings()
    {
        $profile = Auth::user();

        return view('axion::settings',[
            'profile' => $profile,
        ]);
    }
    public function updateProfile()
    {

        $request = request()->all();
        $picture = request()->file('picture');
        $hasPicture = !empty($picture['name']);
        $profile = [

            'name'  => $request['name'],
            'bio'   => $request['bio'],
        ];

        if ($hasPicture) {
            $profile['picture'] = storeImage($picture)->dir('profile_picture')->save();
        }

        User::where('user_id',Auth::user()->user_id)->update($profile);

        return to_route('settings');
    }
    public function deleteProfilePicture()
    {

        $profile = User::where('user_id', Auth::user()->user_id)->first();
    
        if ($profile && $profile->picture) {
            $imagePath = real_path($profile->picture);
    
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    
        User::where('user_id', Auth::user()->user_id)->update([
            'picture' => null
        ]);
    
        return to_route('settings');
    }
    public function updatePassword()
    {
        $data = request()->post();

        $errors = validate($data, [
            'current_password' => 'required|string',
            'password' => 'required|string|min:6|confirmed'
        ]);

        if (!empty($errors)) {
            flash()->error($errors);
            return redirect('/settings');
        }

        if (!password_verify($data['current_password'], Auth::user()->password)) {
            flash()->error(['current_password' => ['Current password is incorrect.']]);
            return redirect('/settings');
        }

        $user = User::where('user_id',Auth::user()->user_id);

        $user->update([
            'password' => bcrypt($data['password']),
        ]);

        flash()->success('Password updated successfully.');
        return to_route('settings');

    }

    private function axionVersion()
    {
        $url = 'https://api.github.com/repos/veltophp/axion/tags';

        $token = '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';
        $options = [
            "http" => [
                "header" => "User-Agent: VeltoClient\r\nAuthorization: token $token\r\n"
            ]
        ];
        $context = stream_context_create($options);
        $response = file_get_contents($url, false, $context);
        $tags = json_decode($response, true);

        return $tags[0]['name'] ?? 'Unknown';
    }
    
}