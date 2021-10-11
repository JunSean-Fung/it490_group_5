set +vecho off

# Continuous loop for system check
a=1
b=1

while [ $a -eq $b ]
do
    # Front End Server
    echo Attempting to Ping Front-End server...
    ping -c 4 25.83.212.229
    #ssh debian@25.83.212.229 systemctl check apache2
    echo ===================================================================
    # Messaging Server
    #echo Attempting to Ping Messaging server...
    ping -c 4 25.74.57.122
    ssh rabbit@25.74.57.122 systemctl check rabbitmq-server
    echo ===================================================================
    # Database Server
    echo Attempting to Ping Database Server...
    ping -c 4 25.79.46.137
    ssh samer@25.79.46.137 systemctl check mysql
    echo ===================================================================

    echo ===========================Ping End================================
    echo ===================================================================
done

