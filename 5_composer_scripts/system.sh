# Purpose: Store functions for control_menu.sh to access
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
        ssh $1 echo $3 | sudo -S systemctl start $2
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
            2)  turnOnService $message rabbitmq-server
                            ;;
            3)  turnOnService $database mysql
                            ;;
            4)  turnOnService $debugTest apache2
                            ;;
            *)  echo exit
    esac
}
turnOffOneService(){
    lineSeperate "which service to turn on?"
    echo "1: Front-End"
    echo "2: Message"
    echo "3: Database"
    echo "4: Debug"
    read serName
    case $serName in
            1)  turnOffService $frontEnd apache2
                            ;;
            2)  turnOffService $message rabbitmq-server
                            ;;
            3)  turnOffService $database mysql
                            ;;
            4)  turnOffService $debugTest apache2
                            ;;
            *)  echo exit
    esac
}