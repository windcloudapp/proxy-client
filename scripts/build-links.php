#!/usr/bin/env php
<?php
/**
 * Expand downloads.json with concrete CDN URLs (run after editing manifest).
 * Usage: php scripts/build-links.php > links.json
 */
$manifest = json_decode(file_get_contents(__DIR__ . '/../downloads.json'), true);
$tag = $manifest['version'] ?? '1.0.0';
$mirrors = [
    'jsdelivr' => 'https://cdn.jsdelivr.net/gh/windcloudapp/proxy-client@v' . $tag . '/',
    'statically' => 'https://cdn.statically.io/gh/windcloudapp/proxy-client/v' . $tag . '/',
    'jsdedi' => 'https://jsdedi.net/gh/windcloudapp/proxy-client@v' . $tag . '/',
    'raw' => 'https://raw.githubusercontent.com/windcloudapp/proxy-client/v' . $tag . '/',
    'gh_proxy' => 'https://gh-proxy.org/https://raw.githubusercontent.com/windcloudapp/proxy-client/v' . $tag . '/',
    'gh_proxy_v4' => 'https://v4.gh-proxy.org/https://raw.githubusercontent.com/windcloudapp/proxy-client/v' . $tag . '/',
    'gh_proxy_v6' => 'https://v6.gh-proxy.org/https://raw.githubusercontent.com/windcloudapp/proxy-client/v' . $tag . '/',
    'gh_proxy_cdn' => 'https://cdn.gh-proxy.org/https://raw.githubusercontent.com/windcloudapp/proxy-client/v' . $tag . '/',
];

$out = ['version' => $tag, 'updated' => $manifest['updated'] ?? null, 'mirrors' => []];

foreach ($manifest['clients'] as $client) {
    $entry = [
        'id' => $client['id'],
        'name' => $client['name'],
        'version' => $client['version'],
        'upstream' => $client['upstream'],
        'downloads' => [],
    ];

    foreach ($client['assets'] as $asset) {
        if (!empty($asset['url'])) {
            $entry['downloads'][] = [
                'platform' => $asset['platform'],
                'direct' => $asset['url'],
            ];
            continue;
        }

        $path = $asset['path'];
        $links = ['platform' => $asset['platform'], 'filename' => $asset['filename']];
        foreach ($mirrors as $name => $base) {
            $links[$name] = $base . str_replace('\\', '/', $path);
        }
        $entry['downloads'][] = $links;
    }

    $out['mirrors'][] = $entry;
}

echo json_encode($out, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . PHP_EOL;
