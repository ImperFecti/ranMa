# CodeIgniter 4 Application Starter

## This Website Development Requirements

Here is what you need to download for the first time if you want to develop this web site with my latest source code :

- [Composer 2.7.5](https://getcomposer.org/)
- [CodeIgniter 4 4.5.1](https://github.com/codeigniter4/CodeIgniter4/releases/tag/v4.5.1)
- [XAMPP 8.2.12 Windows](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.12/)
- Download the [database](https://drive.google.com/drive/folders/1orcADcqGKPP-oWp1Ea5wPguZDqEHjKtG?usp=sharing)
- [Git](https://git-scm.com/downloads) bash

Tutorial that I have used as a reference :

- [TUTORIAL CODEIGNITER 4 Playlist](https://youtube.com/playlist?list=PLFIM0718LjIUkkIq1Ub6B5dYNb6IlMvtc&si=McQAoV1AYjdn0oTP)
- [Membuat Sistem Login & Registrasi dengan CodeIgniter 4 (Menggunakan Library Myth/Auth)](https://youtu.be/3BFyr6VwKeI?si=PQCD68dRa1Y22xIW)

Thx to : [Bootstrap v4.5](https://getbootstrap.com/docs/4.5/getting-started/introduction/), [MDBootsrap](https://mdbootstrap.com/), [WebProgrammingUNPAS by Sandika Galih](https://www.youtube.com/@sandhikagalihWPU) for helping me to build my very first website !!

## Setup

- Make sure that you have already installed all the website development requirements above.
- [<b>Download](https://github.com/ImperFecti/ranMa/archive/refs/heads/master.zip) this project file </b> and unzip it wherever you want.
- Or you can use <b>git bash</b> with `git bash here` to the specified folder and start cloning this repository with this command `git clone https://github.com/ImperFecti/ranMa.git`.
- Copy and paste `env` file and rename it to `.env` and then paste this code to set the database.

```
# ENVIRONMENT

CI_ENVIRONMENT = development

# APP

app.baseURL = 'http://localhost:8080'
# If you have trouble with `.`, you could also use `_`.
# app_baseURL = ''
# app.forceGlobalSecureRequests = false
# app.CSPEnabled = false

# DATABASE

database.default.hostname = localhost
database.default.database = masjid
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306
```

- To import the database, go to [`phpmyadmin`](http://localhost/phpmyadmin) and create a new database named `masjid`.
- In [`phpmyadmin`](http://localhost/phpmyadmin), select the `masjid` database you created and then select import.
- Import the database named `masjid.sql` from the one you [downloaded](https://drive.google.com/drive/folders/1orcADcqGKPP-oWp1Ea5wPguZDqEHjKtG?usp=sharing) earlier.
- Run `composer update` from the terminal to update the dependencies with <b>composer</b>.
- After the update is complete, you can start developing this website.
- This website is currently using `localhost:8080` from spark. To start the localhost with [spark](https://codeigniter.com/user_guide/cli/spark_commands.html), run this command `php spark serve` from your terminal to turn on the localhost.
- If you want to develop this website using XAMPP you can change the <b>baseURL</b> in `App.php` and make sure the project file is saved in `htdocs`.
