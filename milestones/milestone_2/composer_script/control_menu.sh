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
    # hosts 
    frontEnd=junseanfung@25.80.87.100
    case $option in
            1)  echo -e "Checking all services activity:\n"
                echo -e "Apache is: "
                ssh paul@25.4.8.61 systemctl check apache2
                echo -e "\nRabbitmq is: "
                ssh rabbit@25.74.57.122 systemctl check rabbitmq-server
                echo -e "\nmySQL is: "
                ssh samer@25.79.46.137 systemctl check mysql
                            ;;
            2)  ssh $frontEnd systemctl check apache2
                            ;;
            3)  echo -e "Starting apache server\n\n"
                sudo systemctl start apache2
                echo -e "Stopping Apache server\n\n"
                sudo systemctl stop apache2
                            ;;
            *)  echo exit
    esac
    
done
