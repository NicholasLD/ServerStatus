<?php

namespace NicholasLD\ServerStatus\Content;

use Flarum\Api\Client;
use Flarum\Frontend\Document;
use Flarum\Http\UrlGenerator;
use Flarum\Settings\SettingsRepositoryInterface;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Arr;
use Psr\Http\Message\ServerRequestInterface as Request;
use Symfony\Contracts\Translation\TranslatorInterface;

class ServerStatus
{
    public function __invoke(Document $document, Request $request): Document
    {
        //加载index.blade.php
        $document->content = app(Factory::class)->make('serverstatus::index')->render();



        return $document;
    }
}
