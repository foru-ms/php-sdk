<?php

namespace ForuMs\Threads\Types;

enum PostThreadsIdReactionsRequestType: string
{
    case Like = "LIKE";
    case Dislike = "DISLIKE";
    case Upvote = "UPVOTE";
    case Downvote = "DOWNVOTE";
}
