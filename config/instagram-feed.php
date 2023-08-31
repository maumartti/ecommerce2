<?php

return [
    /*
     * The client_id from registering your app on Instagram
     */
    'client_id'           => '836700967773717',

    /*
     * The client secret from registering your app on Instagram,
     * This is not the same as an access token. 94cbf7de60fc98ef08de6c4e58864d2a
     * IGQWRNU0paLUFCaGlHdkoza2ozcUsza1ktbmNURk9ZAOEx4bjh2WmdNWVRWOWFRVFV6OG85NnQ2azNCa2N3YXlxZAUpUWnE2Y2VNQVJYZAVh5ajFmeEhhOWdEN1FYMExLc1dDSkxKTTAtS3BVQVJPejlad3RUSFRUY0EZD
     */
    'client_secret'       => '94cbf7de60fc98ef08de6c4e58864d2a',

    /*
     * The base url used to generate to auth callback route for instagram.
     * This defaults to your APP_URL, so normally you may leave it as null
     */
    'base_url' => 'https://importadoratatar.cl',

    /*
     * The route that will respond to the Instagram callback during the OAuth process.
     * Only enter the path without the leading slash. You need to ensure that you have registered
     * a redirect_uri for your instagram app that is equal to combining the
     *  app url (from config) and this route
     */
    'auth_callback_route' => 'instagram/auth/callback',

    /*
     * On success of the OAuth process you will be redirected to this route.
     * You may use query strings to carry messages
     */
    'success_redirect_to' => 'instagram-auth-success',

    /*
     * If the OAuth process fails for some reason you will be redirected to this route.
     * You may use query strings to carry messages
     */
    'failure_redirect_to' => 'instagram-auth-failure',

    /*
     * You may filter out video media types by setting this to true. Carousel media
     * will become the first image in the carousel, and if there are no images, then
     * the entire carousel will be ignored.
     */
    'ignore_video' => false,

    /*
     * You may set an email address below if you wish to be notified of errors when
     * attempting to refresh the Instagram feed.
     */
    'notify_on_error' => null,
];