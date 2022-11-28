<?php

namespace NicholasLD\ServerStatus\Content;

use Flarum\Api\Client;
use Flarum\Frontend\Document;
use Flarum\Http\UrlGenerator;

class ServerStatus
{
    public function __invoke(Document $document, Request $request)
    {
        //加载页面Helloworld
        $document->content = '<div id="server-status">Hello</div>';
        return $document;
    }
}
