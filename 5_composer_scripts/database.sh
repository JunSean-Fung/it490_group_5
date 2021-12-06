set +v echo off
# database machine ips
db_one=samer@10.242.54.98
db_two=samer@10.242.92.23
db_three=samer@10.242.14.143
password="fall2021"

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
	ssh $1 sudo -S systemctl start mysql
}
go_mysql()
{
	sudo mysql -u root -p
}
cluster_start()
{
	# $1 = Machine ip
	ssh $1 "mysql database -e 'SET GLOBAL GROUP_REPLICATION_BOOTSTRAP_GROUP=ON;'"
	ssh $1 go_mysql SET GLOBAL GROUP_REPLICATION_BOOTSTRAP_GROUP=ON; # Has to be on for the first process to replicate
	ssh $l go_mnysql START GROUP_REPLICATION; #Start the cluster, has to be typed individiualy
	SSH $1 go_mysql SET GLOBAL GROUP_REPLICATION_BOOTSTRAP_GROUP=OFF; # 
}
cluster_check()
{
	return
}
test()
{
	ssh $1 "mysql database -e 'SET GLOBAL GROUP_REPLICATION_BOOTSTRAP_GROUP=ON;'"
}
test $db_one
#start_mysql $db_one
#cluster_start $db_one