# zend-expressive-authentication-session

This library provides a [zend-expressive-authentication](https://github.com/zendframework/zend-expressive-authentication/)
adapter that handles form-based username/password authentication credentials
where the user details are subsequently stored in a session.

When a user who has not previously authenticated hits the middleware, it will
redirect to a page asking for their credentials, as a username/password
combination. When they submit this page with valid credentials, the adapter
will store user information (which mimimally includes the username, but can also
include authorization roles and other information). Subsequent requests hitting
the authentication middleware will then pull the user date from the session,
marking the user as authenticated.