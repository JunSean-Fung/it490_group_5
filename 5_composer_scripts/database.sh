set +v echo off
# database machine ips
db_one=samer@10.242.54.98
db_two=samer@10.242.92.23
db_three=samer@10.242.14.143

#Status Check
#status = $(systemctl check mysql)
system_check()
{
	if [ "$status" = "inactive" ]; 
	then
		echo "MySQL is" $status", attempting to start MySQL"
		sudo systemctl start mysql
	else
		echo -e "MySQL is" $status "\n\n"
	fi
}
start_mysql()
{
	# $1 = Machine ip
	ssh $1 sudo systemctl start mysql
	ssh $1 sudo mysql -u root -p
}
cluster_start()
{
	# $1 = Machine ip
	ssh $1 SET GLOBAL GROUP_REPLICATION_BOOTSTRAP_GROUP=ON;
	ssh $l START GROUP_REPLICATION;
	SSH $1 SET GLOBAL GROUP_REPLICATION_BOOTSTRAP_GROUP=OFF;
}
cluster_check()
{
	return
}
start_mysdql $db_one
cluster_start $db_one