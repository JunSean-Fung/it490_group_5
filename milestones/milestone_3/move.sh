# move front-end folder and its contents to the /var/www/html
#sudo mv front_end /var/www/html/

rsync -av --delete front_end /var/www/html
rsync -av  front_end/front_end.conf /etc/apache2/sites-available/
rsync -av  front_end/tecmint.com.conf /etc/apache2/sites-available/