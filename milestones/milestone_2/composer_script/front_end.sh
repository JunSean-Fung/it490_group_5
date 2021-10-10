set +v echo off

# Check for apache 2.4 status
status=$(systemctl check apache2)
if [ "$status" = "inactive" ]; then
    echo "Apache is" $status", attempting to start Apache"
    sudo systemctl start apache2 
else
    echo -e "Apache is" $status "\n\n"
fi

