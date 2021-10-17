# This scrpit will be used to: reset the git, pull, 
#and replace +update dir and files.
# Back up location: ~/it490_backup/
branch = "master"

# Back up the current repo in the local machine
sudo rsync -av --delete ~/it490_group_5 ~/it490_backup # replace old backup with the current local repo

# Reset the git
git reset --hard
# Pull the repo from branch
git pull origin $branch

# Move replace with new contents
sudo rsync -av --delete ~/it490_group_5/6_milestones/milestone_3/front_end /var/www/html #front_end
#rsync -av  front_end/front_end.conf /etc/apache2/sites-available/ #update config file

# Give execute permission to all files based on the format
find -type f -iname "*.sh" -exec chmod +x {} \;
find -type f -iname "*.py" -exec chmod +x {} \;