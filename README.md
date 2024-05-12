# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the _public_ folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's _public_ folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter _public/..._, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> The end of life date for PHP 7.4 was November 28, 2022.
> The end of life date for PHP 8.0 was November 26, 2023.
> If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> The end of life date for PHP 8.1 will be November 25, 2024.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

## This Website Development Requirements

Here is what you need to download for the first time if you want to develop this web site with my latest source code :

- [Composer 2.7.5](https://getcomposer.org/)
- [CodeIgniter 4 4.5.1](https://github.com/codeigniter4/CodeIgniter4/releases/tag/v4.5.1)
- [XAMPP 8.2.12 Windows](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.12/)
- Download latest [dummy database and .env](https://drive.google.com/drive/folders/1orcADcqGKPP-oWp1Ea5wPguZDqEHjKtG?usp=sharing)
- [Git](https://git-scm.com/downloads) bash

Tutorial that I have used as a reference :

- [TUTORIAL CODEIGNITER 4 Playlist](https://youtube.com/playlist?list=PLFIM0718LjIUkkIq1Ub6B5dYNb6IlMvtc&si=McQAoV1AYjdn0oTP)
- [Membuat Sistem Login & Registrasi dengan CodeIgniter 4 (Menggunakan Library Myth/Auth)](https://youtu.be/3BFyr6VwKeI?si=PQCD68dRa1Y22xIW)

Thx to : [Bootstrap v4.5](https://getbootstrap.com/docs/4.5/getting-started/introduction/), [MDBootsrap](https://mdbootstrap.com/), [WebProgrammingUNPAS by Sandika Galih](https://www.youtube.com/@sandhikagalihWPU) for helping me to build my very first website !!
