sudo systemctl stop rabbitmq-server
echo "JFKZVCBYEISEQILVZMSD" | sudo tee /var/lib/rabbitmq/.erlang.cookie
sudo systemctl start rabbitmq-server
rabbitmq-plugins enable rabbitmq_management
sudo echo 10.242.187.72 rabbit /etc/hosts
sudo rabbitmqctl stop_app
sudo rabbitmqctl join_cluster rabbit@rabbit
sudo rabbitmqctl start_app
