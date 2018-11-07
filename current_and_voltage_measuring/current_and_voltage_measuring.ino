#include <EmonLib.h>

EnergyMonitor emon1;                   // Create an instance

//Calibration: current, 21.0; voltage: 637.75 (Windows)
//Calibration: current, 6.0; voltage: 610.0 (Raspberry)
void setup()
{  
  Serial.begin(9600);
  
  emon1.current(1, 6.75);             // Current: input pin, calibration.
  emon1.voltage(5, 610, 1.7);  // Voltage: input pin, calibration, phase_shift

}

void loop()
{
  double Irms = emon1.calcIrms(1480);  // Calculate Irms only
  emon1.calcVI(20,2000);         // Calculate all. No.of half wavelengths (crossings), time-out

  //Serial.print("{"); 
  Serial.print("Irms");
  Serial.print(":");
  Serial.print(Irms);
  Serial.print(",");
  Serial.print("Vrms");
  Serial.print(":");
  Serial.print(emon1.Vrms);
  Serial.print(",");
  Serial.print("Power");
  Serial.print(":");
  Serial.print(Irms*emon1.Vrms);         // Apparent power
  //Serial.print("}"); 
  delay(2000);
}
