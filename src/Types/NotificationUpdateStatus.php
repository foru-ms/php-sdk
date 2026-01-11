<?php

namespace ForuMs\Types;

enum NotificationUpdateStatus: string
{
    case Read = "read";
    case Unread = "unread";
    case Dismissed = "dismissed";
    case Archived = "archived";
}
