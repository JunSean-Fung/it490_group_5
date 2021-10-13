# Control Menu script

lineSeperate(){
    printf '=%.0s' {1..25}
    msg=${1:-=}
    #count=${#msg}
    echo -n $msg
    printf '=%.0s' {1..25}
    echo ""
}
showOptions(){
    # Purpose: Show options in the terminal
    lineSeperate "Options"
    echo " 1: Check all services activity"
    echo " 2: Show service status"
    echo " 3: Turn on all services"
    echo " 4: Turn off all services"
    echo " 4: Turn off all services"
    echo " z: Debug"
    echo " CTR-C to exit the control menu"
    lineSeperate "Options"
}
pingServer(){
    ip=${1#*@}
    ping -qc1 $ip 2>&1 | awk -F'/' 'END{ print (/^rtt/? "Good":"FAIL") }'
    #ping -c 1 $ip ; echo $?
}
checkActive(){
    connection=$(pingServer $1)
    echo "Ping is "$connection
    # Purpose: check if a service is active or inactive
    if [ "$connection" == "Good" ]
    then
        ssh $1 systemctl check $2
    else 
        echo "Unable to ping host"
    fi
}
checkStatus(){
    ssh $1 systemctl status $2
}

# host + ip
frontEnd=paul@25.4.8.61
message=rabbit@25.74.57.122
database=samer@25.79.46.137
debugTest=junseanfung@25.80.87.100

# A endless loop until Ctl-C
a=1
b=1
while [ $a -eq $b ]
do
    showOptions
    read option
    case $option in
            1)  echo -e "Checking all services activity:\n"
                echo -e "Apache is: "
                checkActive $frontEnd apache2
                echo -e "\nRabbitmq is: "
                checkActive $message rabbitmq
                echo -e "\nmySQL is: "
                checkActive $database mysql
                            ;;
            2)  echo "========================"
                checkStatus $debugTest apache2
                echo -e "\n========================"
                            ;;
            3)  echo -e "Starting apache server\n\n"
                sudo systemctl start apache2
                echo -e "Stopping Apache server\n\n"
                sudo systemctl stop apache2
                            ;;
            z)  checkActive $debugTest apache2
                            ;;
            *)  echo exit
    esac
    
done
