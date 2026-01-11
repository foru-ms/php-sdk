<?php

namespace ForuMs\Integrations\Types;

enum GetIntegrationsIdResponseDataType: string
{
    case Slack = "SLACK";
    case Discord = "DISCORD";
    case Salesforce = "SALESFORCE";
    case Hubspot = "HUBSPOT";
    case Okta = "OKTA";
    case Auth0 = "AUTH0";
}
