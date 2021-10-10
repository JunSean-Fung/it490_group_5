echo "welcome please select your options"
read choice
apache=$(sudo systemctl check apache2)
startapache=`sudo systemctl start apache2`

case $choice in
         1) status of apache is $apache
                          ;;
         2) echo stopping Apache2
            sudo systemctl stop apache2
                          ;;
         3) echo Starting Apache2
            sudo systemctl start apach2
                          ;;
         *) echo exit
esac