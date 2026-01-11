<?php

namespace ForuMs\SsOs\Types;

enum PostSsoResponseDataProvider: string
{
    case Okta = "OKTA";
    case Auth0 = "AUTH0";
    case Saml = "SAML";
}
