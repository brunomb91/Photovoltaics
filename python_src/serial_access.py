#!/usr/bin/python

# From https://www.raspberrypi.org/forums/viewtopic.php?t=111882#p767117

import serial, string, time
import json

output = " "
ser = serial.Serial('/dev/ttyACM0', 9600, 8, 'N', 1, timeout=1)

def convert_to_dict(name):
   list1 = name.split(",")
   
   list2 = []
    
   for i in list1:
      list2.append(tuple(i.split(":")))
   tuple1 = tuple(list2)   
    
   y = dict(tuple1)
   return json.dumps(y, indent=4)

try:
    while True:
        output = ser.readline()
        if output == "" or len(output) >= 33:
            continue
        # print output
        else:
            y = convert_to_dict(output)
            with open("data_arduino.json", "w") as f:
                f.write(y)
            # print y
        # output = " "
except KeyboardInterrupt:
    print "Interrupted by the user."
    # break
except serial.serialutil.SerialException:
    print "Serial used by another user."
    # break
         
