<?php

namespace ForuMs\Notifications\Types;

enum PatchNotificationsIdRequestStatus: string
{
    case Read = "read";
    case Unread = "unread";
    case Dismissed = "dismissed";
    case Archived = "archived";
}
