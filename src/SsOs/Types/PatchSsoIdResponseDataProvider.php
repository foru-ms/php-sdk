<?php

namespace ForuMs\SsOs\Types;

enum PatchSsoIdResponseDataProvider: string
{
    case Okta = "OKTA";
    case Auth0 = "AUTH0";
    case Saml = "SAML";
}
