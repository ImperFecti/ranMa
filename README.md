# ranMa - Laporan Masjid

If you find this repository useful and want to use it, please consider giving it a star. This will show your support to this reposirtory and help others discover it.

## This Website Development Requirements

Here is what you need to download for the first time if you want to develop this web site with my latest source code :

- [Composer 2.7.5](https://getcomposer.org/)
- [CodeIgniter 4 4.5.1](https://github.com/codeigniter4/CodeIgniter4/releases/tag/v4.5.1)
- [XAMPP 8.2.12 Windows](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.12/)
- [Git](https://git-scm.com/downloads)

Tutorial that I have used as a reference :

- [TUTORIAL CODEIGNITER 4 Playlist](https://youtube.com/playlist?list=PLFIM0718LjIUkkIq1Ub6B5dYNb6IlMvtc&si=McQAoV1AYjdn0oTP)
- [Membuat Sistem Login & Registrasi dengan CodeIgniter 4 (Menggunakan Library Myth/Auth)](https://youtu.be/3BFyr6VwKeI?si=PQCD68dRa1Y22xIW)

Thx to : [Bootstrap v4.5](https://getbootstrap.com/docs/4.5/getting-started/introduction/), [MDBootsrap](https://mdbootstrap.com/), [WebProgrammingUNPAS by Sandika Galih](https://www.youtube.com/@sandhikagalihWPU) for helping me to build my very first website !!

## Features

- Login and Register for admin and superadmin
- Visitors can view the mosque's financial statements
- Superadmin account for managing admins
- Superadmin can manage admin accounts and financial report data
- Admin can only manage financial report data
- Update Password features for superadmin account and admin account

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
- Import the database named `masjid.sql` inside directory file `APPPATH\app\Database`.
- This website is currently using [`http://localhost:8080/`](http://localhost:8080/) from spark. To start the localhost with [spark](https://codeigniter.com/user_guide/cli/spark_commands.html), run this command `php spark serve` from your terminal to turn on the localhost.
- If you want to develop this website using XAMPP you can change the <b>baseURL</b> in `App.php` and make sure the project file is saved in `htdocs`.

## Superadmin and Admin Account

If you use the database that I have provided, you can use the admin account that has been registered below:

- Username `superadmin` password `letslogintosuperadminaccount`
- Username `admin` password `letslogintoadminaccount`
- Username `admin2` password `letslogintoadminaccount`

## Myth\Auth Library Setup

- Run `composer update` from the terminal to update the dependencies with <b>composer</b>.
- After the update is complete, you can find folder named `myth\auth` inside `APPPATH\app\Vendor` and start setting up this library.
- If you cant find the library inside `Vendor`, try to run this command inside terminal

```
composer require myth/auth
```

- Find `Auth.php` inside `Vendor\myth\auth\Config\` and change the variable below

### Default User Group

Change value `$defaultUserGroup` variable to:

```
public $defaultUserGroup = 'pelanggan';
```

### Views

Change value `$views` variable to:

```
public $views = [
    'login'       => 'Myth\Auth\Views\login',
    'register'    => 'Myth\Auth\Views\register',
    'forgot'      => 'Myth\Auth\Views\forgot',
    'reset'       => 'Myth\Auth\Views\reset',
    'emailForgot' => 'Myth\Auth\Views\emails\forgot',
];
```

### Allow Password Reset via Email

Change value `$activeResetter` variable to:

```
public $activeResetter = null;
```

### Allow Persistent Login Cookies (Remember me)

Change value `$allowRemembering` variable to:

```
public $allowRemembering = true;
```

### Remember Length

Change the value variable '$rememberLength' to whatever you want:

```
public $rememberLength = 30 * DAY;
```

## Preview

- Landing Page
  ![](https://cdn.discordapp.com/attachments/563035937949483008/1271098305031704576/LandingPage.png?ex=66b61a0b&is=66b4c88b&hm=858a005b0dbef04a1367015d796d7bfff588bdab23c1ef97280ee9367621bb97&)

- Contact
  ![](https://cdn.discordapp.com/attachments/563035937949483008/1271098304566001768/Contact.png?ex=66b61a0b&is=66b4c88b&hm=e55f309275a94454cb62c2dd158c105f7f167d93f94a1b06083ffd5a235440ae&)

- Financial Report Page
  ![](https://cdn.discordapp.com/attachments/563035937949483008/1271098304209489991/FinancialReportPage.png?ex=66b61a0b&is=66b4c88b&hm=21b5fde28439dbfdb1f60029ced0711160cd23e938e9ef49ccd19501c134e45f&)

- Admin Dashboard
  ![](https://cdn.discordapp.com/attachments/563035937949483008/1271098303861231688/AdminDashboard.png?ex=66b61a0b&is=66b4c88b&hm=69676bf5a46397ac83af5c24ed210b8533bc3945f0d31a192273593593fda585&)

- Admin Account Management (superadmin permission)
  ![](https://cdn.discordapp.com/attachments/563035937949483008/1271098303538532393/AdminAccountManagement.png?ex=66b61a0b&is=66b4c88b&hm=868684b801dd185576e8dd1879735c32bc0f1482753a3e99ee245128ecf1a075&)

- Financial Report Data Management
  ![](https://cdn.discordapp.com/attachments/563035937949483008/1271098305358598164/FinancialReportDataManagement.png?ex=66b61a0b&is=66b4c88b&hm=1de9e745ad7714b22fb2bf7588e5e6f58c350eadc9901539db04820a1e4a9b83&)

## Found a problem when developing this application ?

Create new [issue](https://github.com/ImperFecti/ranMa/issues) for this repository or you can try to contact my [email](mailto:adilm8909@gmail.com) / [instagram](https://www.instagram.com/_adilsputra/) / [twitter](https://twitter.com/_adilsputra)

## Want to contribute to this repository ?

I realized that this repository is still not perfect and not finished yet. If u have an idea to improve this repository, <b>[Fork](https://github.com/ImperFecti/ranMa/fork)</b> this repository page to create your own copy of the repository under your GitHub account.
