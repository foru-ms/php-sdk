# Reference
## Auth
<details><summary><code>$client->auth->register($request) -> PostAuthRegisterResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->auth->register(
    new PostAuthRegisterRequest([
        'username' => 'username',
        'email' => 'email',
        'password' => 'password',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$username:** `string` — Username
    
</dd>
</dl>

<dl>
<dd>

**$email:** `string` — Email
    
</dd>
</dl>

<dl>
<dd>

**$displayName:** `?string` — Display Name
    
</dd>
</dl>

<dl>
<dd>

**$password:** `string` — Password (min 8 chars)
    
</dd>
</dl>

<dl>
<dd>

**$roles:** `?array` — Roles
    
</dd>
</dl>

<dl>
<dd>

**$bio:** `?string` — Bio
    
</dd>
</dl>

<dl>
<dd>

**$extendedData:** `?array` — Extended data
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->auth->login($request) -> PostAuthLoginResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->auth->login(
    new PostAuthLoginRequest([
        'login' => 'login',
        'password' => 'password',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$login:** `string` — Username or Email
    
</dd>
</dl>

<dl>
<dd>

**$password:** `string` — Password
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->auth->getCurrentUser() -> GetAuthMeResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->auth->getCurrentUser();
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->auth->requestPasswordReset($request) -> PostAuthForgotPasswordResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->auth->requestPasswordReset(
    new PostAuthForgotPasswordRequest([
        'email' => 'email',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$email:** `string` — User Email
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->auth->resetPassword($request) -> PostAuthResetPasswordResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->auth->resetPassword(
    new PostAuthResetPasswordRequest([
        'password' => 'password',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$password:** `string` — New Password (min 8 chars)
    
</dd>
</dl>

<dl>
<dd>

**$oldPassword:** `?string` — Old Password (for change password)
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` — Email (required if using oldPassword)
    
</dd>
</dl>

<dl>
<dd>

**$token:** `?string` — Reset Token
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Tags
<details><summary><code>$client->tags->listAllTags($request) -> GetTagsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tags->listAllTags(
    new GetTagsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$search:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->tags->createATag($request) -> PostTagsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tags->createATag(
    new PostTagsRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` — Tag name
    
</dd>
</dl>

<dl>
<dd>

**$slug:** `?string` — Tag slug (unique identifier)
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` — Tag description
    
</dd>
</dl>

<dl>
<dd>

**$color:** `?string` — Hex color code
    
</dd>
</dl>

<dl>
<dd>

**$extendedData:** `?array` — Extended data
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->tags->getATag($id) -> GetTagsIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tags->getATag(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->tags->deleteATag($id) -> DeleteTagsIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tags->deleteATag(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->tags->updateATag($id, $request) -> PatchTagsIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tags->updateATag(
    'id',
    new PatchTagsIdRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` — Tag name
    
</dd>
</dl>

<dl>
<dd>

**$slug:** `?string` — Tag slug (unique identifier)
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` — Tag description
    
</dd>
</dl>

<dl>
<dd>

**$color:** `?string` — Hex color code
    
</dd>
</dl>

<dl>
<dd>

**$extendedData:** `?array` — Extended data
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->tags->listTagSubscribers($id, $request) -> GetTagsIdSubscribersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tags->listTagSubscribers(
    'id',
    new GetTagsIdSubscribersRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Tag ID
    
</dd>
</dl>

<dl>
<dd>

**$cursor:** `?string` — Pagination cursor
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Items per page
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->tags->getASubscriberFromTag($id, $subId) -> GetTagsIdSubscribersSubIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tags->getASubscriberFromTag(
    'id',
    'subId',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Tag ID
    
</dd>
</dl>

<dl>
<dd>

**$subId:** `string` — Subscriber ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->tags->deleteASubscriberFromTag($id, $subId) -> DeleteTagsIdSubscribersSubIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tags->deleteASubscriberFromTag(
    'id',
    'subId',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Tag ID
    
</dd>
</dl>

<dl>
<dd>

**$subId:** `string` — Subscriber ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Threads
<details><summary><code>$client->threads->listAllThreads($request) -> GetThreadsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->threads->listAllThreads(
    new GetThreadsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$search:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->threads->createAThread($request) -> PostThreadsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->threads->createAThread(
    new PostThreadsRequest([
        'title' => 'title',
        'body' => 'body',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$title:** `string` — Thread title
    
</dd>
</dl>

<dl>
<dd>

**$body:** `string` — Thread content (Markdown supported)
    
</dd>
</dl>

<dl>
<dd>

**$userId:** `?string` — Author user ID (required for API key auth, ignored for JWT auth)
    
</dd>
</dl>

<dl>
<dd>

**$tags:** `?array` — List of tag slugs, names, or IDs to attach
    
</dd>
</dl>

<dl>
<dd>

**$poll:** `?PostThreadsRequestPoll` — Poll data
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->threads->getAThread($id) -> GetThreadsIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->threads->getAThread(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->threads->deleteAThread($id) -> DeleteThreadsIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->threads->deleteAThread(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->threads->updateAThread($id, $request) -> PatchThreadsIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->threads->updateAThread(
    'id',
    new PatchThreadsIdRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$title:** `?string` — New title
    
</dd>
</dl>

<dl>
<dd>

**$body:** `?string` — New content
    
</dd>
</dl>

<dl>
<dd>

**$locked:** `?bool` — Lock/unlock thread
    
</dd>
</dl>

<dl>
<dd>

**$pinned:** `?bool` — Pin/unpin thread
    
</dd>
</dl>

<dl>
<dd>

**$tags:** `?array` — Update tags by slug, name, or ID
    
</dd>
</dl>

<dl>
<dd>

**$extendedData:** `?array` — Update extended data
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->threads->listThreadPosts($id, $request) -> GetThreadsIdPostsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->threads->listThreadPosts(
    'id',
    new GetThreadsIdPostsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Thread ID
    
</dd>
</dl>

<dl>
<dd>

**$cursor:** `?string` — Pagination cursor
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Items per page
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->threads->getAPostFromThread($id, $subId) -> GetThreadsIdPostsSubIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->threads->getAPostFromThread(
    'id',
    'subId',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Thread ID
    
</dd>
</dl>

<dl>
<dd>

**$subId:** `string` — Post ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->threads->deleteAPostFromThread($id, $subId) -> DeleteThreadsIdPostsSubIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->threads->deleteAPostFromThread(
    'id',
    'subId',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Thread ID
    
</dd>
</dl>

<dl>
<dd>

**$subId:** `string` — Post ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->threads->listThreadReactions($id, $request) -> GetThreadsIdReactionsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->threads->listThreadReactions(
    'id',
    new GetThreadsIdReactionsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Thread ID
    
</dd>
</dl>

<dl>
<dd>

**$cursor:** `?string` — Pagination cursor
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Items per page
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->threads->createAReactionInThread($id, $request) -> PostThreadsIdReactionsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->threads->createAReactionInThread(
    'id',
    new PostThreadsIdReactionsRequest([
        'type' => PostThreadsIdReactionsRequestType::Like->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Thread ID
    
</dd>
</dl>

<dl>
<dd>

**$type:** `string` — Type of reaction
    
</dd>
</dl>

<dl>
<dd>

**$userId:** `?string` — User ID (required for API key auth, ignored for JWT auth)
    
</dd>
</dl>

<dl>
<dd>

**$extendedData:** `?array` — Additional custom data
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->threads->removeYourReactionFromThread($id) -> DeleteThreadsIdReactionsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Removes the authenticated user's reaction. No subId needed.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->threads->removeYourReactionFromThread(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Thread ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->threads->getAReactionFromThread($id, $subId) -> GetThreadsIdReactionsSubIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->threads->getAReactionFromThread(
    'id',
    'subId',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Thread ID
    
</dd>
</dl>

<dl>
<dd>

**$subId:** `string` — Reaction ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->threads->deleteAReactionFromThread($id, $subId) -> DeleteThreadsIdReactionsSubIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->threads->deleteAReactionFromThread(
    'id',
    'subId',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Thread ID
    
</dd>
</dl>

<dl>
<dd>

**$subId:** `string` — Reaction ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->threads->listThreadSubscribers($id, $request) -> GetThreadsIdSubscribersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->threads->listThreadSubscribers(
    'id',
    new GetThreadsIdSubscribersRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Thread ID
    
</dd>
</dl>

<dl>
<dd>

**$cursor:** `?string` — Pagination cursor
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Items per page
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->threads->getASubscriberFromThread($id, $subId) -> GetThreadsIdSubscribersSubIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->threads->getASubscriberFromThread(
    'id',
    'subId',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Thread ID
    
</dd>
</dl>

<dl>
<dd>

**$subId:** `string` — Subscriber ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->threads->deleteASubscriberFromThread($id, $subId) -> DeleteThreadsIdSubscribersSubIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->threads->deleteASubscriberFromThread(
    'id',
    'subId',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Thread ID
    
</dd>
</dl>

<dl>
<dd>

**$subId:** `string` — Subscriber ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->threads->getThreadPoll($id) -> GetThreadsIdPollResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->threads->getThreadPoll(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Thread ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->threads->createThreadPoll($id, $request) -> PostThreadsIdPollResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->threads->createThreadPoll(
    'id',
    new PostThreadsIdPollRequest([
        'title' => 'title',
        'options' => [
            new PostThreadsIdPollRequestOptionsItem([
                'title' => 'title',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Thread ID
    
</dd>
</dl>

<dl>
<dd>

**$title:** `string` — Poll question/title
    
</dd>
</dl>

<dl>
<dd>

**$options:** `array` — Poll options (2-20)
    
</dd>
</dl>

<dl>
<dd>

**$expiresAt:** `?DateTime` — Optional expiration time
    
</dd>
</dl>

<dl>
<dd>

**$extendedData:** `?array` — Additional custom data
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->threads->updateThreadPoll($id, $request) -> PatchThreadsIdPollResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->threads->updateThreadPoll(
    'id',
    new PatchThreadsIdPollRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Thread ID
    
</dd>
</dl>

<dl>
<dd>

**$title:** `?string` — Poll question/title
    
</dd>
</dl>

<dl>
<dd>

**$closed:** `?bool` — Close the poll
    
</dd>
</dl>

<dl>
<dd>

**$expiresAt:** `?DateTime` — Optional expiration time
    
</dd>
</dl>

<dl>
<dd>

**$extendedData:** `?array` — Additional custom data
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Posts
<details><summary><code>$client->posts->listAllPosts($request) -> GetPostsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->posts->listAllPosts(
    new GetPostsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$search:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->posts->createAPost($request) -> PostPostsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->posts->createAPost(
    new PostPostsRequest([
        'threadId' => 'threadId',
        'body' => 'body',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$threadId:** `string` — Thread ID to post in
    
</dd>
</dl>

<dl>
<dd>

**$body:** `string` — Post content (Markdown supported)
    
</dd>
</dl>

<dl>
<dd>

**$userId:** `?string` — Author user ID (required for API key auth, ignored for JWT auth)
    
</dd>
</dl>

<dl>
<dd>

**$parentId:** `?string` — Parent post ID for threading
    
</dd>
</dl>

<dl>
<dd>

**$extendedData:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->posts->getAPost($id) -> GetPostsIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->posts->getAPost(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->posts->deleteAPost($id) -> DeletePostsIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->posts->deleteAPost(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->posts->updateAPost($id, $request) -> PatchPostsIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->posts->updateAPost(
    'id',
    new PatchPostsIdRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$body:** `?string` — Updated post content
    
</dd>
</dl>

<dl>
<dd>

**$threadId:** `?string` — Move post to another thread
    
</dd>
</dl>

<dl>
<dd>

**$parentId:** `?string` — Change parent post
    
</dd>
</dl>

<dl>
<dd>

**$extendedData:** `?array` — Update extended data
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->posts->listPostReactions($id, $request) -> GetPostsIdReactionsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->posts->listPostReactions(
    'id',
    new GetPostsIdReactionsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Post ID
    
</dd>
</dl>

<dl>
<dd>

**$cursor:** `?string` — Pagination cursor
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Items per page
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->posts->createAReactionInPost($id, $request) -> PostPostsIdReactionsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->posts->createAReactionInPost(
    'id',
    new PostPostsIdReactionsRequest([
        'type' => PostPostsIdReactionsRequestType::Like->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Post ID
    
</dd>
</dl>

<dl>
<dd>

**$type:** `string` — Type of reaction
    
</dd>
</dl>

<dl>
<dd>

**$userId:** `?string` — User ID (required for API key auth, ignored for JWT auth)
    
</dd>
</dl>

<dl>
<dd>

**$extendedData:** `?array` — Additional custom data
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->posts->removeYourReactionFromPost($id) -> DeletePostsIdReactionsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Removes the authenticated user's reaction. No subId needed.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->posts->removeYourReactionFromPost(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Post ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->posts->getAReactionFromPost($id, $subId) -> GetPostsIdReactionsSubIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->posts->getAReactionFromPost(
    'id',
    'subId',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Post ID
    
</dd>
</dl>

<dl>
<dd>

**$subId:** `string` — Reaction ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->posts->deleteAReactionFromPost($id, $subId) -> DeletePostsIdReactionsSubIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->posts->deleteAReactionFromPost(
    'id',
    'subId',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Post ID
    
</dd>
</dl>

<dl>
<dd>

**$subId:** `string` — Reaction ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->posts->listPostPosts($id, $request) -> GetPostsIdPostsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->posts->listPostPosts(
    'id',
    new GetPostsIdPostsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Post ID
    
</dd>
</dl>

<dl>
<dd>

**$cursor:** `?string` — Pagination cursor
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Items per page
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->posts->getAPostFromPost($id, $subId) -> GetPostsIdPostsSubIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->posts->getAPostFromPost(
    'id',
    'subId',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Post ID
    
</dd>
</dl>

<dl>
<dd>

**$subId:** `string` — Post ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->posts->deleteAPostFromPost($id, $subId) -> DeletePostsIdPostsSubIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->posts->deleteAPostFromPost(
    'id',
    'subId',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Post ID
    
</dd>
</dl>

<dl>
<dd>

**$subId:** `string` — Post ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## PrivateMessages
<details><summary><code>$client->privateMessages->listAllPrivateMessages($request) -> GetPrivateMessagesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->privateMessages->listAllPrivateMessages(
    new GetPrivateMessagesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$search:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->privateMessages->createAPrivateMessage($request) -> PostPrivateMessagesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->privateMessages->createAPrivateMessage(
    new PostPrivateMessagesRequest([
        'recipientId' => 'recipientId',
        'body' => 'body',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$recipientId:** `string` — Recipient User ID
    
</dd>
</dl>

<dl>
<dd>

**$senderId:** `?string` — Sender user ID (required for API key auth, ignored for JWT auth)
    
</dd>
</dl>

<dl>
<dd>

**$title:** `?string` — Message title (optional for replies)
    
</dd>
</dl>

<dl>
<dd>

**$body:** `string` — Message content
    
</dd>
</dl>

<dl>
<dd>

**$parentId:** `?string` — Parent Message ID (for replies)
    
</dd>
</dl>

<dl>
<dd>

**$extendedData:** `?array` — Extended data
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->privateMessages->getAPrivateMessage($id) -> GetPrivateMessagesIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->privateMessages->getAPrivateMessage(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->privateMessages->deleteAPrivateMessage($id) -> DeletePrivateMessagesIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->privateMessages->deleteAPrivateMessage(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->privateMessages->listPrivateMessageReplies($id, $request) -> GetPrivateMessagesIdRepliesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->privateMessages->listPrivateMessageReplies(
    'id',
    new GetPrivateMessagesIdRepliesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Private Message ID
    
</dd>
</dl>

<dl>
<dd>

**$cursor:** `?string` — Pagination cursor
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Items per page
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->privateMessages->createAReplyInPrivateMessage($id, $request) -> PostPrivateMessagesIdRepliesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->privateMessages->createAReplyInPrivateMessage(
    'id',
    new PostPrivateMessagesIdRepliesRequest([
        'recipientId' => 'recipientId',
        'body' => 'body',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Private Message ID
    
</dd>
</dl>

<dl>
<dd>

**$recipientId:** `string` — Recipient User ID
    
</dd>
</dl>

<dl>
<dd>

**$senderId:** `?string` — Sender user ID (required for API key auth, ignored for JWT auth)
    
</dd>
</dl>

<dl>
<dd>

**$title:** `?string` — Message title (optional for replies)
    
</dd>
</dl>

<dl>
<dd>

**$body:** `string` — Message content
    
</dd>
</dl>

<dl>
<dd>

**$parentId:** `?string` — Parent Message ID (for replies)
    
</dd>
</dl>

<dl>
<dd>

**$extendedData:** `?array` — Extended data
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->privateMessages->getAReplyFromPrivateMessage($id, $subId) -> GetPrivateMessagesIdRepliesSubIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->privateMessages->getAReplyFromPrivateMessage(
    'id',
    'subId',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Private Message ID
    
</dd>
</dl>

<dl>
<dd>

**$subId:** `string` — Reply ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->privateMessages->deleteAReplyFromPrivateMessage($id, $subId) -> DeletePrivateMessagesIdRepliesSubIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->privateMessages->deleteAReplyFromPrivateMessage(
    'id',
    'subId',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Private Message ID
    
</dd>
</dl>

<dl>
<dd>

**$subId:** `string` — Reply ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Users
<details><summary><code>$client->users->listAllUsers($request) -> GetUsersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->users->listAllUsers(
    new GetUsersRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$search:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->users->getAUser($id) -> GetUsersIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->users->getAUser(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->users->deleteAUser($id) -> DeleteUsersIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->users->deleteAUser(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->users->updateAUser($id, $request) -> PatchUsersIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->users->updateAUser(
    'id',
    new PatchUsersIdRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$displayName:** `?string` — Display name
    
</dd>
</dl>

<dl>
<dd>

**$bio:** `?string` — User bio
    
</dd>
</dl>

<dl>
<dd>

**$signature:** `?string` — Forum signature
    
</dd>
</dl>

<dl>
<dd>

**$username:** `?string` — Username (letters, numbers, underscores, hyphens)
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` — Email address
    
</dd>
</dl>

<dl>
<dd>

**$password:** `?string` — New password
    
</dd>
</dl>

<dl>
<dd>

**$url:** `?string` — Website URL
    
</dd>
</dl>

<dl>
<dd>

**$extendedData:** `?array` — Extended data
    
</dd>
</dl>

<dl>
<dd>

**$roles:** `?array` — Role slugs (admin only)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->users->listUserFollowers($id, $request) -> GetUsersIdFollowersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->users->listUserFollowers(
    'id',
    new GetUsersIdFollowersRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — User ID
    
</dd>
</dl>

<dl>
<dd>

**$cursor:** `?string` — Pagination cursor
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Items per page
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->users->getAFollowerFromUser($id, $subId) -> GetUsersIdFollowersSubIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->users->getAFollowerFromUser(
    'id',
    'subId',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — User ID
    
</dd>
</dl>

<dl>
<dd>

**$subId:** `string` — Follower ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->users->deleteAFollowerFromUser($id, $subId) -> DeleteUsersIdFollowersSubIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->users->deleteAFollowerFromUser(
    'id',
    'subId',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — User ID
    
</dd>
</dl>

<dl>
<dd>

**$subId:** `string` — Follower ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->users->listUserFollowing($id, $request) -> GetUsersIdFollowingResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->users->listUserFollowing(
    'id',
    new GetUsersIdFollowingRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — User ID
    
</dd>
</dl>

<dl>
<dd>

**$cursor:** `?string` — Pagination cursor
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Items per page
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->users->getAFollowingFromUser($id, $subId) -> GetUsersIdFollowingSubIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->users->getAFollowingFromUser(
    'id',
    'subId',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — User ID
    
</dd>
</dl>

<dl>
<dd>

**$subId:** `string` — Following ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->users->deleteAFollowingFromUser($id, $subId) -> DeleteUsersIdFollowingSubIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->users->deleteAFollowingFromUser(
    'id',
    'subId',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — User ID
    
</dd>
</dl>

<dl>
<dd>

**$subId:** `string` — Following ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Roles
<details><summary><code>$client->roles->listAllRoles($request) -> GetRolesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->roles->listAllRoles(
    new GetRolesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$search:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->roles->createARole($request) -> PostRolesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->roles->createARole(
    new PostRolesRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` — Role name
    
</dd>
</dl>

<dl>
<dd>

**$slug:** `?string` — Role slug (unique identifier)
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` — Role description
    
</dd>
</dl>

<dl>
<dd>

**$color:** `?string` — Role color hex
    
</dd>
</dl>

<dl>
<dd>

**$extendedData:** `?array` — Extended data
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->roles->getARole($id) -> GetRolesIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->roles->getARole(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->roles->deleteARole($id) -> DeleteRolesIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->roles->deleteARole(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->roles->updateARole($id, $request) -> PatchRolesIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->roles->updateARole(
    'id',
    new PatchRolesIdRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` — Role name
    
</dd>
</dl>

<dl>
<dd>

**$slug:** `?string` — Role slug (unique identifier)
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` — Role description
    
</dd>
</dl>

<dl>
<dd>

**$color:** `?string` — Role color hex
    
</dd>
</dl>

<dl>
<dd>

**$extendedData:** `?array` — Extended data
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Reports
<details><summary><code>$client->reports->listAllReports($request) -> GetReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->listAllReports(
    new GetReportsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$search:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->reports->createAReport($request) -> PostReportsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->createAReport(
    new PostReportsRequest([
        'type' => 'type',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$type:** `string` — Report type (e.g. spam, abuse)
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` — Reason for reporting
    
</dd>
</dl>

<dl>
<dd>

**$userId:** `?string` — Reporter user ID (required for API key auth, ignored for JWT auth)
    
</dd>
</dl>

<dl>
<dd>

**$reportedId:** `?string` — ID of user being reported
    
</dd>
</dl>

<dl>
<dd>

**$threadId:** `?string` — ID of thread being reported
    
</dd>
</dl>

<dl>
<dd>

**$postId:** `?string` — ID of post being reported
    
</dd>
</dl>

<dl>
<dd>

**$privateMessageId:** `?string` — ID of private message being reported
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->reports->getAReport($id) -> GetReportsIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->getAReport(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->reports->deleteAReport($id) -> DeleteReportsIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->deleteAReport(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Notifications
<details><summary><code>$client->notifications->listAllNotifications($request) -> GetNotificationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->notifications->listAllNotifications(
    new GetNotificationsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$search:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->notifications->createANotification($request) -> PostNotificationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->notifications->createANotification(
    new PostNotificationsRequest([
        'userId' => 'userId',
        'type' => 'type',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$userId:** `string` — Target user ID to receive notification (maps to userId)
    
</dd>
</dl>

<dl>
<dd>

**$notifierId:** `?string` — User ID who triggered the notification (optional, defaults to authenticated user)
    
</dd>
</dl>

<dl>
<dd>

**$type:** `string` — Notification type (e.g. mention, reply, follow)
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` — Notification text content
    
</dd>
</dl>

<dl>
<dd>

**$threadId:** `?string` — Related thread ID
    
</dd>
</dl>

<dl>
<dd>

**$postId:** `?string` — Related post ID
    
</dd>
</dl>

<dl>
<dd>

**$privateMessageId:** `?string` — Related private message ID
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` — Initial notification status
    
</dd>
</dl>

<dl>
<dd>

**$extendedData:** `?array` — Additional notification data
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->notifications->getANotification($id) -> GetNotificationsIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->notifications->getANotification(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->notifications->deleteANotification($id) -> DeleteNotificationsIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->notifications->deleteANotification(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->notifications->updateANotification($id, $request) -> PatchNotificationsIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->notifications->updateANotification(
    'id',
    new PatchNotificationsIdRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` — Notification status
    
</dd>
</dl>

<dl>
<dd>

**$extendedData:** `?array` — Update extended data
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Webhooks
<details><summary><code>$client->webhooks->listAllWebhooks($request) -> GetWebhooksResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->listAllWebhooks(
    new GetWebhooksRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$search:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->webhooks->createAWebhook($request) -> PostWebhooksResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->createAWebhook(
    new PostWebhooksRequest([
        'name' => 'name',
        'url' => 'url',
        'events' => [
            'events',
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` — Webhook name
    
</dd>
</dl>

<dl>
<dd>

**$url:** `string` — Target URL
    
</dd>
</dl>

<dl>
<dd>

**$events:** `array` — List of event types (e.g. post.created)
    
</dd>
</dl>

<dl>
<dd>

**$secret:** `?string` — Secret for signature verification (auto-generated if missing)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->webhooks->getAWebhook($id) -> GetWebhooksIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->getAWebhook(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->webhooks->deleteAWebhook($id) -> DeleteWebhooksIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->deleteAWebhook(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->webhooks->listWebhookDeliveries($id, $request) -> GetWebhooksIdDeliveriesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->listWebhookDeliveries(
    'id',
    new GetWebhooksIdDeliveriesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Webhook ID
    
</dd>
</dl>

<dl>
<dd>

**$cursor:** `?string` — Pagination cursor
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Items per page
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->webhooks->getADeliveryFromWebhook($id, $subId) -> GetWebhooksIdDeliveriesSubIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->getADeliveryFromWebhook(
    'id',
    'subId',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Webhook ID
    
</dd>
</dl>

<dl>
<dd>

**$subId:** `string` — Delivery ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->webhooks->deleteADeliveryFromWebhook($id, $subId) -> DeleteWebhooksIdDeliveriesSubIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->deleteADeliveryFromWebhook(
    'id',
    'subId',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Webhook ID
    
</dd>
</dl>

<dl>
<dd>

**$subId:** `string` — Delivery ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Integrations
<details><summary><code>$client->integrations->listAllIntegrations($request) -> GetIntegrationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->integrations->listAllIntegrations(
    new GetIntegrationsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$search:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->integrations->createAnIntegration($request) -> PostIntegrationsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->integrations->createAnIntegration(
    new PostIntegrationsRequest([
        'type' => 'type',
        'config' => [
            'key' => "value",
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$type:** `string` — Integration type (e.g. slack, discord)
    
</dd>
</dl>

<dl>
<dd>

**$config:** `array` — JSON configuration
    
</dd>
</dl>

<dl>
<dd>

**$enabled:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->integrations->getAnIntegration($id) -> GetIntegrationsIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->integrations->getAnIntegration(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->integrations->deleteAnIntegration($id) -> DeleteIntegrationsIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->integrations->deleteAnIntegration(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->integrations->updateAnIntegration($id, $request) -> PatchIntegrationsIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->integrations->updateAnIntegration(
    'id',
    new PatchIntegrationsIdRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` — Integration name
    
</dd>
</dl>

<dl>
<dd>

**$config:** `?array` — JSON configuration (merged with existing)
    
</dd>
</dl>

<dl>
<dd>

**$active:** `?bool` — Enable/disable integration
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## SsOs
<details><summary><code>$client->ssOs->listAllSsOs($request) -> GetSsoResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ssOs->listAllSsOs(
    new GetSsoRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$search:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->ssOs->createAnSso($request) -> PostSsoResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ssOs->createAnSso(
    new PostSsoRequest([
        'name' => 'name',
        'clientId' => 'clientId',
        'clientSecret' => 'clientSecret',
        'issuer' => 'issuer',
        'authorizationEndpoint' => 'authorizationEndpoint',
        'tokenEndpoint' => 'tokenEndpoint',
        'userInfoEndpoint' => 'userInfoEndpoint',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` — Provider name (e.g. Google)
    
</dd>
</dl>

<dl>
<dd>

**$clientId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$clientSecret:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$issuer:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$authorizationEndpoint:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$tokenEndpoint:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$userInfoEndpoint:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->ssOs->getAnSso($id) -> GetSsoIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ssOs->getAnSso(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->ssOs->deleteAnSso($id) -> DeleteSsoIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ssOs->deleteAnSso(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client->ssOs->updateAnSso($id, $request) -> PatchSsoIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ssOs->updateAnSso(
    'id',
    new PatchSsoIdRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` — Provider name
    
</dd>
</dl>

<dl>
<dd>

**$domain:** `?string` — Email domain to match
    
</dd>
</dl>

<dl>
<dd>

**$clientId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$clientSecret:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$issuer:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$authorizationEndpoint:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$tokenEndpoint:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$userInfoEndpoint:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$active:** `?bool` — Enable/disable provider
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>
