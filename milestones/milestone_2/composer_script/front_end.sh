set +v echo off

# Check for apache 2.4 status
status = "$(systemctl check apache2)"
echo status
sudo systemctl stop apache2 
