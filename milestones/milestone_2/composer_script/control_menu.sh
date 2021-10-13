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
    echo " 5: Turn on specific service"
    echo " 6: Turn off specific service"
    echo " z: Debug"
    echo " CTR-C to exit the control menu"
    lineSeperate "Options"
}
pingServer(){
    ip=${1#*@}
    ping -qc1 $ip 2>&1 | awk -F'/' 'END{ print (/^rtt/? "Good":"FAIL") }'
}
checkServer(){
    # Not used
    ip=${1#*@}
    connection =$(ping -qc1 $ip 2>&1 | awk -F'/' 'END{ print (/^rtt/? "Good":"FAIL") }')
    
    if [ "$connection" == "Good" ]
    then
        $2
    else 
        echo "Unable to reach host"
    fi
}
checkActive(){
    # Purpose: check if a service is active or inactive
    connection=$(pingServer $1)
    if [ "$connection" == "Good" ]
    then
        echo -n $2 "is "
        ssh $1 systemctl check $2
    else 
        echo "Unable to reach host"
    fi
}
checkStatus(){
    connection=$(pingServer $1)
    # Purpose: provide detailed service information
    if [ "$connection" == "Good" ]
    then
        ssh $1 systemctl status $2
    else 
        echo "Unable to reach host"
    fi
}
turnOnService (){
    connection=$(pingServer $1)
    # Purpose: turn on service
    if [ "$connection" == "Good" ]
    then
        echo "Attempting to start service"
        ssh $1 sudo -S systemctl start $2
        checkActive $1 $2
    else 
        echo "Unable to reach host"
    fi
    
}
turnOffService (){
    connection=$(pingServer $1)
    # Purpose: turn on service
    if [ "$connection" == "Good" ]
    then
        echo "Attempting to stop service"
        ssh $1 sudo -S systemctl stop $2
        checkActive $1 $2
    else 
        echo "Unable to reach host"
    fi
    
}
turnOnOneService(){
    lineSeperate "which service to turn on?"
    echo "1: Front-End"
    echo "2: Message"
    echo "3: Database"
    echo "4: Debug"
    read serName
    case $serName in
            1)  turnOnService $frontEnd apache2
                            ;;
            2)  turnOnService $message rabbitmq
                            ;;
            3)  turnOnService $database mysql
                            ;;
            4)  turnOnService $debugTest apache2
                            ;;
            *)  echo exit
    esac
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
    echo ""
    showOptions
    read option
    case $option in
            1)  echo -e "Checking all services activity:\n"
                echo -e "Apache: "
                checkActive $frontEnd apache2
                echo -e "\nRabbitmq: "
                checkActive $message rabbitmq
                echo -e "\nmySQL: "
                checkActive $database mysql
                echo -e "\ndebug apache: "
                checkActive $debugTest apache2
                            ;;
            2)  echo -e "Checking all services status(detailed):\n"
                echo -e "Apache: "
                checkStatus $frontEnd apache2
                echo -e "\nRabbitmq: "
                checkStatus $message rabbitmq
                echo -e "\nmySQL: "
                checkStatus $database mysql
                echo -e "\ndebug apache: "
                checkStatus $debugTest apache2
                            ;;
            3)  echo -e "Turning on all services:\n"
                echo -e "Apache: "
                turnOnService $frontEnd apache2
                echo -e "\nRabbitmq: "
                turnOnService $message rabbitmq
                echo -e "\nmySQL: "
                turnOnService $database mysql
                echo -e "\ndebug apache: "
                turnOnService $debugTest apache2
                            ;;
            4)  echo -e "Turning off all services:\n"
                echo -e "Apache: "
                turnOffService $frontEnd apache2
                echo -e "\nRabbitmq: "
                turnOffService $message rabbitmq
                echo -e "\nmySQL: "
                turnOffService $database mysql
                echo -e "\ndebug apache: "
                turnOffService $debugTest apache2
                            ;;
            5)  turnOnOneService
                            ;;
            z)  checkActive $debugTest apache2
                            ;;
            *)  echo exit
    esac
    
done
