# This scrpit will be used to: reset the git, pull, 
#and replace +update dir and files.
# Back up location: ~/it490_backup/
branch = "JunSean"

# Back up the current repo in the local machine
rsync -av --delete it490_group_5 ~/it490_backup # replace old backup with the current local repo

# Reset the git
git reset --hard
# Pull the repo from branch
git pull origin $branch

#rsync -av  front_end/front_end.conf /etc/apache2/sites-available/ #move the conf to dir and update the confg