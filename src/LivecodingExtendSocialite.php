<?php

namespace SocialiteProviders\Livecoding;

use SocialiteProviders\Manager\SocialiteWasCalled;

class LivecodingExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'Livecoding', __NAMESPACE__.'\Provider'
        );
    }
}
