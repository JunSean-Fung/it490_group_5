# This scrpit will be used to: reset the git, pull, 
#and replace +update dir and files.
# This script is from composer_scripts
# Back up location: ~/it490_backup/
#branch = "master"

# Install rsync
sudo apt-get install rsync
# Back up the current repo in the local machine
sudo rsync -av --delete ~/it490_group_5 ~/it490_backup # replace old backup with the current local repo

# Reset the git
git reset --hard
# Pull the repo from branch
git config pull.ff only
git pull origin JunSean
#git pull origin paul

# Move replace with new contents
sudo rsync -av --delete ~/it490_group_5/1_front_end/ /var/www/html/projectX #front_end
#sudo rsync -av --delete ~/it490_group_5/1_front_end/index.php /var/www/html/ #front_end, move the index to the debian default page location
#rsync -av  front_end/front_end.conf /etc/apache2/sites-available/ #update config file

# Give execute permission to all files based on the format
find -type f -iname "*.sh" -exec chmod +x {} \;
find -type f -iname "*.py" -exec chmod +x {} \;