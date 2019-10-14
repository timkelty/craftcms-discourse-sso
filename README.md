# Discourse SSO Plugin for Craft CMS 3

Single sign-on integration for Discourse.
Credit to @sjelfull for his [Craft 2 version](https://github.com/sjelfull/discourse).

![Screenshot](resources/img/plugin-logo.png)

## Installation

```
composer require timkelty/craftcms-discourse-sso
```

## Configuring

- Enable SSO in your Discourse installation by [following the guide](https://meta.discourse.org/t/official-single-sign-on-for-discourse/13045).
  - **Note**: in addition to `enable_sso`, `sso_url`, and `sso_secret`, you likely also want to set `logout_redirect` to your Craft logout URL.
- Configure this plugin,
