set +v echo off

# Check for apache 2.4 status
status=$(ssh 25.83.212.229 systemctl check apache2)

offStatus="inactive"
if [ $status == $offStatus ]
then
    echo "Apache is" $status", attempting to start Apache"
    sudo systemctl start apache2 
else
    echo -e "Apache is" $status "\n\n"
fi