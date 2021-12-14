sudo apt install snort -y
sudo echo alert icmp any any -> 192.168.1.105 any (msg: "NMAP ping sweep Scan"; dsize:0;sid:10000004; rev: 1;) /etc/snort/rules/local.rules


