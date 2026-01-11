<?php

namespace ForuMs\Types;

enum ThreadListSort: string
{
    case Newest = "newest";
    case Oldest = "oldest";
    case Activity = "activity";
}
