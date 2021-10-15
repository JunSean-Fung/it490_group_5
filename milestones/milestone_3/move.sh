# This script move dir and files to specific location

rsync -av --delete front_end /var/www/html # replace dir with new content
rsync -av  front_end/front_end.conf /etc/apache2/sites-available/ #move the conf to dir