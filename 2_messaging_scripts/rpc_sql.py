#!/usr/bin/env python
import pika

credentials = pika.PlainCredentials('test','test')

connection = pika.BlockingConnection(
    pika.ConnectionParameters(host='25.78.132.146', credentials=credentials))

channel = connection.channel()

channel.queue_declare(queue='rpc_queue')

add_user = ("INSERT INTO users "
               "(first_name, last_name, username, password) "
               "VALUES (%s, %s, %s, %s)")

def login(uName, password):
    check_user = "Select * From users Where username = " + uName
    check_password = "Select * From users Where username = " + password
    if cursor.execute(check_user) == uName and cursor.execut(check_password) == password:
        return true
    else:
        return false

def create(email, uName, password):
    data_user = (fName, lName, uName, password)
    cursor.execute(add_user, data_user)

def on_request(ch, method, props, body):
    n = bool(body)

    # print("Account created")
    response = login(username, password)

    ch.basic_publish(exchange='',
                     routing_key=props.reply_to,
                     properties=pika.BasicProperties(correlation_id = \
                                                         props.correlation_id),
                     body=str(response))
    ch.basic_ack(delivery_tag=method.delivery_tag)


channel.basic_qos(prefetch_count=1)
channel.basic_consume(queue='rpc_queue', on_message_callback=on_request)

print(" [x] Awaiting RPC requests")
channel.start_consuming()