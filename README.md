
* Create a vagrant project, `v up` and `v ssh`
* This install requires php5-mcrypt which isn't yet in our basebox, to install:
 * `sudo apt-get install -y php5-mcrypt`
 * `sudo php5enmod mcrypt`
 * `sudo service apache2 restart`
* Install silverstripe and CWP modules with composer
 * `composer create-project cwp/cwp-installer <project-folder> --repository-url="https://packages.cwp.govt.nz"`
* Obtain a copy of _ss_environment.php (an example in this repo). Do not commit _ss_environment.php though, as it will override the values supplied by the CWP platform. For local dev you could commit _ss_environment-dev-example.php and have a non-commited copy _ss_environment.php
* Tweak `mysite/_config.php` or `mysite/_config/config.yml` as needed (e.g. set database to `development`)
* Run build by
 * `chmod 744 /vagrant/framework/sake`
 * `sudo /vagrant/framework/sake installsake`
 * `sake dev/build flush=1` (must be done any time page classes are changed)
* Flush the system by browsing to the site URL with ?flush=1 (must be done any time templates are changed)


The `create-project` installs all of the SS and CWP dependencies as defined in the composer.json it creates, but it also scaffolds a basic `mysite` directory and creates a few other files.

You probably want to commit the following files
* mysite
* .htaccess
* robots.txt
* behat.yml and build.xml, for testing purposes
* phpunit.teamcity.* ? not sure if CWP uses this
* web.config (I'm unsure what uses this)

You can probably remove
* CONTRIBUTING.md
* install-frameworkmissing.html
* Makefile

You should be able to .gitignore the rest
