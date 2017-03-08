sudo locale-gen UTF-8
export LC_CTYPE=en_US.UTF-8
export LC_ALL=en_US.UTF-8


sudo fallocate -l 4G /swapfile
sudo chmod 600 /swapfile
sudo mkswap /swapfile
sudo swapon /swapfile
sudo cp /vagrant/setup/fstab /etc/fstab
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password root'
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password root'
sudo apt-get update

sudo apt-get -y install apache2
sudo apt-get -y install php5
sudo apt-get -y install libapache2-mod-php5
sudo apt-get -y install mysql-server
sudo apt-get -y install php5-fpm
sudo apt-get -y install php5-mysqlnd
sudo apt-get -y install php5-mysql
sudo apt-get -y install curl
sudo apt-get -y install php5-curl
sudo apt-get -y install php5-gd

sudo cp /vagrant/setup/000-default.conf /etc/apache2/sites-available/
sudo cp /vagrant/setup/php.ini /etc/php5/fpm/php.ini
sudo cp /vagrant/setup/php-apache.ini /etc/php5/apache2/php.ini
sudo cp /vagrant/setup/apache2.conf /etc/apache2/apache2.conf
sudo a2enmod rewrite
mysql -uroot -proot -e 'create database IF NOT EXISTS `nea`;'
mysql -uroot -proot nea <  /vagrant/db/nea.sql
sudo chmod 777 /vagrant/wordpress
sudo chmod 777 /vagrant/wordpress/
sudo service apache2 restart