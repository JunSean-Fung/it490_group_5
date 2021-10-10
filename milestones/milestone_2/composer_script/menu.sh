echo "welcome please select your options"
read choice
firewall=`sudo systemctl status firewalld`
apache=`sudo systemctl status apache2`
firewall1=`sudo systemctl stop firewalld`
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