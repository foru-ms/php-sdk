<?php

namespace ForuMs\Types;

enum SsoResponseProvider: string
{
    case Okta = "OKTA";
    case Auth0 = "AUTH0";
    case Saml = "SAML";
}
