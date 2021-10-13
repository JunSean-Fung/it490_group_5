# Control Menu script
source ./system.sh
# host + ip
frontEnd=paul@25.4.8.61
message=rabbit@25.74.57.122
database=samer@25.79.46.137
debugTest=junseanfung@25.80.87.100
run (){
    echo ""
    showOptions
    read option
    case $option in
            1)  echo -e "Checking all services activity:\n"
                echo -e "Apache: "
                checkActive $frontEnd apache2
                echo -e "\nRabbitmq: "
                checkActive $message rabbitmq-server
                echo -e "\nmySQL: "
                checkActive $database mysql
                echo -e "\ndebug apache: "
                checkActive $debugTest apache2
                            ;;
            2)  echo -e "Checking all services status(detailed):\n"
                echo -e "Apache: "
                checkStatus $frontEnd apache2
                echo -e "\nRabbitmq: "
                checkStatus $message rabbitmq-server
                echo -e "\nmySQL: "
                checkStatus $database mysql
                echo -e "\ndebug apache: "
                checkStatus $debugTest apache2
                            ;;
            3)  echo -e "Turning on all services:\n"
                echo -e "Apache: "
                turnOnService $frontEnd apache2
                echo -e "\nRabbitmq: "
                turnOnService $message rabbitmq-server
                echo -e "\nmySQL: "
                turnOnService $database mysql
                echo -e "\ndebug apache: "
                turnOnService $debugTest apache2
                            ;;
            4)  echo -e "Turning off all services:\n"
                echo -e "Apache: "
                turnOffService $frontEnd apache2
                echo -e "\nRabbitmq: "
                turnOffService $message rabbitmq-server
                echo -e "\nmySQL: "
                turnOffService $database mysql
                echo -e "\ndebug apache: "
                turnOffService $debugTest apache2
                            ;;
            5)  turnOnOneService
                            ;;
            6)  turnOffOneService
                            ;;
            z)  checkActive $debugTest apache2
                            ;;
            *)  echo exit
    esac
}

# This will run on script load
a=1
b=1
while [ $a -eq $b ]
do
    run 
done
