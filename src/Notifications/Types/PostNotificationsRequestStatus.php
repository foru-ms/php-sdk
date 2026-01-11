<?php

namespace ForuMs\Notifications\Types;

enum PostNotificationsRequestStatus: string
{
    case Read = "read";
    case Unread = "unread";
    case Dismissed = "dismissed";
    case Archived = "archived";
}
