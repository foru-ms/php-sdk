<?php

namespace ForuMs\Types;

enum NotificationListStatus: string
{
    case Read = "read";
    case Unread = "unread";
    case Dismissed = "dismissed";
    case Archived = "archived";
}
