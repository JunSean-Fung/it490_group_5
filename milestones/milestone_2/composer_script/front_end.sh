set +v echo off

# Check for apache 2.4 status
status=$(systemctl check apache2)
if [status == inactive]
then
    echo attempting to start apache2
    sudo systemctl stop apache2 
fi