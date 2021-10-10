echo "Control menu"
read choice
apache=$(sudo systemctl check apache2)
startapache=`sudo systemctl start apache2`

case $choice in
         1) echo status of apache is $apache
                          ;;
         2) echo stopping Apache2
            sudo systemctl stop apache2
                          ;;
         3) echo Starting Apache2
            sudo systemctl start apache2
                          ;;
         *) echo exit
esac