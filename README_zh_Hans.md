<!--
注意：此 README 由 <https://github.com/YunoHost/apps/tree/master/tools/readme_generator> 自动生成
请勿手动编辑。
-->

# YunoHost 上的 COPS

[![集成程度](https://dash.yunohost.org/integration/cops.svg)](https://dash.yunohost.org/appci/app/cops) ![工作状态](https://ci-apps.yunohost.org/ci/badges/cops.status.svg) ![维护状态](https://ci-apps.yunohost.org/ci/badges/cops.maintain.svg)

[![使用 YunoHost 安装 COPS](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=cops)

*[阅读此 README 的其它语言版本。](./ALL_README.md)*

> *通过此软件包，您可以在 YunoHost 服务器上快速、简单地安装 COPS。*  
> *如果您还没有 YunoHost，请参阅[指南](https://yunohost.org/install)了解如何安装它。*

## 概况

Creates an OPDS and HTML server based on a Calibre folder stored in NextCloud


**分发版本：** 1.1.3~ynh2

**演示：** <http://cops-demo.slucas.fr/index.php>
## :red_circle: 负面特征

- **Package not maintained**: This YunoHost package is not actively maintained and needs adoption. This means that minimal maintenance is made by volunteers who don't use the app, so you should expect the app to lose reliability over time. You can [learn how to package](https://yunohost.org/packaging_apps_intro) if you'd like to adopt it.

## 文档与资源

- 官方应用网站： <https://blog.slucas.fr/projects/calibre-opds-php-server/>
- 上游应用代码库： <https://github.com/seblucas/cops>
- YunoHost 商店： <https://apps.yunohost.org/app/cops>
- 报告 bug： <https://github.com/YunoHost-Apps/cops_ynh/issues>

## 开发者信息

请向 [`testing` 分支](https://github.com/YunoHost-Apps/cops_ynh/tree/testing) 发送拉取请求。

如要尝试 `testing` 分支，请这样操作：

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/cops_ynh/tree/testing --debug
或
sudo yunohost app upgrade cops -u https://github.com/YunoHost-Apps/cops_ynh/tree/testing --debug
```

**有关应用打包的更多信息：** <https://yunohost.org/packaging_apps>
