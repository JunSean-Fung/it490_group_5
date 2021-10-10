set +v echo off

#Status Check
status = $(ssh ip address systemctl check mysql)

offStatus = "inactive"
if [$status == $offStatus]
then
	echo "MySQL is" $status, "attempting to start MySQL"
	sudo systemctl start mysql
else
	echo -e "MySQL is" $status "\n\n"
fi
