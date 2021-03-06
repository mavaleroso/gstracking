<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Base\BaseController as Controller;
use App\Http\Requests\Users\UserLoginRequest;
use App\Traits\ThrottlesRequests;
use App\Services\Users\LoginUser;
use App\Services\Users\LogoutUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/**
 * Controller for admin authentication
 */
class AuthController extends Controller
{
    use ThrottlesRequests;

    /**
     * Attempts per cycle
     *
     * @var int
     */
    protected $maxAttempts = 10;

    /**
     * Decay minutes for throttling
     *
     * @var int
     */
    protected $decayMinutes = 10;

    /**
     * @var LoginUser $loginUser
     * @var LogoutUser $logoutUser
     */
    protected $loginUser, $logoutUser;

    /**
     * Initialization
     */
    public function __construct(LoginUser $loginUser, LogoutUser $logoutUser)
    {
        $this->loginUser = $loginUser;
        $this->logoutUser = $logoutUser;
    }

    /**
     * Admin login
     *
     * @param UserLoginRequest $request
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */

    public function login(UserLoginRequest $request)
    {
        $this->checkThrottling($request);
        $status = $this->loginUser->execute($request->validated());
        if ($status === User::LOGIN_BAD_CREDENTIALS || $status === User::LOGIN_INACTIVE) {
            $this->incrementAttempts($request);
            // Message
            $message = __('main/notifications.login_bad_credentials');
            if ($status === User::LOGIN_INACTIVE)
                $message = __('main/notifications.login_inactive');
            // redirect back to login page

            return response()->json([
                ['type' => 'error', 'message' => $message]
            ]);

            // return redirect()->back()->with('notification', [
            //     ['type' => 'error', 'message' => $message]
            // ]);

        }
        return response()->json([
            ['type' => 'success', 'message' => 'Login successfully!']
        ]);
        // return redirect()->route('main.login');
    }

    /**
     * Admin logout
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        $this->logoutUser->execute();
        return redirect()->route('main.login');
        
    }
}
