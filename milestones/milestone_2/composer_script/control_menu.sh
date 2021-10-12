a=1
b=1
while [ $a -eq $b ]
do
    echo "Control Menu"
    echo "=============Options======================"
    echo " 1: Show status of Apache"
    echo " 2: Start Apache"
    echo " 3: Stop Apache"
    echo " CTR-C can also exit the control menu"
    echo "=============Options======================"

    read option
    apache=$(sudo systemctl check apache2)
    startapache=`sudo systemctl start apache2`
    

    case $option in
            1) echo -e "Status of apache is" $apache "\n\n"
                            ;;
            2) echo -e "Starting apache server\n\n"
                sudo systemctl start apache2
                            ;;
            3) echo -e "Stopping Apache server\n\n"
                sudo systemctl stop apache2
                            ;;
            *) echo exit
    esac
    
done
