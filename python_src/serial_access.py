#!/usr/bin/python

# From https://www.raspberrypi.org/forums/viewtopic.php?t=111882#p767117

import serial, string, time

output = " "
ser = serial.Serial('/dev/ttyACM0', 9600, 8, 'N', 1, timeout=1)

while True:
    try:
        while output != "":
            output = ser.readline()
            print output
            output = " "
    except KeyboardInterrupt:
        print "Interrupted by the user."
        break
    except serial.serialutil.SerialException:
        print "Serial used by another user."
        break
         