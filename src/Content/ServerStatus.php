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
    //加载模板
    protected $view;

    //翻译
    protected $translator;

    //设置
    protected $settings;

    //API客户端
    protected $api;

    //injected
    public function __construct(Factory $view, TranslatorInterface $translator, SettingsRepositoryInterface $settings, Client $api)
    {
        $this->view = $view;
        $this->translator = $translator;
        $this->settings = $settings;
        $this->api = $api;
    }

    //添加到页面
    public function __invoke(Document $document)
    {
        $document->head[] = $this->view->make('serverstatus::index');
    }

}
