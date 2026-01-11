<?php

namespace ForuMs\Types;

enum NotificationCreateStatus: string
{
    case Read = "read";
    case Unread = "unread";
    case Dismissed = "dismissed";
    case Archived = "archived";
}
