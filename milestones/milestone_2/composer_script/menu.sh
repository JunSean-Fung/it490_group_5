echo "welcome please select your options"
read choice
apache=`sudo systemctl check apache2`
apache1=`sudo systemctl stop apache2`
startapache=`sudo systemctl start apache2`

case $choice in
         1) status of apache is $apache
                          ;;
         2) echo stop apache by $apache1
                          ;;
         3) echo start apache by $startapache
                          ;;
         *) echo exit
esac