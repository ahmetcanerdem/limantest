#!/usr/bin/python3

import socket

host_name = socket.gethostname()
host_ip = socket.gethostbyname(host_name)
print("Hostname and IP: " + host_name + " " + host_ip)