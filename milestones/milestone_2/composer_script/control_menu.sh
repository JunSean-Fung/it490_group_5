a=1
b=1
while [ $a -eq $b ]
do
    echo "Control Menu"
    echo "=============Options======================"
    echo " 1: Check all services activity"
    echo " 2: Show service status"
    echo " 3: Turn on all services"
    echo " 4: Turn off all services"
    echo " 4: Turn off all services"
    echo " CTR-C can also exit the control menu"
    echo "=============Options======================"

    read option
    # Apache
    apacheCheck=$(sudo systemctl check apache2)
    apacheStatus=$(sudo systemctl status apache2)
    # Rabbitmq
    rabbitCheck=$(sudo systemctl check rabbitmq)
    rabbitStatus=$(sudo systemctl status rabbitmq)
    # mySQL
    mysqlCheck=$(sudo systemctl cehck mysql)
    mysqlStatus=$(sudo systemctl status mysql)

    case $option in
            1)  echo -e "Apache is" $apacheCheck "\n\n"
                echo -e "Rabbitmq is" $rabbitCheck "\n\n"
                echo -e "mySQL is" $mysqlCheck "\n\n"
                            ;;
            2)  echo -e "Status of apache is" $apacheStatus "\n\n"
                echo -e "Status of Rabbitmq is" $apacheStatus "\n\n"
                echo -e "Status of mySQL is" $apacheStatus "\n\n"
                            ;;
            3)  echo -e "Starting apache server\n\n"
                sudo systemctl start apache2
                echo -e "Stopping Apache server\n\n"
                sudo systemctl stop apache2
                            ;;
            *)  echo exit
    esac
    
done
