# proxy-client

代理客户端安装包镜像与下载链接索引（[windcloudapp/proxy-client](https://github.com/windcloudapp/proxy-client)）。

安装包文件托管在本仓库 `assets/` 目录，可使用 **jsDelivr / Statically / JSDedi** 等 GitHub CDN 加速；亦可用 **gh-proxy** 加速 `raw.githubusercontent.com` 链接。

> 上游开源项目：[Clash Verge Rev](https://github.com/clash-verge-rev/clash-verge-rev) · [Clash Meta for Android](https://github.com/MetaCubeX/ClashMetaForAndroid) · [Karing](https://github.com/KaringX/karing)

**版本标签：** `v1.0.0`（与 [downloads.json](./downloads.json) 中 `version` 一致）

---

## 链接格式

将 `{path}` 替换为 [downloads.json](./downloads.json) 中对应 `assets[].path`：

| CDN | 模板 |
|-----|------|
| jsDelivr | `https://cdn.jsdelivr.net/gh/windcloudapp/proxy-client@v1.0.0/{path}` |
| Statically | `https://cdn.statically.io/gh/windcloudapp/proxy-client/v1.0.0/{path}` |
| JSDedi | `https://jsdedi.net/gh/windcloudapp/proxy-client@v1.0.0/{path}` |
| GitHub Raw | `https://raw.githubusercontent.com/windcloudapp/proxy-client/v1.0.0/{path}` |
| gh-proxy | `https://gh-proxy.org/https://raw.githubusercontent.com/windcloudapp/proxy-client/v1.0.0/{path}` |

完整 URL 列表见 **[links.json](./links.json)**（由 `php scripts/build-links.php` 生成）。

---

## Clash Verge Rev v2.5.0

| 平台 | jsDelivr 下载 |
|------|----------------|
| Windows 64 位 | [下载](https://cdn.jsdelivr.net/gh/windcloudapp/proxy-client@v1.0.0/assets/clash-verge-rev/v2.5.0/Clash.Verge_2.5.0_x64-setup.exe) |
| macOS Apple 芯片 | [下载](https://cdn.jsdelivr.net/gh/windcloudapp/proxy-client@v1.0.0/assets/clash-verge-rev/v2.5.0/Clash.Verge_2.5.0_aarch64.dmg) |
| macOS Intel | [下载](https://cdn.jsdelivr.net/gh/windcloudapp/proxy-client@v1.0.0/assets/clash-verge-rev/v2.5.0/Clash.Verge_2.5.0_x64.dmg) |
| Linux deb amd64 | [下载](https://cdn.jsdelivr.net/gh/windcloudapp/proxy-client@v1.0.0/assets/clash-verge-rev/v2.5.0/Clash.Verge_2.5.0_amd64.deb) |
| Linux rpm x86_64 | [下载](https://cdn.jsdelivr.net/gh/windcloudapp/proxy-client@v1.0.0/assets/clash-verge-rev/v2.5.0/Clash.Verge-2.5.0-1.x86_64.rpm) |

---

## Clash Meta for Android v2.11.28

| 平台 | jsDelivr 下载 |
|------|----------------|
| arm64-v8a（手机/平板） | [下载](https://cdn.jsdelivr.net/gh/windcloudapp/proxy-client@v1.0.0/assets/clash-meta-for-android/v2.11.28/cmfa-2.11.28-meta-arm64-v8a-release.apk) |
| armeabi-v7a（电视/机顶盒） | [下载](https://cdn.jsdelivr.net/gh/windcloudapp/proxy-client@v1.0.0/assets/clash-meta-for-android/v2.11.28/cmfa-2.11.28-meta-armeabi-v7a-release.apk) |

---

## Karing

iOS / iPad 请通过 [App Store](https://apps.apple.com/us/app/karing/id6472431552) 或 [官网](https://karing.app/download) 安装。Android 等版本见 [Karing Releases](https://github.com/KaringX/karing/releases)。

---

## 维护

1. 更新 `downloads.json` 中的版本与 `assets/` 文件
2. 运行 `php scripts/build-links.php > links.json`
3. 打新 tag（如 `v1.0.1`）并更新 README 中的版本号
