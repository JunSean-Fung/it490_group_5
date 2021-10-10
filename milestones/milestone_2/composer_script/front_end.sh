set +v echo off

# Check for apache 2.4 status
status=$(systemctl check apache2)
offStatus="inactive"
if [$status = $offStatus]
then
    echo Apache is currently off, attempting to start Apache
    sudo systemctl start apache2 
fi