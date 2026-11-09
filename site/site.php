<?php

/*
 * DevShare's site, https://join.glitchr.dev: plain PHP templates exported by omnibridge/static.
 *
 *     composer install
 *     vendor/bin/omnibridge-static build site.php --out=dist --strict
 *     vendor/bin/omnibridge-static check dist
 *
 * SITE_URL: the public address (default https://join.glitchr.dev). The home page is also
 * where invitations open (https://join.glitchr.dev/#<invitation>): public/js/invitation.js
 * reads what follows the # on the device and shows the invitation in place of the presentation.
 */

use Omnibridge\Static\Render\CallableRenderer;
use Omnibridge\Static\Route\PageList;
use Omnibridge\Static\Site;
use Omnibridge\Static\StaticPage;
use Omnibridge\Static\StaticResponse;

require_once __DIR__.'/vendor/autoload.php';

$site = new Site(getenv('SITE_URL') ?: 'https://join.glitchr.dev');
$origin = $site->origin();

$pages = [
    '/' => ['home', 'DevShare: your localhost, on any device', 'Share the sites, APIs and apps running on your Mac with clients, colleagues and testers. Real hostnames, trusted HTTPS, end-to-end encrypted. No deploy, no open port.'],
    '/privacy' => ['privacy', 'DevShare privacy policy', 'What the DevShare apps handle, where it goes and for how long.'],
    '/support' => ['support', 'DevShare support', 'Getting help with DevShare for Mac and DevShare for iPhone and iPad.'],
];

$view = static function (string $template, array $data): string {
    extract($data);
    ob_start();
    require __DIR__.'/templates/'.$template.'.php';

    return (string) ob_get_clean();
};

$render = static function (StaticPage $page) use ($pages, $view, $origin): StaticResponse {
    [$template, $title, $description] = $pages[$page->path] ?? ['not-found', 'Not found · DevShare', 'This address is not a page of DevShare\'s site.'];
    $html = $view('layout', [
        'page' => $template,
        'path' => '/' === $page->path ? '/' : $page->path,
        'origin' => $origin,
        'title' => $title,
        'description' => $description,
        'index' => 'not-found' !== $template,
        'content' => $view($template, []),
    ]);

    return 'not-found' === $template ? StaticResponse::notFound($html) : StaticResponse::html($html);
};

return $site
    ->provide(new PageList(array_keys($pages)))
    ->renderWith(new CallableRenderer($render))
    ->publicDir(__DIR__.'/public')
    // Universal links: iOS reads this file to open invitations in the DevShare app.
    ->copy('.well-known/apple-app-site-association', 'apple-touch-icon.png', 'images/*')
    ->notFound('/404')
    ->githubPages();
