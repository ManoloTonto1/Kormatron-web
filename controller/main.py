from microbit import *

#microbit press button sends toilet number via serial


while True:
    if pin_logo.is_touched():
        display.show(Image.HAPPY)
        print("warning1")
        sleep(3000)
    else:
        display.show(Image.SAD)
        


