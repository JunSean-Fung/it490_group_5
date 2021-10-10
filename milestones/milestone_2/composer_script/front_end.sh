set +v echo off

# Check for apache 2.4 status
status=$(systemctl check apache2)
<<<<<<< HEAD
if [ "$status" = "inactive" ]; then
    echo attempting to start apache2
    sudo systemctl start apache2 
else
    echo $status
fi
=======

offStatus="inactive"
if [ $status == $offStatus ]
then
    echo "Apache is" $status", attempting to start Apache"
    sudo systemctl start apache2 
else
    echo -e "Apache is" $status "\n\n"
fi
>>>>>>> 54bf84305f04cfce58fc3a1262f6e74b49d6ae42
