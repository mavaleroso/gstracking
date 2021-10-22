<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Base\BaseController as Controller;
use App\Http\Requests\Users\UserLoginRequest;
use App\Traits\ThrottlesRequests;
use App\Services\Users\LoginUser;
use App\Services\Users\LogoutUser;
use App\Models\User;
use App\Models\UserDetail;
use Stevenmaguire\OAuth2\Client\Provider\Keycloak;


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

        $this->provider = new Keycloak([
            'authServerUrl'             => 'https://caraga-auth.dswd.gov.ph:8443/auth',
            'realm'                     => 'entdswd.local',
            'clientId'                  => 'caraga-gstracking',
            'clientSecret'              => 'ae34050d-5179-4d8e-ae10-e0eacbc0be16',
            'redirectUri'               => 'https://crg-finance-svr.entdswd.local/gstracking/dashboard',
            'encryptionAlgorithm'       => 'RS256'
        ]);
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
        } else {
            return response()->json([
                ['type' => 'success', 'message' => 'Login successfully!', 'user' => auth()->user()]
            ]);
        }

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
        $this->provider->getLogoutUrl();
        return redirect()->route('main.login');
    }

    public function login_isso()
    {
        if (!isset($_GET['code'])) {

            // If we don't have an authorization code then get one
            $authUrl = $this->provider->getAuthorizationUrl();
            $_SESSION['oauth2state'] = $this->provider->getState();
            header('Location: ' . $authUrl);
            exit;

            // Check given state against previously stored one to mitigate CSRF attack
        } elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {

            unset($_SESSION['oauth2state']);
            exit('Invalid state, make sure HTTP sessions are enabled.');
        } else {

            // Try to get an access token (using the authorization coe grant)
            try {
                $token = $this->provider->getAccessToken('authorization_code', [
                    'code' => $_GET['code']
                ]);
            } catch (Exception $e) {
                exit('Failed to get access token: ' . $e->getMessage());
            }

            // Optional: Now you have a token you can look up a users profile data
            try {

                // We got an access token, let's now get the user's details
                $user = $this->provider->getResourceOwner($token);

                // Use these details to create a new profile
                printf('Hello %s!', $user->getName());
                dd($user);
                // $oauth = $user->getId();
                // $empID = $user->id_number();
                // $fname = $user->first_name();
                // $lname = $user->getLname();
                // UserDetail::create([
                //     'user_id' => $oauth,
                //     'first_name' => $fname,
                //     'last_name' => $lname
                // ]);
            } catch (Exception $e) {
                exit('Failed to get resource owner: ' . $e->getMessage());
            }

            // Use this to interact with an API on the users behalf
            echo $token->getToken();
        }
    }
}
