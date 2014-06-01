Introduction to Symfony2: Getting Ready for D8
========================

Step 1

  We have to make sure we have a working "lamp" environment
  Lamp = Linux, Apache, Mysql, Php
  for the Mac there's
  MAMP at http://www.mamp.info/en/ or  php-osx at http://php-osx.liip.ch/
  For Windows there's 
  XAMPP at http://php-osx.liip.ch/, WAMP at http://www.wampserver.com/en/, AMPPS at http://www.ampps.com/
  for Linux
  Install Apache, Mysql and Php with your package manager or AMPPS at http://www.ampps.com/
  OR
  Use a VirtualMachine! We have one setup - see VM Environment
  
  Whichever environment you choose, make sure you have the following:

A) PHP 5.3.3 or higher (very important!)
B) MySQL server that is configured to work with PHP
C) A web server (If you have PHP 5.4 or higher, you don’t even need this)

If you are running a local Lamp environement, you will need to also set a local domain for your browser to make requests of
under linux the hosts file is at /etc/hosts
under Mac OSX it's /etc/hosts as well but it's a symlink from /private/etc/hosts
under Windows it's usually under C:\Windows\system32\drivers\etc\hosts and the only problem with this is you will have to
have administrator rights to edit this file, on Linux and the Mac you will have to either open it with
$> sudo nano /etc/hosts
or simply authenticate once you try to save the file

a hosts entry looks like
127.0.0.1  mylocal.dev
so that it short circuits the dns lookup and tells the browser to request a response from your machine instead of going out to
the master dns servers and returning a domain not found page

there is a neat utility in Ruby for Linux and the Mac you could use to edit your hists file automatically
called Ghost at https://github.com/bjeanes/ghost 

Step 2
  Make sure git is installed and can be run at the command line by simply typing "git". Of course, GitHub has an awesome resource on how to install git:

  https://help.github.com/articles/set-up-git eplains how to get git setup and http://git-scm.com/downloads
  get you the download of the git software appropriate to your environment

  
Aside
  Using a VM Environment: 

If you want to avoid setting up your *AMP manually, consider setting up a Virtual Machine.
Though you can build your own, we recommend using this one: https://drupal.org/project/vm 

You will need to have Git, VirtualBox and Vagrant installed first.:
Git
Vagrant 
VirtualBox

After you’ve met the requirements for the Virtual Machine:

1) Clone the Virtual Machine project

$> git clone --branch master http://git.drupal.org/project/vm.git symfony.dev

If you want to make some adjustment to the VM configuration copy the parameters.yml.dist file and update the values

$> cp parameters.yml.dist parameters.yml

2) Boot up the machine

$> cd symfony.dev
$> vagrant up
  
Step 3
  we will need to have composer installed to install symfony and it's components
  Download and install composer from
  https://getcomposer.org/download/
  follow the appropriate instructions according to your needs
Step 4
  Clone this repo into a subdirectory of your web directory (my webroot is at
  /var/www and my sub is symfony, so /var/www/symfony) and setup a host in your host file
  and an apache config that points the docroot you created plus /web
  my apache vhosts entry looks like this
  
  <VirtualHost *:80>
    ServerAdmin wes@wess.air
    DocumentRoot "/var/www/symfony/web"
    ServerName symfony.air
    ServerAlias symfony.air
    <Directory "/var/www/symfony/web">
        AllowOverride All
        Options All
        Order allow,deny
        Allow from all
    </Directory>
    ErrorLog "/private/var/log/apache2/symfony.air-error_log"
    CustomLog "/private/var/log/apache2/symfony.air-access_log" combined
</VirtualHost>

you can copy and paste this adjusting the paths to match what you've created
OR
php app/console server:run will automatically create an running server for you and will provide you the proper url to go to in you browser
and you don't have to deal with apache or hosts configs

Step 5
  in the terminal
  $> git clone https://github.com/jmolivas/introduction-to-symfony2-getting-ready-for-d8.git /your/web/path/symfony

  the repo has multiple branches to help facilitate the steps we will follow
  Once we have the repo cloned, in the terminal (if you have installed git for windows, it has a terminal) 
  navigate to your symfony directory
  cd /var/www/symfony/
   launch composer and it will get symfony for use based on the entries in composer.json
  
