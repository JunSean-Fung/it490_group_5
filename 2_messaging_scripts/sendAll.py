import pika
import sys

credentials = pika.PlainCredentials('test','test')

connection = pika.BlockingConnection(
    pika.ConnectionParameters(host= '25.74.57.122', credentials=credentials))
channel = connection.channel()

channel.exchange_declare(exchange='logs', exchange_type='fanout')

message = ' '.join(sys.argv[1:]) or "info: Hello World!"
channel.basic_publish(exchange='logs', routing_key='', body=message)
print(" [x] Sent %r" % message)
connection.close()
