set +v echo off

#Status Check
status=$(systemctl check mysql)
if [ "$status" = "inactive" ]; 
then
	echo "MySQL is" $status", attempting to start MySQL"
	sudo systemctl start mysql
else
	echo -e "MySQL is" $status "\n\n"
fi
