# reset the git
git reset --hard
# pull the new git repo
git pull
# give the file permission
chmod +x ./chmod.sh
# Run the script
sudo ./chmod.sh

# move front-end folder and its contents to the /var/www/html
mv -v /front_end/* /var/www/html/