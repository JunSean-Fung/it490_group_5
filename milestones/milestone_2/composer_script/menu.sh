while [1]
do
    echo "Control Menu"
    echo "=============Options======================"
    echo " 1: Show status of Apache"
    echo " 2: Start Apache"
    echo " 3: Stop Apache"
    echo " *: Exit control menu"
    echo " CTR-C can also exit the control menu"
    echo "=============Options======================"

    read choice
    apache=$(sudo systemctl check apache2)
    startapache=`sudo systemctl start apache2`

    case $choice in
            1) echo status of apache is $apache
                            ;;
            2) echo Starting apache server
                sudo systemctl start apache2
                            ;;
            3) echo Stopping Apache server
                sudo systemctl stop apache2
                            ;;
            *) echo exit
    esac
done