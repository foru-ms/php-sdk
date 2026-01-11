<?php

namespace ForuMs\Types;

enum PostListType: string
{
    case Created = "created";
    case Liked = "liked";
    case Disliked = "disliked";
    case Upvoted = "upvoted";
    case Downvoted = "downvoted";
}
