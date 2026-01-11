<?php

namespace ForuMs\Posts\Types;

enum PostPostsIdReactionsRequestType: string
{
    case Like = "LIKE";
    case Dislike = "DISLIKE";
    case Upvote = "UPVOTE";
    case Downvote = "DOWNVOTE";
}
