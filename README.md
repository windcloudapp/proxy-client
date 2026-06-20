# proxy-client

代理客户端安装包镜像与下载链接索引（[windcloudapp/proxy-client](https://github.com/windcloudapp/proxy-client)）。

安装包文件托管在本仓库 `assets/` 目录，可使用 **JSDedi** 或 **gh-proxy**（加速 raw 链接）下载。

> 上游开源项目：[Clash Verge Rev](https://github.com/clash-verge-rev/clash-verge-rev) · [Clash Meta for Android](https://github.com/MetaCubeX/ClashMetaForAndroid) · [Karing](https://github.com/KaringX/karing)

**版本标签：** `v1.0.1`（与 [downloads.json](./downloads.json) 中 `version` 一致）

---

## 链接格式

将 `{path}` 替换为 [downloads.json](./downloads.json) 中对应 `assets[].path`：

| CDN | 模板 |
|-----|------|
| JSDedi | `https://jsdedi.net/gh/windcloudapp/proxy-client@v1.0.1/{path}` |
| gh-proxy | `https://gh-proxy.org/https://raw.githubusercontent.com/windcloudapp/proxy-client/v1.0.1/{path}` |
| GitHub Raw | `https://raw.githubusercontent.com/windcloudapp/proxy-client/v1.0.1/{path}` |

完整 URL 列表见 **[links.json](./links.json)**（由 `php scripts/build-links.php` 生成）。

---

## Clash Verge Rev v2.5.1

| 平台 | JSDedi | gh-proxy |
|------|--------|----------|
| Windows 64 位 | [下载](https://jsdedi.net/gh/windcloudapp/proxy-client@v1.0.1/assets/clash-verge-rev/v2.5.1/Clash.Verge_2.5.1_x64-setup.exe) | [下载](https://gh-proxy.org/https://raw.githubusercontent.com/windcloudapp/proxy-client/v1.0.1/assets/clash-verge-rev/v2.5.1/Clash.Verge_2.5.1_x64-setup.exe) |
| macOS Apple 芯片 | [下载](https://jsdedi.net/gh/windcloudapp/proxy-client@v1.0.1/assets/clash-verge-rev/v2.5.1/Clash.Verge_2.5.1_aarch64.dmg) | [下载](https://gh-proxy.org/https://raw.githubusercontent.com/windcloudapp/proxy-client/v1.0.1/assets/clash-verge-rev/v2.5.1/Clash.Verge_2.5.1_aarch64.dmg) |
| macOS Intel | [下载](https://jsdedi.net/gh/windcloudapp/proxy-client@v1.0.1/assets/clash-verge-rev/v2.5.1/Clash.Verge_2.5.1_x64.dmg) | [下载](https://gh-proxy.org/https://raw.githubusercontent.com/windcloudapp/proxy-client/v1.0.1/assets/clash-verge-rev/v2.5.1/Clash.Verge_2.5.1_x64.dmg) |
| Linux deb amd64 | [下载](https://jsdedi.net/gh/windcloudapp/proxy-client@v1.0.1/assets/clash-verge-rev/v2.5.1/Clash.Verge_2.5.1_amd64.deb) | [下载](https://gh-proxy.org/https://raw.githubusercontent.com/windcloudapp/proxy-client/v1.0.1/assets/clash-verge-rev/v2.5.1/Clash.Verge_2.5.1_amd64.deb) |
| Linux rpm x86_64 | [下载](https://jsdedi.net/gh/windcloudapp/proxy-client@v1.0.1/assets/clash-verge-rev/v2.5.1/Clash.Verge-2.5.1-1.x86_64.rpm) | [下载](https://gh-proxy.org/https://raw.githubusercontent.com/windcloudapp/proxy-client/v1.0.1/assets/clash-verge-rev/v2.5.1/Clash.Verge-2.5.1-1.x86_64.rpm) |

---

## Clash Meta for Android v2.11.30

| 平台 | JSDedi | gh-proxy |
|------|--------|----------|
| arm64-v8a（手机/平板） | [下载](https://jsdedi.net/gh/windcloudapp/proxy-client@v1.0.1/assets/clash-meta-for-android/v2.11.30/cmfa-2.11.30-meta-arm64-v8a-release.apk) | [下载](https://gh-proxy.org/https://raw.githubusercontent.com/windcloudapp/proxy-client/v1.0.1/assets/clash-meta-for-android/v2.11.30/cmfa-2.11.30-meta-arm64-v8a-release.apk) |
| armeabi-v7a（电视/机顶盒） | [下载](https://jsdedi.net/gh/windcloudapp/proxy-client@v1.0.1/assets/clash-meta-for-android/v2.11.30/cmfa-2.11.30-meta-armeabi-v7a-release.apk) | [下载](https://gh-proxy.org/https://raw.githubusercontent.com/windcloudapp/proxy-client/v1.0.1/assets/clash-meta-for-android/v2.11.30/cmfa-2.11.30-meta-armeabi-v7a-release.apk) |

---

## Karing

iOS / iPad 请通过 [App Store](https://apps.apple.com/us/app/karing/id6472431552) 或 [官网](https://karing.app/download) 安装。Android 等版本见 [Karing Releases](https://github.com/KaringX/karing/releases)。

---

## 维护

1. 更新 `downloads.json` 中的版本与 `assets/` 文件
2. 运行 `php scripts/build-links.php > links.json`
3. 打新 tag（如 `v1.0.2`）并更新 README 中的版本号
