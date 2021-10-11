set +vecho off

# Continuous loop for system check
a=1
b=1

while [ $a -eq $b ]
do
    # Front End Server
    #echo Attempting to Ping Front-End server...
    ping -c 4 25.4.8.61
    #echo Attempting to check front-end service
    #ssh pauldebian@4 25.4.8.61 systemctl check apache2
    echo ===================================================================
    # Messaging Server
    echo Attempting to Ping Messaging server...
    ping -c 4 25.74.57.122
    echo Attempting to check messaging service
    ssh rabbit@25.74.57.122 systemctl check rabbitmq-server
    echo ===================================================================
    # Database Server
    echo Attempting to Ping Database Server...
    ping -c 4 25.79.46.137
    echo Attempting to check database service
    ssh samer@25.79.46.137 systemctl check mysql
    echo ===================================================================

    echo ===========================Check End================================
    echo ===================================================================
done

